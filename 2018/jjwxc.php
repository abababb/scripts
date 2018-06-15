<?php
$a = file_get_contents('/tmp/dump.js');
$a = json_decode($a, true);
$content = array_map(function ($chap) {
    return $chap['chapterId'].' '.$chap['chapterName']."\n\n".str_replace('&lt;br&gt;', "\n", $chap['content']);
}, $a['downloadContent']);
$content = implode("\n\n\n", $content);

file_put_contents('/tmp/content.txt', $content);
