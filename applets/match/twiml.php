<?php
$body = isset($_REQUEST['Body'])? trim($_REQUEST['Body']) : null;
$body = strtolower($body);

$invalid_option = AppletInstance::getDropZoneUrl('invalid-option');
$keys = AppletInstance::getValue('keys[]');
$responses = AppletInstance::getDropZoneUrl('responses[]');
$menu_items = AppletInstance::assocKeyValueCombine($keys, $responses, 'strtolower');

$response = new Response();

if(array_key_exists($body, $menu_items) && !empty($menu_items[$body]))
	$response->addRedirect($menu_items[$body]);
elseif(!empty($invalid_option))
	$response->addRedirect($invalid_option);

$response->Respond();