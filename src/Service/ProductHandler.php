<?php

namespace App\Service;

class ProductHandler
{
    
    public function getSumMoney($products){

        $moneyArr = array_column($products,"price");
        $sumMoney = array_sum($moneyArr);
        return $sumMoney;
    }

    public function getSortData($products,$sortField,$sortType=SORT_DESC,$filterField=''){

        $sortkey = array_column($products,$sortField);
        array_multisort($sortkey,$sortType,$products);

        

        if($filterField){
            $sortfunc = function($arr)use($filterField){

                if($arr[$filterField] == "Dessert"){
                    return true;
                }else{
                    return false;
                }
            };
            $products = array_filter($products,$sortfunc);
        }
        return $products;
    }

    public function changeTimeFormat($products){

        $func = function($arr){
            return $arr['create_at'] = strtotime($arr['create_at']);
        };

        return array_map($func,$products);
    }
}

/* $products = [
    [
        'id' => 1,
        'name' => 'Coca-cola',
        'type' => 'Drinks',
        'price' => 10,
        'create_at' => '2021-04-20 10:00:00',
    ],
    [
        'id' => 2,
        'name' => 'Persi',
        'type' => 'Drinks',
        'price' => 5,
        'create_at' => '2021-04-21 09:00:00',
    ],
    [
        'id' => 3,
        'name' => 'Ham Sandwich',
        'type' => 'Sandwich',
        'price' => 45,
        'create_at' => '2021-04-20 19:00:00',
    ],
    [
        'id' => 4,
        'name' => 'Cup cake',
        'type' => 'Dessert',
        'price' => 35,
        'create_at' => '2021-04-18 08:45:00',
    ],
    [
        'id' => 5,
        'name' => 'New York Cheese Cake',
        'type' => 'Dessert',
        'price' => 40,
        'create_at' => '2021-04-19 14:38:00',
    ],
    [
        'id' => 6,
        'name' => 'Lemon Tea',
        'type' => 'Drinks',
        'price' => 8,
        'create_at' => '2021-04-04 19:23:00',
    ],
]; */
/* $a = new ProductHandler();
$res = $a->changeTimeFormat($products);
var_dump($res); */

