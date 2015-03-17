=== Carousel Slider ===
Contributors: sayful
Tags:  carousel, carousel slider, image carousel, slider, responsive slider,
Requires at least: 3.0
Tested up to: 4.1
Stable tag: 1.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Touch enabled wordpress plugin that lets you create beautiful responsive carousel slider.

== Description ==

Fully written in jQuery, touch enabled wordpress plugin based on [OWL Carousel](http://www.owlgraphic.com/owlcarousel/) that lets you create beautiful responsive carousel slider.

= Features =

1. Fully Responsive 
2. Unlimited Carousel slider
3. Supported in all major browsers
4. Touch and Grab enabled
5. CSS3 3D Acceleration
6. Multiple carousel on single page
7. Light as a feather


= Single Carousel Slider for a site =

Just create your Carousel slider from the Carousels menu & paste the following shortcode where you want to display this carousel slider:

`[all-carousels]`

Or you can paste following to add carousel slider to your theme:

`<?php echo do_shortcode('[all-carousels]'); ?>`

= Multiple Carousel Slider for a site =

If you want to use multiple carousel slider at diffrent page or post click on "Add Carousel Slider" button from WordPress visual editor [view screenshot](http://s.w.org/plugins/carousel-slider/screenshot-3.png?r=943201) and inside `img_link=''` put you image link and inside href="" put post, page or media link.

or write the following code:

`[carousel id="unique-id"][item href="" img_link=""][/carousel]`

To change default options, you can add the following attributes:

`[carousel id="" items="" itemsDesktop="" itemsDesktopSmall="" itemsTablet="" itemsMobile="" slideSpeed="" paginationSpeed="" rewindSpeed="" singleItem="false|true" autoPlay="false|true" stopOnHover="false|true" navigation="false|true" scrollPerPage="false|true" pagination="false|true" paginationNumbers="false|true" transitionStyle="fade|backSlide|goDown|scaleUp"][/carousel]`

Repeat `[item href="" img_link=""]` as many image as you want. Inside `img_link=''` put you image link like 

`img_link='http://lorempixel.com/400/200/sports/1'` and inside `href=""` put post, page or media link

To get image from your WordPress Media, go to Media >> Library and click on image which one you want to insert and copy URL and paste it into `img_link=''` like this:

`img_link='http://localhost/wp/plugins/wp-content/uploads/2014/06/vlcsnap-2014-06-08-14h31m10s128.png'`

= Here is a complete example of code of carousel slider with ten image: =

`[carousel id="carousel-1"][item href="http://sayful.net" img_link="http://lorempixel.com/400/200/sports/1"][item img_link="http://lorempixel.com/400/200/sports/2"][item img_link="http://lorempixel.com/400/200/sports/3"][item img_link="http://lorempixel.com/400/200/sports/4"][item img_link="http://lorempixel.com/400/200/sports/5"][item img_link="http://lorempixel.com/400/200/sports/6"][item img_link="http://lorempixel.com/400/200/sports/7"][item img_link="http://lorempixel.com/400/200/sports/8"][item img_link="http://lorempixel.com/400/200/sports/9"][item img_link="http://lorempixel.com/400/200/sports/10"][/carousel]`


== Installation ==

Installing the plugins is just like installing other WordPress plugins. If you don't know how to install plugins, please review the three options below:

= Install by Search =

* From your WordPress dashboard, choose 'Add New' under the 'Plugins' category.
* Search for 'Carousel Slider' a plugin will come called 'Carousel Slider by Sayful Islam' and Click 'Install Now' and confirm your installation by clicking 'ok'
* The plugin will download and install. Just click 'Activate Plugin' to activate it.

= Install by ZIP File =

* From your WordPress dashboard, choose 'Add New' under the 'Plugins' category.
* Select 'Upload' from the set of links at the top of the page (the second link)
* From here, browse for the zip file included in your plugin titled 'carousel-slider.zip' and click the 'Install Now' button
* Once installation is complete, activate the plugin to enable its features.

= Install by FTP =

* Find the directory titles 'carousel-slider' and upload it and all files within to the plugins directory of your WordPress install (WORDPRESS-DIRECTORY/wp-content/plugins/) [e.g. www.yourdomain.com/wp-content/plugins/]
* From your WordPress dashboard, choose 'Installed Plugins' option under the 'Plugins' category
* Locate the newly added plugin and click on the \'Activate\' link to enable its features.


== Frequently Asked Questions ==
Do you have questions or issues with Carousel Slider? [Ask for support here](http://wordpress.org/support/plugin/carousel-slider)

== Screenshots ==

1. Screenshot of Carousels custom post.
2. Screenshot of Options page.
3. Screenshot of Carousel shortcode button.
4. Screenshot of Carousel Front-end Example.

== Changelog ==

= version 1.3 =

* Tested with WordPress version 4.1

= version 1.2 =

* Fixed bugs regarding shortcode.
* Added href="" to add link to post, page or media
* Translation ready

= version 1.1 =

* Fixed some bugs.

= version 1.0 =

* Implementation of basic functionality.

== Upgrade Notice ==
Upgrade the plugin to get more features and better performance.

== CREDIT ==

1.This plugin was developed by [Sayful Islam](http://sayful.net)
1.Some open source framework have been used. For detail [click here](http://owlgraphic.com/owlcarousel/)

== CONTACT ==

[Sayful Islam](http://sayful1.wordpress.com/100-2/)