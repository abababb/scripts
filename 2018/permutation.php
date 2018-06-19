<?php
$a = 'https://docs.qq.com/doc/BlDfuZ01dI9G3ePD2W2OqN7W0IzE1h3jjqxG3LWRcK1rTcgj0LvCTu16RUeH28xeIF4gWIDZ1';
$b = str_split($a);
$c = [];
foreach ($b as $key => $char) {
    if ($char === 'I' || $char === 'l') {
        $c[$key] = $char;
    }
}
$keys = array_keys($c);

$len = 5;
$arr = ['I', 'l'];
$queue = [];
for ($i = 0; $i < $len; $i++) {
    if (!isset($queue[$i]) || !$queue[$i]) {
        foreach ($arr as $appendChar) {
            $queue[$i + 1][] = $appendChar;
        }
    }
    foreach ($queue[$i] as $elem) {
        foreach ($arr as $appendChar) {
            $queue[$i + 1][] = $elem.$appendChar;
        }
    }
}
// var_export($queue[$len]);exit;

$lenQue = array_map(function ($permu) use ($a, $keys) {
    $str = $a;
    $charArr = str_split($permu);
    foreach ($keys as $key) {
        $str[$key] = array_pop($charArr);
    }
    return $str;
}, $queue[$len]);
var_export($lenQue);
