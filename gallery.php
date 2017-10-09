<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="wcss.css" type="text/css" >

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    *{
        margin: 0px;
        padding: 0px;
    }
 #upleft {
   width:100px;
   height: 300px;
   background:red; float:left;
   margin-left: 70px;
   margin-right: 170px;
}

#upright {
   width:300px;
   height:200px;
   background:blue;
   float:left
}
#below {
   height:300px;
   width:400px;
   background:green
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

#w3-badge{border-radius:50%}

#container{

   border:1px solid black;
   margin:0 auto;
}
.icon{
width:25px;
line-height: 40px;
background: black;
color:white;
padding-left:15px;
}
.left{
position:absolute;
top:50%;
left:0%;
transform:translate(0%,-50%);
height: 349px;
}
.right{
    position:absolute;
top:50%;
left:0%;
transform:translate(0%,-50%);
height: 349px;
}

#slider{
    overflow: hidden;
    height:400px;
    width: 00px;
}

#slider figure div{
    float:left;
    width:20%;
}
#slider figure img{
    width:100%;
    float:left;
}


#column-right{ float: right; width: 33%; }
#slider figure{
    position:relative;
    width:500%;
    margin:0px;
    left:0;
    animation: 30s abhi infinite;
}

@keyframes abhi{
    0%{
        left:0%;
    }
    10%{
        left: 0%;

    }
    12%{
        left:-100%;

    }
    16%{
        left:-100%;
    }
    22%{
        left:-200%;
    }
    29%{
        left:-200%;
    }
    35%{
        left:-300%;
    }
    42%{
        left:-300%;
    }
    49%{
        left:-400%;
    }
    57%{
        left:-400%;
    }
    62%{
        left:-300%;
    }
    70%{
        left:-300%;
    }
    77%{
        left:-200%;
    }
    83%{
        left:-200%;
    }
    89%{
        left:-100%;
    }
    93%{
        left:-100%;
    }
    100%{
        left:0%;
    }
}


#fp-nav {
    height: 12px;
    text-align: center;
    padding: 10px 0;
    background: #333;
}

#columnleft{
    width:800px;
    height:1000px;
    background-color: white;
    margin-left: 30px;
    box-shadow:0 2px 50px;
    color:black;

}

#div.wrapper {
  margin: 20px auto;
  width: 350px;
}
 

nav.vertical {
  border-radius: 4px;
  box-shadow: 0 0 10px rgba(0,0,0,.15);
  overflow: hidden;
  text-align: center;
}

  nav.vertical > ul {
    list-style-type: none;
  }

    nav.vertical > ul > li {
      display: block;
    }

      nav.vertical > ul > li > a {
        background-color: rgb(157, 34, 60);
        background-image: -webkit-linear-gradient(135deg, rgb(114, 51, 98), rgb(157, 34, 60));
        background-image: -moz-linear-gradient(135deg, rgb(114, 51, 98), rgb(157, 34, 60));
        background-image: -o-linear-gradient(135deg, rgb(114, 51, 98), rgb(157, 34, 60));
        background-image: linear-gradient(135deg, rgb(114, 51, 98), rgb(157, 34, 60));
        border-bottom: 1px solid rgba(255,255,255,.1);
        box-shadow: inset 0 1px 1px rgba(0,0,0,.1), 0 1px 1px rgba(0,0,0,.1);
        color: rgb(255,255,255);
        display: block;
        font-size: 1.85rem;
        font-weight: 500;
        height: 50px;
        width: 292px;
        letter-spacing: .5rem;
        line-height: 50px;
        
        text-shadow: 0 1px 1px rgba(0,0,0,.1);
        text-transform: uppercase;
        transition: all .1s ease;
        text-decoration: none;
      }

        nav.vertical > ul > li > a:hover {
         background-color: rgb(114, 51, 98);
         background-image: -webkit-linear-gradient(150deg, rgb(114, 51, 98), rgb(114, 51, 98));
         background-image: -moz-linear-gradient(150deg, rgb(114, 51, 98), rgb(114, 51, 98));
         background-image: -o-linear-gradient(150deg, rgb(114, 51, 98), rgb(114, 51, 98));
         background-image: linear-gradient(150deg, rgb(114, 51, 98), rgb(114, 51, 98)); 
         cursor: pointer;
        }
        
          nav.vertical > ul > li > div {
            background-color: rgb(255,255,255);
          }
 
          nav.vertical > ul > li > div > ul {
            list-style-type: none;
          }

            nav.vertical > ul > li > div > ul > li > a {
             background-color: rgb(255,255,255);
             border-bottom: 5px solid rgba(0,0,0,.05);
             color: #333331;
             display: block;
             font-size: 2.1rem;
             padding: 10px 0;
             text-decoration: none;
             transition: all 0.15s linear;
             width: 289px;
            }

              nav.vertical > ul > li > div > ul > li:hover > a {
                background-color: lightBlue;
                color: rgb(255,255,255);
                padding: 10px 0 10px 50px;
              }
