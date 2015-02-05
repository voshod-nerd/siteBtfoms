

<h2>Cписок врачей экспертов</h2>
<?php
$temp=$model->ReturnListDoctors();

//$i=1;

//echo count($temp);
//$t = $temp[0];
//echo $t[0];
echo "<table class='table table-condensed' cellspacing='0' ><tr>";
echo "<td>№</td><td><small>ФИО<small><td><small>Специальность<small></td><td><small>Место работы<small></td>";
echo "<td><small>Должность<small></td><td><small>Контактные телефоны<small></td></tr>";







 $i=1;
foreach ($temp as $key => $value) 
{
echo "<tr>";
echo ("<td>".$i."</td>"."<td><small>".$value["fam"]." ".$value["im"]." ".$value["ot"]."</small></td>"."<td><small>".$value["spec_names"]."</small></td>"."<td><small>".$value["organ_name"]."</small></td>"."<td><small>".$value["dolgnost"]."</small></td>"."<td><small>".$value["phone1"]."</small></td>");
echo "</tr>";	
$i++;
}
echo "</table>";

?>








	