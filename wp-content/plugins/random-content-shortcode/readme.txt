=== Random Content Shortcode ===
Contributors: nico23
Donate link: https://nextgenthemes.com/donate/
Tags: random content, shortcode, random video, random
Requires PHP: 5.6
Requires at least: 4.5.0
Tested up to: 5.0.0
Stable tag: trunk
License: GPL 3.0
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Simple Shortcode for displaying random content on your site.

## Description ##

Check out the [plugins page](https://nextgenthemes.com/plugins/random-content-shortcode/) to see it in action.

Simple Shortcode for displaying random content on your site. Just wrap the shortcode arround the lines of content you want one to be displayed at random.

The following example will display one of the two videos or one of the two lines of text, empty lines will ignored.

<pre>[random_content]

A line with some text in it.

[arve url="https://youtu.be/b1rTZJxEnAQ" title="A Video Embedded with ARVE" maxwidth="350"]

<strong>A bold line.</strong>

[arve url="https://vimeo.com/124400795" title="A Video Embedded with ARVE" maxwidth="400"]

[/random_content]</pre>

By default the newline <code>\n</code> character is used to separate content. You can also choose another separator, do this if you have problems with the default or like to have random content with multiple lines on one piece like this:

<pre>[random_content separator="|||"]
Lorem ipsum dolor sit amet, consectetuer adipiscing elit.

Aenean commodo ligula eget dolor. Aenean massa.
|||
Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.

Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
|||
Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate

Aenean commodo ligula eget dolor. Aenean massa.
[/random_content]</pre>

Or have a compact single line like this:
<pre>[random_content separator="#"]One#Two#Three#Four[/random_content]</pre>

## Installation ##

Please refer to [codex.wordpress.org/Managing_Plugins#Automatic_Plugin_Installation](https://codex.wordpress.org/Managing_Plugins#Automatic_Plugin_Installation).

## Frequently Asked Questions ##

## Screenshots ##

## Changelog ##

### 2018-02-03 - 2.1.0 ###

* Fixed new version not working in sidebars.

### 2018-02-03 - 2.0.1 ###

* Namespace fix.

### 2018-02-02 - 2.0.0 ###

* Fix: Plugin not working correctly. Sometimes displaying nothing ...
* Improved: Added `[random_content]` shortcode because I read that dashes work but are not recommended. `[random-content]` still works for backwards compatibility but you should use `[random_content]`.
* Improved: Rewritten the the JavaScript and some PHP code. Removed jQuery dependancy.
* Improved: Loads script early and dequeue it in case its not needed.

### 2016-11-07 - 1.3.3 ###

* Fix php error on admin screen.

### 2016-11-05 - 1.3.1 ###

* Fix spelling error the `seperator` attribute is now `separator`.
* Fix plugin sometimes showing nothing.

### 1.2.1 - 2016-09-09 ###

* Fix plugin not working correctly.

### 1.1.0 - 2016-09-08 ###

* Rewrite some php and addind Javascript to make it work with chaching.

### 1.0.0 - 2016-09-07 ###

* Release

## Upgrade Notice ##
