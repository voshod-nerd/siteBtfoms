
<?php
class ListDoctors extends CFormModel
{

public function ReturnListDoctors() 
{
// установка параметров соединения 
$dsn="mysql:host=192.168.0.10;dbname=sitedb";
$username = "root";
$password="19800123";
$connection=new CDbConnection($dsn,$username,$password);
// устанавливаем соединение
// можно использовать конструкцию try…catch для перехвата возможных исключений
// открытие соединения
try {
$connection->active=true;
$sql="SELECT * FROM sitedb.nsi_experts";
$command=$connection->createCommand($sql);
// при необходимости SQL-выражение можно изменить:
// $command->text=$newSQL;
$dataReader=$command->query();
$rows=$dataReader->readAll();

$connection->active=false;// close connection

} catch (Exception $exc) 
	{
echo $exc;	
	return $exc;
	}

return $rows;
}
}


?>
