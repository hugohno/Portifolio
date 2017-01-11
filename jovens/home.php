<html>
	<head>
		    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jovens</title>

    <link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-3.3.6-dist/css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/scrollreveal.js/3.1.4/scrollreveal.min.js"></script>
 
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	</head>
<body>
    
    <?php include ("menu-principal.php");?>

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
       
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="imagens/slide01.jpg" alt="...">
            <div class="carousel-caption">
                <h3>Caption Text</h3>
            </div>
          </div>
          <div class="item">
            <img src="imagens/slide02.jpg" alt="...">
            <div class="carousel-caption">
                <h3>Caption Text</h3>
            </div>
          </div>
          <div class="item">
            <img src="imagens/slide04.jpg" alt="...">
            <div class="carousel-caption">
                <h3>Caption Text</h3>
            </div>
          </div>
        </div>
             
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div> <!-- Carousel -->
        <div class="row" id="blocos">
         <div class="col-sm-6 col-md-4">
           <div class="thumbnail">
             <img src="imagens/banner_testemunho.jpg" alt="">
             <div class="caption">
               <h3>Testemunhos</h3>
               <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra , depois divoltis porris, paradis. Paisis, filhis, espiritis santis.</p>
               <p><a href="testemunhos.php" class="btn btn-primary" role="button">+ Ver mais</a></p>
             </div>
           </div>
         </div>
        <div class="col-sm-6 col-md-4">
           <div class="thumbnail">
             <img src="imagens/banner_indica.jpg" alt="">
             <div class="caption">
               <h3>Jovem Indica</h3>
               <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra l? , depois divoltis porris, paradis. Paisis, filhis, espiritis santis.</p>
               <p><a href="" class="btn btn-primary" role="button">+ Ver mais</a></p>
             </div>
           </div>
         </div>
        <div class="col-sm-6 col-md-4">
           <div class="thumbnail">
             <img src="imagens/banner_eventos.jpg" alt="">
             <div class="caption">
               <h3>Eventos</h3>
               <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra l? , depois divoltis porris, paradis. Paisis, filhis, espiritis santis.</p>
               <p><a href="" class="btn btn-primary" role="button">+ Ver mais</a></p>
             </div>
           </div>
         </div>
       </div>
  <section class="about">
    <div class="container">
      <div class="section-header">
        <h2>SOBRE</h2>
        <p>Conheça um pouco mais sobre nossa Rede de Jovens!</p>
      </div>
      <div class="row" id="aboutus">
        <div class="col-lg-4 col-md-4" id="big_txt"><p>Casamentiss faiz malandris se pirulitá</p></div>
         <div class="col-lg-4 col-md-4"><p>Cevadis im ampola pa arma uma pindureta. 
          Nam varius eleifend orci, sed viverra nisl condimentum ut. Donec eget justis enim. 
          Atirei o pau no gatis. Viva Forevis aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. 
          Copo furadis é disculpa de babadis, arcu quam euismod magna, bibendum egestas augue arcu ut est. Delegadis gente finis. In sit amet mattis porris, paradis.</p>
         <p>Forevis aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Copo furadis é disculpa de babadis, arcu quam euismod magna, bibendum egestas augue arcu ut est. 
          Etiam ultricies tincidunt ligula, sed accumsan sapien mollis et. Delegadis gente finis. 
          In sit amet mattis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis.</p>
         <p>Vitis e adipiscing enim. Nam varius eleifend orci, sed viverra nisl condimentum ut. Donec eget justo enim. Atirei o pau no gatis. Quisque dignissim felis quis sapien ullamcorper varius tempor sem varius.</p> </div>
         <div class="col-lg-4 col-md-4" id="bullet_ab">
          <p><img src="/jovens/imagens/church.svg" alt=""> Igreja Apostólica da Conquista</p>
          <p><img src="/jovens/imagens/calendar.svg" alt="">Todo 1º sábado</p>
          <p><img src="/jovens/imagens/shapes.svg" alt="">Visão MDA</p>
        </div> 
      </div>
    </div>
  </section>
  <section class="calendar">

  </section>
    
<script>
 /* window.sr = ScrollReveal();
sr.reveal('#big_txt');
sr.reveal('#bullet_ab');*/
var fooReveal = {
  delay    : 200,
  distance : '90px',
  easing   : 'ease-in-out',
  rotate   : { z: 10 },
  scale    : 1.1
};
window.sr = ScrollReveal({reset:true}); 
/*sr.reveal('#aboutu', {duration:2000}, 50);*/
sr.reveal('#aboutus', fooReveal);

</script>

    <?php include ("footer.php");?>


</body>
</html>
