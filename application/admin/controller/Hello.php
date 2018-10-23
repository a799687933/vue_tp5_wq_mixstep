<?php


namespace app\admin\controller;

use think\Request;
use think\Db;
use think\Controller;
//use app\common\adapter\AuthAdapter;
use app\common\controller\Common;
use think\Loader;


class Hello extends Common
{
    public function  index()
    {
        //Loader::import('weiqing\weiqing', EXTEND_PATH);
       //$obj = new \weiqing\weiqing();
         
       //$obj->test();
    	$data['SYSTEM_NAME']=111;
    // return $this->success('登录成功');
     //$this->redirect('https://www.baidu.com/');
        return resultArray(['data' => $data]);
    	//var_dump(66);die;
         // echo'666';
        return $this->fetch('hello/index');
    }
}
?>