<?php
namespace SwapSort;
/**
 * @author SimonProud
 * @license none
 * @version 0.1
 */
class SwapSort
{
    /**
     * Swap in $array elements by key $pos
     * $array[$pos] => $array[0]
     * $array[0] => $array[$pos]
     * @param $array
     * @param $pos
     */
    static function array_swap(&$array,$pos){
        $temp = $array[0];
        $array[0] = $array[$pos];
        $array[$pos] = $temp;
    }

    /**
     * Sort by element ASC uses array_swap
     * @param array $arr
     * @return array
     */
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