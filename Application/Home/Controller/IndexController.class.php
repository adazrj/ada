<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$this->display();
    }
    public function sendemail(){
    	echo sendMail("819591370@qq.com",I('contactName'), I('email'), I('comments'));
    }
   

}