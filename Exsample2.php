<?php
/**
 * Created by PhpStorm.
 * User: Hao
 * Date: 2017/8/24
 * Time: 下午 04:22
 */

//使用collect 取$datas['order_products']['price']並進行加總
//flatten() 方法將多維集合轉為一維集合
//pluck() 方法取得所有集合中給定鍵的值
$datas = [[
    'id'            =>      1,
    'user_id'       =>      1,
    'number'        =>      '123456789',
    'discount'      =>      5,
    'order_products'=> [
        ['order_id'=>1,'product_id'=>1,'price'=>666.00],
        ['order_id'=>1,'product_id'=>1,'price'=>555.00],
        ['order_id'=>1,'product_id'=>1,'price'=>444.00],
        ['order_id'=>1,'product_id'=>1,'price'=>333.00],
        ['order_id'=>1,'product_id'=>1,'price'=>222.00],
        ['order_id'=>1,'product_id'=>1,'price'=>111.00],
    ]
]];

$result = collect($datas)->pluck('order_products.*.price')->flatten()->sum();
dump($result);