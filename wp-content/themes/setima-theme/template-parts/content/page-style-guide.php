
  <div class="page-wrapper">
    <div class="global-styles w-embed" sym="true">
      <style>
/* Make text look crisper and more legible in all browsers */
body {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}
/* Focus state style for keyboard navigation for the focusable elements */
*[tabindex]:focus-visible,
  input[type="file"]:focus-visible {
   outline: 0.125rem solid #4d65ff;
   outline-offset: 0.125rem;
}
/* Get rid of top margin on first element in any rich text element */
.w-richtext > :not(div):first-child, .w-richtext > div:first-child > :first-child {
  margin-top: 0 !important;
}
/* Get rid of bottom margin on last element in any rich text element */
.w-richtext>:last-child, .w-richtext ol li:last-child, .w-richtext ul li:last-child {
	margin-bottom: 0 !important;
}
/* Prevent all click and hover interaction with an element */
.pointer-events-off {
	pointer-events: none;
}
/* Enables all click and hover interaction with an element */
.pointer-events-on {
  pointer-events: auto;
}
/* Create a class of .div-square which maintains a 1:1 dimension of a div */
.div-square::after {
	content: "";
	display: block;
	padding-bottom: 100%;
}
/* Make sure containers never lose their center alignment */
.container-medium,.container-small, .container-large {
	margin-right: auto !important;
  margin-left: auto !important;
}
/* 
Make the following elements inherit typography styles from the parent and not have hardcoded values. 
Important: You will not be able to style for example "All Links" in Designer with this CSS applied.
Uncomment this CSS to use it in the project. Leave this message for future hand-off.
*/
/*
a,
.w-input,
.w-select,
.w-tab-link,
.w-nav-link,
.w-dropdown-btn,
.w-dropdown-toggle,
.w-dropdown-link {
  color: inherit;
  text-decoration: inherit;
  font-size: inherit;
}
*/
/* Apply "..." after 3 lines of text */
.text-style-3lines {
	display: -webkit-box;
	overflow: hidden;
	-webkit-line-clamp: 3;
	-webkit-box-orient: vertical;
}
/* Apply "..." after 2 lines of text */
.text-style-2lines {
	display: -webkit-box;
	overflow: hidden;
	-webkit-line-clamp: 2;
	-webkit-box-orient: vertical;
}
/* Adds inline flex display */
.display-inlineflex {
  display: inline-flex;
}
/* These classes are never overwritten */
.hide {
  display: none !important;
}
@media screen and (max-width: 991px) {
    .hide, .hide-tablet {
        display: none !important;
    }
}
  @media screen and (max-width: 767px) {
    .hide-mobile-landscape{
      display: none !important;
    }
}
  @media screen and (max-width: 479px) {
    .hide-mobile{
      display: none !important;
    }
}
.margin-0 {
  margin: 0rem !important;
}
.padding-0 {
  padding: 0rem !important;
}
.spacing-clean {
padding: 0rem !important;
margin: 0rem !important;
}
.margin-top {
  margin-right: 0rem !important;
  margin-bottom: 0rem !important;
  margin-left: 0rem !important;
}
.padding-top {
  padding-right: 0rem !important;
  padding-bottom: 0rem !important;
  padding-left: 0rem !important;
}
.margin-right {
  margin-top: 0rem !important;
  margin-bottom: 0rem !important;
  margin-left: 0rem !important;
}
.padding-right {
  padding-top: 0rem !important;
  padding-bottom: 0rem !important;
  padding-left: 0rem !important;
}
.margin-bottom {
  margin-top: 0rem !important;
  margin-right: 0rem !important;
  margin-left: 0rem !important;
}
.padding-bottom {
  padding-top: 0rem !important;
  padding-right: 0rem !important;
  padding-left: 0rem !important;
}
.margin-left {
  margin-top: 0rem !important;
  margin-right: 0rem !important;
  margin-bottom: 0rem !important;
}
.padding-left {
  padding-top: 0rem !important;
  padding-right: 0rem !important;
  padding-bottom: 0rem !important;
}
.margin-horizontal {
  margin-top: 0rem !important;
  margin-bottom: 0rem !important;
}
.padding-horizontal {
  padding-top: 0rem !important;
  padding-bottom: 0rem !important;
}
.margin-vertical {
  margin-right: 0rem !important;
  margin-left: 0rem !important;
}
.padding-vertical {
  padding-right: 0rem !important;
  padding-left: 0rem !important;
}
.w-slider-dot {
  background-color: transparent;
  border: 1px solid #FFF;
  width: 10px;
  height: 10px;
}
.w-slider-dot.w-active {
  background-color: #FFF;
  width: 10px;
  height: 10px;
}
</style>
    </div>
    <div class="fs-styleguide_component">
      <header class="fs-styleguide_header">
        <div class="padding-section-large">
          <div class="padding-global">
            <div class="container-large">
              <div class="fs-styleguide_header-block">
                <a href="https://client-first.webflow.io/" target="_blank" class="fs-styleguide_version"><?php _e("Client-First — Version 2", "stima-theme") ?></a>
                <h1 class="fs-styleguide_heading-large"><?php _e("Style Guide", "stima-theme") ?></h1>
                <div class="max-width-medium">
                  <p class="text-size-medium"><?php _e("Client-First is a set of guidelines and strategies created by Finsweet to help you build Webflow websites.", "stima-theme") ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <section class="fs-styleguide_classes">
        <section class="fs-styleguide_structure">
          <div class="padding-section-large">
            <div class="padding-global">
              <div class="container-large">
                <div class="fs-styleguide_section is-vertical">
                  <div class="fs-styleguide_section-header">
                    <h2 class="fs-styleguide_heading-medium"><?php _e("Structure Classes", "stima-theme") ?></h2>
                    <p class="text-size-medium"><?php _e("Defined and flexible core structure we can use on all or most pages.", "stima-theme") ?><br></p>
                  </div>
                  <div class="fs-styleguide_item-wrapper">
                    <div class="fs-styleguide_1-col">
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("page-wrapper", "stima-theme") ?></div>
                        <div class="page-wrapper">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("main-wrapper", "stima-theme") ?></div>
                        <main class="main-wrapper">
                          <div class="fs-styleguide_empty-box"></div>
                        </main>
                      </div>
                      <div class="fs-styleguide_item is-stretch">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ca17-beb357e3" class="fs-styleguide_label"><?php _e("container-small", "stima-theme") ?></div>
                        <div class="container-small">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_item is-stretch">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ca1c-beb357e3" class="fs-styleguide_label"><?php _e("container-medium", "stima-theme") ?></div>
                        <div class="container-medium">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_item is-stretch">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ca21-beb357e3" class="fs-styleguide_label"><?php _e("container-large", "stima-theme") ?></div>
                        <div class="container-large">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_item is-stretch">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ca26-beb357e3" class="fs-styleguide_label"><?php _e("padding-global", "stima-theme") ?></div>
                        <div class="padding-global">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_item is-stretch">
                        <div class="fs-styleguide_spacing">
                          <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ca2c-beb357e3" class="fs-styleguide_label"><?php _e("padding-section-small", "stima-theme") ?></div>
                          <div class="padding-section-small">
                            <div class="fs-styleguide_empty-box"></div>
                          </div>
                        </div>
                      </div>
                      <div class="fs-styleguide_item is-stretch">
                        <div class="fs-styleguide_spacing">
                          <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ca32-beb357e3" class="fs-styleguide_label"><?php _e("padding-section-medium", "stima-theme") ?></div>
                          <div class="padding-section-medium">
                            <div class="fs-styleguide_empty-box"></div>
                          </div>
                        </div>
                      </div>
                      <div class="fs-styleguide_item is-stretch">
                        <div class="fs-styleguide_spacing">
                          <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ca38-beb357e3" class="fs-styleguide_label"><?php _e("padding-section-large", "stima-theme") ?></div>
                          <div class="padding-section-large">
                            <div class="fs-styleguide_empty-box"></div>
                          </div>
                        </div>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_row">
                          <div class="fs-styleguide_label"><?php _e("button-group", "stima-theme") ?></div>
                        </div>
                        <div class="button-group">
                          <div class="fs-styleguide_empty-box"></div>
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="fs-styleguide_heading-tags">
          <div class="padding-section-large">
            <div class="padding-global">
              <div class="container-large">
                <div class="fs-styleguide_section">
                  <div class="fs-styleguide_section-header">
                    <h2 class="fs-styleguide_heading-medium"><?php _e("HTML Heading Tags", "stima-theme") ?></h2>
                    <p class="text-size-medium"><?php _e("HTML tags define default Heading styles.", "stima-theme") ?><br></p>
                  </div>
                  <div class="fs-styleguide_item-wrapper">
                    <div class="fs-styleguide_1-col">
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label is-tag"><?php _e("H1", "stima-theme") ?></div>
                        <h1><?php _e("Sample text helps you understand how real text may look. Sample text is being used as a placeholder.", "stima-theme") ?></h1>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label is-tag"><?php _e("H2", "stima-theme") ?></div>
                        <h2><?php _e("Sample text helps you understand how real text may look on your website. Sample text is being used as a placeholder for real text that is normally present.", "stima-theme") ?></h2>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label is-tag"><?php _e("H3", "stima-theme") ?></div>
                        <h3><?php _e("Sample text helps you understand how real text may look on your website. Sample text is being used as a placeholder for real text that is normally present.", "stima-theme") ?></h3>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label is-tag"><?php _e("H4", "stima-theme") ?></div>
                        <h4><?php _e("Sample text is being used as a placeholder. Sample text helps you understand how real text may look. Sample text is being used as a placeholder for real text that is normally present.", "stima-theme") ?></h4>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label is-tag"><?php _e("H5", "stima-theme") ?></div>
                        <h5><?php _e("Sample text is being used as a placeholder. Sample text helps you understand how real text may look. Sample text is being used as a placeholder for real text that is normally present. Sample text helps you understand how real text may look.", "stima-theme") ?></h5>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label is-tag"><?php _e("H6", "stima-theme") ?></div>
                        <h6><?php _e("Sample text is being used as a placeholder for real text that is normally present. Sample text helps you understand how real text may look. Sample text is being used as a placeholder for real text that is normally present. Sample text helps you understand how real text may look.", "stima-theme") ?></h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="fs-styleguide_other-tags">
          <div class="padding-section-large">
            <div class="padding-global">
              <div class="container-large">
                <div class="fs-styleguide_section">
                  <div class="fs-styleguide_section-header">
                    <h2 class="fs-styleguide_heading-medium"><?php _e("Other HTML Tags", "stima-theme") ?></h2>
                    <p class="text-size-medium"><?php _e("HTML tags define default text styles.", "stima-theme") ?><br></p>
                  </div>
                  <div class="fs-styleguide_item-wrapper">
                    <div class="fs-styleguide_2-col">
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label is-tag"><?php _e("All paragraphs", "stima-theme") ?></div>
                        <p><?php _e("Sample text is being used as a placeholder for real text that is normally present. Sample text helps you understand how real text may look on your website. Sample text is being used as a placeholder for real text.", "stima-theme") ?><br></p>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label is-tag"><?php _e("All links", "stima-theme") ?></div>
                        <a href="#"><?php _e("All Links", "stima-theme") ?></a>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label is-tag"><?php _e("All quotes", "stima-theme") ?></div>
                        <blockquote><?php _e("Sample text is being used as a placeholder for real text that is normally present. Sample text helps you understand how real text may look on your website.", "stima-theme") ?></blockquote>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label is-tag"><?php _e("All Ordered Lists", "stima-theme") ?></div>
                        <ol role="list">
                          <li><?php _e("Sample text is being used as a placeholder for real text that is normally present.", "stima-theme") ?></li>
                          <li><?php _e("Sample text is being used as a placeholder for real text that is normally present.", "stima-theme") ?></li>
                          <li><?php _e("Sample text is being used as a placeholder for real text that is normally present.", "stima-theme") ?></li>
                        </ol>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label is-tag"><?php _e("All Unordered Lists", "stima-theme") ?></div>
                        <ul role="list">
                          <li><?php _e("Sample text is being used as a placeholder for real text that is normally present.", "stima-theme") ?></li>
                          <li><?php _e("Sample text is being used as a placeholder for real text that is normally present.", "stima-theme") ?></li>
                          <li><?php _e("Sample text is being used as a placeholder for real text that is normally present.", "stima-theme") ?></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="fs-styleguide_heading-styles">
          <div class="padding-section-large">
            <div class="padding-global">
              <div class="container-large">
                <div class="fs-styleguide_section">
                  <div class="fs-styleguide_section-header">
                    <h2 class="fs-styleguide_heading-medium"><?php _e("Heading Styles", "stima-theme") ?></h2>
                    <p class="text-size-medium"><?php _e("Heading classes when typography style doesn't match the default HTML tag.", "stima-theme") ?><br></p>
                  </div>
                  <div class="fs-styleguide_item-wrapper">
                    <div class="fs-styleguide_1-col">
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("heading-style-h1", "stima-theme") ?></div>
                        <h2 class="heading-style-h1"><?php _e("Sample text helps you understand how real text may look.", "stima-theme") ?></h2>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("heading-style-h2", "stima-theme") ?></div>
                        <h2 class="heading-style-h2"><?php _e("Sample text is being used as a placeholder. Sample text helps you understand how real text may look.", "stima-theme") ?></h2>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("heading-style-h3", "stima-theme") ?></div>
                        <h2 class="heading-style-h3"><?php _e("Sample text helps you understand how real text may look on your website. Sample text is being used as a placeholder for real text that is normally present.", "stima-theme") ?></h2>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("heading-style-h4", "stima-theme") ?></div>
                        <h2 class="heading-style-h4"><?php _e("Sample text is being used as a placeholder. Sample text helps you understand how real text may look. Sample text is being used as a placeholder for real text that is normally present.", "stima-theme") ?></h2>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("heading-style-h5", "stima-theme") ?></div>
                        <h2 class="heading-style-h5"><?php _e("Sample text is being used as a placeholder. Sample text helps you understand how real text may look. Sample text is being used as a placeholder for real text that is normally present. Sample text helps you understand how real text may look.", "stima-theme") ?></h2>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("heading-style-h6", "stima-theme") ?></div>
                        <h2 class="heading-style-h6"><?php _e("Sample text is being used as a placeholder for real text that is normally present. Sample text helps you understand how real text may look. Sample text is being used as a placeholder for real text that is normally present. Sample text helps you understand how real text may look.", "stima-theme") ?></h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="fs-styleguide_text-classes">
          <div class="padding-section-large">
            <div class="padding-global">
              <div class="container-large">
                <div class="fs-styleguide_section">
                  <div class="fs-styleguide_section-header">
                    <h2 class="fs-styleguide_heading-medium"><?php _e("Text Classes", "stima-theme") ?></h2>
                    <p class="text-size-medium"><?php _e("Text classes when typography style doesn't match the default HTML tag.", "stima-theme") ?><br></p>
                  </div>
                  <div class="fs-styleguide_item-wrapper">
                    <div class="fs-styleguide_item-header">
                      <h3 class="text-weight-semibold"><?php _e("Text Sizes", "stima-theme") ?></h3>
                    </div>
                    <div class="fs-styleguide_3-col">
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("text-size-large", "stima-theme") ?></div>
                        <p class="text-size-large"><?php _e("Sample text is being used as a placeholder for real text that is normally present.", "stima-theme") ?><br></p>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("text-size-medium", "stima-theme") ?></div>
                        <p class="text-size-medium"><?php _e("Sample text is being used as a placeholder for real text that is normally present on your website.", "stima-theme") ?><br></p>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("text-size-regular", "stima-theme") ?></div>
                        <p class="text-size-regular"><?php _e("Sample text is being used as a placeholder for real text that is normally present. Sample text helps you understand how real text may look on your website. ", "stima-theme") ?><br></p>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("text-size-small", "stima-theme") ?></div>
                        <p class="text-size-small"><?php _e("Sample text is being used as a placeholder for real text that is normally present on your website. Sample text helps you understand how real text may look on your website. ", "stima-theme") ?><br></p>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("text-size-tiny", "stima-theme") ?></div>
                        <p class="text-size-tiny"><?php _e("Sample text is being used as a placeholder for real text that is normally present on your website. Sample text helps you understand how real text may look on your website. ", "stima-theme") ?><br></p>
                      </div>
                    </div>
                  </div>
                  <div class="fs-styleguide_item-wrapper">
                    <div class="fs-styleguide_item-header">
                      <h3 class="text-weight-semibold"><?php _e("Text Styles", "stima-theme") ?></h3>
                    </div>
                    <div class="fs-styleguide_3-col">
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("text-style-strikethrough", "stima-theme") ?></div>
                        <p class="text-style-strikethrough"><?php _e("text-style-strikethrough", "stima-theme") ?><br></p>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("text-style-italic", "stima-theme") ?></div>
                        <p class="text-style-italic"><?php _e("text-style-italic", "stima-theme") ?><br></p>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("text-style-muted", "stima-theme") ?></div>
                        <p class="text-style-muted"><?php _e("text-style-muted", "stima-theme") ?><br></p>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("text-style-allcaps", "stima-theme") ?></div>
                        <p class="text-style-allcaps"><?php _e("text-style-allcaps", "stima-theme") ?><br></p>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("text-style-nowrap", "stima-theme") ?></div>
                        <p class="text-style-nowrap"><?php _e("text-style-nowrap", "stima-theme") ?><br></p>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("text-style-link", "stima-theme") ?></div>
                        <p class="text-style-link"><?php _e("text-style-link", "stima-theme") ?><br></p>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("text-style-quote", "stima-theme") ?></div>
                        <p class="text-style-quote"><?php _e("Sample text is being used as a placeholder.", "stima-theme") ?><br></p>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("text-style-2lines", "stima-theme") ?></div>
                        <p class="text-style-2lines"><?php _e("Sample text is being used as a placeholder for real text that is normally present. Sample text helps you understand how real text may look on your website. Sample text is being used as a placeholder for real text text-style-2lines", "stima-theme") ?><br></p>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("text-style-3lines", "stima-theme") ?></div>
                        <p class="text-style-3lines"><?php _e("Sample text is being used as a placeholder for real text that is normally present. Sample text helps you understand how real text may look on your website. Sample text is being used as a placeholder for real text. Sample text is being used as a placeholder for real text that is normally present. Sample text helps you understand how real text may look on your website. Sample text is being used as a placeholder for real text.", "stima-theme") ?><br></p>
                      </div>
                    </div>
                  </div>
                  <div class="fs-styleguide_item-wrapper">
                    <div class="fs-styleguide_item-header">
                      <h3 class="text-weight-semibold"><?php _e("Text Weights", "stima-theme") ?></h3>
                    </div>
                    <div class="fs-styleguide_3-col">
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("text-weight-xbold", "stima-theme") ?></div>
                        <div class="text-weight-xbold"><?php _e("text-weight-xbold", "stima-theme") ?></div>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("text-weight-bold", "stima-theme") ?></div>
                        <div class="text-weight-bold"><?php _e("text-weight-bold", "stima-theme") ?></div>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("text-weight-semibold", "stima-theme") ?></div>
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cb45-beb357e3" class="text-weight-semibold"><?php _e("text-weight-semibold", "stima-theme") ?></div>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("text-weight-medium", "stima-theme") ?></div>
                        <div class="text-weight-medium"><?php _e("text-weight-medium", "stima-theme") ?></div>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("text-weight-normal", "stima-theme") ?></div>
                        <div class="text-weight-normal"><?php _e("text-weight-normal", "stima-theme") ?></div>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("text-weight-light", "stima-theme") ?></div>
                        <div class="text-weight-light"><?php _e("text-weight-light", "stima-theme") ?></div>
                      </div>
                    </div>
                  </div>
                  <div class="fs-styleguide_item-wrapper">
                    <div class="fs-styleguide_item-header">
                      <h3 class="text-weight-semibold"><?php _e("Text Alignments", "stima-theme") ?></h3>
                    </div>
                    <div class="fs-styleguide_3-col">
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("text-align-left", "stima-theme") ?></div>
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cb5e-beb357e3" class="text-align-left"><?php _e("text-align-left", "stima-theme") ?></div>
                      </div>
                      <div class="fs-styleguide_item is-stretch">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cb61-beb357e3" class="fs-styleguide_label"><?php _e("text-align-center", "stima-theme") ?></div>
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cb63-beb357e3" class="text-align-center"><?php _e("text-align-center", "stima-theme") ?></div>
                      </div>
                      <div class="fs-styleguide_item is-stretch">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cb66-beb357e3" class="fs-styleguide_label"><?php _e("text-align-right", "stima-theme") ?></div>
                        <div class="text-align-right"><?php _e("text-align-right", "stima-theme") ?></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="fs-styleguide_buttons">
          <div class="padding-section-large">
            <div class="padding-global">
              <div class="container-large">
                <div class="fs-styleguide_section">
                  <div class="fs-styleguide_section-header">
                    <h2 class="fs-styleguide_heading-medium"><?php _e("Buttons", "stima-theme") ?></h2>
                    <p class="text-size-medium"><?php _e("Button combo class system.", "stima-theme") ?><br></p>
                  </div>
                  <div class="fs-styleguide_3-col">
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_label"><?php _e("button", "stima-theme") ?></div>
                      <a href="#" class="button w-button"><?php _e("Button Text", "stima-theme") ?></a>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_row">
                        <div class="fs-styleguide_label"><?php _e("button", "stima-theme") ?></div>
                        <div class="fs-styleguide_label"><?php _e("is-small", "stima-theme") ?></div>
                      </div>
                      <a href="#" class="button is-small w-button"><?php _e("Button Text", "stima-theme") ?></a>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_row">
                        <div class="fs-styleguide_label"><?php _e("button", "stima-theme") ?></div>
                        <div class="fs-styleguide_label"><?php _e("is-large", "stima-theme") ?></div>
                      </div>
                      <a href="#" class="button is-large w-button"><?php _e("Button Text", "stima-theme") ?></a>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_row">
                        <div class="fs-styleguide_label"><?php _e("button", "stima-theme") ?></div>
                        <div class="fs-styleguide_label"><?php _e("is-secondary", "stima-theme") ?></div>
                      </div>
                      <a href="#" class="button is-secondary w-button"><?php _e("Button Text", "stima-theme") ?></a>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_row">
                        <div class="fs-styleguide_label"><?php _e("button", "stima-theme") ?></div>
                        <div class="fs-styleguide_label"><?php _e("is-text", "stima-theme") ?></div>
                      </div>
                      <a href="#" class="button is-text w-button"><?php _e("Button Text", "stima-theme") ?></a>
                    </div>
                    <div class="fs-styleguide_item">
                      <div class="fs-styleguide_row">
                        <div class="fs-styleguide_label"><?php _e("button", "stima-theme") ?></div>
                        <div class="fs-styleguide_label"><?php _e("is-icon", "stima-theme") ?></div>
                      </div>
                      <a href="#" class="button is-icon w-inline-block">
                        <div><?php _e("Button Text", "stima-theme") ?></div>
                        <div class="icon-1x1-small w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg">
                            <title>Arrow Right</title>
                            <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                          </polygon></svg></div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="fs-styleguide_colors">
          <div class="padding-section-large">
            <div class="padding-global">
              <div class="container-large">
                <div class="fs-styleguide_section">
                  <div class="fs-styleguide_section-header">
                    <h2 class="fs-styleguide_heading-medium"><?php _e("Colors", "stima-theme") ?></h2>
                    <p class="text-size-medium"><?php _e("Manage recurring text and background colors.", "stima-theme") ?><br></p>
                  </div>
                  <div class="fs-styleguide_item-wrapper">
                    <div class="fs-styleguide_item-header">
                      <h3 class="text-weight-semibold"><?php _e("Color Palette", "stima-theme") ?></h3>
                    </div>
                    <div class="fs-styleguide_3-col">
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label is-hex"><?php _e("#00000", "stima-theme") ?></div>
                        <div class="fs-styleguide_background">
                          <div class="fs-styleguide_color is-1">
                            <div class="fs-styleguide_background-space"></div>
                          </div>
                        </div>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label is-hex"><?php _e("#f5f5f5", "stima-theme") ?></div>
                        <div class="fs-styleguide_background">
                          <div class="fs-styleguide_color is-2">
                            <div class="fs-styleguide_background-space"></div>
                          </div>
                        </div>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label is-hex"><?php _e("#fffff", "stima-theme") ?></div>
                        <div class="fs-styleguide_background">
                          <div class="fs-styleguide_color is-3">
                            <div class="fs-styleguide_background-space"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="fs-styleguide_item-wrapper">
                    <div class="fs-styleguide_item-header">
                      <h3 class="text-weight-semibold"><?php _e("Text Colors", "stima-theme") ?></h3>
                    </div>
                    <div class="fs-styleguide_3-col">
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("text-color-black", "stima-theme") ?></div>
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cbb8-beb357e3" class="text-color-black"><?php _e("text-color-black", "stima-theme") ?></div>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("text-color-grey", "stima-theme") ?></div>
                        <div class="text-color-grey"><?php _e("text-color-grey", "stima-theme") ?></div>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("text-color-white", "stima-theme") ?></div>
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cbc2-beb357e3" class="background-color-black">
                          <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cbc3-beb357e3" class="text-color-white"><?php _e("text-color-white", "stima-theme") ?></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="fs-styleguide_item-wrapper">
                    <div class="fs-styleguide_item-header">
                      <h3 class="text-weight-semibold"><?php _e("Background Colors", "stima-theme") ?></h3>
                    </div>
                    <div class="fs-styleguide_3-col">
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("background-color-black", "stima-theme") ?></div>
                        <div class="fs-styleguide_background">
                          <div class="background-color-black">
                            <div class="fs-styleguide_background-space"></div>
                          </div>
                        </div>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("background-color-grey", "stima-theme") ?></div>
                        <div class="fs-styleguide_background">
                          <div class="background-color-grey">
                            <div class="fs-styleguide_background-space"></div>
                          </div>
                        </div>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("background-color-white", "stima-theme") ?></div>
                        <div class="fs-styleguide_background">
                          <div class="background-color-white">
                            <div class="fs-styleguide_background-space"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="fs-styleguide_max-width">
          <div class="padding-section-large">
            <div class="padding-global">
              <div class="container-large">
                <div class="fs-styleguide_section is-vertical">
                  <div class="fs-styleguide_section-header">
                    <h2 class="fs-styleguide_heading-medium"><?php _e("Max widths", "stima-theme") ?></h2>
                    <p class="text-size-medium"><?php _e("Use the max-width CSS property to contain inner content to a maximum width.", "stima-theme") ?><br></p>
                  </div>
                  <div class="fs-styleguide_item-wrapper">
                    <div class="fs-styleguide_1-col">
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("max-width-full", "stima-theme") ?></div>
                        <div class="max-width-full">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("max-width-full-tablet", "stima-theme") ?></div>
                        <main class="max-width-full-tablet">
                          <div class="fs-styleguide_empty-box"></div>
                        </main>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("max-width-full-mobile-portrait", "stima-theme") ?></div>
                        <main class="max-width-full-mobile-portrait">
                          <div class="fs-styleguide_empty-box"></div>
                        </main>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("max-width-full-mobile-landscape", "stima-theme") ?></div>
                        <main class="max-width-full-mobile-landscape">
                          <div class="fs-styleguide_empty-box"></div>
                        </main>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("max-width-xxlarge", "stima-theme") ?></div>
                        <main class="max-width-xxlarge">
                          <div class="fs-styleguide_empty-box"></div>
                        </main>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("max-width-xlarge", "stima-theme") ?></div>
                        <main class="max-width-xlarge">
                          <div class="fs-styleguide_empty-box"></div>
                        </main>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("max-width-large", "stima-theme") ?></div>
                        <main class="max-width-large">
                          <div class="fs-styleguide_empty-box"></div>
                        </main>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("max-width-medium", "stima-theme") ?></div>
                        <main class="max-width-medium">
                          <div class="fs-styleguide_empty-box"></div>
                        </main>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("max-width-small", "stima-theme") ?></div>
                        <main class="max-width-small">
                          <div class="fs-styleguide_empty-box"></div>
                        </main>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("max-width-xsmall", "stima-theme") ?></div>
                        <main class="max-width-xsmall">
                          <div class="fs-styleguide_empty-box"></div>
                        </main>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("max-width-xxsmall", "stima-theme") ?></div>
                        <main class="max-width-xxsmall">
                          <div class="fs-styleguide_empty-box"></div>
                        </main>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="fs-styleguide_paddings">
          <div class="padding-section-large">
            <div class="padding-global">
              <div class="container-large">
                <div class="fs-styleguide_section">
                  <div class="fs-styleguide_section-header">
                    <h2 class="fs-styleguide_heading-medium"><?php _e("Paddings", "stima-theme") ?></h2>
                    <p class="text-size-medium"><?php _e("Utility spacing system - padding classes. [padding-direction] + [padding-size].", "stima-theme") ?><br></p>
                  </div>
                  <div class="fs-styleguide_item-wrapper">
                    <div class="fs-styleguide_item-header">
                      <h3 class="text-weight-semibold"><?php _e("Direction Classes", "stima-theme") ?></h3>
                    </div>
                    <div class="fs-styleguide_3-col is-align-start">
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc31-beb357e3" class="fs-styleguide_label"><?php _e("padding-bottom", "stima-theme") ?></div>
                        <div class="padding-bottom">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc36-beb357e3" class="fs-styleguide_label"><?php _e("padding-top", "stima-theme") ?></div>
                        <div class="padding-top">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc3b-beb357e3" class="fs-styleguide_label"><?php _e("padding-vertical", "stima-theme") ?></div>
                        <div class="padding-vertical">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc40-beb357e3" class="fs-styleguide_label"><?php _e("padding-horizontal", "stima-theme") ?></div>
                        <div class="padding-horizontal">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc45-beb357e3" class="fs-styleguide_label"><?php _e("padding-left", "stima-theme") ?></div>
                        <div class="padding-left">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc4a-beb357e3" class="fs-styleguide_label"><?php _e("padding-right", "stima-theme") ?></div>
                        <div class="padding-right">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="fs-styleguide_item-wrapper">
                    <div class="fs-styleguide_item-header">
                      <h3 class="text-weight-semibold"><?php _e("Size Classes", "stima-theme") ?></h3>
                    </div>
                    <div class="fs-styleguide_2-col is-align-start">
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc54-beb357e3" class="fs-styleguide_label"><?php _e("padding-0", "stima-theme") ?></div>
                        <div class="padding-0">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc59-beb357e3" class="fs-styleguide_label"><?php _e("padding-tiny", "stima-theme") ?></div>
                        <div class="padding-tiny">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc5e-beb357e3" class="fs-styleguide_label"><?php _e("padding-xxsmall", "stima-theme") ?></div>
                        <div class="padding-xxsmall">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc63-beb357e3" class="fs-styleguide_label"><?php _e("padding-xsmall", "stima-theme") ?></div>
                        <div class="padding-xsmall">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc68-beb357e3" class="fs-styleguide_label"><?php _e("padding-small", "stima-theme") ?></div>
                        <div class="padding-small">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc6d-beb357e3" class="fs-styleguide_label"><?php _e("padding-medium", "stima-theme") ?></div>
                        <div class="padding-medium">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc72-beb357e3" class="fs-styleguide_label"><?php _e("padding-large", "stima-theme") ?></div>
                        <div class="padding-large">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc77-beb357e3" class="fs-styleguide_label"><?php _e("padding-xlarge", "stima-theme") ?></div>
                        <div class="padding-xlarge">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc7c-beb357e3" class="fs-styleguide_label"><?php _e("padding-xxlarge", "stima-theme") ?></div>
                        <div class="padding-xxlarge">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc81-beb357e3" class="fs-styleguide_label"><?php _e("padding-huge", "stima-theme") ?></div>
                        <div class="padding-huge">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc86-beb357e3" class="fs-styleguide_label"><?php _e("padding-xhuge", "stima-theme") ?></div>
                        <div class="padding-xhuge">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc8a-beb357e3" class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc8b-beb357e3" class="fs-styleguide_label"><?php _e("padding-xxhuge", "stima-theme") ?></div>
                        <div class="padding-xxhuge">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc90-beb357e3" class="fs-styleguide_label"><?php _e("padding-custom1", "stima-theme") ?></div>
                        <div class="padding-custom1">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc95-beb357e3" class="fs-styleguide_label"><?php _e("padding-custom2", "stima-theme") ?></div>
                        <div class="padding-custom2">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cc9a-beb357e3" class="fs-styleguide_label"><?php _e("padding-custom3", "stima-theme") ?></div>
                        <div class="padding-custom3">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="fs-styleguide_margins">
          <div class="padding-section-large">
            <div class="padding-global">
              <div class="container-large">
                <div class="fs-styleguide_section">
                  <div class="fs-styleguide_section-header">
                    <h2 class="fs-styleguide_heading-medium"><?php _e("Margins", "stima-theme") ?></h2>
                    <p class="text-size-medium"><?php _e("Utility spacing system - padding classes. [margin-direction] + [margin-size].", "stima-theme") ?><br></p>
                  </div>
                  <div class="fs-styleguide_item-wrapper">
                    <div class="fs-styleguide_item-header">
                      <h3 class="text-weight-semibold"><?php _e("Direction Classes", "stima-theme") ?></h3>
                    </div>
                    <div class="fs-styleguide_3-col is-align-start">
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ccaf-beb357e3" class="fs-styleguide_label"><?php _e("margin-bottom", "stima-theme") ?></div>
                        <div class="margin-bottom">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ccb4-beb357e3" class="fs-styleguide_label"><?php _e("margin-top", "stima-theme") ?></div>
                        <div class="margin-top">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ccb9-beb357e3" class="fs-styleguide_label"><?php _e("margin-vertical", "stima-theme") ?></div>
                        <div class="margin-vertical">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ccbe-beb357e3" class="fs-styleguide_label"><?php _e("margin-horizontal", "stima-theme") ?></div>
                        <div class="margin-horizontal">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ccc3-beb357e3" class="fs-styleguide_label"><?php _e("margin-left", "stima-theme") ?></div>
                        <div class="margin-left">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ccc8-beb357e3" class="fs-styleguide_label"><?php _e("margin-right", "stima-theme") ?></div>
                        <div class="margin-right">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="fs-styleguide_item-wrapper">
                    <div class="fs-styleguide_item-header">
                      <h3 class="text-weight-semibold"><?php _e("Size Classes", "stima-theme") ?></h3>
                    </div>
                    <div class="fs-styleguide_2-col is-align-start">
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ccd2-beb357e3" class="fs-styleguide_label"><?php _e("margin-0", "stima-theme") ?></div>
                        <div class="margin-0">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ccd7-beb357e3" class="fs-styleguide_label"><?php _e("margin-tiny", "stima-theme") ?></div>
                        <div class="margin-tiny">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ccdc-beb357e3" class="fs-styleguide_label"><?php _e("margin-xxsmall", "stima-theme") ?></div>
                        <div class="margin-xxsmall">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cce1-beb357e3" class="fs-styleguide_label"><?php _e("margin-xsmall", "stima-theme") ?></div>
                        <div class="margin-xsmall">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cce6-beb357e3" class="fs-styleguide_label"><?php _e("margin-small", "stima-theme") ?></div>
                        <div class="margin-small">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cceb-beb357e3" class="fs-styleguide_label"><?php _e("margin-medium", "stima-theme") ?></div>
                        <div class="margin-medium">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ccf0-beb357e3" class="fs-styleguide_label"><?php _e("margin-large", "stima-theme") ?></div>
                        <div class="margin-large">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ccf5-beb357e3" class="fs-styleguide_label"><?php _e("margin-xlarge", "stima-theme") ?></div>
                        <div class="margin-xlarge">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ccfa-beb357e3" class="fs-styleguide_label"><?php _e("margin-xxlarge", "stima-theme") ?></div>
                        <div class="margin-xxlarge">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627ccff-beb357e3" class="fs-styleguide_label"><?php _e("margin-huge", "stima-theme") ?></div>
                        <div class="margin-huge">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cd04-beb357e3" class="fs-styleguide_label"><?php _e("margin-xhuge", "stima-theme") ?></div>
                        <div class="margin-xhuge">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cd08-beb357e3" class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cd09-beb357e3" class="fs-styleguide_label"><?php _e("margin-xxhuge", "stima-theme") ?></div>
                        <div class="margin-xxhuge">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cd0e-beb357e3" class="fs-styleguide_label"><?php _e("margin-custom1", "stima-theme") ?></div>
                        <div class="margin-custom1">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cd13-beb357e3" class="fs-styleguide_label"><?php _e("margin-custom2", "stima-theme") ?></div>
                        <div class="margin-custom2">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cd18-beb357e3" class="fs-styleguide_label"><?php _e("margin-custom3", "stima-theme") ?></div>
                        <div class="margin-custom3">
                          <div class="fs-styleguide_empty-box"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="fs-styleguide_spacers">
          <div class="padding-section-large">
            <div class="padding-global">
              <div class="container-large">
                <div class="fs-styleguide_section">
                  <div class="fs-styleguide_section-header">
                    <h2 class="fs-styleguide_heading-medium"><?php _e("Spacers", "stima-theme") ?></h2>
                    <p class="text-size-medium"><?php _e("Unified spacer system for the project.", "stima-theme") ?><br></p>
                  </div>
                  <div class="fs-styleguide_item-wrapper">
                    <div class="fs-styleguide_1-col">
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_30684373-af34-3818-02a4-e58b3ffef3e5-beb357e3" class="fs-styleguide_label"><?php _e("spacer-tiny", "stima-theme") ?></div>
                        <div class="fs-styleguide_spacer-box">
                          <div class="spacer-tiny"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_30684373-af34-3818-02a4-e58b3ffef3ea-beb357e3" class="fs-styleguide_label"><?php _e("spacer-xxsmall", "stima-theme") ?></div>
                        <div class="fs-styleguide_spacer-box">
                          <div class="spacer-xxsmall"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_30684373-af34-3818-02a4-e58b3ffef3ef-beb357e3" class="fs-styleguide_label"><?php _e("spacer-xsmall", "stima-theme") ?></div>
                        <div class="fs-styleguide_spacer-box">
                          <div class="spacer-xsmall"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_30684373-af34-3818-02a4-e58b3ffef3f4-beb357e3" class="fs-styleguide_label"><?php _e("spacer-small", "stima-theme") ?></div>
                        <div class="fs-styleguide_spacer-box">
                          <div class="spacer-small"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_30684373-af34-3818-02a4-e58b3ffef3f9-beb357e3" class="fs-styleguide_label"><?php _e("spacer-medium", "stima-theme") ?></div>
                        <div class="fs-styleguide_spacer-box">
                          <div class="spacer-medium"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_30684373-af34-3818-02a4-e58b3ffef3fe-beb357e3" class="fs-styleguide_label"><?php _e("spacer-large", "stima-theme") ?></div>
                        <div class="fs-styleguide_spacer-box">
                          <div class="spacer-large"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_30684373-af34-3818-02a4-e58b3ffef403-beb357e3" class="fs-styleguide_label"><?php _e("spacer-xlarge", "stima-theme") ?></div>
                        <div class="fs-styleguide_spacer-box">
                          <div class="spacer-xlarge"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_30684373-af34-3818-02a4-e58b3ffef408-beb357e3" class="fs-styleguide_label"><?php _e("spacer-xxlarge", "stima-theme") ?></div>
                        <div class="fs-styleguide_spacer-box">
                          <div class="spacer-xxlarge"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_30684373-af34-3818-02a4-e58b3ffef40d-beb357e3" class="fs-styleguide_label"><?php _e("spacer-huge", "stima-theme") ?></div>
                        <div class="fs-styleguide_spacer-box">
                          <div class="spacer-huge"></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_spacing">
                        <div id="w-node-_30684373-af34-3818-02a4-e58b3ffef412-beb357e3" class="fs-styleguide_label"><?php _e("spacer-xhuge", "stima-theme") ?></div>
                        <div class="fs-styleguide_spacer-box">
                          <div class="spacer-xhuge"></div>
                        </div>
                      </div>
                      <div id="w-node-_30684373-af34-3818-02a4-e58b3ffef416-beb357e3" class="fs-styleguide_spacing">
                        <div id="w-node-_30684373-af34-3818-02a4-e58b3ffef417-beb357e3" class="fs-styleguide_label"><?php _e("spacer-xxhuge", "stima-theme") ?></div>
                        <div class="fs-styleguide_spacer-box">
                          <div id="w-node-_30684373-af34-3818-02a4-e58b3ffef41a-beb357e3" class="spacer-xxhuge"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="fs-styleguide_spacing-all">
          <div class="fs-styleguide_spacing-sizes">
            <div class="margin-0"></div>
            <div class="margin-tiny"></div>
            <div class="margin-xxsmall"></div>
            <div class="margin-xsmall"></div>
            <div class="margin-small"></div>
            <div class="margin-medium"></div>
            <div class="margin-large"></div>
            <div class="margin-xlarge"></div>
            <div class="margin-xxlarge"></div>
            <div class="margin-huge"></div>
            <div class="margin-xhuge"></div>
            <div class="margin-xxhuge"></div>
            <div class="margin-custom1"></div>
            <div class="margin-custom2"></div>
            <div class="margin-custom3"></div>
            <div class="padding-0"></div>
            <div class="padding-tiny"></div>
            <div class="padding-xxsmall"></div>
            <div class="padding-xsmall"></div>
            <div class="padding-small"></div>
            <div class="padding-medium"></div>
            <div class="padding-large"></div>
            <div class="padding-xlarge"></div>
            <div class="padding-xxlarge"></div>
            <div class="padding-huge"></div>
            <div class="padding-xhuge"></div>
            <div class="padding-xxhuge"></div>
            <div class="padding-custom1"></div>
            <div class="padding-custom2"></div>
            <div class="padding-custom3"></div>
          </div>
          <div class="fs-styleguide_spacing-directions">
            <div class="margin-top"></div>
            <div class="margin-bottom"></div>
            <div class="margin-left"></div>
            <div class="margin-right"></div>
            <div class="margin-vertical"></div>
            <div class="margin-horizontal"></div>
            <div class="padding-top"></div>
            <div class="padding-bottom"></div>
            <div class="padding-left"></div>
            <div class="padding-right"></div>
            <div class="padding-vertical"></div>
            <div class="padding-horizontal"></div>
          </div>
        </div>
        <section class="fs-styleguide_icons">
          <div class="padding-section-large">
            <div class="padding-global">
              <div class="container-large">
                <div class="fs-styleguide_section">
                  <div class="fs-styleguide_section-header">
                    <h2 class="fs-styleguide_heading-medium"><?php _e("Icons", "stima-theme") ?></h2>
                    <p class="text-size-medium"><?php _e("Unify icons sizes. ", "stima-theme") ?><strong><?php _e("icon-height", "stima-theme") ?></strong><?php _e(" sets height of icons. ", "stima-theme") ?><strong><?php _e("icon-1x1", "stima-theme") ?></strong><?php _e(" sets both height and width of icons.", "stima-theme") ?><br></p>
                  </div>
                  <div class="fs-styleguide_item-wrapper">
                    <div class="fs-styleguide_2-col">
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("icon-height-small", "stima-theme") ?></div><img src="https://d3e54v103j8qbb.cloudfront.net/plugins/Basic/assets/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="icon-height-small">
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("icon-height-medium", "stima-theme") ?></div><img src="https://d3e54v103j8qbb.cloudfront.net/plugins/Basic/assets/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="icon-height-medium">
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("icon-height-large", "stima-theme") ?></div><img src="https://d3e54v103j8qbb.cloudfront.net/plugins/Basic/assets/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="icon-height-large">
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("icon-1x1-small", "stima-theme") ?></div>
                        <div class="fs-styleguide_row">
                          <div class="icon-1x1-small w-embed"><svg aria-hidden="true" role="img" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                              <title>Twitter icon</title>
                              <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"></path>
                            </svg></div>
                          <div class="icon-1x1-small w-embed"><svg aria-hidden="true" role="img" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                              <title>Facebook icon</title>
                              <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path>
                            </svg></div>
                          <div class="icon-1x1-small w-embed"><svg aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <title>Instagram icon</title>
                              <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"></path>
                            </svg></div>
                          <div class="icon-1x1-small w-embed"><svg aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <title>LinkedIn icon</title>
                              <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                            </svg></div>
                          <div class="icon-1x1-small w-embed"><svg aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <title>Slack icon</title>
                              <path d="M5.042 15.165a2.528 2.528 0 0 1-2.52 2.523A2.528 2.528 0 0 1 0 15.165a2.527 2.527 0 0 1 2.522-2.52h2.52v2.52zM6.313 15.165a2.527 2.527 0 0 1 2.521-2.52 2.527 2.527 0 0 1 2.521 2.52v6.313A2.528 2.528 0 0 1 8.834 24a2.528 2.528 0 0 1-2.521-2.522v-6.313zM8.834 5.042a2.528 2.528 0 0 1-2.521-2.52A2.528 2.528 0 0 1 8.834 0a2.528 2.528 0 0 1 2.521 2.522v2.52H8.834zM8.834 6.313a2.528 2.528 0 0 1 2.521 2.521 2.528 2.528 0 0 1-2.521 2.521H2.522A2.528 2.528 0 0 1 0 8.834a2.528 2.528 0 0 1 2.522-2.521h6.312zM18.956 8.834a2.528 2.528 0 0 1 2.522-2.521A2.528 2.528 0 0 1 24 8.834a2.528 2.528 0 0 1-2.522 2.521h-2.522V8.834zM17.688 8.834a2.528 2.528 0 0 1-2.523 2.521 2.527 2.527 0 0 1-2.52-2.521V2.522A2.527 2.527 0 0 1 15.165 0a2.528 2.528 0 0 1 2.523 2.522v6.312zM15.165 18.956a2.528 2.528 0 0 1 2.523 2.522A2.528 2.528 0 0 1 15.165 24a2.527 2.527 0 0 1-2.52-2.522v-2.522h2.52zM15.165 17.688a2.527 2.527 0 0 1-2.52-2.523 2.526 2.526 0 0 1 2.52-2.52h6.313A2.527 2.527 0 0 1 24 15.165a2.528 2.528 0 0 1-2.522 2.523h-6.313z"></path>
                            </svg></div>
                          <div class="icon-1x1-small w-embed"><svg aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <title>Dribbble icon</title>
                              <path d="M12 24C5.385 24 0 18.615 0 12S5.385 0 12 0s12 5.385 12 12-5.385 12-12 12zm10.12-10.358c-.35-.11-3.17-.953-6.384-.438 1.34 3.684 1.887 6.684 1.992 7.308 2.3-1.555 3.936-4.02 4.395-6.87zm-6.115 7.808c-.153-.9-.75-4.032-2.19-7.77l-.066.02c-5.79 2.015-7.86 6.025-8.04 6.4 1.73 1.358 3.92 2.166 6.29 2.166 1.42 0 2.77-.29 4-.814zm-11.62-2.58c.232-.4 3.045-5.055 8.332-6.765.135-.045.27-.084.405-.12-.26-.585-.54-1.167-.832-1.74C7.17 11.775 2.206 11.71 1.756 11.7l-.004.312c0 2.633.998 5.037 2.634 6.855zm-2.42-8.955c.46.008 4.683.026 9.477-1.248-1.698-3.018-3.53-5.558-3.8-5.928-2.868 1.35-5.01 3.99-5.676 7.17zM9.6 2.052c.282.38 2.145 2.914 3.822 6 3.645-1.365 5.19-3.44 5.373-3.702-1.81-1.61-4.19-2.586-6.795-2.586-.825 0-1.63.1-2.4.285zm10.335 3.483c-.218.29-1.935 2.493-5.724 4.04.24.49.47.985.68 1.486.08.18.15.36.22.53 3.41-.43 6.8.26 7.14.33-.02-2.42-.88-4.64-2.31-6.38z"></path>
                            </svg></div>
                          <div class="icon-1x1-small w-embed"><svg aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <title>Pinterest icon</title>
                              <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.162-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.401.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.354-.629-2.758-1.379l-.749 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.607 0 11.985-5.365 11.985-11.987C23.97 5.39 18.592.026 11.985.026L12.017 0z"></path>
                            </svg></div>
                          <div class="icon-1x1-small w-embed"><svg aria-hidden="true" role="img" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                              <title>YouTube icon</title>
                              <path d="M23.499 6.203a3.008 3.008 0 00-2.089-2.089c-1.87-.501-9.4-.501-9.4-.501s-7.509-.01-9.399.501a3.008 3.008 0 00-2.088 2.09A31.258 31.26 0 000 12.01a31.258 31.26 0 00.523 5.785 3.008 3.008 0 002.088 2.089c1.869.502 9.4.502 9.4.502s7.508 0 9.399-.502a3.008 3.008 0 002.089-2.09 31.258 31.26 0 00.5-5.784 31.258 31.26 0 00-.5-5.808zm-13.891 9.4V8.407l6.266 3.604z"></path>
                            </svg></div>
                          <div class="icon-1x1-small w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <title>Arrow Right</title>
                              <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                            </polygon></svg></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("icon-1x1-medium", "stima-theme") ?></div>
                        <div class="fs-styleguide_row">
                          <div class="icon-1x1-medium w-embed"><svg aria-hidden="true" role="img" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                              <title>Twitter icon</title>
                              <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"></path>
                            </svg></div>
                          <div class="icon-1x1-medium w-embed"><svg aria-hidden="true" role="img" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                              <title>Facebook icon</title>
                              <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path>
                            </svg></div>
                          <div class="icon-1x1-medium w-embed"><svg aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <title>Instagram icon</title>
                              <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"></path>
                            </svg></div>
                          <div class="icon-1x1-medium w-embed"><svg aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <title>LinkedIn icon</title>
                              <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                            </svg></div>
                          <div class="icon-1x1-medium w-embed"><svg aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <title>Slack icon</title>
                              <path d="M5.042 15.165a2.528 2.528 0 0 1-2.52 2.523A2.528 2.528 0 0 1 0 15.165a2.527 2.527 0 0 1 2.522-2.52h2.52v2.52zM6.313 15.165a2.527 2.527 0 0 1 2.521-2.52 2.527 2.527 0 0 1 2.521 2.52v6.313A2.528 2.528 0 0 1 8.834 24a2.528 2.528 0 0 1-2.521-2.522v-6.313zM8.834 5.042a2.528 2.528 0 0 1-2.521-2.52A2.528 2.528 0 0 1 8.834 0a2.528 2.528 0 0 1 2.521 2.522v2.52H8.834zM8.834 6.313a2.528 2.528 0 0 1 2.521 2.521 2.528 2.528 0 0 1-2.521 2.521H2.522A2.528 2.528 0 0 1 0 8.834a2.528 2.528 0 0 1 2.522-2.521h6.312zM18.956 8.834a2.528 2.528 0 0 1 2.522-2.521A2.528 2.528 0 0 1 24 8.834a2.528 2.528 0 0 1-2.522 2.521h-2.522V8.834zM17.688 8.834a2.528 2.528 0 0 1-2.523 2.521 2.527 2.527 0 0 1-2.52-2.521V2.522A2.527 2.527 0 0 1 15.165 0a2.528 2.528 0 0 1 2.523 2.522v6.312zM15.165 18.956a2.528 2.528 0 0 1 2.523 2.522A2.528 2.528 0 0 1 15.165 24a2.527 2.527 0 0 1-2.52-2.522v-2.522h2.52zM15.165 17.688a2.527 2.527 0 0 1-2.52-2.523 2.526 2.526 0 0 1 2.52-2.52h6.313A2.527 2.527 0 0 1 24 15.165a2.528 2.528 0 0 1-2.522 2.523h-6.313z"></path>
                            </svg></div>
                          <div class="icon-1x1-medium w-embed"><svg aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <title>Dribbble icon</title>
                              <path d="M12 24C5.385 24 0 18.615 0 12S5.385 0 12 0s12 5.385 12 12-5.385 12-12 12zm10.12-10.358c-.35-.11-3.17-.953-6.384-.438 1.34 3.684 1.887 6.684 1.992 7.308 2.3-1.555 3.936-4.02 4.395-6.87zm-6.115 7.808c-.153-.9-.75-4.032-2.19-7.77l-.066.02c-5.79 2.015-7.86 6.025-8.04 6.4 1.73 1.358 3.92 2.166 6.29 2.166 1.42 0 2.77-.29 4-.814zm-11.62-2.58c.232-.4 3.045-5.055 8.332-6.765.135-.045.27-.084.405-.12-.26-.585-.54-1.167-.832-1.74C7.17 11.775 2.206 11.71 1.756 11.7l-.004.312c0 2.633.998 5.037 2.634 6.855zm-2.42-8.955c.46.008 4.683.026 9.477-1.248-1.698-3.018-3.53-5.558-3.8-5.928-2.868 1.35-5.01 3.99-5.676 7.17zM9.6 2.052c.282.38 2.145 2.914 3.822 6 3.645-1.365 5.19-3.44 5.373-3.702-1.81-1.61-4.19-2.586-6.795-2.586-.825 0-1.63.1-2.4.285zm10.335 3.483c-.218.29-1.935 2.493-5.724 4.04.24.49.47.985.68 1.486.08.18.15.36.22.53 3.41-.43 6.8.26 7.14.33-.02-2.42-.88-4.64-2.31-6.38z"></path>
                            </svg></div>
                          <div class="icon-1x1-medium w-embed"><svg aria-hidden="true" role="img" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                              <title>YouTube icon</title>
                              <path d="M23.499 6.203a3.008 3.008 0 00-2.089-2.089c-1.87-.501-9.4-.501-9.4-.501s-7.509-.01-9.399.501a3.008 3.008 0 00-2.088 2.09A31.258 31.26 0 000 12.01a31.258 31.26 0 00.523 5.785 3.008 3.008 0 002.088 2.089c1.869.502 9.4.502 9.4.502s7.508 0 9.399-.502a3.008 3.008 0 002.089-2.09 31.258 31.26 0 00.5-5.784 31.258 31.26 0 00-.5-5.808zm-13.891 9.4V8.407l6.266 3.604z"></path>
                            </svg></div>
                          <div class="icon-1x1-medium w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <title>Arrow Right</title>
                              <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                            </polygon></svg></div>
                        </div>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("icon-1x1-large", "stima-theme") ?></div>
                        <div class="fs-styleguide_row">
                          <div class="icon-1x1-large w-embed"><svg aria-hidden="true" role="img" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                              <title>Twitter icon</title>
                              <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"></path>
                            </svg></div>
                          <div class="icon-1x1-large w-embed"><svg aria-hidden="true" role="img" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                              <title>Facebook icon</title>
                              <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"></path>
                            </svg></div>
                          <div class="icon-1x1-large w-embed"><svg aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <title>Instagram icon</title>
                              <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"></path>
                            </svg></div>
                          <div class="icon-1x1-large w-embed"><svg aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <title>LinkedIn icon</title>
                              <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                            </svg></div>
                          <div class="icon-1x1-large w-embed"><svg aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <title>Slack icon</title>
                              <path d="M5.042 15.165a2.528 2.528 0 0 1-2.52 2.523A2.528 2.528 0 0 1 0 15.165a2.527 2.527 0 0 1 2.522-2.52h2.52v2.52zM6.313 15.165a2.527 2.527 0 0 1 2.521-2.52 2.527 2.527 0 0 1 2.521 2.52v6.313A2.528 2.528 0 0 1 8.834 24a2.528 2.528 0 0 1-2.521-2.522v-6.313zM8.834 5.042a2.528 2.528 0 0 1-2.521-2.52A2.528 2.528 0 0 1 8.834 0a2.528 2.528 0 0 1 2.521 2.522v2.52H8.834zM8.834 6.313a2.528 2.528 0 0 1 2.521 2.521 2.528 2.528 0 0 1-2.521 2.521H2.522A2.528 2.528 0 0 1 0 8.834a2.528 2.528 0 0 1 2.522-2.521h6.312zM18.956 8.834a2.528 2.528 0 0 1 2.522-2.521A2.528 2.528 0 0 1 24 8.834a2.528 2.528 0 0 1-2.522 2.521h-2.522V8.834zM17.688 8.834a2.528 2.528 0 0 1-2.523 2.521 2.527 2.527 0 0 1-2.52-2.521V2.522A2.527 2.527 0 0 1 15.165 0a2.528 2.528 0 0 1 2.523 2.522v6.312zM15.165 18.956a2.528 2.528 0 0 1 2.523 2.522A2.528 2.528 0 0 1 15.165 24a2.527 2.527 0 0 1-2.52-2.522v-2.522h2.52zM15.165 17.688a2.527 2.527 0 0 1-2.52-2.523 2.526 2.526 0 0 1 2.52-2.52h6.313A2.527 2.527 0 0 1 24 15.165a2.528 2.528 0 0 1-2.522 2.523h-6.313z"></path>
                            </svg></div>
                          <div class="icon-1x1-large w-embed"><svg aria-hidden="true" role="img" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <title>Dribbble icon</title>
                              <path d="M12 24C5.385 24 0 18.615 0 12S5.385 0 12 0s12 5.385 12 12-5.385 12-12 12zm10.12-10.358c-.35-.11-3.17-.953-6.384-.438 1.34 3.684 1.887 6.684 1.992 7.308 2.3-1.555 3.936-4.02 4.395-6.87zm-6.115 7.808c-.153-.9-.75-4.032-2.19-7.77l-.066.02c-5.79 2.015-7.86 6.025-8.04 6.4 1.73 1.358 3.92 2.166 6.29 2.166 1.42 0 2.77-.29 4-.814zm-11.62-2.58c.232-.4 3.045-5.055 8.332-6.765.135-.045.27-.084.405-.12-.26-.585-.54-1.167-.832-1.74C7.17 11.775 2.206 11.71 1.756 11.7l-.004.312c0 2.633.998 5.037 2.634 6.855zm-2.42-8.955c.46.008 4.683.026 9.477-1.248-1.698-3.018-3.53-5.558-3.8-5.928-2.868 1.35-5.01 3.99-5.676 7.17zM9.6 2.052c.282.38 2.145 2.914 3.822 6 3.645-1.365 5.19-3.44 5.373-3.702-1.81-1.61-4.19-2.586-6.795-2.586-.825 0-1.63.1-2.4.285zm10.335 3.483c-.218.29-1.935 2.493-5.724 4.04.24.49.47.985.68 1.486.08.18.15.36.22.53 3.41-.43 6.8.26 7.14.33-.02-2.42-.88-4.64-2.31-6.38z"></path>
                            </svg></div>
                          <div class="icon-1x1-large w-embed"><svg aria-hidden="true" role="img" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                              <title>YouTube icon</title>
                              <path d="M23.499 6.203a3.008 3.008 0 00-2.089-2.089c-1.87-.501-9.4-.501-9.4-.501s-7.509-.01-9.399.501a3.008 3.008 0 00-2.088 2.09A31.258 31.26 0 000 12.01a31.258 31.26 0 00.523 5.785 3.008 3.008 0 002.088 2.089c1.869.502 9.4.502 9.4.502s7.508 0 9.399-.502a3.008 3.008 0 002.089-2.09 31.258 31.26 0 00.5-5.784 31.258 31.26 0 00-.5-5.808zm-13.891 9.4V8.407l6.266 3.604z"></path>
                            </svg></div>
                          <div class="icon-1x1-large w-embed"><svg aria-hidden="true" fill="currentColor" role="img" viewBox="0 0 20 21" xmlns="http://www.w3.org/2000/svg">
                              <title>Arrow Right</title>
                              <polygon points="16.172 9 10.101 2.929 11.515 1.515 20 10 19.293 10.707 11.515 18.485 10.101 17.071 16.172 11 0 11 0 9">
                            </polygon></svg></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="fs-styleguide_utility-classes">
          <div class="padding-section-large">
            <div class="padding-global">
              <div class="container-large">
                <div class="fs-styleguide_section">
                  <div class="fs-styleguide_section-header">
                    <h2 class="fs-styleguide_heading-medium"><?php _e("Useful utility systems", "stima-theme") ?></h2>
                    <p class="text-size-medium"><?php _e("Utility classes we like to use in most of our projects to build faster.", "stima-theme") ?><br></p>
                  </div>
                  <div class="fs-styleguide_item-wrapper">
                    <div class="fs-styleguide_4-col">
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("hide", "stima-theme") ?></div>
                        <div class="hide"></div>
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cd6b-beb357e3"><?php _e("This element is hidden", "stima-theme") ?></div>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("hide-tablet", "stima-theme") ?></div>
                        <main class="hide-tablet">
                          <div class="fs-styleguide_empty-box"></div>
                        </main>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("hide-mobile-portrait", "stima-theme") ?></div>
                        <main class="hide-mobile-portrait">
                          <div class="fs-styleguide_empty-box"></div>
                        </main>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("hide-mobile-landscape", "stima-theme") ?></div>
                        <main class="hide-mobile-landscape">
                          <div class="fs-styleguide_empty-box"></div>
                        </main>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("overflow-visible", "stima-theme") ?></div>
                        <main class="overflow-visible">
                          <div class="fs-styleguide_empty-box"></div>
                        </main>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("overflow-hidden", "stima-theme") ?></div>
                        <main class="overflow-hidden">
                          <div class="fs-styleguide_empty-box"></div>
                        </main>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("overflow-auto", "stima-theme") ?></div>
                        <main class="overflow-auto">
                          <div class="fs-styleguide_empty-box"></div>
                        </main>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("overflow-scroll", "stima-theme") ?></div>
                        <main class="overflow-scroll">
                          <div class="fs-styleguide_empty-box"></div>
                        </main>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("pointer-events-on", "stima-theme") ?></div>
                        <main class="pointer-events-on">
                          <div class="fs-styleguide_empty-box"></div>
                        </main>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("pointer-events-off", "stima-theme") ?></div>
                        <main class="pointer-events-off">
                          <div class="fs-styleguide_empty-box"></div>
                        </main>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("layer", "stima-theme") ?></div>
                        <main class="layer"></main>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("div-square", "stima-theme") ?></div>
                        <main class="div-square"></main>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("spacing-clean", "stima-theme") ?></div>
                        <main class="spacing-clean">
                          <div class="fs-styleguide_empty-box"></div>
                        </main>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("align-center", "stima-theme") ?></div>
                        <main class="align-center">
                          <div class="fs-styleguide_empty-box"></div>
                        </main>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("z-index-1", "stima-theme") ?></div>
                        <main class="z-index-1"></main>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("z-index-2", "stima-theme") ?></div>
                        <main class="z-index-2"></main>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("display-inlineflex", "stima-theme") ?></div>
                        <main class="display-inlineflex">
                          <div class="fs-styleguide_empty-box"></div>
                        </main>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="fs-styleguide_webflow-elements">
          <div class="padding-section-large">
            <div class="padding-global">
              <div class="container-large">
                <div class="fs-styleguide_section">
                  <div class="fs-styleguide_section-header">
                    <h2 class="fs-styleguide_heading-medium"><?php _e("Webflow elements", "stima-theme") ?></h2>
                    <p class="text-size-medium"><?php _e("Native Webflow elements with Client-First classes applied.", "stima-theme") ?><br></p>
                  </div>
                  <div class="fs-styleguide_item-wrapper">
                    <div class="fs-styleguide_1-col">
                      <div class="fs-styleguide_item is-stretch">
                        <div id="w-node-_32eadc24-e391-a089-abe0-fb5b6627cdc7-beb357e3" class="fs-styleguide_label"><?php _e("form_component", "stima-theme") ?></div>
                        <p class="text-size-medium"><?php _e("Example of a form component using Folders", "stima-theme") ?><br></p>
                        <div class="form_component w-form">
                          <form id="wf-form-Form" name="wf-form-Form" data-name="Form" method="get" class="form_form" data-wf-page-id="657c4a92c364e232beb357e3" data-wf-element-id="32eadc24-e391-a089-abe0-fb5b6627cdca" data-ajax-action="contact"><label for="contact[email]"><?php _e("Email", "stima-theme") ?></label><input type="email" name="contact[email]" class="w-input" required="">
                            <div class="form_field-wrapper"><label for="contact[first-name-]" class="form_label"><?php _e("Text Input", "stima-theme") ?></label><input type="text" class="form_input w-input" maxlength="256" name="contact[first-name-]" data-name="First Name 2" placeholder="First Name" id="First-Name-2"></div>
                            <div class="form_field-wrapper"><label for="contact[message-]" class="form_label"><?php _e("Text Area", "stima-theme") ?></label><textarea id="Message-2" name="contact[message-]" maxlength="5000" data-name="Message 2" placeholder="Message" class="form_input is-text-area w-input"></textarea></div>
                            <div class="form_field-wrapper"><label for="Style-Select-3" class="form_label"><?php _e("Select field", "stima-theme") ?></label><select id="Style-Select-2" name="contact[style-select-]" data-name="Style Select 2" class="form_input is-select-input w-select">
                                <option value=""><?php _e("Select one...", "stima-theme") ?></option>
                                <option value="First"><?php _e("First Choice", "stima-theme") ?></option>
                                <option value="Second"><?php _e("Second Choice", "stima-theme") ?></option>
                                <option value="Third"><?php _e("Third Choice", "stima-theme") ?></option>
                              </select></div>
                            <div class="form_field-wrapper"><label for="email" class="form_label"><?php _e("Checkbox field", "stima-theme") ?></label><label class="w-checkbox form_checkbox">
                                <div class="w-checkbox-input w-checkbox-input--inputType-custom form_checkbox-icon w--redirected-checked"></div><input type="checkbox" name="contact[checkbox-]" id="Checkbox-2" data-name="Checkbox 2" checked="" style="opacity:0;position:absolute;z-index:-1"><span for="Checkbox-2" class="form_checkbox-label w-form-label"><?php _e("Checkbox", "stima-theme") ?></span>
                              </label></div>
                            <div class="form_field-wrapper"><label for="email" class="form_label"><?php _e("Radio button", "stima-theme") ?></label><label class="form_radio w-radio"><input type="radio" name="contact[radio]" id="radio-3" value="Radio" data-name="Radio 3" class="w-form-formradioinput form_radio-icon w-radio-input"><span class="form_radio-label w-form-label" for="radio-3"><?php _e("Radio", "stima-theme") ?></span></label></div><input type="submit" value="Submit" data-wait="Please wait..." class="button is-form-submit w-button">
                          <?php udesly_honeypot_field() ?></form>
                          <div class="form_message-success w-form-done">
                            <div><?php _e("Thank you! Your submission has been received!", "stima-theme") ?></div>
                          </div>
                          <div class="form_message-error w-form-fail">
                            <div><?php _e("Oops! Something went wrong while submitting the form.", "stima-theme") ?></div>
                          </div>
                        </div>
                      </div>
                      <div class="fs-styleguide_item">
                        <div class="fs-styleguide_label"><?php _e("text-rich-text", "stima-theme") ?></div>
                        <div class="text-rich-text w-richtext">
                          <h1><?php _e("Heading 1", "stima-theme") ?></h1>
                          <h2><?php _e("Heading 2", "stima-theme") ?></h2>
                          <h3><?php _e("Heading 3", "stima-theme") ?></h3>
                          <h4><?php _e("Heading 4", "stima-theme") ?></h4>
                          <h5><?php _e("Heading 5", "stima-theme") ?></h5>
                          <h6><?php _e("Heading 6", "stima-theme") ?></h6>
                          <p><?php _e("Sample text with a ", "stima-theme") ?><a href="http://finsweet.com"><?php _e("link", "stima-theme") ?></a><?php _e(" is being used as a placeholder for real text that is normally present. Sample text helps you understand how real text may look on your website. Sample text is being used as a placeholder for real text. Sample text is being used as a placeholder for real text. Sample text is being used as a placeholder for real text.", "stima-theme") ?></p>
                          <ul role="list">
                            <li><?php _e("Sample text is being used as a placeholder for real text that is normally present.", "stima-theme") ?></li>
                            <li><?php _e("Sample text is being used as a placeholder for real text that is normally present.", "stima-theme") ?></li>
                            <li><?php _e("Sample text is being used as a placeholder for real text that is normally present.", "stima-theme") ?></li>
                          </ul>
                          <ol start="" role="list">
                            <li><?php _e("Sample text is being used as a placeholder for real text that is normally present.", "stima-theme") ?></li>
                            <li><?php _e("Sample text is being used as a placeholder for real text that is normally present.", "stima-theme") ?></li>
                            <li><?php _e("Sample text is being used as a placeholder for real text that is normally present.", "stima-theme") ?></li>
                          </ol>
                          <blockquote><?php _e("Sample text is being used as a placeholder for real text that is normally present. Sample text helps you understand how real text may look on your website. Sample text is being used as a placeholder for real text that is normally present.", "stima-theme") ?></blockquote>
                          <figure class="w-richtext-align-normal w-richtext-figure-type-image">
                            <div><img src="<?php echo get_template_directory_uri(); ?>/assets/images/image.svg?v=1703175368" loading="lazy" alt=""></div>
                          </figure>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>
    </div>
  </div>
  
  