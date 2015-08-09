<?php
// -----
// Part of the "Developer Override Email Address" plugin, created by lat9 (lat9@vinosdefrutastropicales.com)
// Copyright (C) 2015, Vinos de Frutas Tropicales.
//
// -----
// For testing purposes, if the following define is non-blank then it is used as the email address for *all*
// emails.  Put up a notice to let the admin know that this override is active, if set.
//
if (defined('DEVELOPER_OVERRIDE_EMAIL_ADDRESS') && DEVELOPER_OVERRIDE_EMAIL_ADDRESS != '') {
  $messageStack->add (sprintf (DOEA_DEVELOPER_EMAIL_OVERRIDE, DEVELOPER_OVERRIDE_EMAIL_ADDRESS));
  
}