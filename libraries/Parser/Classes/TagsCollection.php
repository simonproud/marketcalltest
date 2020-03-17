<?php
namespace Parser\Classes;
/**
 * @author SimonProud
 * @license none
 * @version 0.1
 */

class TagsCollection
{
    private $items = [];

    public function addItem($obj) {
        $this->items[] = $obj;
    }

    public function countTagsByName(){
        $resultArray = [];
        foreach ($this->items as $item){
            if(array_key_exists($item->name, $resultArray)){
                $resultArray[$item->name] += 1;
            }else{
                $resultArray[$item->name] = 1;
            }
        }
        return $resultArray;
    }

}