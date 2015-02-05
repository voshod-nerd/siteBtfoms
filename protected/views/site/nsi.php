<?php
/* @var $this SiteController */
/* @var $model NSIForm */
/* @var $form CActiveForm  */


$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Список справочных материалов</h1>
<?php
$temp=$model->GetAllListFilesNsi();

$i=1;

//echo   '<a href ="\download\F005 Классификатор статусов оплаты услуги.xml">simple</a>'; 
foreach ($temp  as $key => $value) 
{
  //echo  '<a href="'.$value.'">'.utf8_decode(basename($value)).'</a><br>';
	echo  '<a href="'.Yii::app()->basePath.'/download/'.iconv ("CP1251", "UTF-8", basename($value)).'">'.iconv ("CP1251", "UTF-8", basename($value)).'</a><br>';
	
}

?>








	