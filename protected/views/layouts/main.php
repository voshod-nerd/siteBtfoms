<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.slideshow {}
.slideshow img {border: 0px solid #ccc; background-color: #fff; }
</style>
	<!-- Bootstrap  CSS framework -->
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" media="screen, projection" />
<script type="text/javascript" src="/js/jquery.min.js"></script>	
<script type="text/javascript" src="/js/jquery.cycle.min.js"></script>		
<script type="text/javascript">
$(document).ready(function() {
$('.slideshow').cycle({
fx: 'fade',
timeout: 1000 });
});
</script>

<title>Сайт ТФОМС города Байконур</title>
</head>

<body>


<script  src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script>
<div class="container">
<div class="row"      >
<div class="col-md-4"><p>468320 г.Байконур ул. Гагарина, 13</p></div>
<div class="col-md-1"></div>
<div class="col-md-4"><p>Телефон приемной  8 (33622)5-62-29</p></div>
</div>	

  <div class="row" >
	
	<div class="col-md-2" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.jpg" width='120' height='175' ></div>
		<div class="col-md-10">
			<div class="row">
				<br>
				<br>

				<p style="font-size:24px; font-family:Trebuchet MS; " ><strong>Территориальный фонд обязательного медицинского страхования города Байконур</p></strong>
			</div>
            <div class="row"><p style="font-size:14px"><strong>Официальный сайт</strong></p></div>
		</div>
	

  </div>

<!--Навигация и основное содержимое !-->
	<div class="row">
		<!--Навигация  !-->
		<div class="col-md-2"   >
			<ul class="nav nav-tabs nav-stacked">
			<li><a href="<?php $array = array("type" =>"main");  echo $url=$this->createUrl('Site/SimpleInformation/',$array);  ?>" >Главная</a></li>
			<li><a href="<?php $array = array("type" =>"aboutFond");  echo $url=$this->createUrl('Site/SimpleInformation/',$array);  ?>" >О фонде</a></li>	
			<li><a href="<?php $array = array("type" =>"aboutOMS");  echo $url=$this->createUrl('Site/SimpleInformation/',$array);  ?>" >О системe ОМС</a></li>
			<li><a href="<?php $array = array("type" =>"terprogramma");  echo $url=$this->createUrl('Site/SimpleInformation/',$array);  ?>" >Территориальная программа</a></li>
			<li><a href="" >Тарифное соглашение</a></li>
			<li><a href="" >Для СМО и МО</a></li>
			<li><a href="<?php echo $url=$this->createUrl('Site/NSI');  ?>" >Справочники НСИ</a></li>
			<li><a href="<?php echo $url=$this->createUrl('Site/ListDoctors');  ?>" >Врачи эксперты</a></li>
			<li><a href="<?php echo $url=$this->createUrl('Site/Polis');  ?>" >Проверка полиса</a></li>
			<li><a href="">Социальная реклама</a></li>
			</ul>
		</div>

		<div class="col-md-8" >
			<div class="slideshow">
			<img src="images/1.jpg" width="749" height="250" alt="" />
			<img src="images/2.jpg" width="749" height="250" alt="" />
			<img src="images/3.jpg" width="749" height="250" alt="" />
			<img src="images/4.jpg" width="749" height="250" alt="" />
			<img src="images/5.jpg" width="749" height="250" alt="" />
			<img src="images/6.jpg" width="749" height="250" alt="" />
		</div>
			<!--  Вывод содержания !-->	
			<br>
		<div style="background-color:#D3D3D3;  border-radius:8px;  ">
		<?php echo $content; ?> 
         </div>
		</div>

		<div class="col-md-2" >


<br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="thumbnail">
<img src="images/grigoreva.jpg"  width="120" height="160" alt="">
<strong>
<p style=" font-size:12px" >Директор Фонда ОМС</p>
<p style=" font-size:12px">Григорьева Нина Алексеевна</p> 
<p style=" font-size:12px">тел.: 8 (336 22) 5-62-30</p></strong>
</div>


		</div>

	</div>
<!--Низ страницы !-->
	<div class="row" style="background-color:#C0C0C0">
		<div class="col-md-5"></div>
		<div class="col-md-5"><p>Разработано: Информационный отдел ТФОМС г.Байконур</p></div>	

	</div>

</div>
</body>
</html>
