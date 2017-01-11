<html>
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

    <title>Jovem Indica</title>
</head>

<body>
	<?php include ("menu-principal.php");?>

  <div class="row">
  	<div class="col-xs-6 col-md-3 option">
    	<a onclick="carregar('/jovens/jv_indica/music.php')" href="#" class="thumbnail ji_center">
     	 <span id="music" class="ico_indica"></span>
    	</a>
  	</div>
    <div class="col-xs-6 col-md-3 option">
      <a onclick="carregar('/jovens/jv_indica/book.php')" href="#" class="thumbnail ji_center">
        <span id="book" class="ico_indica"></span>
      </a>
    </div>
    <div class="col-xs-6 col-md-3 option">
      <a onclick="carregar('/jovens/jv_indica/movie.php')" href="#" class="thumbnail ji_center">
        <span id="play" class="ico_indica"></span>
      </a>
    </div>
    <div class="col-xs-6 col-md-3 option">
      <a href="#" class="thumbnail ji_center">
        <span id="job" class="ico_indica"></span>
      </a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-11">
      <div id="indicacoes"></div>
    </div>
  </div>
  

<script>
    function carregar(pagina){
        $("#indicacoes").load(pagina);
    }
</script>

	<?php include("footer.php");?>

</body>
</html>