# Avada Kedavra

Disables all WordPress shortcodes registered by active theme.

## Description

This simple WordPress plugin disables all WordPress shortcodes registered by a theme. Shortcode tags in your content will remain perfectly intact, just to demonstrate what a mess your site will look like when a theme tempts you to build your content based on shortcodes.

## Installation

If you don’t know how to install a plugin for WordPress, [here’s how](http://codex.wordpress.org/Managing_Plugins#Installing_Plugins).

## Frequently Asked Questions

### Will this plugin strip the shortcodes tags from my content?

No. Shortcode tags will not be stripped. They stay intact, but they will not be parsed for as long as the plugin remains active. Deactivate the plugin, your site will look as it did before.

### Does the plugin distinct between shortcodes registered by themes and other shortcodes?

Yes, it does. As of WordPress 4.0, shortcodes registered in WordPress’ core are:

* [audio]
* [caption]
* [embed]
* [gallery]
* [video]
* [playlist]

The plugin will look for those as well as for any shortcodes registered by any plugins upon `plugins_loaded` and whitelist all of those. It then will disable all other shortcodes registered after `plugins_loaded` upon `after_setup_theme`.

If you want to extend the whitelist, you pass additional tags to the array via a filter:

```php
add_filter( 'avada_kedavra_whitelisted_shotcodes', 'your_extend_function_here' );
```

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

### 0.4

* Added admin notices.
* Added early bailing if logged-in user cannot manage plugins.
* Added i18n and POT file.
* Added German language files.

### 0.3

* Whitelisted shortcodes registered by core and plugins. Good thinking, @GaryJones!
* Added filter `avada_kedavra_whitelisted_shotcodes` to customize whitelist.

### 0.2

* Added `PHP_INT_MAX` as priority, props @boiteaweb.
* Added filtering for core shortcodes.

### 0.1

* Initial release.