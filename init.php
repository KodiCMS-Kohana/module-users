<?php defined('SYSPATH') or die('No direct access allowed.');

// Для проверки одноразовых ссылок
Route::set('reflink', 'reflink/<code>(<suffix>)', array(
	'code' => '[A-Za-z0-9]+',
	'suffix' => URL_SUFFIX
))
->defaults(array(
	'controller' => 'reflink',
	'action' => 'index'
));


/*
* Set current lang
*/
Observer::observe('modules::after_load', function() {
	I18n::lang(Model_User::locale());
});