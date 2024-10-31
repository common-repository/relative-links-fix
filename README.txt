=== Relative Links Fix ===
Contributors: achellios
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=99KW4AJ74J7E8&lc=US&item_name=Joshua%20Hill%20%28khaotica%2ecom%29&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted
Tags: Firefox, relative, links, paste, editor, absolute
Requires at least: 2.5
Tested up to: 2.9
Stable tag: 1.3

Corrects Firefox behavior in which pasting formatted content in the editor converts absolute URLs to relative URLs.

== Description ==

Wordpress bloggers will sometimes copy headlines from a Wordpress-generated homepage and paste them into the post-editing window.  In Firefox, this has the unfortunate result of converting absolute urls into relative ones.  For example, copying a headline from http://khaotica.com converts the permalink for this article:

http://khaotica.com/2009/12/firefox-relative-links-fix-wordpress.html

...to a relative link:

../2009/12/firefox-relative-links-fix-wordpress.html

This creates broken links when the post is viewed on the archive page and RSS feed. The links will also be broken for subscribers who receive posts via email.

Enter the Relative Links Fix. This plugin will replace relative urls with the proper absolute urls every time you save or publish a post. If you use Wordpress and can't shake those copy-paste habits, this is the plugin for you.

As always, donations are appreciated. I promise to spend them exclusively on soda (the creative fuel that powers developers everywhere).

== Installation ==

1. Upload `linksfix.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= How do I correct relative urls in my post? =

After the plugin is activated, simply publish or update the post.  The plugin automatically corrects relative urls in the post each time it is saved to the database.

== Changelog ==

= 1.3 =
* Corrected bug for Wordpress subdirectory

= 1.2 =
* Plugin now corrects img src links in addition to href links.

= 1.1 =
* Tested in WP 2.9; updated description and FAQ.

= 1.0 =
* Original release.

