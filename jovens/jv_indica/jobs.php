<html>
<head>
			    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-3.3.6-dist/css/style.css" rel="stylesheet">
 
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="row">
        <div class="col-md-2">
            <a onclick="carregar('/jovens/jv_indica/book.php')" href="#">Cursos</a>
            <a onclick="carregar('/jovens/jv_indica/book.php')" href="#">Vagas</a>
            <a onclick="carregar('/jovens/jv_indica/book.php')" href="#">Artigos</a>
            <a onclick="carregar('/jovens/jv_indica/book.php')" href="#">Sites</a>
        </div>
        <div class="col-md-10" id="material"></div>
    </div>
    <div class="col-md-10">
        <h3>Área</h3>
        <h3>Nome</h3>
        <h3>Duração</h3>
    </div>
<script>
    function carregar(pagina){
        $("#material").load(pagina);
    }
</script>
</body>
</html>