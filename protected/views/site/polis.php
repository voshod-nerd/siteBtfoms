

<?php 

//echo $obr;

if ($obr==1) 
{




$tp=$model->GetInformationAboutPolis($model->number,$model->typ,$model->sn);





if ( count($tp)>0) {
 
echo  "<p>Результат Вашего запроса</p>";
foreach ($tp as $key => $value) 
{
echo "<p>Срок дейсвтия полиса с ";
echo $value["DATE_BEG"]; 
echo " по "; 
echo  $value["DATE_END"]."</p>";
echo "<p>Единый номер полиса: ".$value["idPolis"]."</p>";
echo "<p>номер полиса (врем свид) страховой организации: ".$value["N_POLIS"]."</p>";
echo "<p>Дата прибытия полиса на территорию: ".date("dd-mm-yyyy",$value["DATE_E"])."<p>";   
break; 
}
} else {echo "Просим извинения но по вашему запросу отсутвует информация";}

}
if ($obr==3) 
{

echo  "<p>Просим извинения но по вашему запросу отсутвует информация</p>";


}

if ($obr==2) 
{

echo " <p class=\"text_head\"> Информация обновлена  на ".$timeUpdate." </p>";
echo <<<HERE
<script>
        /**
            * Функция Скрывает/Показывает блок 
            * @author ox2.ru дизайн студия
            **/
            function showHide(element_id) {

                    var obj = document.getElementById("null");  
                    var obj1 = document.getElementById("old_pol");  
                    var obj2 = document.getElementById("vrem_svid");
                    var obj3 = document.getElementById("ENP");
                    var obj4 = document.getElementById("polisType");


            	if (element_id=="old_pol") 
            		{
            		obj1.style.display="block";
            		obj2.style.display="none";
            		obj3.style.display="none";
                    obj4.value="3";
            	    } 
            	    if (element_id=="vrem_svid") 
            		{
            		obj1.style.display="none";
            		obj2.style.display="block";
            		obj3.style.display="none";
                    obj4.value="2";
            	    } 
            	    if (element_id=="ENP") 
            		{
            		obj1.style.display="none";
            		obj2.style.display="none";
            		obj3.style.display="block";
                     obj4.value="1";
            	    } 
                 if (element_id=="null") 
            		{
            		obj1.style.display="none";
            		obj2.style.display="none";
            		obj3.style.display="none";
                    obj4.value="";
            	    } 
              

            }   
      </script>

<form id="form" name="polis" method="post" action="index.php?r=Site/Polis" >
<fieldset>    
<select id="ComboBox" onchange="showHide(this.value)" > 
<option value='null'>Выберите вид полиса</option> 
<option value='old_pol' >Полис старого образца</option> 
<option value='vrem_svid'>Временное свидетельство</option>
<option value='ENP'>Полис нового образца</option>
</select>
<br>     
<br>
<br>

<div id="old_pol" style="display:none;">
<p>Введите серию и номер полиса </p>  
<label><input type="text" name="polis[sn]"/></label>
<label><input type="text" name="polis[number]"/></label> 

</div>

<div id="vrem_svid" style="display:none;">
<p>Введите номер временного свидетельства </p>  
<input type="text" name="polis[number]" />

</div>

<div id="ENP" style="display:none;" >
<p>Введите номер полиса или ЕНП </p>  
<input type="text" name="polis[number]"  />

</div> 
<br> 
<br> 
<br>
<input type="hidden"  id="polisType" name="polis[typ]"  value="99" /> 
<button type="submit" class="btn btn-large btn-block btn-primary" name="yo2" value="polis">Поиск</button>
<div class="spacer"></div>
<br>
 


<fieldset>
</form>


HERE;
}
	








?>