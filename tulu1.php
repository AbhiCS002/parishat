<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
   height: 95%;
    background-color: white;
    margin-left: 30px;
    box-shadow:0 2px 50px;
    color:black;
padding-bottom:10px;
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
    nav.vertical > ul > li > div > ul > li > a.active {
                
                color: rgb(255,0,255);
                
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


        <div id="columnleft">
<h2 style="text-align:center; ;  background-color:black;"><font size="8" color="white">Shivalli Brahmins </font></h2>





<div id="columnright">
   <div class="wrapper">
  <nav class="vertical">
    <ul>
      <li>
        <a href="#">Home</a>
        <div>
          <ul>
              <li><a href="tulu1.php">Tulu Language</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Corporate</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>
       </div>
</div>




<br/>
<h1 style="margin-left:20px; align-content:center; ">Tulu Language</h1>
<p style="border-bottom:1px solid black; margin-left: 20px; margin-right:30px; "></p>
<p style="margin-left:20px; margin-right: 20px;   "><font style=" font-family:Book Antiqua; " >

Tulu is a language spoken in the area situated on the West Coast extending from the northern part of the undivided Dakshina Kannada district (now this part belongs ot the Udupi District) of Karnataka state up to the Kasargod Taluk (on the northern part) of the Kerala State. In ancient times this region was called Tulunaadu (the Tulu country) and the people whose mother tongue is Tulu are called the Tuluvas.

Tulu language belongs to the Dravidian group of languages that are spoken mainly in South India. Linguists enumerate about 24 Dravidian languages spread mainly in South India and some parts of North India and also in a few areas of Pakistan. Among a couple of dozens of Dravidian languages a few have evolved into major ones and have produced innumerable literary works for the last two thousand years. These works can stand par with other literary works of the world both in quality and quantity. Such developed languages of the Dravidian family are called as Major Dravidian languages. They are mainly five in number viz. Tamil, Kannada, Telugu, Tulu and Malayalam. Thus attention may be drawn upon the fact that Tulu language is also one among the five major Dravidian languages. These five major Dravidian languages together are called as ‘Pancha Dravida BhashegaLu’.

Unfortunately the significance of the Tulu language was note recognised until Rev. Caldwell brought out his monumental work called ‘A comparative Grammar of the Dravidian or South Indian Family of Languages’. In this prestigious work he justifies that ‘Notwithstanding its want of a literature, Tulu is one of the most highly developed languages of the Dravidian family.’ It was this appraisal that opened the eyes of the lingusts towards Tulu and made them to give due respect and recognition to it as one of the important and developed Dravidian languages.

Tulu is spoken by about 2.5 million people. The major number of Tulu speaking population is found, in dense, in the coastal area of Karnataka state. Equally good number of Tulu speakers can be seen all over India and also in other parts of the World, mainly in Gulf countries and in U S A.

Tulu script:



In a casual or serious discussion on Tulu language, a question often crops up, right from the experts to laymen. That is whether Tulu has a script ? If ‘yes’ whether it is a form of Malayalam script?
<br/>
The reasons for such a question are:
<br/>
1. Tulu literature written in Tulu was, for long, not available (now Tulu classics in Tulu Script are discovered)
<br/>
2. Tulu script was mainly used by Brahmins for writing Mantras. So others were not exposed to the script.
<br/>
3. Tulu was not a medium or subject of formal school education. So Tulu script did not figure in school curriculum.
<br/>
4. The similarity between Tulu and Malayalam scripts.
<br/>
5. And, mainly because of the use of Kannada script for Tulu by German missionaries during the early stages of printing of Tulu works.

<br/>
<img src="images/tululipi.jpg" alt="" height="500px; width:300px;"/>
Language and Script
<br/>
Language and Script are two different entities. The relation between a language and a script is neither ‘original’ nor ‘fixed’. Any language can be written in any script. That is how, there are about twenty scripts in the world for thousands of languages. Having or not having ‘own script’ is neither a status nor any impediment for a language. One of the prime language of today, English doesn’t have its own script. It uses the Roman script. So called ‘Divine language ‘ (Devabhasha) Sanskrit is written in Nagari script. Nagari is employed by Marathi, Hindi etc. English or Sanskrit can be written in Nagari or Kannada scripts. Name boards, letterheads etc use this type of writings. The words like English, railway, bus, paper, engineer are English words  written in various scripts. “I speak English” can be written in many scripts and the meaning is same. So also, sentences of any language in any script. Language and Script are not inseparable. Script is like mirror. It can reflect any image.

A script called Tulu is used in Tulunadu for centuries. All Tulu classics discovered recently are in Tulu script, and som in other scripts. This Tulu script was being used by Brahmins. Till recently they were using it for writing Mantras, for accounts etc. Since hundreds of years, Tulu Brahmins were going to Kerala Temples for priestly work (called ‘Shanti’ Services). They took the Tulu writing with them to Kerala thus they carried the Tulu script to Kerala. Malayalam had not developed a script of its own by that time. The upper castes and classes of Keralites started close contacts with the Tulu Brahmins and hence they adopted the Tulu script, and later adopted it to what is now called the Malayalam script. (This has been proved in detail by Vidwan P V Puninchathaya in ‘Tulu -Nadu-Nudi’).

Tulu as a language branched off from Dravidian (Mula Dravida), language, at least a thousand years earlier to Malayalam. So it is unlikely that a language much younger gave a script to an older language. Actually, probably Malayalam as an independent language was yet to be evolved, when Tulu had its own classical literature. So Tulu could not borrow a Malayalm script, simply because it did not exist. What existed was a Tulu Script, later taken by Malayalam. Another important proof of its antiquity is that the pundits (‘mathadhipatis’) use only Tulu for their signature since the begining of Matha tradition, despite the high status of Sanskrit in Mutts. Neither Sanskrit nor Kannada, but Tulu script is the official script of the Mutts in Tulunadu. Hence, it is a script evolved in Tulu area, that was later adopted for Malayalam. Hence it is Tulu script, and not Malayalam script nor Tulu-Malayalam script. To call Tulu script as Malayalam is both wrong and unfortunate.

Tulu is now disappearing in Tulu country and has established itself in Kerala. This, like many, is a paradox. So Tulu script has become a daughter of the in laws, and in-law of the motherland. The use of Kannada for Tulu is the reason for this pecular situation. The modern Tulu writings are using Kannada script. So it is natural that Tulu script is not likely to be revived for writing Tulu.

Summary

It is proved beyond doubt that Tulu had a script of its own. Tulu has given a script to Malayalam. Because of the use of Kannada for Tulu by German missionaries, the use of Tulu script declined. Most Tuluvar know Kannada. So they can easily use kannada script for Tulu.  Script and language are adoptable to each other. So with a few modifications, Kannada can be used for Tulu also. Any language can use any script. It is in question of usage and practices. However we should not forget that Tulu had its own script, and should at least know about it.
<br/>
<p style="text-align: right;">– Dr. K Padmanabha Kekunnaya</p></font></p>



</div>
        <div  style="width:1170px; height:20px; background-color: black; margin-top: 30px;">
            <p>fjhvhv</p>
        </div>

</body>

<!-- Mirrored from www.w3schools.com/html/tryit.asp?filename=tryhtml_div_capitals by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 May 2016 21:37:29 GMT -->
</html>

