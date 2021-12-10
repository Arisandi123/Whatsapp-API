<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Profile Page | Ditzzy</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600'><link rel="stylesheet" href="./style.css">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="https://telegra.ph/file/fe87c51bf5ba005f92830.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" type="image/x-icon" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</script>

</head>
<body>
	<audio id="my_audio" autoplay="autoplay" hidden="hidden" src="telepatia.mp3"></audio>
<script type="text/javascript">
    window.onload=function(){
      document.getElementById("my_audio").play();
    }
  </script>
<!-- partial:index.partial.html -->
<div class="container">
  <header>
  <a href="//saweria.co/syditzzy/">  <i class="fa fa-coffee" aria-hidden="true"></i></a>
  </header>
  <main>
    <div class="row">
      <div class="left col-lg-4">
        <div class="photo-left">
          <img class="photo" src="https://telegra.ph/file/fe87c51bf5ba005f92830.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"/>
          <div class="active"></div>
        </div>
        <h4 class="name">Ditzzy</h4>
        <p class="info">Lead Developer</p>
        <p class="info">ditzzsenpai@anjay.cf</p>
        <div class="stats row">
          <div class="stat col-xs-4" style="padding-right: 50px;">
            <p class="number-stat" id="visits"></p>
            <p class="desc-stat" >Visitors</p>
          </div>
          
          <div class="stat col-xs-4" style="padding-left: 50px;">
            <p class="number-stat">10+</p>
            <p class="desc-stat">Project</p>
          </div>
        </div>
        <p class="desc">Hi ! My name is Ditzzy. I'm a Lead Developer from Sukabumi, in West Java. I really enjoy codings and recode.</p>
        <div class="social">
         <a href="//wa.me/message/W2FQ7G5SIIW5O1"> <i class="fa fa-whatsapp" aria-hidden="true"></i></a>
        <a href="//instagram.com/ftditzzxy">  <i class="fa fa-instagram" aria-hidden="true"></i></a>
         <a href="//github.com/ItsMeDitzzy"> <i class="fa fa-github" aria-hidden="true"></i></a>
          
        </div>
      </div>
      <div class="right col-lg-8">
        <ul class="nav">
          <li>Gallery</li>
          <li>Collections</li>
          <li>Groups</li>
          <li>About</li>
        </ul>
       <a href="https://wa.me/message/W2FQ7G5SIIW5O1"> <span class="follow">Contact Me</span></a>
        <div class="row gallery">
          <div class="col-md-4">
             <img src="https://www.site-shot.com/cached_image/vxD_TFlHEey46wJCrBEAAg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"/>
          </div>
          <div class="col-md-4">
            <img src="https://www.site-shot.com/cached_image/Tu3iBllIEeyjTgJCrBEAAg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"/>
          </div>
          
        </div>
      </div>
  </main>
  
<script>
	var source = "telepatia.mp3"
 var audio = document.createElement("audio");
 //
 audio.autoplay = true;
 //
 audio.load()
 audio.addEventListener("load", function() { 
     audio.play(); 
 }, true);
 audio.src = source;
</script>
<script>
function cb(response) {
    document.getElementById('visits').innerText = response.value;
}
</script>
<script async src="https://api.countapi.xyz/hit/mysite.com/visits?callback=cb"></script>

</div>
<!-- partial -->
  
</body>
</html>
