<?php
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

function ReplaceEmoji(array $replace, $subject) {
	return str_replace(array_keys($replace), array_values($replace), $subject);   
}
?>