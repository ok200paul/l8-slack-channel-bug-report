# Laravel Slack Notification Channel Issue

This repo demonstrates that we can't use the to() function using the [Laravel Slack Notification Channel](https://github.com/laravel/slack-notification-channel) package to attempt to send a notification to "other" channels.

## Setup

- Clone the repo and run composer update, and run migrations & seeder.
- Add `SLACK_WEBHOOK_URL` value in .env > point it to a webhook URL that is part of a slack app you own. 
- Ensure the webhook URL does _not_ point to #general
- In terminal, run `php artisan test:go` 
- The notification that gets fired always sends the message to the "app" channel, and never the #general channel.
