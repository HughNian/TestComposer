<?php
namespace controller;
use models\TestModel;
use helper\Utility;

class TestController
{
    public function hello($G = array())
    {
    	$userid = $G['userid'];
    	$username = $G['username'];
    	
    	$TestModel = new TestModel();
    	echo "hello ";
    	$TestModel->world();
    	echo " $userid $username";
    	echo "<br />";
    	echo Utility::getip();
    	echo "<br />";
		
    	//test vendor
    	$base = $_SERVER['DOCUMENT_ROOT'];
        $smarty = new \Smarty;
        $smarty->template_dir = $base . "/app/views/test/"; //ģ����Ŀ¼
        $smarty->left_delimiter = "<!--{"; //�󶨽�� 
		$smarty->right_delimiter = "}-->"; //�Ҷ���� 
		$smarty->assign('test','OK');
		$smarty->display('test.html');
    }
}