<div class="topbar">
	<a href="<?php echo Yii::$app->urlManager->createUrl(['index/loginout']);?>"><?php echo Yii::t('app', 'loginOut');?></a>
	<a><?php echo $_SESSION['a_name'];?></a>
	
</div>