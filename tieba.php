<?php

header("content-Type:text/html; charset=gbk");

$file = '';
$html = '';
$result = '';
$keyword = 'linux'; // 贴吧名称
$author = '荆棘的思念'; // 作者
$kw = urlencode(mb_convert_encoding($keyword, 'gb2312', 'utf-8'));
$un = urlencode(mb_convert_encoding($author, 'gb2312', 'utf-8'));


// 利用百度高级搜索抓取作者在某贴吧的发言
for ($i = 1; $i < 3; $i++) {
	$url = "http://tieba.baidu.com/f/search/ures?kw=$kw&qw=&rn=10&un=$un&sm=1&sd=&ed=&pn=$i";
	$file .= file_get_contents("$url");
}
preg_match_all("/<span class=\"p_title\">(?s).*?<\/span>/", $file, $out, PREG_SET_ORDER);

// 去掉回复，仅保留主题贴
$pattern = '#/p/#';
$replacement = 'http://tieba.baidu.com/p/';
foreach ($out as $val) {
	preg_match_all("/:/", $val[0], $html);
	if ($html[0][0] == '') {
		echo preg_replace($pattern, $replacement, $val[0]), "</br>";
	}
}


?>