#columnright{
    width:300px;
    height:1000px;
    background-color: white;
   margin-top: -63px;
   margin-right: -325px;
    box-shadow:0 2px 50px;
    color:black;
    float: right;
    border: 5px dotted black;
    border-radius: 5px;
}

#gallery{
   
    margin: auto;
    width:800px; 
    padding: 5px;
    height: 400px;
}
#tumbs{
    width: 150px;
    height: 170px;
    margin: 15px;
    padding: 5px;
    float: left;
   
}

.lightbox{
    opacity: 0;
    visibility:hidden;
    position: fixed;
    top: 0;
    left: 0;
   
    background-color: rgba(72,73,74,1);
  height: 100%;
  width: 100%;
}
.lightbox:target{
    visibility: visible;
    opacity: 1;
    transition: opacity 0s;
}
#outer{
    background-color: white;
    width:750px;
    height: 500px;
    margin: auto;
    margin-top: 80px;
    margin-left:100px; 
       padding: 10px;
       box-shadow: 5px 5px 5px 5px black;
       border-radius: 10px;
}
.lightbox a{
    text-decoration: none;
    font-size: 20px;
    color: black;
}

#inner{
    
}
#inner img{
    max-height: 500px;
    max-width: 730px;
}

#cross{
    float: right;
}

#next{
    float: right;
}
#previous{
    float: left;
}
#img-frame {
    background:transparent;
    padding:8px;
    border:1px solid #999999; }
</style>
<body>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1;}
  if (n < 1) {slideIndex = x.length;}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-white";
}
</script>


<div style="background-color:#f2f2f2; color:white; padding:690px;">

</div>



    <img style="margin-left:90px; margin-top: -2550px;" src="images/brahmanparishat.png" alt=""/>


    <div class="block" style=" padding-top: 80px; padding-bottom:30px; background: rgb(223,105,78);  box-shadow:0 2px 50px;  color:black; margin-left:90px;  box-shadow:0 10px 50px;   margin-right:90px; margin-top:-1370px; ">
          <p  align="center" valign="middle"><font size="8" color="white">Brahman Parishat</font></p>

    </div>

    <div style="background-color:#ffffcc; box-shadow:0 1px 50px;  color:black; margin-left:90px; margin-right:90px; margin-top:0px">
        <ul>
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="gallery.php">Gallery</a></li>
  <li><a href="Table.php">Contact</a></li>
  <li><a href="About.php">About</a></li>
  <li><a href="content1.html">Index</a></li>
</ul>


        <div id="columnleft" >
<h2 style="text-align:center;   background-color:black;"><font size="8" color="white">Shivalli Brahmins </font></h2>

<div id="gallery" >

<div id="tumbs" style="  width: 160px;   height: 180px; ">
    <a href="#lightbox1"><img src="images/56.jpg" alt="" width="100%" height="100%" alt="" id="img-frame"/></a>
        
