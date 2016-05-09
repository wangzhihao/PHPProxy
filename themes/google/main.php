<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
<style>

html {
  perspective: 500px;
  background: rgb(10,25,10);
}

html, html::before, html::after,
head, head::before, head::after,
body, body::before, body::after
{
  padding:0;
  margin:0;
  display:block;
  content: "";
  position: absolute;
  top:0;
  left:0;
  background-size: 400px;

  }
html {
  width: 200px;
  height: 200px;
  left: 50%;
  top: 50%;  
  margin: -100px;
    animation: 10s move ease-in-out alternate infinite;

}

/* left shadow */
body {
  top: 50%;
  left: 50%;
  width: 1200px;
  height: 200px;
  margin: -100px -600px;  
  background: linear-gradient(90deg, rgba(0,0,0,0), rgba(10,20,10,.75) 50%, rgba(10,25,10,1) 800px);
  transform: translateX(-99px) rotateY(90deg);
  transform-style: preserve-3d;
}

/* left */
body::after {
  top:0;
  left:0;
  right:0;
  bottom:0;
    background-image: url(http://keithclark.co.uk/labs/css-fps/wall.jpg);
  transform: translateZ(-1px);
  animation: 2s left linear infinite;
}

/* right shadow */
body::before {
  top:0;
  left:0;
  right:0;
  bottom:0;
  background: linear-gradient(90deg, rgba(0,0,0,0), rgba(10,20,10,.75) 50%, rgba(10,25,10,1) 800px);
  transform: translateZ(198px);
  z-index:1;
}

/* ceiling shadow */
head {
  top: 50%;
  left: 50%;
  width: 200px;
  height: 1200px;
  margin: -600px -100px;  
  background: linear-gradient(0deg, rgba(0,0,0,0), rgba(10,20,10,.75) 50%, rgba(10,25,10,1) 800px);
  transform: translateY(-100px) rotateX(90deg);
  transform-style: preserve-3d;
}

/* right */
head::before {
  top:0px;
  left:0;
  width: 1200px;
  height: 200px;
  transform:  translateX(-400px) translateY(600px) translateZ(-100px) rotateY(90deg) rotateZ(90deg);
  background-image: url(http://keithclark.co.uk/labs/css-fps/wall.jpg);
  animation: 2s right linear infinite;

}

/* ceiling */
head::after {
  top:0px;
  left:-10px;
  right:-10px;
  bottom:0px;
  background-image: url(http://keithclark.co.uk/labs/css-fps/ceil.jpg);
  animation: 2s top linear infinite;
}

/* floor */
html::before {
  top: 50%;
  left: 50%;
  width: 220px;
  height: 1200px;
  margin: -600px -110px;  
  background-image: url(http://keithclark.co.uk/labs/css-fps/floor.jpg);
  transform: translateY(101px) rotateX(90deg);
  animation: 2s bottom linear infinite;
}

/* floor shadow */
html::after {
  top: 50%;
  left: 50%;
  width: 200px;
  height: 1200px;
  margin: -600px -100px;  
  background: linear-gradient(0deg, rgba(0,0,0,0), rgba(10,20,10,.75) 50%, rgba(10,25,10,1) 800px);
  transform: translateY(100px) rotateX(90deg);
}

@keyframes left {
  0% {
    transform: translateZ(-1px)
  } 
  100% {
    transform: translateZ(-1px) translateX(-400px)
  }
}

@keyframes top {
  from {
    transform: translateZ(1px);
  }
  to {
    transform: translateY(400px) translateZ(1px);
  }
}

@keyframes bottom {
  from {
    transform: translateY(101px) rotateX(90deg);
  }
  to {
    transform:  translateZ(400px) translateY(101px) rotateX(90deg);
  }
}

@keyframes right {
  from {
    transform: translateX(-400px) translateY(600px) translateZ(-100px) rotateY(90deg) rotateZ(-90deg);

  }
  to {
    transform: translateX(-400px) translateY(1000px) translateZ(-100px) rotateY(90deg) rotateZ(-90deg);
  }
}


@keyframes move {
  0% {
    transform: translateX(-250px) translateY(150px) scale(.8) rotateZ(5deg);
  }
  50% {
    transform: translateX(250px)  translateY(-150px) scale(.8) rotateZ(-5deg);
  }
  100% {
    transform: translateX(80px)  translateY(300px) scale(.8) rotateZ(-2deg);
  }
}



</style>
<title><!--[site_name]--></title>
<?=injectionJS();?>
</head>
<body>
<div id="wrapper"  style="display:none">
	<form id="myform" action="includes/process.php?action=update" method="post" onsubmit="return updateLocation(this);">
		<input type="text" name="u" id="input" value="google.com" size="40">
		<input type="submit" value="Go">
	</form>

        <script type="text/javascript">
          document.getElementById("myform").submit();
        </script>

	<p class="center">Powered by <a href="http://www.glype.com/">Glype</a>&reg; <!--[version]-->.</p>  
</div>
</body>
</html>
