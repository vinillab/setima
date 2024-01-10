import os
import re
import requests
import shutil
from datetime import datetime
from selenium import webdriver
from selenium.webdriver.chrome.options import Options

from selenium.webdriver.chrome.service import Service as ChromeService
from webdriver_manager.chrome import ChromeDriverManager


# Configure Chrome options for headless mode
chrome_options = Options()
chrome_options.add_argument("--headless")  # Uncomment this line to run in headless mode

# Set the Webflow.io subdomain
subdomain = (
    "setima"  # Replace "your-subdomain" with your desired subdomain
)

# Set the path to the folder for copying the subdomain.webflow.css file
#copy_folder = "/Users/adrianosg/Local Sites/colaboramodasustentavel/app/public/wp-content/themes/colabora-moda-final/assets/css"

copy_folder = "/Users/adrianosg/Local Sites/stima/app/public/wp-content/themes/setima-theme/assets/css"

# Set the path to the Git repository folder
git_folder = "/Users/adrianosg/Local Sites/stima/app/public"  # Path to the Git repository folder

# Create a webdriver instance
driver = webdriver.Chrome(service=ChromeService(ChromeDriverManager().install()))

# Construct the Webflow.io project URL
webflow_url = f"https://{subdomain}.webflow.io"

# Open the Webflow.io project
driver.get(webflow_url)

# Get the page source
page_source = driver.page_source

# Find CSS file URLs (modify the CSS file path if necessary)
css_urls = re.findall(r'<link href="([^"]+\.css)"', page_source)

# Create a directory to store the downloaded CSS files
os.makedirs("css_files", exist_ok=True)

# Generate a timestamp for the current download
timestamp = datetime.now().strftime("%Y%m%d_%H%M%S")

# Create a subfolder with the timestamp to store the downloaded CSS files in the history folder
history_dir = os.path.join("css_files", "history", timestamp)
os.makedirs(history_dir, exist_ok=True)

# Download each CSS file
for url in css_urls:
    response = requests.get(url)
    filename = url.split("/")[-1]
    file_path = os.path.join(history_dir, filename)
    simplified_file_path = os.path.join("css_files", f"{subdomain}.webflow.css")

    # Save the file with the timestamped name
    with open(file_path, "wb") as file:
        file.write(response.content)

    # Save a copy with the "subdomain.webflow.css" name
    if filename.endswith(".css"):
        # Remove the old subdomain.webflow.css file if it exists
        if os.path.exists(simplified_file_path):
            os.remove(simplified_file_path)

        with open(simplified_file_path, "wb") as file:
            file.write(response.content)

        # Copy the subdomain.webflow.css file to the specified folder
        shutil.copy(simplified_file_path, copy_folder)

        # Get file size in kilobytes (KB)
        file_size_kb = os.path.getsize(file_path) / 1024

        # Display file name and size
        print(f"Downloaded: {filename} ({file_size_kb:.2f} KB)")

        # Git commands
        #git_file_path = os.path.join(git_folder, f"{subdomain}.webflow.css")
        #git_commit_message = f"Updated CSS file: {filename}"

        # Change the working directory to the Git repository folder
        #os.chdir(git_folder)

        # Git add command
        #print("Running git add command...")
        #os.system("git add .")
        #print("Git add command completed.")

        # Git commit command
        #print("Running git commit command...")
        #os.system(f'git commit -m "{git_commit_message}"')
        #print("Git commit command completed.")

        # Git push command
        #print("Running git push command...")
        #os.system("git push")
        #print("Git push command completed.")

# Clean up and quit the web driver
driver.quit()
