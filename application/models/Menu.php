<?php
/**
 * Created by PhpStorm.
 * User: gerard
 * Date: 2016-10-20
 * Time: 1:43 PM
 */
class Menu extends MY_Model {
    // constructor
    function __construct() {
        parent::__construct();
    }

    function rules() {
        $config = [
            ['field'=>'id', 'label'=>'Menu code', 'rules'=> 'required|integer'],
            ['field'=>'name', 'label'=>'Item name', 'rules'=> 'required'],
            ['field'=>'description', 'label'=>'Item description', 'rules'=> 'required|max_l
ength[256]'],
            ['field'=>'price', 'label'=>'Item price', 'rules'=> 'required|decimal'],
            ['field'=>'picture', 'label'=>'Item picture', 'rules'=> 'required'],
            ['field'=>'category', 'label'=>'Menu category', 'rules'=> 'required']
        ];
        return $config;
    }


}