<?php
return [
    'name' => env("PLUGIN_NAME"),
    'slug' => env("PLUGIN_SLUG"), //should be in slug format, use the slugify function to be sure it's correct: slugify(env("PLUGIN_NAME"))
    'version' => '0.1',
    'namespace' => env("PLUGIN_NAMESPACE"),
];
