<?php
/**
 * Created by PhpStorm.
 * User: Hao
 * Date: 2017/8/24
 * Time: 下午 05:27
 */

//使用collect 將$employees格式 轉為 $lookup格式
//reduce() 方法將集合縮減到單一數值，該方法會將每次迭代的結果傳入到下一次迭代
$employees = [
    [
        'name' => 'Hao',
        'email' => 'hao@gmail.com',
        'company' => 'Hao Company'
    ],
    [
        'name' => 'Tone',
        'email' => 'tone@gmail.com',
        'company' => 'Tone Company'
    ]
];
$lookup = [
    'Hao' => 'hao@gmail.com',
    'Tone' => 'tone@gmail.com'
];

$result = collect($employees)->reduce(function ($emailLookup,$employee) {
    $emailLookup[$employee['name']] = $employee['email'];
    return $emailLookup;
});
dump($result);
