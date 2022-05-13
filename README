# snipeit-consumable-checkout

## description
this simple API is used to checkout a consumable from SnipeIT by opening a web page without authentication.

## installation
1. pull this repo to your web server running php and composer
1. `composer install`
1. `cp .env.example .env`
1. adapt the values in `.env`

## usage
the API only has one HTTP endpoint : `/checkout`. the parameter `consumable_id` is mandatory. there is no error handling.

so open the following URL to trigger the checkout of consumable with ID 10, it will be assigned to the snipeit user that has the ID referenced in the `.env` file in `SNIPE_IT_CHECKOUT_USER_ID` :

    http://yourhostname.net/checkout.php?consumable_id=10