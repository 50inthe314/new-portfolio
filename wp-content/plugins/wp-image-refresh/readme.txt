=== WP IMAGE REFRESH ===
Contributors: girish.tiwari
Tags: image refresh, random image reload, image reload
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=sales@cueblocks.com&item_name=WP-Image-Refresh&item_number=wordpress-plugin&currency_code=USD
Requires at least: 3.0
Tested up to: 4.9.5
Stable tag: 1.9
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Simple Image reload Plugin

== Description ==
The WordPress Image Refresh Plug In enables you to show a different image every time the page loads. This is an easy to manage yet an awesome way to make your pages look fresh and new every time a user reloads them! The plug in uses short codes to make the frontend feature new images.

The plug in can be used to refresh any image such as the header image or any other on the page. The plug in works for posts, pages, widgets and sidebars.

Usage :

1. Download the latest version. 
2. Extract wp_image_refresh.zip to the /wp-content/plugins/ directory.
3. Login into the admin panel and activate the plugin through the Plugins menu in WordPress.
4. Now you can manage images from Wp Image Refresh section in the admin menu.
5. Place the shortcode [wp-image-refresh] where you want to show the random image, on templates, pages or posts.


Features:

1. Enables a Random image on every page reload.
2. Can be added to posts, pages, templates and in the widgets also.
3. You can show/hide image title by passing an argument "title=true". By default it is set to false. For e.g. [wp-image-refresh  title=true].
4. Image size can be set such as ( 'thumbnail', 'medium', 'full'). For e.g. [wp-image-refresh type="thumbnail"]. Default image type is "full". This option will not work if you have added the images using an earlier version of the Plugin.
5. A custom class can be set on the image. For e.g. [wp-image-refresh class="image-class"].
6. The image can be wrapped into div or span and also can assign custom class, by default this is set to none. For e.g. [wp-image-refresh container="div" container_class="image-class"].
7. Same as the above, the title can be wrapped into div or span and any custom class can be assigned to it. For e.g. [wp-image-refresh title_container="div" title_container_class="title-class"].
8. Images can be wrapped with an anchor tag by adding a valid URL with every image.
9. The target of an anchor tag can be defined by adding a target tag in the shortcode. For e.g. [wp-image-refresh target="_blank"]

Why Use The WP Image Refresh Plug In?

1. The page will feature a new custom image (header or others) every time the page loads.
2. Will not make the website slow.
3. Images displayed can be customized.
4. The Plug in uses short codes.
5. Can be used for posts, pages, templates and more.

== Installation ==
This section describes how to install the plugin and get it working.

Example.

1. Extract `wp_image_refresh.zip` to the `/wp-content/plugins/` directory
2. Activate the plugin through the \'Plugins\' menu in WordPress
3. Place <?php echo do_shortcode( '[wp-image-refresh]' ); ?> in your templates or use [wp-image-refresh] in your pages or posts

== Frequently Asked Questions ==

= How to display image in the template file? =

Place the shortcode [wp-image-refresh] where you want to show the random image, such as( templates, pages or posts).

= How can I add a custom class to the Image? =

Image class can be set on the image. For e.g. [wp-image-refresh class="image-class"]

= How can I insert the shortcode into the WordPress widgets/sidebars? =

Shortcode can be added in a sidebar using Apperance -> Widgets -> Text. By selecting the text widget you can just put the shortcode [wp-image-refresh].


= Multi-Site Support =

Works only for a single site. Multi-site support to be added in subsequent version of the plugin.


== Screenshots ==
1. This screen shot shows listing of slides in admin panel
2. This is the screen shot of adding slides

== Changelog ==
= 1.9 =
* Blank anchor tag issue fixed.

= 1.8 =
* Compatibility issues fixed

= 1.7 =
* Minor bug fixes

= 1.6 =
* Fixed image cache issue and anchor target issue

= 1.5 =
* Minor fixes

= 1.4 =
* Fixed title positioning issue with widgets and pages

= 1.3 =
* Added new option to wrap the image with an anchor tag by adding a valid URL with every image.

= 1.2 =
* Added custom options such as show/hide image title, image size, custom class, container.

= 1.1 =
* Removed deprecated php functions.

= 1.0  =
* Initial release

== Upgrade Notice ==
= 1.1 =
Removed deprecated php functions.

