	<div>
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/jovens/home.php"><img src="imagens/logo_jovens_1.png" alt="logo"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li id="home"><a href="/jovens/home.php">Home</a></li>
            <li id="event"><a href="#about">Eventos</a></li>
            <li id="foto"><a href="#contact">Fotos</a></li>
            <li id="culto"><a href="#contact">Cultos</a></li>
            <li id="calendar"><a href="/jovens/calendario.php">Calendário</a></li>
            <li id="testmu"><a href="/jovens/testemunhos.php">Testemunhos</a></li>
            <li id="jind"><a href="/jovens/jovem-indica.php">Jovem indica</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        <form class="navbar-form navbar-left" role="search">
         <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-search"></span>Submit</button>
        </form>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</div>
<script>
  function AlterActive(){

  var sPag=document.location.href.toUpperCase();
        
  if( sPag.indexOf("/JOVENS/TESTEMUNHOS.PHP")>=0) {
    document.getElementById('testmu').className = "active";
    
  }
  if (sPag.indexOf("/JOVENS/HOME.PHP")>=0) {
    document.getElementById('home').className = "active";
  }
  if (sPag.indexOf("/JOVENS/JOVEM-INDICA.PHP")>=0){
    document.getElementById('jind').className = "active";
  }
}
</script>
<script>
  AlterActive();
</script>
