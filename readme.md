# Description

An empty plugin configured for Doctrine, Pimple, and Composer. Auto loader and Doctrine bootstrap setup

# Installation

Install dependencies by executing:

    composer install

Then place the plugin folder inside wp-content/plugins/ and activate in your dashboard.

Doctrine Models go in php/models, use this command to generate the database tables:

    php vendor/bin/doctrine orm:schema-tool:create

When adding classes, update the auto loader by running:

    composer update