<?php
/* Check https://emojipedia.org/ for emojis */
	

function ReplaceEmoji($text) {
	$emojis = array(
	':airplane_departure:' => 'ðŸ›«',
	':runner:' => 'ðŸƒ',
	':warning:' => 'âš ï¸',
	':airplane:' => 'âœˆï¸',
	':calendar:' => 'ðŸ“…',
	':dollar:' => 'ðŸ’µ',
	':information_source:' => 'â„¹ï¸',
	':heart_eyes:' => 'ðŸ˜',
	':white_check_mark:' => 'âœ…'
	);
	return str_replace(array_keys($emojis), array_values($emojis), $text);   
}
?>
