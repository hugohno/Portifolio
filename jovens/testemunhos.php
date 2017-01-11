<!Doctype html >
<html lang="pt-br">
	<head>
		    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jovens</title>
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-3.3.6-dist/css/style.css" rel="stylesheet">
 
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<title>Trabalhando com PHP no front-end</title>
</head>
<body>
 
<?php include ("menu-principal.php");?>

<div class="row">
	<div class="col-md-4 thumb">
		<div class="img-block">
			<img src="imagens/jovem.jpg" alt="">
			<p class="txt">Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra l? , depois divoltis porris, paradis. Paisis, filhis, espiritis santis.<br>
			<a href="#" class="btn btn-primary" role="button">Continuar lendo</a></p>
		</div>	
		<div class="perfil">
			<p class="name">Roberto Silva</p>
			<p class="local" id="l1">Sede</p>
		</div>
	</div>

	<div class="col-md-4 thumb">
		<div class="img-block">
			<img src="imagens/sofia.png" alt="">
			<p class="txt">Suco de cevadiss, ? um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no m?, cursus quis, vehicula ac nisi. Aenean vel dui dui.
			<br><a href="#" class="btn btn-primary" role="button">Continuar lendo</a>
			</p>
		</div>
		<div class="perfil">
			<p class="name">Sofia Soares</p>
			<p class="local" id="l2">Interior</p>
		</div>
	</div>
	<div class="col-md-4 thumb">
		<div class="img-block">
			<img src="imagens/jayana.jpg" alt="" class="img-circle">
			<p class="txt">congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, conCasamentiss faiz malandris se pirulit?.<br>
			<a href="#" class="btn btn-primary" role="button">Continuar lendo</a></p>
		</div>	
		<div class="perfil">
			<p class="name">Jayana Nunes</p>
			<p class="local" id="l3">XPTO</p>
		</div>
	</div>
</div>
<div class="row">
	<div class="list-group">
            <a href="#" class="list-group-item active" style="text-align:center;">
              OUTROS TESTEMUNHOS	
            </a>
            <a href="#" class="list-group-item">Albert</a>
            <a href="#" class="list-group-item">Tulio</a>
            <a href="#" class="list-group-item">Barbara</a>
            <a href="#" class="list-group-item">Joana</a>
          </div>
</div>

<?php include ("footer.php");?>
 
<!--<script> 
	jQuery(function($){ $("#teste").hover( function(){ //Ao posicionar o cursor sobre a div
 		$("#ptxt").css({"margin-top": "-25%", "transition": "margin-top 2s"}); },
 		 function(){ //Ao remover o cursor da div
 		  $("#ptxt").css({"margin-top": "-65%"}); } ); }); 
</script>-->

</body>
</html>