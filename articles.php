<?php

mysqli_affected_rows_connect("localhost","root","");
mysql_select_db("comment");
$name = filter_input(INPUT_POST, 'name');
$comment = filter_input(INPUT_POST, 'comment');
$submit = filter_input(INPUT_POST, 'submit');

$dbLink = mysqli_connect("localhost","root","");
mysql_query("SET character_set_client=utf8",$dbLink);
mysql_query("SET character_set_connection=utf8",$dbLink);

if($submit)
{
    if($name && $comment)
    {
        $insert = mysql_query("INSERT INTO comment (name,comment) VALUES ('$name','$comment')");
    }
 else {
        echo "plz fill out fields";
 }     }


?>


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
   margin-top: -62px;
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
            <li><a href="#">TuluNadu</a></li>
            <li><a href="#">Tulunadu Temples</a></li>
            <li><a href="great.php">Great Acharyas</a></li>
            <li><a href="readmore.html">readmore</a></li>
           
          </ul>
        </div>
      </li>
    </ul>
  </nav>
       </div>
</div>




<br/>
<h1 style="margin-left:20px; align-content:center; ">Shivalli Brahmins</h1>
<p style="border-bottom:1px solid black; margin-left: 20px; margin-right:30px; "></p>
<form action="articles.php" method="POST">
    <table>
        <tr>
            <td> Name: </td>
        <input type="text" name="name" /> 
            </td>
            
        </tr>
        <tr>
            <td colspan="2">Comment: </td>
        
            </td>
            
        </tr>
        <tr>
            <td colspan="2"> </td>
        <textarea name="comment">
            
        </textarea>
            </td>
            
        </tr>
        <tr><td colspan="2"> </td>
        <input type="submit" name="submit" value="comment"/></textarea>
            </td>
            
        </tr>
        
    </table>
</form>
<?php

$dbLink = mysql_connect("localhost","root","");
mysql_query("SET   character_set_results=utf8",$dbLink);
mb_language('uni');
mb_internal_encoding('UTF-8');

$getquery = mysql_query("SELECT * FROM comment ORDER BY id DESC");
while($rows = mysql_fetch_assoc($getquery))
{
$id=$rows('id');
$name=$rows('name');
$comment=$rows('comment');

echo $name . '<br/>' . '<br/>' . $comment . '<br/>' . '<hr size="1"/>';
}

?>



</div>
        <div  style="width:1170px; height:20px; background-color: black; margin-top: 30px;">
            <p>fjhvhv</p>
        </div>

</body>

<!-- Mirrored from www.w3schools.com/html/tryit.asp?filename=tryhtml_div_capitals by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 May 2016 21:37:29 GMT -->
</html>
