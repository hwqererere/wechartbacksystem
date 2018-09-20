<?php echo $this->render('topbar.php');?>
<div class="navbar">
	<?php echo $this->render('navbar.php');?>
</div>
<div class="main">
	<?php echo $this->render($page.'.php',$data)?>
</div>