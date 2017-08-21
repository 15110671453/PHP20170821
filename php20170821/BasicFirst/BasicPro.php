<?php
/**
 * Created by PhpStorm.
 * User: admindyn
 * Date: 2017/8/21
 * Time: 上午11:46
 */

namespace BasicFirst;


class BasicPro
{
    public $title = 'default product';

    public $producerMainName = 'main name';

    public  $producerFirstName = 'first name';

    public $price = 0;

    public function __construct($title,$firstName,$mainName,$price){
        echo '"', __NAMESPACE__, '"';
        /*初始化功能集成到类中*/
        $this->title=$title;
        $this->producerFirstName=$firstName;
        $this->producerMainName=$mainName;
        $this->price=$price;



    }

    function getProducer(){

        return "{$this->producerFirstName}"."{$this->producerMainName}";

    }


}