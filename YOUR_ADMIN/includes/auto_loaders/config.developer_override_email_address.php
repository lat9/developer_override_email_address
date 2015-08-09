<?php
// -----
// Part of the "Developer Override Email Address" plugin, created by lat9 (lat9@vinosdefrutastropicales.com)
// Copyright (C) 2015, Vinos de Frutas Tropicales.
//
if (!defined('IS_ADMIN_FLAG')) {
  die('Illegal Access');
} 
$autoLoadConfig[200][] = array(
  'autoType'  => 'init_script',
  'loadFile'  => 'init_developer_override_email_address.php');