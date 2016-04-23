<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'FnCoDing';
?>


<?php
$route1=  Yii::$app->urlManager->createUrl("test/test1");
?>
<a href="<?=$route1 ?>">ไปที่ test1</a>
<br>

<?php
$route2=  Yii::$app->urlManager->createAbsoluteUrl(["test/test2", 'name'=>"yossiri"]);
?>
<a href="<?=$route2 ?>">ไปที่ test2</a>
<br>

<?=
Html::a('ลิ้งไปที่ 3',['test/test1']);        
?>

<br>
