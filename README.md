# slide-in-contact-form-wordpress-plugin
SlideIn Form is a combination of  plugins with some minor customizations used to show enquiry box on fixed position like bottom, left or right side with CSS3 effects for visitors.

To start collecting names and email addresses of visitors to your blog pages, so that visitors can leave their details. The form needs to be basic and inobstrusive – including only a first name, last name and email address field – and having a “slide-in” effect. The collected information should be shown as a table within the WordPress admin area. The icon should be editable with admins able to select any of the Font Awesome icons (https://fontawesome.com/), and select their own background and font colour for the form. The only items that are non-negotiable are that: a. there must be a recaptcha to prevent spam b. the slide-in must show after 10s to every first time visitor on the first page they land but thereafter, it should NOT slide-in automatically for the session, or for a future session for the next 3 days

=== Slide In Form ===
Contributors: Roshni Mansuri
Tags: popup,sticky popup,slide-up popup,contact form,social icon,css3,jquery,css3 effects,feedback,popup contact,popup form,social button,advertisement,popup block,advertising popup,popup jquery,fixed menu,float,float anything,float menu,text
Requires at least: 3.6
Tested up to: 4.0
Stable tag: 1.2

Slide In Form is a simple and easy wordpress plugin used to add popup on fixed position like bottom, left or right side with CSS3 effects.

== Description ==

Slide In Form is a simple, easy and fully-customizable wordpress plugin used to add popup on fixed position like footer left, footer right, left side or right side with CSS3 effects.

You can display any content like contact form, feedback form, advertising, content, social buttons. Add your content with shortocdes in visual text editor in same way as you edit your wordpress post/page.

Engage your users with this Slide In Form plugin.

== Installation ==

**Installation Instruction & Configuration**  	

1. You can use the built-in installer. OR
Download the zip file and extract the contents. Upload the 'slide-in-form' folder to your plugins directory (wp-content/plugins/).

2.Activate the plugin through the 'Plugins' menu in WordPress. 	

3.Go to Settings -> SlideIn Form and set title,color,icon and content

== Screenshots ==

1. Admin settings/options screenshot
2. Slide In Form closed
3. Slide In Form open

== Changelog ==

= 1.0 =
* Added feature to enable or disable sticky popup.
* Added options for setting title color, header border color, top margin
* Added an option to show popup in posts, pages or home page
* Added an option to show popup at Top Left or Top Right position
* Initial Relaese

=== Contact Form 7 ===
Contributors: takayukister
Donate link: https://contactform7.com/donate/
Tags: contact, form, contact form, feedback, email, ajax, captcha, akismet, multilingual
Requires at least: 4.9
Tested up to: 5.2
Stable tag: 5.1.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Just another contact form plugin. Simple but flexible.

== Description ==

Contact Form 7 can manage multiple contact forms, plus you can customize the form and the mail contents flexibly with simple markup. The form supports Ajax-powered submitting, CAPTCHA, Akismet spam filtering and so on.

= Docs & Support =

You can find [docs](https://contactform7.com/docs/), [FAQ](https://contactform7.com/faq/) and more detailed information about Contact Form 7 on [contactform7.com](https://contactform7.com/). If you were unable to find the answer to your question on the FAQ or in any of the documentation, you should check the [support forum](https://wordpress.org/support/plugin/contact-form-7/) on WordPress.org. If you can't locate any topics that pertain to your particular issue, post a new topic for it.

= Contact Form 7 Needs Your Support =

It is hard to continue development and support for this free plugin without contributions from users like you. If you enjoy using Contact Form 7 and find it useful, please consider [__making a donation__](https://contactform7.com/donate/). Your donation will help encourage and support the plugin's continued development and better user support.

= Privacy Notices =

With the default configuration, this plugin, in itself, does not:

* track users by stealth;
* write any user personal data to the database;
* send any data to external servers;
* use cookies.

If you activate certain features in this plugin, the contact form submitter's personal data, including their IP address, may be sent to the service provider. Thus, confirming the provider's privacy policy is recommended. These features include:

* reCAPTCHA ([Google](https://policies.google.com/?hl=en))
* Akismet ([Automattic](https://automattic.com/privacy/))
* Constant Contact ([Endurance International Group](https://www.endurance.com/privacy))

= Recommended Plugins =

The following plugins are recommended for Contact Form 7 users:

* [Flamingo](https://wordpress.org/plugins/flamingo/) by Takayuki Miyoshi - With Flamingo, you can save submitted messages via contact forms in the database.
* [Bogo](https://wordpress.org/plugins/bogo/) by Takayuki Miyoshi - Bogo is a straight-forward multilingual plugin that doesn't cause headaches.

= Translations =

You can [translate Contact Form 7](https://contactform7.com/translating-contact-form-7/) on [__translate.wordpress.org__](https://translate.wordpress.org/projects/wp-plugins/contact-form-7).

== Installation ==

1. Upload the entire `contact-form-7` folder to the `/wp-content/plugins/` directory.
1. Activate the plugin through the 'Plugins' menu in WordPress.

You will find 'Contact' menu in your WordPress admin panel.

For basic usage, you can also have a look at the [plugin web site](https://contactform7.com/).

== Frequently Asked Questions ==

Do you have questions or issues with Contact Form 7? Use these support channels appropriately.

1. [Docs](https://contactform7.com/docs/)
1. [FAQ](https://contactform7.com/faq/)
1. [Support Forum](https://wordpress.org/support/plugin/contact-form-7/)

[Support](https://contactform7.com/support/)

== Screenshots ==

1. screenshot-1.png

== Changelog ==

For more information, see [Releases](https://contactform7.com/category/releases/).

= 5.1.4 =

* reCAPTCHA: introduces the WPCF7_RECAPTCHA_SITEKEY and WPCF7_RECAPTCHA_SECRET constants.
* reCAPTCHA: Introduces the wpcf7_recaptcha_sitekey and wpcf7_recaptcha_secret filter hooks.
* Adds $status parameter to the wpcf7_form_response_output filter.
* Creates a nonce only when the submitter is a logged-in user.
* Introduces WPCF7_ContactForm::unit_tag(), a public method that returns a unit tag.
* reCAPTCHA: gives a different spam log message for cases where the response token is empty.
* Acceptance Checkbox: supports the label_first option in an acceptance form-tag.

= 5.1.3 =

* Fixes a bug making it unable to unselect an option in the Mail tab panel.

= 5.1.2 =

* Constant Contact: Introduces the contact list selector.
* Constant Contact: Introduces the constant_contact additional setting.
* reCAPTCHA: Introduces the wpcf7_recaptcha_actions and wpcf7_recaptcha_threshold filter hooks.

= 5.1.1 =

* reCAPTCHA: Modifies the reaction to empty response tokens.

= 5.1 =

* Introduces the Constant Contact integration module.
* Updates the reCAPTCHA module to support reCAPTCHA v3.
* Adds Dark Mode style rules.

= 5.0.5 =

* Fixes the inconsistency problem between get_data_option() and get_default_option() in the WPCF7_FormTag class.
* Suppresses PHP errors occur on unlink() calls.
* Introduces wpcf7_is_file_path_in_content_dir() to support the use of the UPLOADS constant.

= 5.0.4 =

* Specifies the capability_type argument explicitly in the register_post_type() call to fix the privilege escalation vulnerability issue.
* Local File Attachment – disallows the specifying of absolute file paths referring to files outside the wp-content directory.
* Config Validator – adds a test item to detect invalid file attachment settings.
* Fixes a bug in the JavaScript fallback function for legacy browsers that do not support the HTML5 placeholder attribute.
* Acceptance Checkbox – unsets the form-tag's do-not-store feature.

= 5.0.3 =

* CSS: Applies the "not-allowed" cursor style to submit buttons in the "disabled" state.
* Acceptance Checkbox: Revises the tag-generator UI to encourage the use of better options in terms of personal data protection.
* Introduces wpcf7_anonymize_ip_addr() function.
* Introduces the consent_for:storage option for all types of form-tags.

= 5.0.2 =

* Added the Privacy Notices section to the readme.txt file.
* Updated the Information meta-box content.
* Use get_user_locale() instead of get_locale() where it is more appropriate.
* Acceptance Checkbox: Reset submit buttons’ disabled status after a successful submission.

= 5.0.1 =

* Fixed incorrect uses of _n().
* Config validation: Fixed incorrect count of alerts in the Additional Settings tab panel.
* Config validation: Fixed improper treatment for the [_site_admin_email] special mail-tag in the From mail header field.
* Acceptance checkbox: The class and id attributes specified were applied to the wrong HTML element.
* Config validation: When there is an additional mail header for mailboxes like Cc or Reply-To, but it has a possible empty value, “Invalid mailbox syntax is used” error will be returned.
* Explicitly specify the fourth parameter of add_action() to avoid passing unintended parameter values.
* Check if the target directory is empty before removing the directory.

= 5.0 =

* Additional settings: on_sent_ok and on_submit have been removed.
* New additional setting: skip_mail
* Flamingo: Inbound channel title changes in conjunction with a change in the title of the corresponding contact form.
* DOM events: Make an entire API response object accessible through the event.detail.apiResponse property.
* HTML mail: Adds language-related attributes to the HTML header.
* File upload: Sets the accept attribute to an uploading field.
* Introduces the WPCF7_MailTag class.
* Allows aborting a mail-sending attempt using the wpcf7_before_send_mail action hook. Also, you can set a custom status and a message through the action hook.
* Acceptance checkbox: Allows the specifying of a statement of conditions in the form-tag’s content part.
* Acceptance checkbox: Supports the optional option.
* New special mail tags: [_site_title], [_site_description], [_site_url], [_site_admin_email], [_invalid_fields], [_user_login], [_user_email], [_user_url], [_user_first_name], [_user_last_name], [_user_nickname], and [_user_display_name]
* New filter hooks: wpcf7_upload_file_name, wpcf7_autop_or_not, wpcf7_posted_data_{$type}, and wpcf7_mail_tag_replaced_{$type}
* New form-tag features: zero-controls-container and not-for-mail

== Upgrade Notice ==

= 5.1.1 =

Read the [release announcement post](https://contactform7.com/category/releases/) before upgrading. There is an important notice.

= 5.0.4 =

This is a security and maintenance release and we strongly encourage you to update to it immediately. For more information, refer to the [release announcement post](https://contactform7.com/category/releases/).

=== Advanced Contact form 7 DB ===
Contributors: vsourz1td
Tags: contact form 7 db, advanced cf7 db, contact form 7 database, contact form db, contact form 7, save form data, save contact form, save cf7, database, cf7db, save-contact-form, Save-Forms-Data, import-cf7, export-contact-data, view-cf7-entry
Requires at least: 4.0
Tested up to: 5.2.2
Stable tag: 1.7.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Save all contact form 7 form submitted data to the database, View, Ordering, Change field labels and Import/Export data using CSV.

== Description ==
Easy plug & play plugin to store all enquiry details received through website Contact Form 7 forms. Simply install & activate plugin to store all your enquiries in wp-admin.

Every form that is submitted in the website will be captured into database using “Advanced Contact Form 7” plugin. Follow below steps to view form details:

* Select form from drop-down
* View all form data for that particular form
* Option to search / filter forms by keyword or date range
* View attachments in wp-content/uploads/advanced-cf7-upload
* Option to download attachments from wp-admin


= Features =
* Compatible with **Multisite feature** – Efficient data management by storing form details website wise
* Securely stores form data into database
* Easily modify enquiry data
* View list of all forms received through Contact Form 7
* Search / filter form details using keyword
* Search / filter enquiries using custom date-range filter
* Export data in **CSV, Excel or PDF** format by applying filters
* View attachment download link
* Advanced pagination with an option to jump to any page to view specific entries
* Enable/Disable columns with personalized tabular structure
* Drag & Drop with ease to view data in customized tabular view
* Option to select multiple entries at a time for deleting / exporting entries
* Rename field label names easily
* Import form details using CSV
* Filter to exclude data from creating record in CF7 database
* Modify form data before creating record in CF7 database
* Generate shortcode using different parameters to display specific data only. For more details, please refer plugin “Shortcode” screen

== Commercial Features ==
**1. Advanced CF7 DB - GDPR Compliant**
Advanced CF7 DB – GDPR Compliant plugin assists website and web-shop owners to comply with European privacy regulations known as GDPR. Advanced CF7 DB – GDPR Compliant is an add-on of Advanced CF7 DB, it is based on GDPR rules to export or erase user’s personal data stored with advanced CF7 DB. 

Download Advanced CF7 DB – GDPR Complaint plugin from <a target="_blank" href="https://codecanyon.net/item/advanced-cf7-db-gdpr-compliant/22386060">here</a>

= Advanced CF7 DB - GDPR Compliant Plugin Features =
* Compatible with the latest WordPress version 5.1.1 and later for GDPR compliances
* Manages data as per new regulations and up to the mark performance
* View personal data of individual record On-Request, categorized as per CF7 forms and websites
* Erase personal data specific to CF7 that are not required
* Website owners can export a ZIP file containing a user’s personal data, including data collected by Advanced CF7 DB plugin
* Website owners can erase a user’s personal data, including data collected by Advanced CF7 DB plugin

**2. Schedule Report**
We have introduced a new add-on “Schedule Report” focusing on day-to-day business specific requirement like:

* Daily Report
* Weekly Report
* Monthly Report

Reports will be automatically generated and will be available to you in your e-mail address as per scheduled routine. 

Download Schedule Report plugin from <a target="_blank" href="https://codecanyon.net/item/schedule-report-for-advanced-cf7-db/21560647?s_rank=8">here</a>

= Schedule Report Plugin Features =
* Auto-generated CSV report are sent in emails at scheduled time
* Schedule multiple email events for receiving different enquiry form reports
* Option to select datasheet columns for reports to be generated
* Option to filter data while creating the scheduled event for a particular report
* Option to create email templates by defining To, From, Email message for schedule reports
* Scheduled Report will also be added to wp-cron and will be triggered as per schedule

**3. Advanced CF7 DB - User Access Manager**
Need to provide access to other users? Your, search ends now, this plugin provides access to individual users or user groups and accordingly user(s) can view or edit their contact form DB data. 

Download Advanced CF7 DB – User Access Manager plugin from <a target="_blank" href="https://codecanyon.net/item/advanced-cf7-db-user-access-manager/22058788">here</a>
 
= Advanced CF7 DB - User Access Manager Plugin Features =
* Provide access of CF7 DB to view & update data to individual users or user groups
* Provide access to single user for creating single/multiple forms



== Plugin Customization ==
Restrict IP address storage – Various countries restrict websites to store end users IP address. We have a provision to Restrict IP address storage. Now, IP address can be neglected while storing form’s data into database.

**How to restrict IP address storage?**
Navigate to -> wp-content/themes/{active theme folder}/functions.php
Open the functions.php file and place the code do_shortcode( ‘[cf7-db-display-ip]’ ); at the end of the file.

For support, email us at: <wp.support@vsourz.com>

= How to use? =
1. Install Plugin via WordPress Admin – Go to Admin > Plugins > Add New.
2. View form entries – Go To Admin >> Advanced CF7 DB >> Advanced CF7 DB >> Select form name.
3. Import CSV file – Go To Admin >> Advanced CF7 DB >> Import CSV >> Select form name.

== Installation ==

= Install via WordPress Admin =
1. Go to Admin > Plugins > Add New 
2. On the upper portion click the Upload link.
3. Using the file upload field, upload the plugin zip file here and activate the plugin.

= Install via FTP =
1. Unzip the plugin file.
2. Using FTP go to your server’s wp-content/plugins directory.
3. Upload the unzipped plugin here.
4. Once finished, login into your WP Admin and go to Plugins.
5. Find Advanced CF7 DB and activate it.


== Frequently Asked Questions ==

= Can I use this plugin if Contact Form 7 is not installed or activated? =
No, this plugin work only when Contact Form 7 is installed & activated.

= How can I import CSV sheet? =
Go to "Field Setting Tab" under "Import CSV" screen, define/add column names as per your sheet, save those values and click "Import CSV".

= Can I modify field names? =
No, you can only change field’s label name from “display settings” screen.

= Are you facing difficulty in viewing data in CSV? =
Please note while exporting data in CSV format, the sheet must be opened with delimiter an it - (,)comma separated otherwise you may face difficulty in viewing the data sheet.

= What needs to be done if advanced CF7 DB is not working? =
Please contact our support team at <wp.support@vsourz.com> in case you face any difficulty. In case you have spotted a bug, please report at <wp.support@vsourz.com> & our support team will get is resolved in 24 hours.

= Can I restrict the plugin from storing IP address of the user to contact form DB? =
Yes, you can restrict the plugin from storing user's IP address.

= Can I display Contact Form DB data to user ? =
Yes, you can use short codes for displaying contact form data to users. For more detail please visit “Shortcode” plugin's description page.

= How to restrict the plugin from storing IP address of the user to contact form DB? =
Restriction is simple, just place "do_shortcode( ‘[cf7-db-display-ip]’ );" in the theme folders functions.php file By placing the code, IP address of the user's will not been stored.

Please follow below steps:
– Goto -> wp-content/themes/{active theme folder}/functions.php
– Open the functions.php file and place the code do_shortcode( ‘[cf7-db-display-ip]’ ); at the end of the file.
**For Multisite** - do_shortcode( ‘[cf7-db-display-ip site_id=”(your-site-id)”]’ );
– You need to add different shortcode for each site with specific siteId. If you need to restrict for all the sites then just place the shortcode without the parameter.

= How to restrict the plugin from storing form entry to Contact Form DB? =
Please follow below steps for restricting the plugin to store data 
– Goto -> wp-content/themes/{active theme folder}/functions.php
– Open the functions.php file and place below code at the end of the file.
add_filter(‘vsz_cf7_unwanted_form_data_submission’,’vsz_restrict_form_data_submission’);
function vsz_restrict_form_data_submission($contact_form_ids){
$contact_form_ids[] = {your-contact-form-id};
return $contact_form_ids;
}

**For Multiple Forms**
add_filter(‘vsz_cf7_unwanted_form_data_submission’,’vsz_restrict_form_data_submission’);
function vsz_restrict_form_data_submission($contact_form_ids){
$contact_form_ids[] = [‘{your-contact-form-id}’,'{your-contact-form-id}’];
return $contact_form_ids;
} 


== Screenshots ==

1. Display form related records.
2. Display Setting popup screen.
3. Edit information popup screen.
4. Setup import file fields.
5. Import CSV file.
6. Developer Support


== Changelog ==

= 1.7.2 =
* Fixed the delete data case as throws database error.

= 1.7.1 =
* Minor tweaks in the plugin related to the edit data

= 1.7.0 =
* We have upgraded with Security patch.
* Changes related to the premium plugin **User Access Manager** for the edit case to be handled.

= 1.6.2 =
* We have fixed SQL injection related bugs at the back office query.

= 1.6.1 =
* We have upgraded with Security patched for shortcode.

= 1.6.0 =
* We have upgraded with Security patched to securing user's uploaded data which managed on advanced-cf7-upload directory.

= 1.5.1 =
* Minor bug fixing related to variable mismatch for wordpress 5.0.1.

= 1.5.0 =
* **Developer Support:** Provide screen for the developer to manage Display Enquiry, Ban IP and Actions & Filters.
* **Add-ons:** Provision to select other add-ons of Advanced CF7 DB.

= 1.4.4 =
* Fixed issue related to export records in PDF.
* Provided filter for excluding particular contact form entry to the database
* Provided filter to add, modify, remove CF7 fields and data before submitting to the database.

= 1.4.3 =
* Fixed issue related to export records in PDF.
* Multisite support for IP restrict.

= 1.4.2 =
* Fixed issue related to hide ip address
* Delete attachment when record deleted
* Search with special characters issue fixed
* Accents and other languages special characters support added for export file with Excel and CSV
* Added the New library for the PDF


= 1.4.1 =
* Hidden field : Provision to update hidden field value.
* Export data in EXCEL : Resolved Special characters related issue.

= 1.4.0 =
* Export data in EXCEL & PDF file.
* IP address storage restriction.
* Mobile UI compatible
* **Schedule Report:** We have also introduced new feature **Schedule Report.**, now You can download our Commercial plugin from <a target="_blank" href="https://codecanyon.net/item/schedule-report-for-advanced-cf7-db/21560647?s_rank=8">here</a>

= 1.3.0 =
* Fixed issue related to the Contact Form tel field while editing the form data entry.
* Provision to change the number of records to be displayed in listing page from display setting option.
* Fixed issue related to redirection to the first page when a record is been updated from edit data popup.
* Compatible up to PHP 7.1

= 1.2.0 =
* Fix error related to PHP strings.

= 1.1.2 =
* Fix error related to PHP 7.1.

= 1.1.1 = 
* Made changes to resolve the issue of user feasibility when editing the form fields.
* Minor tweak related to export functionality and attachment download functionality.

= 1.1.0 = 
* Update Import Functionality.
* Fix CF7 Version related issue.

= 1.0.0 =
* Initial

=== Font Awesome ===
Contributors: fontawesome, mlwilkerson, robmadole, rachelbaker
Stable tag: 4.0.0-rc13
Tags: font, awesome, fontawesome, font-awesome, icon, svg, webfont
Requires at least: 4.7
Tested up to: 5.2.2
Requires PHP: 5.6
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Adds Font Awesome 5 icons to your WordPress site. Supports Font Awesome Pro. Resolves conflicts across many plugins or themes that use Font Awesome.

== Description ==

Adds Font Awesome 5 icons to your WordPress site. Supports Font Awesome Pro. Resolves conflicts across many plugins or themes that use Font Awesome.

This is the official plugin from the Font Awesome team.

= New Plugin, Replacing an Old Plugin =

This is a new, completely re-written plugin, tested with the latest WordPress and Font Awesome versions. It replaces the older plugin formerly occupying this space in the WordPress plugins directory, which was no longer being maintained.

Thanks to Rachel Baker and the team behind the former plugin for getting something started and allowing us to carry it forward.

We've built in some magic to help users of the old plugin experience a smooth upgrade path. We think you'll love Font Awesome 5!

= Features =

1. Supports both Font Awesome Free and Font Awesome Pro.

2. Gets new icon updates directly from fontawesome.com right when they're released, ready to add to your site as soon as you like. New icons are released regularly.

3. Provides easy configuration to enable the new SVG framework with extra features like [Power Transforms](https://fontawesome.com/how-to-use/on-the-web/styling/power-transforms).

  Easily spot and fix conflicts when using SVG would conflict with other plugins or themes that require the classic Web Fonts & CSS method.

4. Loads icons from the fast Font Awesome Free CDN, or the Font Awesome Pro CDN for [Pro subscribers](https://fontawesome.com/pro).

5. Provides a "v4-shim" to [ease the upgrade from Font Awesome 4 to Font Awesome 5](https://fontawesome.com/how-to-use/on-the-web/setup/upgrading-from-version-4).

6. Developers: supports development of themes and plugins to use Font Awesome without run time conflicts.

  Eliminate the headache of various plugins and themes trying to load multiple or incompatible versions of Font Awesome.

  Using this plugin provides a common framework for managing Font Awesome dependencies. Rest easy that icons for your templates will either load like you expect, or else warn the site owner gracefully with clear diagnostics and user-friendly guidance to resolve conflicts.

  See also: [API docs](https://fortawesome.github.io/wordpress-fontawesome/)

7. Prevents "unregistered" themes or plugins from breaking your icons by loading multiple or incompatible versions.

== Usage ==

Find icons for your version of Font Awesome in the [Icon Gallery](https://fontawesome.com/icons), or on the [cheatsheet](https://fontawesome.com/cheatsheet).

*HTML*

The stroopwafel icon in the Solid (fas) style:

`<i class="fas fa-stroopwafel"></i>`

[All Font Awesome features](https://fontawesome.com/how-to-use/on-the-web/referencing-icons/basic-use) are available when using HTML, including advanced features only available using the SVG with JavaScript, such as [Power Transforms](https://fontawesome.com/how-to-use/on-the-web/styling/power-transforms).

You can enable SVG in the admin settings page.

Notice that we use the icon's CSS class here, `fa-stroopwafel`, rather than its plain name.

*Shortcode*

`[icon name="stroopwafel"]`

Notice we're just using the _name_ of the icon here (`stroopwafel`), as you'd find in the [Icon Gallery](https://fontawesome.com/icons), not its CSS class (`fa-stroopwafel`).

By default, the `fas` style prefix (for the Solid style) will be used. To specify a different prefix, use the `prefix` attribute. This shows the same icon in the Light style (`fal`), available in Font Awesome Pro.

`[icon name="stroopwafel" prefix="fal"]`

= Configuring =

Activating this plugin will use a default configuration that loads the latest available version of Font Awesome using the webfont method from the Font Awesome Free CDN. In the simplest case, no additional configuration is required.

Here's what you can currently configure on the admin settings page:

- Version

  New releases of Font Awesome may include changes to the framework, or new icons. Framework changes might include fixes or enhancements to the JavaScript that runs in the browser to render SVG icons, for example.

  Once we release a new version of Font Awesome, a simple re-load of this plugin's admin page will show that new version being available in the version dropdown. Select the new version and save your settings.

  If for some reason you know you need to lock your Font Awesome version back to some other version that's available in the dropdown, just select it and save the settings.

- Method

  Options: `svg` or `webfont`

  Font Awesome 5 is available via two different implementation methods: Webfont with CSS, or SVG with JavaScript. If you're not sure of the difference, or don't know why you'd need to use SVG, then sticking with the default webfont method is probably easiest.

  There are some extra features available only in SVG/JS, though, like [Power Transforms](https://fontawesome.com/how-to-use/on-the-web/styling/power-transforms).

- Pseudo-elements (`::before`)

  Options: `require` or `forbid`

  [CSS Pseudo-elements](https://fontawesome.com/how-to-use/on-the-web/advanced/css-pseudo-elements) are a way to use CSS to add icons to a page when you can't otherwise control the page's content. You define a rule in your CSS with `::before`.

  Because pseudo-elements is just a feature of CSS, they work implicitly when you're using Font Awesome via the webfont method.

  However, it requires a little extra magic to get pseudo-elements working with SVG/JS. Sometimes, the performance trade-off isn't worth it. So when using SVG/JS, pseudo-elements are _not_ enabled by default, but you (or another client) can still `require` them. If you (or another client) feel sure that enabling pseudo-elements with SVG would be a disaster, then `forbid` can also be chosen to prevent said disaster.

- Version 4 Compatibility (aka "v4shims")

  Options: `require` or `forbid`

  There are quite a few icon name changes, and some changes in icon style, that occurred between Font Awesome major versions 4 and 5. It's best to update them to the version 5 names whenever possible. But to ease the upgrade path, version 4 shims are available.

  These are enabled by default, but can be disabled by selecting `forbid`.

- Use Pro

  [Font Awesome Pro](https://fontawesome.com/pro) gets you lots more icons, services, and support, and a steady stream of new icons when you have an active subscription. One of those Pro services is our Pro CDN. To load Font Awesome from the Pro CDN, including all the Pro icons, check "Use Pro" on the admin settings page.

  You'll need to first make sure you've configured your [allowed CDN domains in your fontawesome.com account settings](https://fontawesome.com/account/cdn).

- Remove Unregistered Clients

  "Unregistered clients" include any themes or plugins that attempt to load their own versions of Font Awesome using the normal means of loading JavaScripts or stylesheets in WordPress.

  If this plugin detects them, it will display them on the admin settings page. Checking the box to "Remove unregistered clients" just blocks their attempt to load a conflicting version of Font Awesome but does not otherwise interfere with their functioning. Most of the time, the version _you_ want to load will work just fine for them. So this option is intended to both _allow_ those unregistered clients to continue working as intended, while stopping them from breaking the rest of your icons.

  But, your mileage may vary. Since those clients haven't registered their requirements with this plugin, we can't be sure what they really require in order to work as intended. You could enable this option and then view the outputs of those clients. If they seem to look as expected, great. If not, try enabling the v4shims in case the unregistered client expects to be able to use version 4 icon names.

= Understanding Many Clients with Various Requirements =

Our hope is that other themes and plugins will use this framework to register their Font Awesome requirements, to ensure that icons are working across all of your posts and pages, including content from those themes or plugins.

On the admin settings page, you'll see the list of clients that have registered Font Awesome requirements. Think of yourself, the web site owner, as one of those clients. You set your Font Awesome requirements using the admin settings page. Any other clients--plugins or themes--use our API (under the hood) to register their requirements. You'll see all of them show up on the admin settings page, giving you a dashboard overview of what everyone's up to.

This plugin loads a version and configuration of Font Awesome that is conflict-free across all client requirements. Unless those requirements include a version constraint, it loads the latest available by default. So you can change the configuration options from the admin settings page to your heart's content, as long as you don't introduce conflicts with other clients' requirements. If you're the only client, then the world is your oyster.

For example, if you install a plugin that requires the svg method, then as long as you have that other plugin activated, you won't be able to require the webfont method without introducing a conflict between _your_ requirements and that other plugin's requirements. It's gotta be one or the other. If you try it, you'll be presented with a warning and some clear diagnostics in the admin settings page. And, by the way, it won't break the icons on your site if you try something and it introduces a conflict. This plugin will only lock and load a conflict-free configuration. Any conflicts are reported for you to troubleshoot on the admin settings page.

## Upgrading from the Old Plugin

If you've been a user of previous versions of this plugin, you'll eventually need to update your `[icon]` shortcodes to use Font Awesome 5 names instead of the out-dated Font Awesome 3 names used with the old plugin.

We've tried to smooth the upgrade path for you by keeping that shortcode compatible with Font Awesome 3 names you're used to, while magically transforming them into their Font Awesome 5 equivalents on the fly. You'll still need to change your icon shortcodes in pages, posts, and templates. But our upgrade magic gives you some cushion to take a more leisurely pace. We plan to remove version 3 naming support, and the magic, from this plugin in upcoming releases, though, so don't wait too long!

Note that this automatic translation of version 3 icon names to version 5 icon names will only occur where you've used the `[icon]` shortcode. If you've directly used `<i>` tags to reference version 3 icons, like `<i class="icon-calendar"></i>`, you'll need to manually revise those to use version 5 names.

== See Also ==

The [README](https://github.com/FortAwesome/wordpress-fontawesome/blob/master/README.md) on GitHub has some more details for WordPress site owners and developers.

The [API docs](https://fortawesome.github.io/wordpress-fontawesome/) for developers.

== Upgrade Notice ==

= 4.0.0-rc1 =

New plugin, replacing the old one. Font Awesome 3 icon names are being phased out, with a gradual upgrade path.

== Installation ==

= From the Plugins Directory in WordPress Admin =

From the "Add Plugins" page in WordPress admin:

1. Search the plugins directory by `author: fontawesome`

2. Click "Install" on this plugin in the search results

3. Click "Activate"

= Installing a Zip Archive =

1. Click Download on this plugin's directory entry to get the `.zip` file

2. On the "Add Plugins" page in WordPress admin, click "Upload Plugin" and choose that `.zip` file

= Access Font Awesome Settings =

Find the Font Awesome admin settings page either under the "Settings" menu on the left navigation panel in WordPress admin, or click "Settings" on the plugin's entry in the list of plugins on the "Plugins" page.

= Additional Setup for Font Awesome Pro =

[Font Awesome Pro](https://fontawesome.com/pro) subscribers who want to enable Pro icons on their WordPress sites, must first [add their allowed domains](https://fontawesome.com/account/domains) before enabling the "Use Pro" option on the plugin's settings page.

== Changelog ==

= 4.0.0-rc13 =

* Improve diagnostic output for unhandled errors.

= 4.0.0-rc12 =

* Bug fix: Fix loading of admin page assets when removal of unregistered clients is enabled. This bug has been
  hiding under a rock for a while. rc11 turned over the rock, and this bug scurried out.

= 4.0.0-rc11 =

* Bug fix: enqueue Font Awesome assets in admin and login areas, not just in the front end

= 4.0.0-rc10 =

* Attempt to fix a problem where the admin settings is sometimes being confused by unexpected output from the WordPress
  server. This condition has been reported when certain other plugins are active, and (possibly) when PHP output
  buffering works differently than this plugin expects.

= 4.0.0-rc9 =

* Enhance Font Awesome version 4 compatibility: add shimming of the version 4 font-family to enable version 4
  icons defined as pseudo-elements to be rendered via the version of Font Awesome 5 loaded by this plugin.

* Add warnings to the admin UI to indicate that using svg and pseudo-elements may result in slow performance,
  and that svg with pseudo-elements and version 4 compatibility is not supported at all.

= 4.0.0-rc8 =

* Remove dependence on third party libraries, eliminating a class of potential conflicts with other plugins.

* Breaking changes to the API used by theme and plugin developers (no breaking changes for WordPress site owners).
  See [commit log](https://github.com/FortAwesome/wordpress-fontawesome/commit/80f973b4a0f6ac09cbb4dc3ecc1ae2964ef01d32)

= 4.0.0-rc7 =

* Fix detection and removal of unregistered clients by changing the internal resource name this plugin uses to enqueue its resource.
  Change it to something unlikely to be used by other themes or plugins.

= 4.0.0-rc6 =

* Fix error when updating options on admin page: handle null releaseProviderStatus in cases where the release provider
  does not have to make a network request to update release metadata.

= 4.0.0-rc5 =

* Remove tilde character from JavaScript filenames to avoid violating some URL security rules

= 4.0.0-rc4 =

* Cache releases data in the WordPress database to reduce the number of server-side network requests.

* Ensure that releases data are always loaded fresh from fontawesome.com when loading the admin
  settings page so site owners can see when new versions are available.

* Add more specific error message on admin dashboard in the event that the WordPress server is not able to
  reach fontawesome.com in order to get an initial set of available releases data.

= 4.0.0-rc3 =

* Add missing v3 shim file

= 4.0.0-rc2 =

* Fix handling of v3 deprecation warnings in admin settings page

= 4.0.0-rc1 =

* Add admin settings page
* Lots of back end code changes to support theme and plugin developers
  * Package plugin as a composer dependency
  * API Changes
  * Comprehensive API documentation for developers
* Cache load specification unless client requirements change
* Handle changing configurations as new plugins or themes are activated, de-activated or updated
* Lock working load specifications and only rebuild when new requirements are conflict-free
* Load Font Awesome release version metadata from the fontawesome.com releases API

= 3.2.1 =

* Last stable version of the old plugin

