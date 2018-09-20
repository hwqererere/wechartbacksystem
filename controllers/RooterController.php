<?php

namespace app\controllers;
use app\models\login;


class RooterController extends \yii\web\Controller
{
	public function init(){
		if($_SESSION['a_name']!='root'){
			return $this->redirect(['/index/index']);
		}
	}
	public function actionIndex()
	{
		
		$result=Login::findAll("1=1");
		$data=[
			'page'=>'rooterManage',
			'data'=>[
				'list'=>$result]
			];
		return $this->render('../index/index.php',$data);
	}
	
	public function actionEdit(){
		
	}
}
