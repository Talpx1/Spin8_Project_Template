<?php
return [
    'name' => slugify(env("PLUGIN_NAME")), //should be in slug format, use the slugify function to be sure it's correct
    'version' => '0.1',
    'namespace' => env("PLUGIN_NAMESPACE"),
];
