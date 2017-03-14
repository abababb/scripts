<?php

//数据库里有一组地点坐标，获取距离某地点X米以内的所有点

$lon = //your longitude
$lat = //your latitude
$miles = //your search radius

$query = "SELECT *, 
( 3959 * acos( cos( radians('$lat') ) * 
cos( radians( latitude ) ) * 
cos( radians( longitude ) - 
radians('$lon') ) + 
sin( radians('$lat') ) * 
sin( radians( latitude ) ) ) ) 
AS distance FROM yourtable HAVING distance < '$miles' ORDER BY distance ASC LIMIT 0, 5"
