<?php
namespace SwapSort;

class SwapSort
{

    static function array_swap(&$array,$pos){
        $temp = $array[0];
        $array[0] = $array[$pos];
        $array[$pos] = $temp;
    }

    static function sort(&$arr)
    {
        $i = 0;
        while($i < count($arr)){
            foreach ($arr as $key=>$item){
                if($item > $arr[0] && count($arr) - $i > $key){
                    static::array_swap($arr, $key);
                }
            }
            static::array_swap($arr, count($arr) - $i-1);
            $i++;
        }

        return $arr;
    }

}