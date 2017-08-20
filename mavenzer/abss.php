<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <script type="text/javascript" src="particles.js">
    
  </script>
  <title>Particles.js Demo</title>
  <style type="text/css">
    body{
      background-color: black;
      background-size: 100% 100%;
      color:white;
      }
    #n1{
      margin:0 auto;
      text-align: center;
      margin-top:20px;
      margin-left:80px;
      position: absolute;
      font-size: 80px;
    
    }
    #neel1{
      margin:0 auto;
      width:300px;
      height:480px;
      background-color:rgba(128,128,128,0.3);
      margin-left:100px;
      margin-top:100px;
      padding-top:10px;
      padding-left:50px;
      border-radius:15px;
      color:white;
      font-weight:bolder;
      position: absolute;
    }
    #neel2{
      margin:0 auto;
      width:300px;
      height:480px;
      background-color:rgba(128,128,128,0.3);
      margin-left:500px;
      margin-top:100px;
      padding-top:10px;
      padding-left:50px;
      border-radius:15px;
      color:white;
      font-weight:bolder;
      position: absolute;
    }
    #neel3{
      margin:0 auto;
      width:300px;
      height:480px;
      background-color:rgba(128,128,128,0.3);
      margin-left:900px;
      margin-top:100px;
      padding-top:10px;
      padding-left:50px;
      border-radius:15px;
      color:white;
      font-weight:bolder;
      position: absolute;
    }
    h5{
      font-size: 40px;
      position:absolute;
      margin-top: 20px;
    }
    h2{
      font-family:"monotype corsiva";
      position: absolute;
    }
    #img1{
      position: absolute;
      margin-top: 190px;
      margin-left: 350px;

    }
    #img2{
      position: absolute;
      margin-top: 190px;
      margin-left: 750px;

    }
    #img3{
      position: absolute;
      margin-top: 190px;
      margin-left: 1100px;

    }
    
  </style>
</head>
<body id="particles-js">

 <h2 id="n1">Hello Steve</h2>
<br/><br/>
<div id="neel1">

  <h5>Heart Beat</h5>
  <br/><br/><br/><br/><br/><br/><br/><br/><br/>
  <h1>Current :</h1><span id="getdata1"></span>
  <h1>Previous :</h1><div id="getdata2"></div>
  <h1>Risk level :</h1><div id="getdata3"></div>
  <h1>Past Week :</h1><div id="getdata4"></div>
  <h1>Prone to :</h1><div id="getdata5"></div>
</div>
<div id="neel2">
  <h5>Heamoglobin</h5>
  <br/><br/><br/><br/><br/><br/><br/><br/><br/>
  <h1>Current :</h1><div id="getdata6"></div>
  <h1>Previous :</h1><div id="getdata7"></div>
  <h1>Risk level :</h1><div id="getdata8"></div>
  <h1>Past Week :</h1><div id="getdata9"></div>
  <h1>Prone to :</h1><div id="getdata10"></div>
</div>
<div id="neel3">
  <h5>Overall Health</h5>
  <br/><br/><br/><br/><br/><br/><br/><br/><br/>
  <h1>Primary Risk :</h1><div id="getdata11"></div><br/><br/><br/>
  <h1>Secondary Risk :</h1><div id="getdata12"></div>
</div>
<img id="img1" src="1.gif" height ="90" width="90">
<img id="img2" src="2.jpg" height ="90" width="90">
<img id="img3" src="3.gif" height ="90" width="110">
<script type="text/javascript">
  particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 390,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#fff"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.5,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 10,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 20,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": false,
      "distance": 500,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 2
    },
    "move": {
      "enable": true,
      "speed": 6,
      "direction": "random",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "bubble"
      },
      "onclick": {
        "enable": true,
        "mode": "repulse"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 0.5
        }
      },
      "bubble": {
        "distance": 400,
        "size": 4,
        "duration": 0.3,
        "opacity": 1,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
}
);


</script>

<script type="text/javascript">
function dis() 
{
  xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","dataphp1.php",false);
  xmlhttp.send(null);
  document.getElementById("getdata1").innerHTML=xmlhttp.responseText;
}
dis();

setInterval(function(){
  dis()
},1000);
</script>
<script type="text/javascript">
function is() 
{
  xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","dataphp2.php",false);
  xmlhttp.send(null);
  document.getElementById("getdata2").innerHTML=xmlhttp.responseText;
}
is();

setInterval(function(){
  is()
},1000);
</script>

<script type="text/javascript">
function s() 
{
  xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","dataphp3.php",false);
  xmlhttp.send(null);
  document.getElementById("getdata3").innerHTML=xmlhttp.responseText;
}
s();

setInterval(function(){
  s()
},1000);
</script>
<script type="text/javascript">
function a() 
{
  xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","dataphp4.php",false);
  xmlhttp.send(null);
  document.getElementById("getdata4").innerHTML=xmlhttp.responseText;
}
a();

setInterval(function(){
  a()
},1000);
</script>

<script type="text/javascript">
function am() 
{
  xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","prodata5.php",false);
  xmlhttp.send(null);
  document.getElementById("getdata5").innerHTML=xmlhttp.responseText;
}
am();

setInterval(function(){
  am()
},1000);
</script>

<script type="text/javascript">
function mas() 
{
  xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","prodata6.php",false);
  xmlhttp.send(null);
  document.getElementById("getdata6").innerHTML=xmlhttp.responseText;
}
mas();

setInterval(function(){
  mas()
},1000);
</script>

<script type="text/javascript">
function pas() 
{
  xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","prodata7.php",false);
  xmlhttp.send(null);
  document.getElementById("getdata7").innerHTML=xmlhttp.responseText;
}
pas();

setInterval(function(){
  pas()
},1000);
</script>

<script type="text/javascript">
function dhs() 
{
  xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","prodata8.php",false);
  xmlhttp.send(null);
  document.getElementById("getdata8").innerHTML=xmlhttp.responseText;
}
dhs();

setInterval(function(){
  dhs()
},1000);
</script>

<script type="text/javascript">
function ret() 
{
  xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","prodata9.php",false);
  xmlhttp.send(null);
  document.getElementById("getdata9").innerHTML=xmlhttp.responseText;
}
ret();

setInterval(function(){
  ret()
},1000);
</script>

<script type="text/javascript">
function dk() 
{
  xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","prodata10.php",false);
  xmlhttp.send(null);
  document.getElementById("getdata10").innerHTML=xmlhttp.responseText;
}
dk();

setInterval(function(){
  dk()
},1000);
</script>

<script type="text/javascript">
function ys() 
{
  xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","prodata11.php",false);
  xmlhttp.send(null);
  document.getElementById("getdata11").innerHTML=xmlhttp.responseText;
}
ys();

setInterval(function(){
  ys()
},1000);
</script>
<script type="text/javascript">
function kl() 
{
  xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","prodata12.php",false);
  xmlhttp.send(null);
  document.getElementById("getdata12").innerHTML=xmlhttp.responseText;
}
kl();

setInterval(function(){
  kl()
},1000);
</script>
</body>
</html>
