# WP Tweaks

## Installation

`composer require webdeveric/wp-tweaks`

## Features

### Common

- Remove WP logo from admin bar
- Remove the `generator` meta tag
- Set `$_SERVER['HTTPS'] = 'on'` if behind a load balancer and `https` is used

### Admin

- Updated footer text
- Always show the current version of WP in the footer, even if there is an upgrade available
- Show a notice if the permissions of `wp-content` are `0777`
- Show a notice if there is a problem with your upload directory permissions

### Login

- header link goes to your `url`
- header title is your site name
