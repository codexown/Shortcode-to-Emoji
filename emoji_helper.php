<?php
/* Check https://emojipedia.org/ for emojis */

function ReplaceEmoji($text) {
	$emojis = array(
	':airplane_departure:' => '🛫',
	':runner:' => '🏃',
	':warning:' => '⚠️',
	':airplane:' => '✈️',
	':calendar:' => '📅',
	':dollar:' => '💵',
	':information_source:' => 'ℹ️',
	':heart_eyes:' => '😍',
	':white_check_mark:' => '✅'
	);
	return str_replace(array_keys($emojis), array_values($emojis), $text);   
}
?>
