<?php

return [
    'name' => env("PLUGIN_NAME"),
    'slug' => envOr("PLUGIN_SLUG", slugify(env("PLUGIN_NAME"))), //should be in slug format
    'namespace' => env("PLUGIN_NAMESPACE"),
    'version' => '0.1',
    'uri' => 'https://github.com/Talpx1/Spin8_Project_Template',
    'description' => 'An awesome plugin created with Spin8',
    'author' => 'Spin8',
    'author_uri' => 'https://github.com/Talpx1/Spin8_Project_Template',
    'license' => 'MIT',
    'license_uri' => 'https://opensource.org/license/mit/',
    'update_uri' => '',
];
