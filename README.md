# itinerisltd/gathercontent-sync-command

[![Packagist Version](https://img.shields.io/packagist/v/itinerisltd/gathercontent-sync-command.svg)](https://packagist.org/packages/itinerisltd/gathercontent-sync-command)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/itinerisltd/gathercontent-sync-command.svg)](https://packagist.org/packages/itinerisltd/gathercontent-sync-command)
[![Packagist Downloads](https://img.shields.io/packagist/dt/itinerisltd/gathercontent-sync-command.svg)](https://packagist.org/packages/itinerisltd/gathercontent-sync-command)
[![GitHub License](https://img.shields.io/github/license/itinerisltd/gathercontent-sync-command.svg)](https://github.com/ItinerisLtd/gathercontent-sync-command/blob/master/LICENSE)
[![Hire Itineris](https://img.shields.io/badge/Hire-Itineris-ff69b4.svg)](https://www.itineris.co.uk/contact/)

<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->


- [Goal](#goal)
- [Minimum Requirements](#minimum-requirements)
- [Installation](#installation)
- [Usage](#usage)
  - [Pulling from GatherContent](#pulling-from-gathercontent)
- [FAQ](#faq)
  - [Will you add support for older PHP versions?](#will-you-add-support-for-older-php-versions)
  - [It looks awesome. Where can I find some more goodies like this?](#it-looks-awesome-where-can-i-find-some-more-goodies-like-this)
  - [This package isn't on wp.org. Where can I give a ⭐️⭐️⭐️⭐️⭐️ review?](#this-package-isnt-on-wporg-where-can-i-give-a-%EF%B8%8F%EF%B8%8F%EF%B8%8F%EF%B8%8F%EF%B8%8F-review)
- [Feedback](#feedback)
- [Change Log](#change-log)
- [Security](#security)
- [Credits](#credits)
- [License](#license)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->

## Goal

Sync WordPress and GatherContent by WP CLI.

## Minimum Requirements

- PHP v7.2
- WordPress v4.9.8
- WP CLI v1.5
- [GatherContent Plugin](https://wordpress.org/plugins/gathercontent-import/) v3.1.9
- Already pulled some posts from GatherContent

## Installation

**Work in progress: Not yet published to packagist.org**

```bash
$ wp package install itinerisltd/gathercontent-sync-command:@stable
```

## Usage

Before using the commands, you must first create `mappings` with the [GatherContent Plugin](https://wordpress.org/plugins/gathercontent-import/) via WP Dashboard, i.e: pull some content first.

### Pulling from GatherContent

```bash
# Find all imported posts and schedule pulling the newer versions from GatherContent
$ wp gather-content-sync pull
```

Requirements:
- some posts already imported
- a newer version exist on GatherContent
- [WP Ajax](https://codex.wordpress.org/AJAX_in_Plugins) is working

If all the requirements are met, the command schedules pulling events.

## FAQ

### Will you add support for older PHP versions?

Never! This plugin will only works on [actively supported PHP versions](https://secure.php.net/supported-versions.php).

Don't use it on **end of life** or **security fixes only** PHP versions.

### It looks awesome. Where can I find some more goodies like this?

- Articles on [Itineris' blog](https://www.itineris.co.uk/blog/)
- More projects on [Itineris' GitHub profile](https://github.com/itinerisltd)
- Follow [@itineris_ltd](https://twitter.com/itineris_ltd) and [@TangRufus](https://twitter.com/tangrufus) on Twitter
- Hire [Itineris](https://www.itineris.co.uk/services/) to build your next awesome site

### This package isn't on wp.org. Where can I give a ⭐️⭐️⭐️⭐️⭐️ review?

Thanks! Glad you like it. It's important to make my boss know somebody is using this project. Instead of giving reviews on wp.org, consider:

- tweet something good with mentioning [@itineris_ltd](https://twitter.com/itineris_ltd)
- star this [Github repo](https://github.com/ItinerisLtd/gathercontent-sync-command)
- watch this [Github repo](https://github.com/ItinerisLtd/gathercontent-sync-command)
- write blog posts
- submit pull requests
- [hire Itineris](https://www.itineris.co.uk/services/)

## Feedback

**Please provide feedback!** We want to make this library useful in as many projects as possible.
Please submit an [issue](https://github.com/ItinerisLtd/gathercontent-sync-command/issues/new) and point out what you do and don't like, or fork the project and make suggestions.
**No issue is too small.**

## Change Log

Please see [CHANGELOG](./CHANGELOG.md) for more information on what has changed recently.

## Security

If you discover any security related issues, please email hello@itineris.co.uk instead of using the issue tracker.

## Credits

[gathercontent-sync-command](https://github.com/ItinerisLtd/gathercontent-sync-command) is a [Itineris Limited](https://www.itineris.co.uk/) project created by [Tang Rufus](https://typist.tech).

Full list of contributors can be found [here](https://github.com/ItinerisLtd/gathercontent-sync-command/graphs/contributors).

## License

The MIT License (MIT). Please see [License File](./LICENSE) for more information.
