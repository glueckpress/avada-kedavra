# Avada Kedavra

Disables all WordPress shortcodes registered from themes and plugins.

## Description

This simple WordPress plugin disables all WordPress shortcodes registered from external plugins and themes when activated. Shortcode tags in your content will remain perfectly intact, just to demonstrate what a mess your site will look like when a theme tempts you to build your content based on shortcodes.

## Installation

If you don’t know how to install a plugin for WordPress, [here’s how](http://codex.wordpress.org/Managing_Plugins#Installing_Plugins).

## Frequently Asked Questions

### Will this plugin strip the shortcodes tags from my content?

No. Shortcode tags will not be stripped. They stay intact, but they will not be parsed for as long as the plugin remains active. Deactivate the plugin, your site will look as it did before.

### Does the plugin distinct between WordPress core shortcodes and others registered by themes or plugins?

Yes, it does now. As of WordPress 4.0, shortcodes registered in WordPress’ core are:

* [audio]
* [caption]
* [embed]
* [gallery]
* [video]
* [playlist]

The plugin will filter those out and disable all other shortcodes registered externally.

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

## 0.2

* Added `PHP_INT_MAX` as priority, props @boiteaweb.
* Added filtering for core shortcodes.

## 0.1

* Initial release.