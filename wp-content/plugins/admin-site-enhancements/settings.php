<?php

/**
 * Register admin menu
 *
 * @since 1.0.0
 */
function asenha_register_admin_menu()
{
    add_submenu_page(
        'tools.php',
        // Parent page/menu
        'Admin and Site Enhancements',
        // Browser tab/window title
        'Enhancements',
        // Sube menu title
        'manage_options',
        // Minimal user capabililty
        ASENHA_SLUG,
        // Page slug. Shows up in URL.
        'asenha_add_settings_page'
    );
}

/**
 * Create the settings page of the plugin
 *
 * @since 1.0.0
 */
function asenha_add_settings_page()
{
    ?>
	<div class="wrap asenha">

		<div id="asenha-header" class="asenha-header">
			<div class="asenha-header-left">
				<h1 class="asenha-heading"><?php 
    echo  get_admin_page_title() ;
    ?> <small><?php 
    esc_html_e( 'by', 'admin-site-enhancements' );
    ?> <a href="https://bowo.io/asenha-bw" target="_blank">Bowo</a></small></h1>
				<!-- <a href="https://wordpress.org/plugins/admin-site-enhancements/" target="_blank" class="asenha-header-action"><span>&#8505;</span> <?php 
    // esc_html_e( 'Info', 'admin-site-enhancements' );
    ?></a> -->
			</div>
			<div class="asenha-header-right">
				<a href="https://bowo.io/asenha-rvw" target="_blank" class="asenha-header-action"><span>&starf;</span> <?php 
    esc_html_e( 'Review', 'admin-site-enhancements' );
    ?></a>
				<a href="https://bowo.io/asenha-fdbk" target="_blank" class="asenha-header-action">&#10010; <?php 
    esc_html_e( 'Feedback', 'admin-site-enhancements' );
    ?></a>
				<a href="https://bowo.io/asenha-trnslt" target="_blank" class="asenha-header-action">&#9654; <?php 
    esc_html_e( 'Translate', 'admin-site-enhancements' );
    ?></a>
                <div id="plugin-sponsor" class="button button-primary plugin-sponsor">
                    <?php 
    esc_html_e( 'Sponsor', 'admin-site-enhancements' );
    ?>
                </div>
				<a class="button button-primary asenha-save-button">Save Changes</a>
				<div class="asenha-changes-saved" style="display:none;">Changes have been saved.</div>
			</div>
		</div>

		<div class="asenha-body">
			<div class="asenha-sponsorship-nudge nudge-show-more is-enabled" style="display: none;">
				<h3>Looks like some of these enhancements have been useful for your site?</h3> 
				<p class="nudge-description intro">Please consider supporting Admin and Site Enhancements (ASE).</p>
				<a id="sponsorship-nudge-show-moreless" class="nudge-show-more-less show-more-less show-more" href="#">Find Out How ▼</a>
				<div class="nudge-wrapper-show-more">
					<?php 
    // Quotes on sponsorship
    $sponsorship_quotes = array(
        '"A very very useful plugin. I have made a little sponsorship and encourage other users to do the same as it is so much deserved. Thank you Bowo!" ~<a href="https://wordpress.org/support/topic/very-very-useful-54/" target="_blank">@pgrand83</a>',
        '"Tried it and was blown away with all the options! How is this free? I will sponsor you because this is simply... [insert your favorite superlative here]" ~<a href="https://wordpress.org/support/topic/installed-on-all-my-sites-3/" target="_blank">@mgjaltema</a>',
        '"This replaces so many plugins and snippets! Support the developer (reviews, donations etc.)" ~<a href="https://wordpress.org/support/topic/this-relpaces-many-plugins-and-snippets/" target="_blank">Max Ziebell</a>',
        '"Not only free, but worth a donation. This plugins does so many little things that there\'s bound to be a bunch that will make your life easier." ~<a href="https://wordpress.org/support/topic/not-only-free-but-worth-a-donation/" target="_blank">Darryl</a>',
        '"Replaced 6 plugins with this. Very easy plugin and great support. Found a bug and was fixed in hours!" ~<a href="https://wordpress.org/support/topic/replaced-6-plugins-with-this/" target="_blank">@dagaloni</a>',
        '"Amazing plugin that has replaced at least 10 plugins for me. Lightweight, clean and easy to use. The developer is also very helpful and responsive." ~<a href="https://wordpress.org/support/topic/replaced-atleast-10-plugins-for-me/" target="_blank">@sk209</a>',
        '"Very handy plugin by a great dev. Reported a bug yesterday, it was fixed today. Can’t ask for better than that." ~<a href="https://wordpress.org/support/topic/very-handy-plugin-by-a-great-dev/" target="_blank">Greg Mount</a>',
        '"Excellent and very well-supported plugin. I had a small issue, posted a support comment, and the developer had things sorted in a couple of days with a patch upgrade." ~<a href="https://wordpress.org/support/topic/excellent-and-very-well-supported-plugin-saves-me-a-lot-of-work/" target="_blank">@grizdev</a>',
        '"Bowo is awesome! Thanks to his great plugin my WP backend UI is cleaned up and organized, and I was able to uninstall other plugins too. Super useful, really recommended!" ~<a href="https://wordpress.org/support/topic/love-that-plugin-2/" target="_blank">@adminmax</a>',
        '"A very useful plugin that also has great support. Amazing that this plugin is free too. Great work and thanks to the author." ~<a href="https://wordpress.org/support/topic/very-helpful-1357/" target="_blank">@tomo55555</a>',
        '"Great plugin! I will definitely support it’s development because I know it will save me time and frustration on all of the websites I set up." ~<a href="https://wordpress.org/support/topic/great-plugin-clear-useful-and-a-joy-to-use/" target="_blank">@toddneufeld</a>',
        '"Love the work you’ve done with this plugin! Incredibly powerful and well organized. It’s a real accomplishment to put this many features into a plugin and still make it easy to navigate." ~<a href="https://wordpress.org/support/topic/holy-cow-this-is-excellent/" target="_blank">Nathan Ingram</a>',
        '"I must express gratitude to the author for the exceptional effort invested in developing this plugin... it nearly aligns entirely with the options I typically apply to each website." ~<a href="https://wordpress.org/support/topic/excellent-features-selection/" target="_blank">@cvladan</a>',
        '"The support is awesome – I had an issue which I was able to pin down with the creator. Very fast response time, polite conversation and successful in the end 🙂. Fully recommended!" ~<a href="https://wordpress.org/support/topic/simple-yet-powerful-103/" target="_blank">@gulpman</a>',
        '"I\'ve started installing this plugin as part of my \'standard\' set up. It is continually improving and seems very stable and reliable. I have made 6 installations so far and I am very impressed. Thanks Bowo." ~<a href="https://wordpress.org/support/topic/excellent-plugin-8681/" target="_blank">@jacalakie</a>',
        '"I\'ve been looking for something like this for a long time. The developer is also very friendly and helpful. Highly recommended!" ~<a href="https://wordpress.org/support/topic/must-have-684/" target="_blank">@jdudi</a>',
        '"A must have plugin for most sites, So many useful features. along with a great developer who is open to suggestions." ~<a href="https://wordpress.org/support/topic/amazing-plugin-2443/" target="_blank">@akgt</a>',
        '"Great plugin and awesome developer!" ~<a href="https://wordpress.org/support/topic/awesome-9998/" target="_blank">@mrgy05</a>',
        '"This one plug-in has replaced at the very least four other plug-ins I was using regularly. I can’t thank you enough for your work. Amazing job!" ~<a href="https://wordpress.org/support/topic/amazing-work-63/" target="_blank">@tbutcher</a>',
        '"Technical support? Unbelievable, one problem and quick response with immediate solution. It has become one of my essential plugins. Just amazing!" ~<a href="https://wordpress.org/support/topic/there-are-no-words-just-amazing/" target="_blank">@samirhp</a>',
        '"I just can’t believe I’ll be able to start using this single plugin instead of all the separate ones... what a relief! Thanks man for this great plugin, it’s like you’ve read my mind 🙂" ~<a href="https://wordpress.org/support/topic/amazing-how-many-separate-plugins-this-replaces/" target="_blank">@yudayuda</a>',
        '"Awesome plugin! What a time saver and workflow improvements. Having all these setting in one place, one plugin. Replaces many free and paid for plugins." ~<a href="https://wordpress.org/support/topic/awesome-plugin-replaces-so-many-other-plugins/" target="_blank">@greggwatson</a>',
        '"This plugin has quickly become my go-to solution for all my projects. It\'s a game-changer, saving me valuable time and sparing me the frustration of dealing with bloated plugins. " ~<a href="https://wordpress.org/support/topic/must-have-plugin-for-every-website-2/" target="_blank">Aronu</a>'
    );
    $random_sponsorship_quote = $sponsorship_quotes[rand( 0, count( $sponsorship_quotes ) - 1 )];
    // Quotes on general support
    $support_quotes = array(
        '“Simply the best! Still looking for the sixth star for you. Don’t stop developing… We are supporting you!“ ~<a href="https://wordpress.org/support/topic/too-good-to-be-true-22/" target="_blank">@springbreak</a>',
        '"Amazing job – premium functions in free plugin. Everything is clear, fast, consistent and lightweight. Best possible rating." ~<a href="https://wordpress.org/support/topic/amazing-job-premium-functions-in-free-plugin/" target="_blank">@pijag</a>',
        '"Really grateful and impressed at the pace of development and adding new features including some I have suggested, so feedback is really worthwhile." ~<a href="https://wordpress.org/support/topic/fantastic-plugin-replacing-many-other-plugins/" target="_blank">Dale Reardon</a>',
        '"Greatest plugin ever. All in one solution to most of my problems. Thank you very much." ~<a href="https://wordpress.org/support/topic/greatest-plugin-ever-11/" target="_blank">@angelaustr</a>',
        '"It’s worth 10 stars (or more). This plugin eliminates the need to install many other plugins and also makes functions.php smaller since I have to insert fewer code snippets." ~<a href="https://wordpress.org/support/topic/its-worth-10-stars-or-more/" target="_blank">Angelika Reisiger</a>',
        '"This plugin is a real Swiss Army knife... combines multiple plugins and is still lightweight. Also Bowo, the developer, is friendly and replies quite quickly!" ~<a href="https://wordpress.org/support/topic/amazing-3728/" target="_blank">@olpo24</a>',
        '"Great job! Saved me lots of time to add lots of plugins to get ready for my work. It’s a relief to have everything streamlined and ready to go." ~<a href="https://wordpress.org/support/topic/super-2817/" target="_blank">Tao Sheng</a>',
        '"Very powerful tool. With this plugin, I can remove tons of plugins to reduce the possibility of plugin conflicts." ~<a href="https://wordpress.org/support/topic/very-powerful-tool-13/" target="_blank">@chiehliniceday</a>',
        '"Very useful! Great compilation of settings and options. It had quickly become one of my essential plugins." ~<a href="https://wordpress.org/support/topic/very-useful-3276/" target="_blank">@unapersona</a>',
        '"This plugin easily replaces a dozen or more plugins I install on every website project... and support has been wonderful and responsive. Highly recommended!" ~<a href="https://wordpress.org/support/topic/amazing-must-have-plugin-2/" target="_blank">@netzzjd</a>',
        '"I love that the whole plugin is smaller in file-size than some of the plugins that it replaces, which do only one of these things. Thank you for the great work!" ~<a href="https://wordpress.org/support/topic/very-useful-swiss-army-knife/" target="_blank">@dvaer</a>',
        '"This is a great plugin, it replaces many single purpose plugins which bloat up the site and the admin area. Great idea, good work!" ~<a href="https://wordpress.org/support/topic/replaces-a-lot-of-single-purpose-plugins/" target="_blank">@tageins</a>',
        '"Probably the best WP swiss army knife I’ve ever come across... Has noticeably improved performance on many of my sites. Keep up the great work!" ~<a href="https://wordpress.org/support/topic/im-replacing-so-many-plugins-with-this/" target="_blank">@instadesign</a>',
        '"ASE’s enhanced admin dashboard, improved site performance, and robust security features have truly transformed our website management." ~<a href="https://wordpress.org/support/topic/this-has-reduced-my-plugin-list-by-6-7/" target="_blank">@tomhung</a>',
        '"I love your plugin! All this needed functionality in one place is very helpful and saves me from writing (pasting) a lot of custom code every time." ~<a href="https://wordpress.org/support/topic/lifesaver-this-saves-so-much-time-and-custom-coding/" target="_blank">@prosite</a>',
        '"Amazingly good... you can easily replace several plugins with this easy-to-use one. It’s well thought out and offers features I didn’t even realize I needed." ~<a href="https://wordpress.org/support/topic/amazingly-good-8/" target="_blank">@brenteades</a>',
        '"Favorite!!! It has replaced several plugins I had in the past. This has become one of the first plugins I install." ~<a href="https://wordpress.org/support/topic/favorite-11/" target="_blank">@cck23</a>',
        '"ASE has been a game-changer for us... we were able to remove numerous duplicate plugins, reducing clutter and improving efficiency." ~<a href="https://wordpress.org/support/topic/this-has-reduced-my-plugin-list-by-6-7/" target="_blank">@tomhung</a>',
        '"This plugin is amazing. It replaces so many plugins and still removes bloat. For efficiency, security, flexibility and speed, it doesn’t get better." ~<a href="https://wordpress.org/support/topic/covers-all-manner-of-wp-sins/" target="_blank">Mary C. Dunford</a>',
        '"This plugin is what I have been waiting for to see for years! It has so many useful options that previously you needed to google to find snippets for and it was hard to keep track of all of them." ~<a href="https://wordpress.org/support/topic/amazing-swiss-army-tool-for-wordpress/" target="_blank">@alexgraphicd</a>',
        '"I’m already in love with this plugin... it will make my WP-life a lot easier 🙂" ~<a href="https://wordpress.org/support/topic/im-allready-in-love-with-this-plugin/" target="_blank">@medieskolen</a>',
        '"This plugin allows you to install and maintain one plugin instead of a host of smaller ones. My tests were all successful and I was happy to simplify my maintenance with fewer plugins." ~<a href="https://wordpress.org/support/topic/replaced-4-plugins-worked-well-a/" target="_blank">Vic Drover</a>',
        '"So many useful features it blows my mind, as well as enabling me to ditch so many other plugins." ~<a href="https://wordpress.org/support/topic/amazing-plugin-2441/" target="_blank">@simonclay</a>',
        '"One of those plugins that feels like it should be part of the core, lots of useful features without the bloat." ~<a href="https://wordpress.org/support/topic/great-contribution-5/" target="_blank">@mohobook</a>'
    );
    $random_support_quote = $support_quotes[rand( 0, count( $support_quotes ) - 1 )];
    $share_quotes = array(
        '"Will recommend to everyone! A nice plugin, which will grow and become the best plugin ever made!!" ~<a href="https://wordpress.org/support/topic/will-recommend-to-everyone/" target="_blank">@simonvinther</a>',
        '"It’s very honorable that you created this intentionally to give back to the WP community! I’ll be sure to share this plugin with all the freelance WP-builders at my shared office space!" ~<a href="https://wordpress.org/support/topic/installed-on-all-my-sites-3/" target="_blank">@mgjaltema</a>',
        '"Simple and gold. This plugin so awesome and it should be known by more people." ~<a href="https://wordpress.org/support/topic/simple-and-gold/" target="_blank">Julian Song</a>',
        '"ASE is a must-have plugin for anyone looking to optimize their WordPress site and streamline their workflow." ~<a href="https://wordpress.org/support/topic/this-has-reduced-my-plugin-list-by-6-7/" target="_blank">@tomhung</a>',
        '"Admin Site Enhancements has made my list of \'must install\' plug-ins, since it makes so many other tasks much easier." ~<a href="https://wordpress.org/support/topic/excellent-and-very-well-supported-plugin-saves-me-a-lot-of-work/" target="_blank">@grizdev</a>',
        '"I was super skeptical that this plugin could do so much without any problems, but i was wrong... 100% recommended!" ~<a href="https://wordpress.org/support/topic/the-all-in-one-plugin-you-need-in-your-arsenal/" target="_blank">@scarlywebs</a>',
        '"The selection of tools... nearly aligns entirely with the options I typically apply to each website. This plugin is commendable." ~<a href="https://wordpress.org/support/topic/excellent-features-selection/" target="_blank">@cvladan</a>',
        '"This plugin is amazing. So much useful functionality packed in. This is now a must-use plugin in my development stack. Thank you! ~<a href="https://wordpress.org/support/topic/amazing-now-part-of-my-must-use-dev-stack/" target="_blank">@phillcoxon</a>"',
        '"Very good, must use plugin, that makes life easier for everyone." ~<a href="https://wordpress.org/support/topic/very-good-6977/" target="_blank">@alexeerma</a>',
        '"Must-have plugin for every website. It\'s a game-changer." ~<a href="https://wordpress.org/support/topic/must-have-plugin-for-every-website-2/" target="_blank">Aronu</a>',
        '"This plugin has quickly become my go-to solution for all my projects." ~<a href="https://wordpress.org/support/topic/must-have-plugin-for-every-website-2/" target="_blank">Aronu</a>',
        '"Awesome plugin, it\'s an all in one solution!" ~<a href="https://wordpress.org/support/topic/everything-in-one-place-3/" target="_blank">@gabikod</a>',
        '"This is one of the best utility plugins that eliminates the need to use multiple plugins. It has become a standard plugin used in my WP site blueprint." ~<a href="https://wordpress.org/support/topic/must-have-wp-utility-tool/" target="_blank">Ken Sim</a>',
        '"Necessary plugin to every WordPress site." ~<a href="https://wordpress.org/support/topic/its-a-very-useful-plugin/" target="_blank">@ntamas</a>'
    );
    $random_share_quote = $share_quotes[rand( 0, count( $share_quotes ) - 1 )];
    ?>
					<div class="nudge-quotes">
						<div class="user-quote"><?php 
    echo  $random_sponsorship_quote ;
    ?></div>
						<div class="user-quote"><?php 
    echo  $random_support_quote ;
    ?></div>
					</div>
					<div class="nudge-content">
						<div class="nudge-primary">
							<h4>Sponsor ASE from as little as USD 1, monthly or one-time</h4>
							<div class="nudge-info">
								<p class="nudge-description">Please consider sponsoring ASE's ongoing development and maintenance so it can remain functional and useful for years to come. Thank you!</p>
							</div>
							<div class="nudge-ctas">
								<a href="https://bowo.io/asenha-sp-gth-ndg" class="button button-primary sponsorship-button monthly" target="_blank">Sponsor Monthly</a>
								<a href="https://bowo.io/asenha-sp-ppl-ndg" class="button sponsorship-button one-time" target="_blank">Sponsor One-Time</a>
								<a href="#" id="have-sponsored" class="asenha-have-sponsored">I've sponsored ASE</a>
							</div>
							<div class="nudge-stats">
								<p class="nudge-description">ASE has consumed more than <a href="https://bowo.io/asenha-sp-ndg-chnlg" target="_blank">250 hours of dev time</a>. At v5.5.0 (released on August 4, 2023) and 8,000+ active installs, there have been <a href="https://bowo.io/asenha-sp-gth-ndg" target="_blank">5 monthly sponsors</a> and <a href="https://bowo.io/asenha-sp-ppl-ndg" target="_blank">37 one-time sponsors</a>. You can be one today!</p>
							</div>
						</div>
						<div class="nudge-secondary">
							<h4>Give ASE your 5-star review or provide detailed feedback</h4>
							<p class="nudge-description">If financial sponsorship is not something you can provide at the moment, you can always <a href="https://bowo.io/asenha-rvw-ndg" target="_blank">add a quick, 5-star review</a> to support ASE. It has received <a href="https://bowo.io/asenha-rvw-ndg" target="_blank">70+ 5-star reviews</a> so far. Help make it 100, or more!</p>
							<p class="nudge-description">Or, if you find something is lacking or not working as you expect it to, you can provide a good and detailed <a href="https://bowo.io/asenha-fdbk-ndg" target="_blank">feature request or feedback</a>, which is much more appreciated than a 4-star review or less. This is how we can work together to improve ASE.</p>
						</div>
					</div>
					<div class="user-quote share-quote"><?php 
    echo  $random_share_quote ;
    ?></div>
					<p class="nudge-description">Do <a href="https://bowo.io/asenha-dotorg" target="_blank">share about ASE</a> with your colleagues and/or community.</p>
					<a href="https://bowo.io/asenha-bw-ndg" target="_blank" class="nudge-photo-link"><img src="<?php 
    echo  esc_attr( ASENHA_URL . 'assets/img/bowo.jpg' ) ;
    ?>" class="nudge-photo" /></a>
					<h3>Thank you!</h3> 
					<p class="nudge-description nudge-closing">I hope you continue to benefit from ASE. ~<a href="https://bowo.io/asenha-bw-ndg" target="_blank">Bowo</a></p>
					<div class="dismiss-sponsorship-nudge"><a id="sponsorship-nudge-show-less" href="#">Show less</a> &bull; <a href="#" id="sponsorship-nudge-dismiss" class="asenha-sponsorship-nudge-dismiss">Dismiss</a></div>
				</div>
			</div>
			<form action="options.php" method="post">
				<div class="asenha-vertical-tabs">
					<div class="asenha-tab-buttons">
					    <input id="tab-content-management" type="radio" name="tabs" checked><label for="tab-content-management">Content Management</label>
					    <input id="tab-admin-interface" type="radio" name="tabs"><label for="tab-admin-interface">Admin Interface</label>
					    <input id="tab-login-logout" type="radio" name="tabs"><label for="tab-login-logout">Log In | Log Out</label>
					    <input id="tab-custom-code" type="radio" name="tabs"><label for="tab-custom-code">Custom Code</label>
					    <input id="tab-disable-components" type="radio" name="tabs"><label for="tab-disable-components">Disable Components</label>
					    <input id="tab-security" type="radio" name="tabs"><label for="tab-security">Security</label>
					    <input id="tab-optimizations" type="radio" name="tabs"><label for="tab-optimizations">Optimizations</label>
					    <input id="tab-utilities" type="radio" name="tabs"><label for="tab-utilities">Utilities</label>
					</div>
					<div class="asenha-tab-contents">
					    <section class="asenha-fields fields-content-management"> 
					    	<table class="form-table" role="presentation">
					    		<tbody></tbody>
					    	</table>
					    </section>
					    <section class="asenha-fields fields-admin-interface"> 
					    	<table class="form-table" role="presentation">
					    		<tbody></tbody>
					    	</table>
					    </section>
					    <section class="asenha-fields fields-login-logout"> 
					    	<table class="form-table" role="presentation">
					    		<tbody></tbody>
					    	</table>
					    </section>
					    <section class="asenha-fields fields-custom-code"> 
					    	<table class="form-table" role="presentation">
					    		<tbody></tbody>
					    	</table>
					    </section>
					    <section class="asenha-fields fields-disable-components"> 
					    	<table class="form-table" role="presentation">
					    		<tbody></tbody>
					    	</table>
					    </section>
					    <section class="asenha-fields fields-security"> 
					    	<table class="form-table" role="presentation">
					    		<tbody></tbody>
					    	</table>
					    </section>
					    <section class="asenha-fields fields-optimizations"> 
					    	<table class="form-table" role="presentation">
					    		<tbody></tbody>
					    	</table>
					    </section>
					    <section class="asenha-fields fields-utilities"> 
					    	<table class="form-table" role="presentation">
					    		<tbody></tbody>
					    	</table>
					    </section>
					</div>
				</div>
				<div style="display:none;"><!-- Hide to prevent flash of fields appearing at the bottom of the page -->
					<?php 
    settings_fields( ASENHA_ID );
    ?>
					<?php 
    do_settings_sections( ASENHA_SLUG );
    ?>
					<?php 
    submit_button(
        'Save Changes',
        // Button copy
        'primary',
        // Type: 'primary', 'small', or 'large'
        'submit',
        // The 'name' attribute
        true,
        // Whether to wrap in <p> tag
        array(
            'id' => 'asenha-submit',
        )
    );
    ?>
				</div>
			</form>
		</div>

		<div class="asenha-footer">
		</div>

        <div id="asenha-sponsor" class="cta-modal-content sponsorship" style="display:none;">
            <div class="sponsorship-content">
                <div class="sponsorship-header">
                	<a href="https://bowo.io/asenha-bw-sp" target="_blank" class="sponsorship-photo-link"><img src="<?php 
    echo  esc_attr( ASENHA_URL . 'assets/img/bowo.jpg' ) ;
    ?>" class="sponsorship-bio-photo" /></a>
                    <h2>Thank you for your interest in sponsoring ASE!</h2>
					<p class="sponsorship-user-quote">“A very very useful plugin. I have made a little sponsorship and encourage other users to do the same as it is so much deserved. Thank you Bowo!” ~<a href="https://wordpress.org/support/topic/very-very-useful-54/" target="_blank">@pgrand83</a></p>
                </div>
                <div class="sponsorship-content-sections">
                    <div class="sponsorship-info">
                        <p class="sponsorship-description">Your sponsorship will help justify the time and effort I spend in <strong>developing and maintaining Admin and Site Enhancements (ASE)</strong>, so it can remain functional and be more useful for <strong>your personal project(s), paid dev work, client site(s) and/or agency workflow</strong>... hopefully for years to come.</p>                                
                    </div>
                    <div class="sponsorship-methods">
                        <p class="sponsorship-amount">Sponsorship can be <strong>as little as USD 1</strong>, monthly or one-time.</p>
                        <div class="sponsorship-method sponsor-via-github">
                            <a href="https://bowo.io/asenha-sp-gth" target="_blank" class="button button-primary button-hero sponsorship-button monthly">Monthly Sponsorship via Github <span class="dashicons dashicons-arrow-right-alt2"></span></a>
                        </div>
                        <div class="sponsorship-method sponsor-via-paypal">
                            <a href="https://bowo.io/asenha-sp-ppl" target="_blank" class="button button-hero sponsorship-button one-time">One-time Sponsorship via PayPal <span class="dashicons dashicons-arrow-right-alt2"></span></a>
                        </div>
                    </div>
                </div>
                <p>More about me and my work at <a href="https://bowo.io/asenha-bw-sp" target="_blank">bowo.io</a>.</p>
            </div>
        </div>
	</div>
	<?php 
    // Record the number of times changes were saved as well as the date of last save
    $asenha_stats = get_option( ASENHA_SLUG_U . '_stats', array() );
    $changes_saved = ( isset( $_GET['settings-updated'] ) && 'true' == $_GET['settings-updated'] ? true : false );
    
    if ( $changes_saved ) {
        $current_date = date( 'Y-m-d', time() );
        
        if ( !isset( $asenha_stats['first_save_date'] ) ) {
            $asenha_stats['first_save_date'] = $current_date;
            $asenha_stats['last_save_date'] = $current_date;
            $asenha_stats['save_count'] = 1;
            $asenha_stats['have_sponsored'] = false;
            $asenha_stats['sponsorship_nudge_dismissed'] = false;
            $asenha_stats['sponsorship_nudge_last_shown_date'] = '';
            $asenha_stats['sponsorship_nudge_last_shown_save_count'] = 0;
        } else {
            $asenha_stats['last_save_date'] = $current_date;
            $save_count = $asenha_stats['save_count'];
            $save_count++;
            $asenha_stats['save_count'] = $save_count;
        }
        
        update_option( ASENHA_SLUG_U . '_stats', $asenha_stats );
    }

}

