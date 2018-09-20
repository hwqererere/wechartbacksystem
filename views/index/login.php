<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(['options'=>['class'=>'login-box']]); ?>

	<label><input type="text" name="username" placeholder="用户名"></label>
	<label><input type="password" name="password" placeholder="密码"></label>
	<label><button type="submit">登陆</button></label>
	<label><?php echo $msg?></label>

<?php ActiveForm::end(); ?>