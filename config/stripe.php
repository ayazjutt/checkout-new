<?php
/**
 * Stripe Configuration
 * - API KEY
 * - SECRET KEY
 */
return [
    "public_key" => env('STRIPE_KEY' ),
    "secret_key" => env('STRIPE_SECRET')
];