/**
 * Suppress all notices, then add notice for successful settings update
 *
 * @since 1.1.0
 */
function asenha_suppress_notices()
{
    global  $plugin_page ;
    // Suppress all notices
    if ( ASENHA_SLUG === $plugin_page ) {
        remove_all_actions( 'admin_notices' );
    }
    // Add notice for successful settings update
    if ( isset( $_GET['page'] ) && ASENHA_SLUG == $_GET['page'] && isset( $_GET['settings-updated'] ) && true == $_GET['settings-updated'] ) {
        ?>
			<script>
				jQuery(document).ready( function() {
					jQuery('.asenha-changes-saved').fadeIn(400).delay(2500).fadeOut(400);
				});
			</script>

		<?php 
    }
}

/**
 * Suppress all generic notices on the plugin settings page
 *
 * @since 2.7.0
 */
function asenha_suppress_generic_notices()
{
    global  $plugin_page ;
    // Suppress all notices
    if ( ASENHA_SLUG === $plugin_page ) {
        remove_all_actions( 'all_admin_notices' );
    }
}

/**
 * Enqueue admin scripts
 *
 * @since 1.0.0
 */
function asenha_admin_scripts( $hook_suffix )
{
    global 
        $wp_version,
        $pagenow,
        $typenow,
        $taxnow,
        $hook_suffix
    ;
    $current_screen = get_current_screen();
    // Get all WP Enhancements options, default to empty array in case it's not been created yet
    $options = get_option( 'admin_site_enhancements', array() );
    // For main page of this plugin
    
    if ( is_asenha() ) {
        wp_enqueue_style(
            'asenha-jbox',
            ASENHA_URL . 'assets/css/jBox.all.min.css',
            array(),
            ASENHA_VERSION
        );
        wp_enqueue_script(
            'asenha-jbox',
            ASENHA_URL . 'assets/js/jBox.all.min.js',
            array(),
            ASENHA_VERSION,
            false
        );
        wp_enqueue_script(
            'asenha-jsticky',
            ASENHA_URL . 'assets/js/jquery.jsticky.mod.min.js',
            array( 'jquery' ),
            ASENHA_VERSION,
            false
        );
        wp_enqueue_script(
            'asenha-js-cookie',
            ASENHA_URL . 'assets/js/js.cookie.min.js',
            array(),
            ASENHA_VERSION,
            false
        );
        // jQuery UI Sortables. In use, e.g. for Admin Interface >> Admin Menu Organizer
        // Re-register and re-enqueue jQuery UI Core and plugins required for sortable, draggable and droppable when ordering menu items
        wp_deregister_script( 'jquery-ui-core' );
        wp_register_script(
            'jquery-ui-core',
            get_site_url() . '/wp-includes/js/jquery/ui/core.min.js',
            array( 'jquery' ),
            ASENHA_VERSION,
            false
        );
        wp_enqueue_script( 'jquery-ui-core' );
        
        if ( version_compare( $wp_version, '5.6.0', '>=' ) ) {
            wp_deregister_script( 'jquery-ui-mouse' );
            wp_register_script(
                'jquery-ui-mouse',
                get_site_url() . '/wp-includes/js/jquery/ui/mouse.min.js',
                array( 'jquery-ui-core' ),
                ASENHA_VERSION,
                false
            );
            wp_enqueue_script( 'jquery-ui-mouse' );
        } else {
            wp_deregister_script( 'jquery-ui-widget' );
            wp_register_script(
                'jquery-ui-widget',
                get_site_url() . '/wp-includes/js/jquery/ui/widget.min.js',
                array( 'jquery' ),
                ASENHA_VERSION,
                false
            );
            wp_enqueue_script( 'jquery-ui-widget' );
            wp_deregister_script( 'jquery-ui-mouse' );
            wp_register_script(
                'jquery-ui-mouse',
                get_site_url() . '/wp-includes/js/jquery/ui/mouse.min.js',
                array( 'jquery-ui-core', 'jquery-ui-widget' ),
                ASENHA_VERSION,
                false
            );
            wp_enqueue_script( 'jquery-ui-mouse' );
        }
        
        wp_deregister_script( 'jquery-ui-sortable' );
        wp_register_script(
            'jquery-ui-sortable',
            get_site_url() . '/wp-includes/js/jquery/ui/sortable.min.js',
            array( 'jquery-ui-mouse' ),
            ASENHA_VERSION,
            false
        );
        wp_enqueue_script( 'jquery-ui-sortable' );
        wp_deregister_script( 'jquery-ui-draggable' );
        wp_register_script(
            'jquery-ui-draggable',
            get_site_url() . '/wp-includes/js/jquery/ui/draggable.min.js',
            array( 'jquery-ui-mouse' ),
            ASENHA_VERSION,
            false
        );
        wp_enqueue_script( 'jquery-ui-draggable' );
        wp_deregister_script( 'jquery-ui-droppable' );
        wp_register_script(
            'jquery-ui-droppable',
            get_site_url() . '/wp-includes/js/jquery/ui/droppable.min.js',
            array( 'jquery-ui-draggable' ),
            ASENHA_VERSION,
            false
        );
        wp_enqueue_script( 'jquery-ui-droppable' );
        // Script to set behaviour and actions of the sortable menu
        wp_enqueue_script(
            'asenha-custom-admin-menu',
            ASENHA_URL . 'assets/js/custom-admin-menu.js',
            array( 'jquery-ui-draggable' ),
            ASENHA_VERSION,
            false
        );
        // First, we unload the CodeMirror libraries included in WP core
        wp_deregister_script( 'wp-codemirror' );
        wp_deregister_script( 'code-editor' );
        wp_deregister_script( 'htmlhint' );
        wp_deregister_script( 'csslint' );
        wp_deregister_script( 'esprima' );
        wp_deregister_script( 'jshint' );
        // Then, we load ASENHA's CodeMirror libraries. In use, e.g. for Utilities >> Enable Custom Admin / Frontend CSS / ads.txt / app-ads.txt
        wp_enqueue_style(
            'asenha-codemirror',
            ASENHA_URL . 'assets/css/codemirror/codemirror.min.css',
            array(),
            ASENHA_VERSION
        );
        wp_enqueue_script(
            'asenha-codemirror',
            ASENHA_URL . 'assets/js/codemirror/codemirror.min.js',
            array( 'jquery' ),
            ASENHA_VERSION,
            true
        );
        wp_enqueue_script(
            'asenha-codemirror-htmlmixed-mode',
            ASENHA_URL . 'assets/js/codemirror/htmlmixed.js',
            array( 'asenha-codemirror' ),
            ASENHA_VERSION,
            true
        );
        wp_enqueue_script(
            'asenha-codemirror-xml-mode',
            ASENHA_URL . 'assets/js/codemirror/xml.js',
            array( 'asenha-codemirror' ),
            ASENHA_VERSION,
            true
        );
        wp_enqueue_script(
            'asenha-codemirror-javascript-mode',
            ASENHA_URL . 'assets/js/codemirror/javascript.js',
            array( 'asenha-codemirror' ),
            ASENHA_VERSION,
            true
        );
        wp_enqueue_script(
            'asenha-codemirror-css-mode',
            ASENHA_URL . 'assets/js/codemirror/css.js',
            array( 'asenha-codemirror' ),
            ASENHA_VERSION,
            true
        );
        wp_enqueue_script(
            'asenha-codemirror-markdown-mode',
            ASENHA_URL . 'assets/js/codemirror/markdown.js',
            array( 'asenha-codemirror' ),
            ASENHA_VERSION,
            true
        );
        // DataTables. In use, e.g. for Security >> Limit Login Attempts
        wp_enqueue_style(
            'asenha-datatables',
            ASENHA_URL . 'assets/css/datatables/datatables.min.css',
            array(),
            ASENHA_VERSION
        );
        wp_enqueue_script(
            'asenha-datatables',
            ASENHA_URL . 'assets/js/datatables/datatables.min.js',
            array( 'jquery' ),
            ASENHA_VERSION,
            false
        );
        // Main style and script for the admin page
        wp_enqueue_style(
            'asenha-admin-page',
            ASENHA_URL . 'assets/css/admin-page.css',
            array( 'asenha-jbox', 'asenha-codemirror', 'asenha-datatables' ),
            ASENHA_VERSION
        );
        wp_enqueue_script(
            'asenha-admin-page',
            ASENHA_URL . 'assets/js/admin-page.js',
            array(
            'asenha-jsticky',
            'asenha-jbox',
            'asenha-js-cookie',
            'asenha-codemirror-htmlmixed-mode',
            'asenha-codemirror-xml-mode',
            'asenha-codemirror-javascript-mode',
            'asenha-codemirror-css-mode',
            'asenha-codemirror-markdown-mode',
            'asenha-datatables',
            'asenha-custom-admin-menu'
        ),
            ASENHA_VERSION,
            false
        );
    }
    
    // Enqueue on all wp-admin
    wp_enqueue_style(
        'asenha-wp-admin',
        ASENHA_URL . 'assets/css/wp-admin.css',
        array(),
        ASENHA_VERSION
    );
    // Content Management >> Show IDs, for list tables in wp-admin, e.g. All Posts page
    if ( false !== strpos( $current_screen->base, 'edit' ) || false !== strpos( $current_screen->base, 'users' ) || false !== strpos( $current_screen->base, 'upload' ) ) {
        wp_enqueue_style(
            'asenha-list-table',
            ASENHA_URL . 'assets/css/list-table.css',
            array(),
            ASENHA_VERSION
        );
    }
    // Content Management >> Enable Media Replacement
    
    if ( $current_screen->base == 'upload' || $current_screen->id == 'attachment' ) {
        // wp_enqueue_style( 'asenha-jbox', ASENHA_URL . 'assets/css/jBox.all.min.css', array(), ASENHA_VERSION );
        // wp_enqueue_script( 'asenha-jbox', ASENHA_URL . 'assets/js/jBox.all.min.js', array(), ASENHA_VERSION, false );
        wp_enqueue_style(
            'asenha-media-replace',
            ASENHA_URL . 'assets/css/media-replace.css',
            array(),
            ASENHA_VERSION
        );
        wp_enqueue_script(
            'asenha-media-replace',
            ASENHA_URL . 'assets/js/media-replace.js',
            array(),
            ASENHA_VERSION,
            false
        );
    }
    
    // Content Management >> Hide Admin Notices
    
    if ( array_key_exists( 'hide_admin_notices', $options ) && $options['hide_admin_notices'] ) {
        wp_enqueue_style(
            'asenha-jbox',
            ASENHA_URL . 'assets/css/jBox.all.min.css',
            array(),
            ASENHA_VERSION
        );
        wp_enqueue_script(
            'asenha-jbox',
            ASENHA_URL . 'assets/js/jBox.all.min.js',
            array(),
            ASENHA_VERSION,
            false
        );
        wp_enqueue_style(
            'asenha-hide-admin-notices',
            ASENHA_URL . 'assets/css/hide-admin-notices.css',
            array(),
            ASENHA_VERSION
        );
        wp_enqueue_script(
            'asenha-hide-admin-notices',
            ASENHA_URL . 'assets/js/hide-admin-notices.js',
            array( 'asenha-jbox' ),
            ASENHA_VERSION,
            false
        );
    }
    
    // Utilities >> Multiple User Roles
    if ( array_key_exists( 'multiple_user_roles', $options ) && $options['multiple_user_roles'] ) {
        if ( 'user-edit.php' == $hook_suffix || 'user-new.php' == $hook_suffix ) {
            // Only replace roles dropdown with checkboxes for users that can assign roles to other users, e.g. administrators
            if ( current_user_can( 'promote_users', get_current_user_id() ) ) {
                wp_enqueue_script(
                    'asenha-multiple-user-roles',
                    ASENHA_URL . 'assets/js/multiple-user-roles.js',
                    array( 'jquery' ),
                    ASENHA_VERSION,
                    false
                );
            }
        }
    }
    // Pass on ASENHA stats to admin-page.js to determine whether to show sponsorship nudge
    $asenha_stats = get_option( ASENHA_SLUG_U . '_stats', array() );
    $current_date = date( 'Y-m-d', time() );
    $show_sponsorship_nudge = false;
    $asenha_stats_localized = array(
        'firstSaveDate'        => '',
        'lastSaveDate'         => '',
        'saveCount'            => 0,
        'showSponsorshipNudge' => false,
    );
    
    if ( !empty($asenha_stats) ) {
        $have_sponsored = $asenha_stats['have_sponsored'];
        $changes_saved = ( isset( $_GET['settings-updated'] ) && 'true' == $_GET['settings-updated'] ? true : false );
        // Compensate for redirect from settings-updated=true URL
        
        if ( $changes_saved ) {
            $save_count = $asenha_stats['save_count'] + 1;
        } else {
            $save_count = $asenha_stats['save_count'];
        }
        
        $saves_to_nudge_sponsorship = 5;
        
        if ( $save_count < $saves_to_nudge_sponsorship ) {
            $save_count_modulo = -1;
        } else {
            $save_count_modulo = $save_count % $saves_to_nudge_sponsorship;
        }
        
        // User have not sponsored ASE
        if ( false === $have_sponsored ) {
            // Sponsorship nudge have not been dismissed
            
            if ( false === $asenha_stats['sponsorship_nudge_dismissed'] ) {
                // Show sponsorship nudge after every x saves
                
                if ( $save_count_modulo >= 0 ) {
                    $show_sponsorship_nudge = true;
                } else {
                    $show_sponsorship_nudge = false;
                }
                
                
                if ( $show_sponsorship_nudge && $save_count_modulo >= 0 ) {
                    $asenha_stats['sponsorship_nudge_last_shown_date'] = $current_date;
                    $asenha_stats['sponsorship_nudge_last_shown_save_count'] = $save_count;
                    update_option( ASENHA_SLUG_U . '_stats', $asenha_stats );
                }
            
            } else {
                
                if ( $save_count_modulo == 0 ) {
                    
                    if ( $save_count > $asenha_stats['sponsorship_nudge_last_shown_save_count'] ) {
                        $asenha_stats['sponsorship_nudge_dismissed'] = false;
                        update_option( ASENHA_SLUG_U . '_stats', $asenha_stats );
                        $show_sponsorship_nudge = true;
                    } else {
                        $show_sponsorship_nudge = false;
                    }
                
                } else {
                    $show_sponsorship_nudge = false;
                }
            
            }
        
        }
        $asenha_stats_localized = array(
            'firstSaveDate'        => $asenha_stats['first_save_date'],
            'lastSaveDate'         => $asenha_stats['last_save_date'],
            'saveCount'            => $save_count,
            'showSponsorshipNudge' => $show_sponsorship_nudge,
        );
    }
    
    wp_localize_script( 'asenha-admin-page', 'asenhaStats', $asenha_stats_localized );
}

