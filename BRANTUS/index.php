<?php
require_once "connect.php";
$langTable=mysqli_query($link,"SELECT DISTINCT code FROM languages");
while($oneLang =mysqli_fetch_assoc($langTable)){
	if($_GET['ln']==$oneLang['code']){$langTest=true;}
}
if($langTest==false){$_GET['ln']='et';}

if(empty($_GET['ln'])){$pageLang='et';}else{$pageLang=$_GET['ln'];}

$termsTable=mysqli_query($link, "SELECT * FROM terms WHERE lang='$pageLang' ");
$terms=array();
while($oneTerm=mysqli_fetch_assoc($termsTable)){
	$terms[$oneTerm['code']]=$oneTerm['value'];
}

$settingsTable=mysqli_query($link, "SELECT * FROM settings");
$settings=array();
while($oneSetting=mysqli_fetch_assoc($settingsTable)){
	$settings[$oneSetting['code']]=$oneSetting['value'];
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-157706331-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-157706331-1');
</script>
<!//------------------------------------------ />
<meta property="og:url"                content="https://brantus.eu/" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="Дезинфекционная фирма Brantus OÜ - старейшая в Эстонии" />
<meta property="og:description"        content="Мы работаем по всей Эстонии, включая Харьюмаа, Тартумаа Ида-Вирумаа, Пярнумаа, Ляяне-Вирумаа, Вильяндимаа, Рапламаа, Вырумаа, Сааремаа, Йыгевамаа Ярвамаа, Валгамаа, Пылвамаа, Ляянемаа и  Хийумаа." />
<meta property="og:image"              content="https://brantus.eu/img/order.jpg" />
<!//------------------------------------------ />
	
	
	
<meta charset="utf-8">
<meta name="keywords" content="Уничтожение тараканов, муравьев, блох, клопов, шершней, ос, крыс, мышей и других грызунов, " />
<meta name="description" content="Уничтожение тараканов, муравьев, блох, клопов, шершней, ос, крыс, мышей и других грызунов, " />
<link rel="icon" href="img/favicon.ico" type="image/x-icon" />
 <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />	
	
	<script src="js/jquery-3.5.1.slim.min.js" ></script>
	<script src="js/popper.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<!--<link rel="stylesheet" href="css/custom.css?i=646880254201" />-->
	<link href="https://fonts.googleapis.com/css?family=Jura:400,600&display=swap&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
	<script src="js/bootstrap.min.js"></script>
	<style type="text/css">
		html {
  scroll-behavior: smooth; /* свойство scroll-behavior не наследуется, применяется к прокручиваемым блокам */ 
}
body{background:url(<?php echo $settings['bg'] ?>) center; background-size: cover; height: 100% !important; font-family: 'Jura', sans-serif;}
.navbar{ background-color:rgba(0,0,0,0.5) !important;color:#fff;z-index:1000; margin:0 -15px -70px -15px; position: fixed; width: 100%;}
.navbar *{color:#fff !important;}
.clientsRow{margin-top: -50px !important;}
.bunnersHome{margin-top: 0px !important;}
.card{ background: none; border: none; padding: 8px;}
.card-body{ background-color:#fff;}
.card-body .btn{padding: 0px 50px; float: right; border-radius:20px;}
.card img{ border: 4px solid #fff;}
.rowAboutBG{ height: 400px;width: 100%; background-image: url(<?php echo $settings['sectionImgMain'] ?>); background-position: center center; background-size: cover;}
.rowAbout{margin-bottom: -50px;}
.rowCompanyInfo{ background: #fff; }
.rowCompanyInfo h2{ color: #fff; font-weight:bold;text-shadow: 3px 3px 4px rgba(0,0,0,0.9); margin-top: -50px; margin-bottom:20px; margin-left:60px; font-size: 2.6rem; text-transform: uppercase;}
.companyPhoto img{ border:#fff 3px solid;}
.rowCompanyInfo p{margin-top: 30px; margin-left: 50px;}
.rowCompanyInfo p:nth-child(1) {margin-top: 120px;}
.rowTellimine{ background: #fff;}
.rowTellimine h2{text-align: center;margin: 30px 0 20px 0;  font-size: 2.6rem; text-transform: uppercase;}
.rowFooter{height: auto; background-image:url("<?php echo $settings['footer'] ?>"); background-position: bottom center; background-size: cover; padding-top: 50px;}
.rowFooter *{ color: #fff;}
.rowFooter p{ padding: 5px 20px; text-align: left;}
.rowPageInfo{background: #fff; margin-top: -50px; padding-bottom: 100px; }
.rowPageInfo h2{ color: #fff; font-weight:bold;text-shadow: 3px 3px 4px rgba(0,0,0,0.9); margin-bottom:20px; margin-left:60px; font-size: 2.6rem;}
.shish{
    color: #fff;
    font-weight: bold;
    text-shadow: 3px 3px 4px rgba(0,0,0,0.9);
    margin-top: -55px;
    margin-bottom: 20px;
    text-align: center;
    font-size: 2.6rem;
    text-transform: uppercase;
	width: 100%;
	z-index: 69;
}
	</style>
<title>BRANTUS</title>
</head>

<body>

<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php?ln=<?php echo $pageLang ?>">
	<img src="<?php echo $settings['logo'] ?>" alt="Brantus" height="40px" />
	</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    <div class="navbar-nav mr-auto">
		<?php
			$menuTable=mysqli_query($link,"SELECT * FROM menu WHERE lang='$pageLang' ORDER BY listOrder ASC");
			while($oneMenu=mysqli_fetch_assoc($menuTable)){
				echo '<a class="nav-item nav-link active" href="'.$oneMenu['link'].'">'.$oneMenu['value'].'</a>';
			}
		?>
    </div>
	<div class="navbar-nav">
		<?php
			$langTable=mysqli_query($link,"SELECT * FROM languages ORDER BY listOrder ASC");
			while($oneLang=mysqli_fetch_assoc($langTable)){
				echo '<a class="nav-item nav-link" href="?ln='.$oneLang['code'].'">'.$oneLang['value'].'</a>';
			}
		?>
  </div>
</nav>
<div class="row">
<div class="col p-0">
	<img src="<?php echo $settings['mainImg'] ?>" class="img-fluid" />
</div>
</div>
</div>
	<div class="container">
		


<div class="row bunnersHome clientRow">
<h2 class="shish"><a name="Service" /><?php echo $terms['services'] ?></h2>
<?php
	$i = 1;
	$servicesTable=mysqli_query($link,"SELECT * FROM services WHERE lang='$pageLang' ORDER BY listOrder ASC");
	while($oneService=mysqli_fetch_assoc($servicesTable)){
		echo '<div class="card col-12 col-md-6 col-lg-4">
		<img src="'.$oneService['photo'].'" class="card-img-top img-fluid" alt="...">
		<div class="card-body">
			<h5 class="card-title">'.$oneService['title'].'</h5>
		<div class="card-text"><p>'.$oneService['lead'].'</p>
		</div>
		<a href="'.$settings['card'.$i.'Btn'].'" class="btn btn-primary">'.$terms['more'].'...</a>
		</div>
		</div>';
		$i++;
	}
?>	
</div>
</div>
<div class="container-fluid">
<div class="row rowAbout">
	<div class="col rowAboutBG">
</div>		
</div>
</div>
	
<div class="container">
<div class="row rowCompanyInfo">
	<div class="col-12 col-md-6 col-lg-4 companyPhoto"><img src="<?php echo $settings['sectionImg1'] ?>" class="img-fluid" /></div>
	<div class="col-12 col-md-6 col-lg-8"><h2><a name="About" /><?php echo $terms['aboutUs'] ?></h2>
		<p><?php echo $terms['aboutTxt'] ?></p>

<p><?php echo $terms['aboutTxt2'] ?></p>
</div>
	</div>
</div>
	
<div class="container">	
	<a name="Order" />
<div class="row rowTellimine">	
	<h2 class="col-12"><?php echo $terms['order'] ?></h2>
	<div class="col">
		<form  onsubmit="return checkForm(this);" method="post" action="">
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php echo $terms['name'] ?>" required="required" name="firstLastName">
    </div>
	<div class="form-group">
    <!--// <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select> //-->
  </div>
  <div class="form-group">
    <input type="phone" class="form-control" id="exampleInputPassword1" placeholder="<?php echo $terms['phone'] ?>"  name="phoneNumber">
  </div>
	<div class="form-group">
    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="<?php echo $terms['comment'] ?>" rows="3" name="comment"></textarea>
  </div>
  <button type="submit" class="btn btn-success w-100" href="<?php echo $settings['orderSend'] ?>"><?php echo $terms['send'] ?></button>
</form>
	</div>		
	<div class="col d-md-block d-xs-none d-sm-none">
	<img src="<?php echo $settings['orderImg'] ?>" class="img-fluid" alt="...">
	
	
	

	</div>
	</div>	
	</div>
	<div class="container-fluid rowFooter">
		<div class="container">
		<div class="row">
		
<div class="col-12 col-md-6 col-lg-4"><br>
<h5></h5>
<iframe src="<?php echo $settings['map'] ?>" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
<div class="col-12 col-md-6 col-lg-4">
<h5> </h5>
<p><strong><?php echo $terms['footerTxt1'] ?></strong></p>

<p><strong><?php echo $terms['footerTxt1.2'] ?></strong></p>

<p>&nbsp;</p>
</div>
<div class="col-12 col-md-6 col-lg-4">
<h5> <?php echo $terms['footerTxt2'] ?></h5>
<p><strong>Uus - Sadama 19-8, 10120 Tallinn, Eesti&nbsp;<br />
Reg.nr. 10103178</strong></p>

<p><strong>Irina Jakovleva +37255695875&nbsp;<br />
&nbsp;www.brantus.eu&nbsp;<br />
irina@brantus.eu&nbsp;</strong></p>

<p><strong>SWIFT:HABAEE2X<br />
&nbsp;EE482200221072720087&nbsp;Swedbank&nbsp;<br />
KMKR nr. EE100125681</strong></p>
</div>
	
			
			
			</div>
		
		</div>
          <div class="copyright text-center my-auto bg-transparent">
            <span class="text-white-50">&copy; Clip Lab OÜ 2019</span>
          </div>		
	</div>
</body>	
</html>