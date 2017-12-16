<?php
/* Check https://emojipedia.org/ for emojis */

function ReplaceEmoji($text) {
	$emojis = array(
	':airplane_departure:' => '🛫',
	':runner:' => '🏃',
	':warning:' => '⚠️',
	':airplane:' => '✈️',
	':calendar:' => '📆',
	':dollar:' => '💵',
	':euro:' => '💶',
	':information_source:' => 'ℹ️',
	':heart_eyes:' => '😍',
	':boom:' => '💥',
	':point_up:' => '☝️',
	':sunglasses:' => '😎',
	':eyes:' => '👀',
	':footprints:' => '👣',
	':bikini:' => '👙',
	':sun_with_face:' => '🌞',
	':sparkles:' => '✨',
	':fireworks:' => '🎆',
  	':rainbow:' => '🌈',
	':confetti_ball:' => '🎊',
  	':tada:' => '🎉',
	':loudspeaker:' => '📢',
	':statue_of_liberty:' => '🗽',
	':hearts:' => '♥️',
	':top:' => '🔝',
	':mag:' => '🔍',
	':bangbang:' => '‼️',
	':white_check_mark:' => '✅',
	':anger:' => '💢'
	);
	return str_replace(array_keys($emojis), array_values($emojis), $text);   
}
?>