/**
 * Enqueue public scripts
 *
 * @since 3.9.0
 */
function asenha_public_scripts( $hook_suffix )
{
    // Get all WP Enhancements options, default to empty array in case it's not been created yet
    $options = get_option( 'admin_site_enhancements', array() );
    
    if ( array_key_exists( 'enable_external_permalinks', $options ) ) {
        $enable_external_permalinks = $options['enable_external_permalinks'];
    } else {
        $enable_external_permalinks = false;
    }
    
    
    if ( $enable_external_permalinks ) {
        wp_enqueue_script(
            'asenha-public',
            ASENHA_URL . 'assets/js/public.js',
            array( 'jquery' ),
            ASENHA_VERSION,
            false
        );
        wp_localize_script( 'asenha-public', 'phpVars', array(
            'externalPermalinksEnabled' => $enable_external_permalinks,
        ) );
    }

}

/**
 * Add 'Access now' plugin action link.
 *
 * @since    1.0.0
 */
function asenha_plugin_action_links( $links )
{
    $settings_link = '<a href="tools.php?page=' . ASENHA_SLUG . '">Configure now</a>';
    array_unshift( $links, $settings_link );
    return $links;
}

/**
 * Modify footer text
 *
 * @since 1.0.0
 */
function asenha_footer_text()
{
    if ( is_asenha() ) {
        ?>
		<a href="https://bowo.io/asenha-dotorg" target="_blank">Admin Site Enhancements</a> is on <a href="https://bowo.io/asenha-gthb" target="_blank">github</a>.
		<?php 
    }
}

