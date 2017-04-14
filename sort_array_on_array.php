<?php

/**
 * @author Tanseer
 * @copyright 2017
 */

$srcArray = array(
    array('id'=>1,'name'=>'abc'),
    array('id'=>2,'name'=>'abc'),
    array('id'=>3,'name'=>'abc'),
    array('id'=>4,'name'=>'abc'),
    array('id'=>5,'name'=>'abc'),
    array('id'=>6,'name'=>'abc')
);
$sortArray = array(2,4,1,3);           // all id (can be any value of array) on which we want to sort
$res = array();
foreach( $sortArray as $sortId ) {
   foreach( $srcArray as $item ) {
      if( trim($item->device_name) == trim($sortId) ) {
         $res[] = $item;
         break;
      }
   }
}
