<?php

namespace app\controllers;
use app\models\login;
use yii\web\Session;
class IndexController extends \yii\web\Controller
{
	public $enableCsrfValidation=false;//放弃yii表单验证
	public function init(){
	
	}
    public function actionIndex(){
		$redire=false;
		if(isset($_SESSION['a_id'])){
			if($_SESSION['a_id']!=""){
				$redire=true;
			}
		}
		if($redire){
			return $this->render('index.php',['page'=>'dashBoard','data'=>[]]);
		}else{
			return $this->redirect(['/index/login']);
		}       
    }
	
	public function actionLogin(){
		$msg="";
		if(isset($_POST["username"]) && isset($_POST["password"])){
			if($_POST["password"]!="" && $_POST["username"]!=""){
				$where='username="'.$_POST["username"].'" and password="'.md5(md5($_POST["password"])).'" and state=0';				
				$result=Login::find()->where($where)->one();
				if($result){					
					$_SESSION['a_id']=$result->id;
					$_SESSION['a_name']=$result->username;		
					return $this->redirect(['/index',['page'=>'dashBoard','data'=>[]]]);
				}else{
					$msg="login failed";
				}
			}
		}
		return $this->render('login.php',['msg'=>$msg]);
	}
	public function actionLoginout(){
		unset($_SESSION['a_id']);
		unset($_SESSION['a_name']);
		return $this->redirect(['/index/login']);
	}
}
