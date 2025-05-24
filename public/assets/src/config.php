<?php

// charset
header('Content-Type: text/html; charset=UTF-8');

// timezone
date_default_timezone_set('Asia/Tokyo');

// domain
const DOMAIN = '';

// site category
// const SITE_CATEGORY = '';

// site name
const SITE_NAME = 'きたむらミュージックスクール';

// keywords
const KEYWORDS = '';

// description
const DESCRIPTION = '';

// established
// const EST = '';

// tel
// const TEL = '';

// mail
// const MAIL = '';

// assets path
define('ASSETS', $_SERVER['DOCUMENT_ROOT'] . '/assets');
define('SERVER_NAME', 'https://' . $_SERVER['SERVER_NAME']);

// nav menu
global $navMenu;
$navMenu = [
  'index' => 'ホーム',
  'plan' => '料金',
  'blog' => 'ブログ',
  'achievement' => '卒業実績'
];

require_once 'functions.php';
