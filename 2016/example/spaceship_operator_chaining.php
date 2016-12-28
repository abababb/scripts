<?php

$testArray = array(
    array(
        'high' => '3',//高优先级条件
        'low' => '30',//低优先级条件
    ),
    array(
        'high' => '3',
        'low' => '20',
    ),
    array(
        'high' => '2',
        'low' => '40',
    ),
    array(
        'high' => '2',
        'low' => '10',
    ),
    array(
        'high' => '1',
        'low' => '8',
    ),
    array(
        'high' => '1',
        'low' => '58',
    ),
);

//先按高优先级条件从低到高，再按低优先级条件从高到低排序
usort($testArray, function ($item1, $item2) {
    //return $item1['high'] <=> $item2['high'] ?: $item2['low'] <=> $item1['low'];
    return [$item1['high'], $item2['low']] <=> [$item2['high'], $item1['low']];
});

var_export($testArray);exit;

$sortResult = 
    array (
        0 => 
        array (
            'high' => '1',
            'low' => '58',
        ),
        1 => 
        array (
            'high' => '1',
            'low' => '8',
        ),
        2 => 
        array (
            'high' => '2',
            'low' => '40',
        ),
        3 => 
        array (
            'high' => '2',
            'low' => '10',
        ),
        4 => 
        array (
            'high' => '3',
            'low' => '30',
        ),
        5 => 
        array (
            'high' => '3',
            'low' => '20',
        ),
    )
    ;
