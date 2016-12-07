<?php

$jsonString = <<<JSON
{"userId":"3540611761","orderId":"1000110876","refundBatchId":"1000002007","rsaSign":"um6vNJm9zK87VBcrjHg0I2lklcBsAqEBQ7sOeytIg6gjL1HuO41AAOoOMCSK3rqUifmlKCFpVOObp4uhPIFGCRUOpKpL25CPEK1VQXFQ1HZxi+7pDeYCt0GkzKjaPmu8Mf8SNeubhIgiel4RDioxOu3P3zPG+6Z\/cuw5NNMcsng="}
JSON;

$array = json_decode($jsonString, true);

var_export($array);exit;
