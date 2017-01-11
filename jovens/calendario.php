<!Doctype html >
<html lang="pt-br">
	<head>
		    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calendário</title>
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
    <div id="Tit-calendar"><h1>Calendário 2016</h1></div>
    <div class="col-md-11" id="box-calendar">
    <div class="col-md-2">
        <div class="month">
            <ul>
                <a onclick="carregar('/jovens/calendar/jan.php')" href="#"><li>Janeiro</li></a>
                <li id="fev">Fevereiro</li>
                <li id="mar">Março</li>
                <li id="abr">Abril</li>
                <li id="mai">Maio</li>
                <li id="jun">Junho</li>
                <li id="jul">Julho</li>
                <li id="ago">Agosto</li>
                <li id="set">Setembro</li>
                <li id="out">Outubro</li>
                <li id="nov">Novembro</li>
                <li id="dez">Dezembro</li>
            </ul>
        </div>
    </div>
    <div class="col-md-10">
        <div class="days">
            <div class="events" id="eventos">
                <p>olá mundo</p>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    function carregar(pagina){
        $("#eventos").load(pagina);
    }
</script>

<?php include ("footer.php");?>
</body>
</html>