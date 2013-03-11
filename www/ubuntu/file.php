<?php
require_once "header.php";

// get path and page number
$filename = $_GET['path'];
$page_num = $_GET['p'];
// echo $filename; //test

iconv_set_encoding("input_encoding", "GBK");

// count total line number and calculate how many pages we need
$lines = file($filename);
$line_num = count($lines);
$pages = ceil($line_num/200);
$previous_page = $page_num - 1;
$next_page = $page_num + 1;

// previous and next page
if ($previous_page == 0) {
	$previous = "<span class='nav1'>上一页</span>";
} else {
	$previous = "<span class='nav1'><a href=\"file.php?path=$filename&p=$previous_page\">上一页</a></span>";
}

if ($next_page == $pages + 1) {
	$next = "<span class='nav1'>下一页</span>";
}else {
	$next = "<span class='nav1'><a href=\"file.php?path=$filename&p=$next_page\">下一页</a></span>";
}

// top navigation bar
for ($p = 1; $p < $pages+1; $p++) {
	$page = "<span class='nav'><a href=\"file.php?path=$filename&p=$p\">$p </a></span>";
	echo $page;
}
echo "</br>".$previous.'&nbsp;'.$next."</br>";

// the content
for ($i=($page_num-1)*200;$i<min(200+($page_num-1)*200, $line_num+1);$i++) {
	$line = "<div class='content'>".iconv('GBK', 'UTF-8', $lines[$i])."</div>";
	echo $line;
}

// bottom navigation bar
echo "</br>".$previous.'&nbsp;'.$next."</br>";
for ($p = 1; $p < $pages+1; $p++) {
	$page = "<span class='nav'><a href=\"file.php?path=$filename&p=$p\">$p </a></span>";
	echo $page;
}
?>
