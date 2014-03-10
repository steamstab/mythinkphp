<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    	$Data = M('Data');
    	$this->data = $Data->select();
		$this->name = 'thinkphp'; //进行模板变量赋值
		$this->display();
    }
}