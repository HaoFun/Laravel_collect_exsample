<?php
/**
 * Created by PhpStorm.
 * User: Hao
 * Date: 2017/8/24
 * Time: 下午 05:32
 */

//使用collect 將$orders依照日期計算當日銷售的總金額 (price * qty)
//groupBy() 方法根據給定的鍵替集合內的項目分組
$orders = [
    [
        'date' => '2017-02-26',
        'supplier' => 'ACME',
        'item_unit_price' => 799.0,
        'qty' => 1,
    ],
    [
        'date' => '2017-02-26',
        'supplier' => 'ACMEE',
        'item_unit_price' => 799.0,
        'qty' => 1,
    ],
    [
        'date' => '2017-01-01',
        'supplier' => 'ACME',
        'item_unit_price' => 599.0,
        'qty' => 2,
    ],
    [
        'date' => '2017-01-01',
        'supplier' => 'ACME',
        'item_unit_price' => 599.0,
        'qty' => 2,
    ],
    [
        'date' => '2017-01-02',
        'supplier' => 'ACMEE',
        'item_unit_price' => 599.0,
        'qty' => 2,
    ]
];

$result = collect($orders)->groupBy('date')->map(function($item) {
    return $item->sum(function ($item)
    {
        return $item['item_unit_price'] * $item['qty'];
    });
});
dump($result);