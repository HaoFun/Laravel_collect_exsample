<?php
/**
 * Created by PhpStorm.
 * User: Hao
 * Date: 2017/8/24
 * Time: 下午 04:16
 */

//使用collect 取$datas內每個元素中最後一個底線後的字元
//map() 方法遍歷整個集合並將每一個數值傳入給定的回呼函式。回呼函式可以任意修改並回傳項目，於是形成修改過的項目組成的新集合
$datas = [
    'exsample_A_1',
    'exsample_B_2',
    '3',
    'exsample_4'
];

$result = collect($datas)->map(function ($data) {
    return collect(explode('_',$data))->last();
});
dump($result);
?>