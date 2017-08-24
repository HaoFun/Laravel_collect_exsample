<?php
/**
 * Created by PhpStorm.
 * User: Hao
 * Date: 2017/8/24
 * Time: 下午 04:39
 */

//使用collect 將$messages格式 轉為 $exsample格式

$messages = [
    'Should be working now for all Providers.',
    'If you see one where spaces are in the title let me know.',
    'But there should not have blank in the key of config or .env file.'
];

$exsample = [
    '- Should be working now for all Providers. \n',
    '- If you see one where spaces are in the title let me know. \n',
    '- But there should not have blank in the key of config or .env file.'
];

$result = collect($messages)->map(function ($message){
    return '- '.$message;
})->implode("\n");
dump($result);