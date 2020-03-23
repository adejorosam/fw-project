<style>

* {
    box-sizing: border-box;
  }
  
  body {
    font-family: sans-serif;
    background-image: url("bgimage.jpg");
    repeat: no-repeat;
    
  }
  
  .txt1 {color: #0070BB;
      font-size: 40px;
    font-weight: 800;
      text-align: center;
      margin-top: 20px; }
  
  .txt2 {color: #c8c6ce;
      font-size: 18px;
      text-align: center;
      margin-top: 20px; }
  
  .txt3 {color: #c8c6ce;
      font-size: 18px;
      text-align: center;
      margin-top: 20px; }
  
  .logo {
  text-align: center;
    margin-top: 10px; }
  
  .button {
      border: 2px solid none;
      padding: 10px 40px; 
      background: #0070BB;
     color: white;
      text-align: center;
      width: 300px;
      border-radius: 25px;
      margin: 20px auto;
      transition: all 0.3s ease 0s;
      -webkit-box-shadow: 0px 11px 20px -8px rgba(0,112,187,1);
      -moz-box-shadow: 0px 11px 20px -8px rgba(0,112,187,1);
      box-shadow: 0px 11px 20px -8px rgba(0,112,187,1);}
  
  .button:hover {
      border: 2px solid none;
      padding: 10px 40px; 
      background: #0070BB;
    color: white;
      text-align: center;
      width: 300px;
      border-radius: 25px;
      margin: 5px auto;
      transition: all 0.3s ease 0s;
      -webkit-box-shadow: 0px 19px 34px -8px rgba(0,112,187,1);
      -moz-box-shadow: 0px 19px 34px -8px rgba(0,112,187,1);
      box-shadow: 0px 19px 34px -8px rgba(0,112,187,1);}
  
  a .button {
      color: ffffff;
      text-align: center;
      font-size: 16px;
      text-decoration: none;
  }
  
  a {text-decoration: none;}
  a:hover {text-decoration: none;}
  
  #orbit-system {
    position: relative;
    width: 18em;
    height: 18em;
    margin: 0px auto;
  }
  
  .system {
    position: relative;
    width: 100%;
    height: 100%;
    
    -webkit-transform: rotateX(75deg) rotateY(-30deg);
    transform: rotateX(75deg) rotateY(-30deg);
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
  }
  
  .planet, .satellite-orbit, .satellite {
    position: absolute;
    top: 50%;
    left: 50%;
    
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
  }
  
  .planet {
    width: 9em;
    height: 9em;
    margin-top: -20em;
    margin-left: -4.5em;
    
    border-radius: 50%;
    background-color: none;
    color: white;
    
    text-align: center;
    line-height: 9em;
    
    -webkit-transform: rotateY(30deg) rotateX(-75deg);
    transform: rotateY(30deg) rotateX(-75deg);
  }
  
  .satellite-orbit {
      width: 16em;
    height: 16em;
    margin-top: -8em;
    margin-left: -8em;
    
    /*border: 1px solid black;*/
    border-radius: 50%;
    
    -webkit-animation-name: orbit;
    animation-name: orbit;
    -webkit-animation-duration: 10s;
    animation-duration: 10s;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
    -webkit-animation-timing-function: linear;
    animation-timing-function: linear;
  }
  
  .satellite {
      top: 100%;
      width: 7em;
      height: 7em;
      margin-top: -1.5em;
      margin-left: -1.5em;
      color: #fefefe;
      background-color: #0070BB;
      border-radius: 50%;
      text-align: center;
      font-weight: 600;
      line-height: 7em;
      -webkit-animation-name: invert-orbit;
      animation-name: invert-orbit;
      -webkit-animation-duration: 3s;
      animation-duration: 3s;
      -webkit-animation-iteration-count: infinite;
      animation-iteration-count: infinite;
      -webkit-animation-timing-function: linear;
      animation-timing-function: linear;
  }
  
  @-webkit-keyframes orbit {
      0% {
          transform: rotateZ(0deg);
      }
      100% {
          transform: rotateZ(360deg);
      }
  }
  @keyframes orbit {
      0% {
          transform: rotateZ(0deg);
      }
      100% {
          transform: rotateZ(360deg);
      }
  }
  
  /*
  In order to invert the rotation, do the rotate* transforms in reverse order.
  
  Here, we rotated the system with rotateX(75deg) rotateY(-30deg), and then we are animating the rotation of the orbit with rotateZ(0-360deg). To reverse that, we need to reverse the last transform applied (rotateZ), then rotateY, then rotateX.
  
  The rotateX/Y reversal is easy since it's not animated, so just use its opposite (30deg, -75deg). The rotateZ is trickier since it's animating, but since it's rotating from 0 to 360, we just need to animate the satellite from 360 to 0.
  */
  @-webkit-keyframes invert-orbit {
      0% {
          transform: rotateZ(360deg) rotateY(30deg) rotateX(-75deg);
      }
  
      100% {
          transform: rotateZ(0deg) rotateY(30deg) rotateX(-75deg);
      }
  }
  @keyframes invert-orbit {
      0% {
          transform: rotateZ(360deg) rotateY(30deg) rotateX(-75deg);
      }
  
      100% {
          transform: rotateZ(0deg) rotateY(30deg) rotateX(-75deg);
      }
  }
  
</style>  

<html>
<head>
    <title> Account suspended | Findworka Academy </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
<div class="txt1">ACCOUNT SUSPENDED</div>
<div class="txt2">This account has been suspended on the grounds of not being able to pay before due date</div>
{{-- <div class="logo"><img src="http://blog.codepen.io/wp-content/uploads/2012/06/Black-Large.png" width="200px"></div> --}}
<div id="orbit-system">
  <div class="system">
    <div class="satellite-orbit">
      <div class="satellite">SUSPENDED</div>
    </div>
    <div class="planet"><img src="http://orig02.deviantart.net/69ab/f/2013/106/0/4/sad_man_by_agiq-d61wk0d.png" height="200px"> </div>
  </div>
</div>
<div class="txt3">For more information please </div>
<a href="{{url('/repay')}}"><div class="button">Kindly pay your outstanding balance here</div></a>
</body>
</html>