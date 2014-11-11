# Avada Kedavra

Disables ALL WordPress shortcodes at once.

## Description

This simple WordPress plugin disables **all** WordPress shortcodes when activated. Shortcode tags in your content will remain perfectly intact, just to demonstrate what a mess your site will look like when a theme tempts you to build your content based on shortcodes.

## Installation

If you don’t know how to install a plugin for WordPress, [here’s how](http://codex.wordpress.org/Managing_Plugins#Installing_Plugins).

## Frequently Asked Questions

### Will this plugin strip the shortcodes tags from my content?

No. Shortcode tags will not be stripped. They stay intact, but they will not be parsed for as long as the plugin remains active. Deactivate the plugin, your site will look as it did before.

### Does the plugin distinct between WordPress core shortcodes and others registered by themes or plugins?

The plugin will just disable all the shortcodes, even the ones from WordPress core. According to [this Codex page](http://codex.wordpress.org/Shortcode), those are:

* [audio]
* [caption]
* [embed]
* [gallery]
* [video]

However, when you’re dealing with sample content from one of those real “premium” themes, those WordPress core shortcodes hardly add any significant measure of disorder to your already messed up posts and pages.

### What’s with the name of this plugin?

   1. Guess…
   2. “Avada kedavra” is the deadly spell used by Lord Voldemort and his followers in J.K. Rowling’s novel series of Harry Potter. I don’t claim any ownership on the term whatsoever.

## Screenshots

_Content consisting of shortcodes, imported via theme options by a “premium” theme…_
![screenshot-1.png](https://raw.githubusercontent.com/glueckpress/avada-kedavra/assets/screenshot-1.png)

---

_…sure looks nice in the front-end…_
![screenshot-2.png](https://raw.githubusercontent.com/glueckpress/avada-kedavra/assets/screenshot-2.png)

---

_…until the theme is disabled and all the shortcodes are gone. This plugin simulates what it looks like when shortcodes are not declared anymore._
![screenshot-3.png](https://raw.githubusercontent.com/glueckpress/avada-kedavra/assets/screenshot-3.png)

## Changelog

## 0.1

* Initial release.