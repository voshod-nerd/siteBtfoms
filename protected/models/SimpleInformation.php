<?php
class SimpleInformation extends CFormModel
{
public $html;
public $dateAdd;

public function ReturnHtmlFromBase($value) 
{

$dsn="mysql:host=127.0.0.1:3306;dbname=sitedb";
$username = "root";
$password="";
$connection=new CDbConnection($dsn,$username,$password);
// устанавливаем соединение
// можно использовать конструкцию try…catch для перехвата возможных исключений
// открытие соединения

try {
$connection->active=true;

$sql="Select * from data where type='".$value."'";

$command=$connection->createCommand($sql);
// при необходимости SQL-выражение можно изменить:
// $command->text=$newSQL;
$dataReader=$command->query();


// получаем все строки разом в виде масси
//$rows=$dataReader->readAll();
$dt;
// используем foreach для построчного обхода данных
$i=0;
foreach($dataReader as $row) 
{ 
$dt=$row;
$i=count($row);
}


$connection->active=false;  // close connection

} catch (Exception $exc) { return $exc;}



$array = array($dt['text'],$dt['dateadd']);

return $array;
}
}


?>