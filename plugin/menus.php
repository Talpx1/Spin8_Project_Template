<?php declare(strict_types=1);

use Spin8\WP\MenuPage;

//   #####################################################
//  ## In this file, you can register your admin menus ##
// #####################################################

MenuPage::create('Spin8', 'spin8_menu')->with(['message' => 'Hello Spin8!']);