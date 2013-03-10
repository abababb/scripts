<?php
$file = '';
$html = '';
for ($i = 1; $i < 2; $i++) {
    $file .= file_get_contents("http://tieba.baidu.com/f/search/ures?kw=linux&qw=&rn=10&un=%CE%E1%C4%CB%C0%CFw&sm=1&sd=&ed=&pn=$i");
}
preg_match_all("/<span class=\"p_title\">(?s).*?<\/span>/", $file, $out, PREG_SET_ORDER);

foreach ($out as $val) {
    preg_match_all("/(?!a)*/", $val[0], $html, PREG_SET_ORDER);
    $result .= $html;
}

echo $result;
?>
