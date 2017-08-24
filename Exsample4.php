<?php
/**
 * Created by PhpStorm.
 * User: Hao
 * Date: 2017/8/24
 * Time: 下午 04:43
 */

//使用collect $this_year 與 $last_year 整年月份差額
//zip()     方法將集合與給定陣列同樣索引的值合併在一起
//first()   方法回傳集合中，第一個通過給定測試的元素
//last()    方法回傳集合中，最後一個通過給定測試的元素
$last_year =
    [
        100.00,
        200.00,
        300.00,
        400.00,
        500.00,
        600.00,
        700.00,
        800.00,
        900.00,
        800.00,
        700.00,
        600.00
    ];
$this_year =
    [
        999.00,
        999.00,
        999.00,
        100.00,
        200.00,
        300.00,
        400.00,
        500.00,
        600.00,
        700.00,
        800.00,
        900.00,
    ];

$result = collect($this_year)->zip($last_year)->map(function ($data)
{
    return $data->first() - $data->last();
});   //如要計算總額 加上 ->sum() 即可
dump($result);