</div>
<div id="tumbs" style=" padding: 10px;   width: 160px;   height: 180px; ">
    <a href="#lightbox1"><img src="images/56.jpg" alt="" width="100%" height="100%" alt="" id="img-frame"/></a>
        
</div><div id="tumbs" style="  width: 160px;   height: 180px; ">
    <a href="#lightbox2"><img src="images/56.jpg" alt="" width="100%" height="100%" alt="" id="img-frame"/></a>
        
</div><div id="tumbs" style="   width: 160px;   height: 180px; ">
    <a href="#lightbox3"><img src="images/56.jpg" alt="" width="100%" height="100%" alt="" id="img-frame"/></a>
        
</div><div id="tumbs" style="  width: 160px;   height: 180px; ">
    <a href="#lightbox4"><img src="images/56.jpg" alt="" width="100%" height="100%" alt="" id="img-frame"/></a>
        
</div><div id="tumbs" style="   width: 160px;   height: 180px; ">
    <a href="#lightbox5"><img src="images/56.jpg" alt="" width="100%" height="100%" alt="" id="img-frame"/></a>
        
</div>
    
    
    
   

    <div class="lightbox" id="lightbox1">
        <div id="outer">
            <p>title of the images<a href="#" id="cross">X</a></p>
            <div id="inner">
                <img src="images/tululipi.jpg" width="730px" height="420px" alt=""/>
            </div>
            <p> 
                <a href="#lightbox5" id="previous">Previous</a>
            <a href="#lightbox2" id="next">Next</a></p>
        </div>
    </div>
    <div class="lightbox" id="lightbox2">
       <div id="outer">
            <p>title of the images<a href="#" id="cross">X</a></p>
            <div id="inner">
                <img src="images/Desert.jpg" width="730px" height="420px" alt=""/>
            </div>
            <p> 
                <a href="#lightbox1" id="previous">Previous</a>
            <a href="#lightbox3" id="next">Next</a></p>
        </div>
    </div>
    <div class="lightbox" id="lightbox3">
        <div id="outer">
            <p>title of the images<a href="#" id="cross">X</a></p>
            <div id="inner">
                <img src="images/Brushes.jpg" width="730px" height="420px" alt=""/>
            </div>
            <p> 
                <a href="#lightbox2" id="previous">Previous</a>
            <a href="#lightbox4" id="next">Next</a></p>
        </div>
    </div>
    <div class="lightbox" id="lightbox4">
       <div id="outer">
            <p>title of the images<a href="#" id="cross">X</a></p>
            <div id="inner">
                <img src="images/70.jpg" width="730px" height="420px" alt=""/>
            </div>
            <p> 
                <a href="#lightbox3" id="previous">Previous</a></p>
            <a href="#lightbox5" id="next">Next</a>
        </div>
    </div>
    <div class="lightbox" id="lightbox5">
       <div id="outer">
            <p>title of the images<a href="#" id="cross">X</a></p>
            <div id="inner">
                <img src="images/56.jpg" width="730px" height="420px" alt=""/>
            </div>
            <p>
                <a href="#lightbox4" id="previous">Previous</a>
            <a href="#lightbox1" id="next">Next</a> </p>
        </div>
    </div>
</div>



<div id="columnright">
   <div class="wrapper">
  <nav class="vertical">
    <ul>
      <li>
        <a href="#">Home</a>
        <div>
          <ul>
              <li><a href="tulu1.php">Tulu Language</a></li>
            <li><a href="#">TuluNadu</a></li>
            <li><a href="#">Tulunadu Temples</a></li>
            <li><a href="great.php">Great Acharyas</a></li>
            <li><a href="articles.php">readmore</a></li>
           
          </ul>
        </div>
      </li>
    </ul>
  </nav>
       </div>
</div>




<br/>




</div>
        <div  style="width:1170px; height:20px; background-color: black; margin-top: 30px;">
            <p>fjhvhv</p>
        </div>

</body>

<!-- Mirrored from www.w3schools.com/html/tryit.asp?filename=tryhtml_div_capitals by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 May 2016 21:37:29 GMT -->
</html>
