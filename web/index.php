<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../config/web.php';

$application=new yii\web\Application($config);
$application->language=isset(\Yii::$app->session['language'])?\Yii::$app->session['language']:'cn';
$application->run();
// (new yii\web\Application($config))->run();