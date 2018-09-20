<table class="maintab">
	<thead>
	<tr>
		<td><?php echo Yii::t('app', 'login name');?></td>
		<td><?php echo Yii::t('app', 'state');?></td>
		<td><?php echo Yii::t('app', 'edit');?></td>
	</tr>
	</thead>
	<tbody>
		<?php foreach($list as $k=>$v){?>
		<tr>
			<td><?=$v->username?></td><td><?php if($v->state=="0"){echo Yii::t('app', 'normal');}else if($v->state=='4'){echo Yii::t('app', 'stop use');}?></td><td><a href="<?php echo Yii::$app->urlManager->createUrl(['rooter/edit']);?>"><?php echo Yii::t('app', 'edit');?></a></td>
		</tr>
		<?php }?>
	</tbody>
</table>