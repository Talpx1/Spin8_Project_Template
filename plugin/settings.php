<?php declare(strict_types=1);

use Spin8\WP\Settings\Setting;
use Spin8\WP\Settings\SettingsPage;
use Spin8\WP\Settings\SettingsSection;

//   #########################################################
//  ## In this file, you can register your plugin settings ##
// #########################################################

//! THIS API IS STILL WIP IN THE FRAMEWORK

SettingsPage::create('My Spin8 Plugin', 'spin8_settings_page')->withSettings(fn(SettingsPage $settings_page) => [

    SettingsSection::create('My Spin8 Settings Section', 'my_spin8_setting_section', $settings_page)->withSettings(function(SettingsSection $setting_section){
        Setting::create($setting_section, 'My Plugin Setting', 'my_plugin_setting');
    })

])->build();