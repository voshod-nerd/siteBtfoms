<?php
class Polis extends CFormModel
{
public $typ;
public $sn;
public $number; 

public function rules() 
{
return array(
           // array('typ,number','required'),
            array('typ,number','numerical'),            
            );


}

public function GetInformationAboutPolis($num,$type,$snum) 
{


$dsn="mysql:host=192.168.0.10:3306;dbname=sitedb";
$username = "root";
$password="19800123";
$connection=new CDbConnection($dsn,$username,$password);
// устанавливаем соединение
// можно использовать конструкцию try…catch для перехвата возможных исключений
// открытие соединения
try {
$connection->active=true;



$type=1;
if  ($type==1) {$sql="SELECT  *  FROM POLIS WHERE PID in (select  pid from polis where ENP=".$num.")"; }
if  ($type==2) {$sql="SELECT * FROM POLIS WHERE PID in (select   pid from polis WHERE V_POLIS=2 AND N_POLIS=".$num.")"; }
if  ($type==3) {$sql="SELECT * FROM POLIS  WHERE PID in (select   pid from polis where (V_POLIS=1 AND  N_POLIS=".$num." AND  S_POLIS=".$snum." ))"; }



$command=$connection->createCommand($sql);
// при необходимости SQL-выражение можно изменить:
// $command->text=$newSQL;
$dataReader=$command->query();
$rows=$dataReader->readAll();

return $rows;
} 
catch (Exception $exc) { echo "<p>По вашему запросу ничего нет. Возможно Вы неправильно ввели данные или данные отсутвуют.<p>"; return $exc; }
}
}