/**
 * Change WP version number text in footer
 * 
 * @since 4.8.3
 */
function asenha_footer_version_text()
{
    ?>
    Also by Bowo &#8594; <a href="https://bowo.io/asenha-wpn" target="_blank">WordPress Newsboard</a>: The latest from 100+ sources
	<?php 
}

/**
 * Check if current screen is this plugin's main page
 *
 * @since 1.0.0
 */
function is_asenha()
{
    $request_uri = sanitize_text_field( $_SERVER['REQUEST_URI'] );
    // e.g. /wp-admin/index.php?page=page-slug
    
    if ( strpos( $request_uri, 'page=' . ASENHA_SLUG ) !== false ) {
        return true;
        // Yes, this is the plugin's main page
    } else {
        return false;
        // Nope, this is NOT the plugin's page
    }

}

/**
 * Mark that user have sponsored ASE
 * 
 * @since 5.2.7
 */
function asenha_have_sponsored()
{
    
    if ( isset( $_REQUEST ) ) {
        $asenha_stats = get_option( ASENHA_SLUG_U . '_stats', array() );
        $asenha_stats['have_sponsored'] = true;
        $asenha_stats['sponsorship_nudge_dismissed'] = true;
        $success = update_option( ASENHA_SLUG_U . '_stats', $asenha_stats );
        
        if ( $success ) {
            echo  json_encode( array(
                'success' => true,
            ) ) ;
        } else {
            echo  json_encode( array(
                'success' => false,
            ) ) ;
        }
    
    }

}

/**
 * Dismiss sponsorship nudge
 * 
 * @since 5.2.7
 */
function asenha_dismiss_sponsorship_nudge()
{
    
    if ( isset( $_REQUEST ) ) {
        $asenha_stats = get_option( ASENHA_SLUG_U . '_stats', array() );
        $asenha_stats['sponsorship_nudge_dismissed'] = true;
        $success = update_option( ASENHA_SLUG_U . '_stats', $asenha_stats );
        
        if ( $success ) {
            echo  json_encode( array(
                'success' => true,
            ) ) ;
        } else {
            echo  json_encode( array(
                'success' => false,
            ) ) ;
        }
    
    }

}
