
<?php
class NSI extends CFormModel
{
public $ListFiles;
public $path;
public $count;

	public function GetAllListFilesNsi() 
	{
	// получение списка всех файлов в директории /site/download/nsi 
	$path=Yii::getPathOfAlias('webroot.download');
	$path1=str_replace("/", "\\", $path);
	$ListFiles=CFileHelper::FindFiles($path1);
	return $ListFiles;
	}

}