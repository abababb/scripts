<?php
$url = 'bainuo://component?url=http%3A%2F%2Fu.nuomi.com%2Fredirect%3FappId%3D10113%26tpUrl%3Dhttp%253A%252F%252F608905db2664.sn.mynetname.net%253A8091%252Fwx%252Findex%26openAction%3D1%26channelId%3D1';

$parsed_url = parse_url($url);

$query = urldecode($parsed_url['query']);

$query .= '&needLogin=1';
$query = 'http://nmplustest.nuomi.com/redirect?appId=10113&tpUrl=http%3A%2F%2F608905db2664.sn.mynetname.net%3A8091%2Fwx%2Findex&openAction=1&channelId=1&needLogin=1';

$query = urlencode($query);

$url = 'bainuo://component?url='.$query;


$url = 'bainuo://component?url=http%3A%2F%2Fnmplustest.nuomi.com%2Fredirect%3FappId%3D10113%26tpUrl%3Dhttp%253A%252F%252F608905db2664.sn.mynetname.net%253A8091%252Fnuomi%252Findex%26openAction%3D1%26channelId%3D1%26needLogin%3D1';


$a = <<<ORDER
array (3) 
 · [errno]: int 0
 · [msg]: string (7) "success"
 · [data]: array (2) 
 ·  · [orderId]: int 1000095887
 ·  · [tpOrderId]: string (1) "1"
ORDER;

$b = <<<MOBILE
array (7) 
 · [errno]: int 0
 · [errmsg]: string (2) "成功"
 · [msg]: string (2) "成功"
 · [data]: array (2) 
 ·  · [mobile]: string (11) "13886075012"
 ·  · [siteId]: int 3540611761
 · [timestamp]: int 1476329508
 · [cached]: int 0
 · [serverlogid]: string (10) "1908580895"

MOBILE;
