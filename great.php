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
     width:280px;
    height:95%;
    
   margin-top: 30px;
   margin-right:35px;
    box-shadow:0 2px 50px;
    color:black;
    float: right;
    
    border-radius: 5px;
    
}
.read-more-state {
  display: none;
}

.read-more-target {
  opacity: 0;
  max-height: 0;
  font-size: 0;
  transition: .25s ease;
}

.read-more-state:checked ~ .read-more-wrap .read-more-target {
  opacity: 1;
  font-size: inherit;
  max-height: 999em;
}

.read-more-state ~ .read-more-trigger:before {
  content: 'Show more';
}

.read-more-state:checked ~ .read-more-trigger:before {
  content: 'Show less';
}

.read-more-trigger {
  cursor: pointer;
  display: inline-block;
  padding: 0 .5em;
  color: #666;
  font-size: .9em;
  line-height: 2;
  border: 1px solid #ddd;
  border-radius: .25em;
  margin-left: 20px;
}

/* Other style */ 



/* Other style */ 



</style>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



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

<div style="background-color: #fafafa; background-image: url('images/back3.jpg'); background-repeat: no-repeat;  background-size: 1580px 1360px; color:white; padding:690px;">

</div>



<img style="margin-left: 135px;  margin-top: -2513px;" src="images/final logo copy.png" width="130px" height="170px"  alt=""/>
  
<img style="margin-left: 735px;  margin-top: -2513px;" src="images/madhva.png" width="160px" height="170px"  alt=""/>

    <div  id="borderimg2"  class="block" style=" padding-top: 130px; padding-bottom:30px; background-color:#ff3300; background-image: url('images/1.jpg');  background-size: 140px 160px;    box-shadow:0 2px 50px;  color:black; margin-left:120px;  box-shadow:0 10px 50px;   margin-right:120px; margin-top: -1385px; border-bottom-left-radius: 2em; border-top-right-radius:  2em; ">
          <p    align="center" valign="middle"><font size="8" color="white">ಉದ್ಯಾವರ ಬ್ರಾಹ್ಮಣ ಪರಿಷತ್</font></p>

    </div>


    <div   style="background-color:#ffffff;   box-shadow:0 1px 50px;  color:black; margin-left:120px; margin-right:120px; margin-top:0px">
    
    <ul class="nav nav-tabs">
  <li role="presentation" ><a  href="home.php">Home</a></li>
  <li role="presentation"><a  href="gallery.php">Gallery</a></li>
  <li role="presentation"><a href="Table.php">Contact</a></li>
  <li role="presentation"><a href="About.php">About</a></li>
  <li role="presentation"><a href="content1.html">Index</a></li>
</ul>


        <div>






<div id="columnright">
   <div class="wrapper">
  <nav class="vertical">
    <ul>
        <li>
          <img src="images/final logo copy.png" alt="" height="100px;" width="100px;"/>
          <p><font size="2" color="White">Like our page on Facebook</font></p>
          <div class="fb-like" style=" padding-bottom:15px; background-color:#262626;  " data-href="https://www.facebook.com/pages/%E0%B2%89%E0%B2%A6%E0%B3%8D%E0%B2%AF%E0%B2%BE%E0%B2%B5%E0%B2%B0-%E0%B2%AC%E0%B3%8D%E0%B2%B0%E0%B2%BE%E0%B2%B9%E0%B3%8D%E0%B2%AE%E0%B2%A3-%E0%B2%AA%E0%B2%B0%E0%B2%BF%E0%B2%B7%E0%B2%A4%E0%B3%8D/122840598365720?created&amp;ref_type=bookmark" 
             data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
        <div>
          <ul>
              <li><a href="tulu1.php">Tulu Language</a></li>
            <li><a href="#">TuluNadu</a></li>
            <li><a href="#">Tulunadu Temples</a></li>
            <li class="active"><a href="great.php">Great Acharyas</a></li>
            <li><a href="articles.php">readmore</a></li>
           
          </ul>
        </div>
      </li>
    </ul>
  </nav>
       </div>
</div>




<br/>
<h1 style="margin-left:20px; align-content:center; ">Great Acharyas</h1>



<div>
    <input type="checkbox" class="read-more-state" id="post-1" />
  <p  class="read-more-wrap" style="margin-left:20px; margin-right: 340px; padding: 2%;
  background: #fff9c6;
  color: #c7b27e;
  border: 1px solid #fce29f;
          border-radius: .25em;" ><font color="black">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
      Srimad Ananda Teertha, also known as Poornaprajna and Madhvacharya, is the propagator of the doctrine of Tattvavada. He is the last of the great Acharyas of Vedanta, and is also the 22nd commentator on the Brahma-Sûtra of Veda Vyasa.

His doctrine asserts that the differences are eternally real, and that hence there is more than one absolute real, and that Hari (Vishnu) is the only entity praised in the Shrutis and their adjuncts. Thus, he always identifies the Brahman of the Upanishads with Vishnu, and forcefully argues against the dichotomy of Shrutis (tattvaavedaka / atattvaavedaka) as claimed by Sri Sankaracharya, saying that such arbitration of apaurusheya scripture is unacceptable both logically and spiritually. He also emphasizes that it is important to understand and specifically reject other schools’ precepts, and hence devotes much time to nitpicking analyses and denunciations of other doctrines.

Srimad Ananda Teertha is commonly identified with Madhva, the third avataara of Mukhya PraaNa, the god of life, as given in the BaLittha Sukta of the Rig Veda. The first two avatara-s are as Hanuman and Bheemasena, and the third is Madhva, who came down to Earth as a sanyasi.

Srimad Ananda Teertha himself makes the claim to being Madhva in several instances,<span class="read-more-target"> one of which is in the Vishnu-tattva-vinirnaya. It was recognized in his own time, and it has been documented, that he had all thirty-two shubha-lakshaNa-s that define a ruju-taattvika-yogi, including the prescribed height of ninety-six inches (“shaNNavati angulo.apetam”) quoted in the Mahabharata-Tatparya-Nirnaya.

However, he is firmly set against the notion of accepting doctrines because they come from prophets or claimed gods. He also dismisses claims that only part of the Vedas are useful, and claims that even the so-called karma-kaNDa portions of them are only meant to worship Hari.

Sumadhvavijaya is a biographical account of Acharya Madhva composed by Sri Narayana Panditacharya, the son of Sri Trivikrama Panditacharya, who was a contemporary of Acharya Madhva. The generally accepted dates for Madhva are 1238-1317 CE (AD), while those for Narayana Panditacharya are 1295-1370 CE. It is very likely that the young Narayana was associated with many of the events covered in detailed descriptions of Acharya Madhva’s life.

Dr. B.N.K. Sharma says “Madhva’s biography, unlike others of its kind, has a perfect historical perspective and never indulges in anachronisms and episodes of a compromising nature to the subject. We get a pen-picture of Madhva saying that he had all the maha purusha lakshana-s. Madhva was a great sportsman, and also a good wrestler, mountaineer, etc. The early incidents of digesting horsegram as a baby still on mother’s milk, eating thousands of plantains and drinking pots of milk as a young lad, and eating all the food offered by several hosts in Badarinath, as well as keeping a complete fast with total silence for 48 days in that extremely cold and difficult place before going to meet Sri Veda Vyasa – all portray Madhva as one who was not an ordinary person dependent on food.”

Similarly, Madhva is said to have shown that God is present everywhere, even as a toddler of two years, by his actions in visiting the temples. The attachment of his parents to the beautiful child, and their sorrow when he renounced the world at the young age of eight years, are poignant, but Madhva maintains his dignity and conviction without hurting them.

Note: The first fourteen sarga-s of Sumadhvavijaya were translated to English and coded by Sri Raghavendra Rachuri. The last two were added by Sri Krishna Kadiri. Smt Meera Tadipatri and Sri Anand Ravipati read the proofs.

Invocation:

kAntAya kalyANa guNaikadhAmnE navadhyunAthapratimaprabhAya
nArAyaNAya akhila kAraNAya shrI prANanAthAya namaskarOmi

I offer my obeisance to Lord Narayana, with the most delightful personality, who is the unique primal fountain head and embodiment of countless auspicious qualities like Jnana, Ananda etc, who is the creator of the world of living souls and inert matter, who has the effulgence of the just rising Sun, who is the Lord of Mahalakshmi, and Mukhya Prana, who controls the life force of all living beings.

anAkulam gOkulamullalAsa yatpAlitam nityamanAvilAtma
tasmai namO nIradanIlabhAsE kRuShNAya kRuShNAramaNa priyAya

I offer my obeisance to Krishna who has the luster of dark rain-bearing clouds and is very dear to the husband(s) of Draupadi (called Krishnaa). Krishna also protected from danger or destruction, the cow herds of Gokula from enemies.

mukunda bhaktyai gurubhaktijAyai satAm prasatyE cha nirantarAyai
garIyasIm vishvagurOrvishuddhAm vakShyAmi vAyOravatAralIlAm

Devotion to God (Mukunda) will arise only with devotion to the preceptor (Guru). Hence, for securing the grace of God for the good people through devotion, I will describe the great, pure Avataaraleela of Sri Vayu, who is the great preceptor of the entire world.

– compiled by Balachandra Achar Hejamady
</span></font></p>
      <label for="post-1" class="read-more-trigger"></label>
      
      
</div>
<div>
  <input type="checkbox" class="read-more-state" id="post-2" />
  <p class="read-more-wrap" style="margin-left:20px; margin-right: 340px; padding: 2%;
  background: #fff9c6;
  color: #c7b27e;
  border: 1px solid #fce29f;
  border-radius: .25em;" >Lorem ipsum dolor sit amet, consectetur adipisicing elit.
      Hare Srinivasa

Sri Raghavendra SwamigaLu was one of the great proponents of the Madhva philosophy. For nearly 50 years, he was the head of one of the great peeTha-s. His predecessors include such scholars like Vijayeendra teertha & Sudheendra teertha.

He excelled in many fields such as logic, meemAmsA, music, yoga, dharmashAstra, & all 64 arts. As an avatara of Prahlada, he chose as his Brindavan Manchaale (Mantralaya) on the bank of the Tungabadhra, where Prahlada had performed his yaj~na in kR^ita yuga.

It is said that the stone used for the Brindavan was sanctified by the touch of Sri Rama and Sita in the treta yuga. His nephew, Narayanacharya, wrote Raghavendra Vijaya, which gives a full account of the life of this great saint.

pUrvAshrama of Sri Rayaru

Sri Raghavendra Swami was born in 1595 in Kaveripattana, Tamil Nadu to Thimmanna Bhatta and Gopikamba. His ancestors were of the Gautama Gotra. He was named Venkatanatha as he was born by the grace of Lord Venkateshwara. When his father was performing akSharAbhyAsa, Venkatanatha asked how a small letter like Om can explain the great God.

The father was overjoyed that his son understood that the God cannot be fully explained by one small letter. Venkatanatha’s Upanayanam was performed in chaitra mAsa, when he was 8 years old. Although his father passed away by then, Venkatanatha did not consider himself an orphan, as he considered Sri Narayana as his father and Gayathri, who reveals Him, as every twice-born’s real mother.

Venkatanatha studied yajur veda, maNimanjari, and anumadhvavijaya at Madurai.His powers of meditation were shown when his water from doing sandyAvandane happened to fall on a dry seed, which sprouted. He also developed an expertise in playing the Veena, so he became known as Veena Venkata Bhatta.

This is not surprising, since Venkatanatha came from a family skilled in music. His great-grandfather, Krishnabhatta, tutored the King of the Vijayanagar kingdom, Krishnadevaraya, in vina, and his father was skilled in music as well.

Upon returning from Madurai, <span class="read-more-target"> he was married to Saraswati, who was from a noble family. His marriage, just like his Upanayanam and schooling, was arranged by his brother Gururajacharya.

The Shastras say that for one who has control of his senses, wedded life does not hamper learning. For Venkatanatha, most of his learning occurred after marrying Saraswati, through the blessings of Goddess Saraswati.

So Venkatanatha went to Kumbhakonam, the seat of learning at the time. There, he studied under Sri Sudeendra teertha.He used to stay awake past midnight to write his own comments and notes on the lessons that had been done. Once, he engaged in a debate and defeated a mAyAvAdi at Rajamannar temple.

Though his victory was not unexpected Sri Sudheendra tirtha was surprised at his scholarship in grammar, profound knowledge and rare debating skill, and called him “Mahabhashya Venkatanathacharya”

Similarly he explained the significance of taptamudra dhAraNa quoting several smR^iti-s that the opponents had to accept his arguements were irrefutable. He had a son, Lakshminarayana. Although he and his family were in stark poverty, he was unaffected by it, being immersed in the sweet nectar of the Madhva philosophy.

Not even once did he give up his teachings and learning; he was steadfast in his determination to live by whatever came to him unsought and unasked. Still, when his master asked him to take sanyAsA, he found himself in a grave dilemma. For one thing, he knew that if he took sanyAsA, he would eventually have to take control of the maTha.

While trying to find a solution to this problem, Vidya Lakshmi herself appeared before him. She told him that if such great people like himself did not spread the right philosophy, that of Sri Madhvacharya, the maTha-s would fall into ruin. The light of Tattvavada would be extinguished by the darkness of Mayavada.

Understanding where his true duty lay, Venkatanatha obeyed Vidya Lakshmi and took sanyAsA. Sri Sudheendra teertha initiated Venkatanatha on the second day of the bright half of PAlguNa mAsa in the year durmati corresponding to the year 1621.He was given the holy name “Raghavendra Teertha”.

Wife becomes ghost, obtains liberation:

The Sanyasa ordination was arranged to take place on the second day of the bright half of PAlguNa mAsa in the year durmati corresponding to the year 1621. The spot chosen was Tanjore, in order to avoid hurting the feelings of VenkaTanAtha’s young wife Saraswati.

Finally, the grand day when VenkaTanAtha would relinquish his life as a householder and become a sanyAsi arrived. Saraswathi was required to stay home. However, at the last minute she was seized by a desire to see her husband’s face for the last time before he became totally inaccessible to her.

With this feeling, she ran towards the maTha throwing caution to the winds. Unfortunately, she did not see an old and unused well on the way, and fell into it. She died instantly, but because her death was an untimely one, she became a ghost. Even as a ghost, her only desire was to see her husband and so she went to the maTha.

By the time she arrived, the function was over and venkaTanAtha had become a sanyAsi with the AshramanAma of rAghavEndra teertha, the only solace for the downtrodden, the last resort for those without hope, the only court where every petitioner is guaranteed to get a patient and understanding hearing, the ocean of mercy that will never deny a deserving plea for help.

With his divine perception, rAyaru sensed saraswati’s presence, even though she was a ghost not visible to human eyes. His heart full of mercy, he sprinkled water from his kamanDala on her. The power of his penance was such that she was immediately granted moksha or liberation from the cycle of births and deaths. This was her reward for a lifetime of dedicated and selfless service to a noble soul.

Ascension as peeThAdhipati (throne of Asecitic)

Around 1623 Sri sudhIndra tIrtha shed his mortal coils at AnEgondi. His brindavan was consecrated there and rAyaru became the Head of the maTha. Yadavendra, a senior disciple of sudheendra teertha disputed this, but his claims were set aside by the Ruler of Tanjore, in favor of rAyaru.

RAyaru started his services by teaching all the works of shreemadAchArya to his disciples. He propagated right knowledge and vanquished several opponents. Apart from imparting knowledge and guiding his disciples,he composed works for the benefit of future generations

Pilgrimages of Sri RAyaru

Sri Raghavendra Tiirta started his services by teaching all the works of Srimadacharya to his disciples. He propagated right knowledge and vanquished several opponents. Apart from imparting knowledge and guiding his disciples,he composed works for the benefit of future generations

Soon after becoming the peeThAdipati, he began a series of piligrimages that took him to several places. After visiting Dyupuri and Paripurnadevanagara( Paripurnadevanagara in Sanskrit means “place where God, who is complete in every way, resides”).

At Manishrunga, he taught works such as pramaaNa paddhati and realized that it would benefit the public, if sub-commentaries were written on these major works, to make it easier to understand them. So it was here, that Raghavendra Swami wrote glosses on pramANa paddhati, vaadaavaLi, pramaaNa lakshaNa and many other works, many of which are known as bhAva dIpas.

He visited Rameshvaram and Madurai. Madurai was the seat of learning in those days, and one of the experts there was Neelakanta Dikshit. After seeing the lucid yet powerful style with which Raghavendra Swami debated, he was convinced that Raghavendra Swami’s master was really pUrNaprajna.

When Neelakanta tried testing Raghavendra Swami on various sutras, Raghavendra Swami showed him the work he had just finished-Bhatta Sangraha. Neelakanta was so thrilled by the depth of this work and how well it propounded Sri Madhvacharya’s philosophy, that he had it placed on an elephant and taken on a ceremonial procession.

At Srirangam, he gave extensive discourses on upanishads especially the Ishaavaasya upanishad. His disciples requested him to write a book, explaining the meanings of all the mantras, as well as their commentaries and glosses, of all the Upanishads.

He wrote glosses on the Ishaavaasya, thalavakaara, kaataka, ShaTpraShNa, mundaka, maanDukya, taittarIya, bR^ihadAruNyaka, and chanDogya Upanishads. He was about to write one for the aitareya, as well, but he wanted to give the honor to his disciple, Smrutimuktavali Krishnacharya, who had already completed the work.

Raghavendra Swami wanted to keep his oath of writing a gloss on all the Upanishads, so he wrote a gloss on only the mantra part of the Upanishad-aitareya mantraartha sangraha

He visited Vishnumangala,where Trivikrama Panditacharya had debated Madhvacharya for fifteen days,and finally had become an ardent worshipper of Madhvacharya. Sri Raghavendra,then visited Subramanya and then Udupi,where he started giving discourse on Sarvamoola Granthas.

He wrote a gloss for the Vyasaraya Tattparya Chandrika, called Chandrika Prakasha. Seeing his students struggle to understand this tough text, he wrote the meanings of the Sutras, called Tantradipika and the meanings of adhikAranas, known as Nyayamukthavali. At Udupi, he sang his famous “Indu Enage Govinda” song upon seeing Udupi Sri Krishna.

At Bidarahalli he met Srinivasacharya who was a unique householder. The glosses that he had written were already well known. Sri Raghavendra examined his works and was filled with admiration for Srinivasacharya, who, though being a householder,dedicated himself completely to the spreading of knowledge and learning. Raghavendra Swami bestowed upon him the name Srinivasa Tirtha, as a mark of his high learning.

After leaving Bidarahalli, he went to Pandarapur, Kohlapur, & Bijapur defeating Mayavadins, spreading Tattvavada philosophy, and giving Taptamudhradaran, thus initiating them into Vaishnavism. While residing on the banks of river Krishna, he wrote a tippani for Tattva Prakashika called Bhavadipa. He wrote a direct commentary on Anubhashya, called Tattva Manjari

At Malkhed he celebrated the Suddha Mangala of his teachings and discourses. Malkhed is situated on the Kagini River and is the place of Sri Jayatirtha’s Brindavan. Raghavendra Swami explained that, just the way Kagini River joins Bheema river, then Krishna River, and finally the ocean, Sri Jayathirtha’s work explains Bhashya of Sri Madhvacharya, who in turn tells us of Lord Krishna, who is an ocean of auspicious qualities.

Raghavendra Swami undertook extensive tours, under so many odds, visiting Tirupati, Srishailam, Kumbakonam, and Kanchi. He neither stopped teaching his devotees nor did he stop writing books. He took a vow to write Tippanis for all the Teekas of Sri Jayateertha.

When he had completed tippanis for 17 of the 18 Teekas of Sri Jayateertha, Lakshminarayanacharya, his son, shows him his work on Rig Bhashya, written along Raghavendra Swami’s line of teaching. This great saint felt that his disciple’s teaching should be shown to the rest of the world, so instead of writing a Tippani, he wrote a Rigartha Manjari, a vivritti, which gives the meaning of the first 40 suktas.

He wrote Mantroddhara, which gives details of all mantras according to Tantrasara.. By understanding the mantras according to Tantrasara, it is possible to perform many impossible tasks, through the grace of Sri Hari, by leading an austere life.

During his pilgrimages, Raghavendra Swami not only covered a vast area geographically in the days when road conditions were poor and travel was arduous, but also wrote several works covering a vast area of the Tattvavada philosophy.

He convincingly defeated many Advaitin pandits, through the grace of bhArati ramaNa mukhyaprANAntargata sree laxmeenArAyaNa.

Power to revive the dead

On a hot summer day, rAyaru was on his way home from a pilgrimage. He decided to rest in the shade of a tree at Krishnapuram (near Hubli). While there, he saw the Nawab (Muslim king) of the are walking towards him, with a sad demeanor.

The Nawab had heard of his miracles and had come to him as a last resort. He stated that his young son had died from a poisonous snakebite and been buried in a tomb close by. After hearing this, rAyaru contemplated silently for a few moments and then asked the king to take the body out of the tomb.

When the puzzled Nawab did as he was asked, rAyaru sprinkled holy water from his kamanDala and prayed to his ArAdhya mUrthy (favorite form of the Lord). Lo behold, the young boy woke up as though he was getting up from sleep. The Nawab was beside himself with joy.

Note: There are some very important points to note in this episode. Our shAstras talk about the concept of “Ayushya”, defined as the total amount of time that a being is allowed to live on earth, in a particular body. Any death that happens before this time is untimely and is called “apamRutyu”. Our shAstras say that once “Ayushya” is over death cannot be prevented, since that is Divine Will.

However, “apamRutyu” is a different aspect altogether. Life-histories of oursaints and other great souls are replete with instances where they warded off untimely death in deserving cases. In this case, since the child had suffered apamRutyu, rAyaru used his divine powers to revive it.

He did a similar thing in another instance. He was visiting the house of a village chieftain (called Desai). Hundreds of people had assembled for the occasion. As part of the food served to the guests, seekaraNe (a thick form of mango juice) was being prepared in a huge vessel.

Unfortunately, when nobody was watching him, the Desai’s son fell into this vessel and drowned. When the Desai and his wife came to know about it, they were totally devastated. However, they wanted to hide the news because they did not want to inconvenience everybody who had assembled there.

Being an aparOksha jnyani, RAyaru sensed the tragedy and asked the grief stricken couple to bring the dead boy before him. When this was done, he sprinkled water from his kamanDala and revived the boy. The joy of the ecstatic parents knew no bounds.

Those who came to humiliate end up been humiliated

There were some evil people who were jealous of the greatness of rAyaru and were always looking for opportunities to humiliate him. When some of them heard of the above incidents, they conspired to come up with a plan to humble rAyaru.

They chose a location that was very close to rAyaru’s location that day and asked a person to pretend to be dead. They covered his face and sat by his side wailing as if he was really dead. When rAyaru passed by, some of them approached him and entreated him to revive this “dead” man.

RAyaru looked at the body and said “I cannot revive him since his Ayushya is over”. This was what the evil persons wanted to hear. They immediately started condemning him and trumpeted to the world at large “Look at this charltan.

He does not know the difference between a living and a dead person. Our friend is pretending to be dead. He is now going to get up and denounce this fraud”. Nothing happened. Then they tried to wake him up, thinking that he was asleep.

None of their efforts were successful as the person was truly dead! They realized their mistake and begged rAyaru to revive the person, but he pleaded his helplessness since the person’s Ayushya was really over. The men who came to humble rAyaru were themselves humbled and his greatness became even more enhanced.

A point to note is that rAyaru did not curse the man to die or punish the evildoers. It was again Divine will that the conspirators chose a person whose Ayushya was really over and the timing was perfect to humiliate them. The Lord well and truly protects His beloved devotees.

Three forecasts for the one who took three avatAra

Three famous astrologers, known for their ability to predict the future with unerring accuracy, once came to cast the horoscope of rAyaru. They did it separately and came with 3 totally startingly different numbers – 100, 300 and 700!

Each was positive about his calculation, but could not explain the difference. When rAyaru heard about this, he laughed and said “They are predicting 3 different entities. One is predicting the lifespan of my body, another my tenure in the brindAvana and the third the influence of my granthAs (literary works).

Personality that influences even inanimate objects

Once some famous scholars came to meet with rAyaru. One the way they got lost and wanted to ask for directions. They noticed a washerman walking with his load on his head, but before asking him a question, they debated amongst themselves in Sanskrit if it was worthwhile asking somebody who looked like an ignoramus.

Imagine their surprise, when the washerman interrupted their discussion by saying in chaste sanskrit “If all that you want to know is directions to meet rAyaru then I should be able to help you”.

He then gave directions in chaste sanskrit to the embrassed scholars, and proceeded on his way. The scholars rested for a while and then proceeded to the river for their afternoon sandhya. They saw the washerman sitting on the bank.

They politely asked him in sanskrit if it was okay to perform sandhyAvandana there. He gave them a blank look and told them rather crudely in the local language “Look, if you want to speak with me, then use a language I can understand”.

Even from his tone and grammar it was obvious that he was an illiterate with little or no command over any language. The scholars were surprised since he had spoken to them in Sanskrit a few moments ago! They dismissed him as a madman and proceeded with their task.

The washerman left with his load and started walking back slowly. After a while, the scholars passed him again on the road. This time, he politely asked them in chaste sanskrit if they had had any difficulty in locating the road and if they needed any help. The scholars were totally baffled and practically ran away from there.

When they reached the maTha, they spoke to a knowledgeable person and explained the curious phenomenon they had observed. The person laughed and said “Did the washerman have his load on his head when he spoke to you?” When the scholars nodded in reply, he continued “It was not the washerman talking to you. It was the clothes.

He was carrying the clothes that our rAyaru had discarded. As long as he had the load on his head, he was a totally different person. Once the load was discarded he became his normal self”. Such was the power of rAyaru’s personality that even the clothes that he had discarded carried mystical powers.

Village bumpkin becomes prime minister!

Venkanna was a brahmin boy in a small village under the sovereignty of the Nawab of Adoni. Due to family problems, he was not tutored or taught any useful skills. He was assigned to the task of tending the family’s herd of cows, and thus used to spend his entire days in the countryside watching over the cows.

He had heard of the greatness of rAyaru and was eager to meet him and seek his blessings. His prayers were heard because one day the retinue of rAyaru passed close by. He immediately ran to the palanquin that rAyaru was travelling in and prostrated before it.

RAyaru looked at him and inquired about his antecedents. Venkanna explained his plight and stood with outstretched palms. RAyaru took pity on the boy and gave him some (mantrAkshate) consecrated rice and told him “When you are in real distress and need my help, put this on your head and think of me”. The palanquin moved on. Venkanna tied the precious rice into a bundle and always carried it with him.

One day, Venkanna was relaxing under the shade of a tree when he saw a noble man get down from a horse and rest under the shade of another tree close by. Curious, he watched him closely and immediately realized that the noble man was none other than the Nawab himself!

Even as this realization dawned on him, he saw another man on horseback approaching the Nawab. The new person got down from the horse, prostrated in front of the Nawab and handed him a written scroll. Now, both the Nawab and the rider were illiterate and needed somebody to help them.

When the Nawab looked around, he saw Venkanna. He also saw Venkanna’s tuft and his sacred thread and concluded that this was a brahmin. Since brahmins are usually literate, he felt that his problem was solved.

He beckoned Venkanna and handing him the scroll, commanded him to read. Poor Venkanna was in a dilemma since he was also illiterate. He could not refuse a direct order of the Nawab since that would mean immediate death, nor could he tell the truth that he was illiterate because the Nawab would not believe him and would think that Venkanna was trying fool him.

Caught in this deadly trap, he suddenly remembered the kind guru who had promised to help him in his hour of need. He took the consecrated rice and put it on his head. With this mind full of devotion towards rAyaru and his lips secretly muttering “rAghavEndra, rAghavEndra”, he boldly opened the scroll.

Lo behold, the characters on the scroll began to make sense and he could read! It was actually a piece of good news, informing the Nawab that his wife had delivered a baby boy, thus making him a father, something that he was passionately yearning for.

When he heard the news, he was overjoyed and immediately took out a pearl necklace from his neck and gave it to Venkanna. However, rAyaru sitting in Venkanna’s mind did not allow him to be satisfied with this.

He boldly prostrated before the Nawab and told him “If your Highness is really happy with me, then please give me a good job in your administration. I will serve you faithfully and honestly to the best of my ability”.

The Nawab was pleased with this answer and accordingly gave him a good job. Through hard work and diligence, Venkanna worked his way up the ranks and in a short time became the Nawab’s trusted divan. Thus a chance encounter with rAyaru transformed Venkanna’s entire life into a bed of roses!

Nawab tests rAyaru and loses

Once rAyaru visited Adoni and accepted Venkanna’s invitation to stay with him. Venkanna waxed eloquent about rAyaru’s prowess to his Nawab and forced him to visit rAyaru to pay his respects. Now the Nawab was skeptical about rAyaru and did not accept any authority other than Allah and his devotees.

He wanted to expose rAyaru and score a point on Venkanna. He secretly ordered for three silver plates, full of meat, but totally covered with silken cloth to be prepared. He took this with him and accompanied Venkanna to the pUja. Along with the offering brought by Venkanna, he also offered his covered plates as naivedya for rAma dEvaru.

RAyaru saw through his guile and sprinkled water from his kamanDala on the plates. Later, he ordered the clothes to be removed. The Nawab was waiting for this moment with bated breath. He was licking his lips in anticipation of unmasking this brahmin swAmiji.

When the clothes were removed, they revealed 3 plates full of fresh fruits and flowers! The Nawab was astounded and instantly realized the greatness of rAyaru, and the great sin he had committed by testing this man of god. He immediately prostrated before rAyaru and with tears in his eyes begged his forgiveness.

The kind and ever merciful rAyaru forgave him gladly. However, the Nawab was not satisfied, he begged rAyaru to accept some offering from him. rAyaru initially refused saying that he was a sanyAsi who had no desire for worldly things, but the Nawab kept on begging him, so finally he had to agree.

He asked for the Nawab to give him the village of manchAle on the banks of the tungabhadra. The Nawab was surprised since that was barren land, yielding no crops or revenue. He tried to talk rAyaru into accepting more fertile land, but rAyaru would not accept anything other than manchAle. The Nawab immediately gifted that village to rAyaru.

Two – two – two to enter brindAvana

RAyaru summoned his closest disciples and divan Venkanna and told them of his intention to enter a brindAvana live. The devotees were devastated but they could not change his decision since it was Divine will. They wanted to know when he would do so, but he told them that they would find out at the appropriate time.

One day, rAyaru was sitting outside under a tree, conducting a shAstra pATha for this disciples. He suddenly stood up, looked up at the sky and folded his hands in reverence. His disciples were surprised by this, but they also stood up and did exactly as he was doing.

Within a moment, a fragrant tulsi garland fell around rAyaru’s neck. When they pressed him for an explanation, he told them “I just saw Krishna Dvaipayana(Lord Vedavyasa) going in a heavenly chariot to vaikunTha. I asked him when my turn would come and he held up his Index and middle finger three times. He finally blessed me by throwing this mAla on me”.

The disciples were greatly intrigued by this and wanted to know the significance of this two-two-two. Rayaru smiled and told them “It means that I have 2 years, 2 months and 2 days left before entering the brindAvana!” The disciples calculated the date and concluded that it would be Virodhikruth Samvatsara, Shravana krishna paksha dwitiya (second day in the dark half of the moon, in the Hindu year Virodhikruth).

RAyaru selects manchaale for his brindAvana

RAyaru summoned his closest disciples and announced his choice of manchAle as the spot for his brindAvana live in mantrAlaya. They wanted to know what was special about that spot. RAyaru explained the spiritual significance of manchAle as follows:

In one of his earlier incarnation, rAyaru as prahlAda had performed a large yagna in that spot, sanctifying it forever. When arjuna was on his victorious journey in connection with the rAjasUya yAga being conducted by dharmarAja he fought with a local king at this spot. Since the king’s chariot was positioned over that spot, he was invincible.

In panic, Arjuna prayed to Krishna for guidance. Krishna appeared before him and told him to move his chariot a little backwards. The local king also foolishly moved his chariot forward and lost the battle immediately. Such was the power of the spot on which prahlAda had performed his yAga.

Venkanna had a beautiful brindAvana be built for rAyaru. But rAyaru did not want to use that and asked him to reserve it for a future personality. He then took Venkanna to a remote spot and showed a black rock. He wanted his brindAvana to be built using the rock.

When venkanna wanted to know what was special about that rock, rAyaru explained “While searching for sIta, Lord rama came here. He rested on this rock for a while. Since it has been sanctified by His touch, this rock is the one I want”. The brindAvana built under Venkanna’s guidance was used for shrI vAdIndara tIrtha at a later date.

Visits manchaalamma and obtains permission

Before entering the brindAvana in manchAle, RAyaru decided to seek the persmission of manchAlamma, the presiding deity of manchAle. Accordingly, he went to her temple and prayed to her. She immediately appeared before him in person and encouraged him to ask her for a boon. RAyaru stated his desire.

The dEvi replied “Once your brindAvana is established here, millions will visit manchAle to seek your blessings. I will be totally forgotten and nobody will associate this place with me! My temple will fall destitute without anybody to care for it”.

Rayaru replied “I will not let this happen. Here is my promise. If my devotees visit my brindAvana directly, without going to your temple first, then I will not help them. So, if they need my grace, they have to visit your temple first”. When manchAlamma heard this, she was pleased and immediately granted him permission to enter the brindAvAna in manchAle.

ShrAvana bahuLa bidige

On the day chosen (Virodhikruth Samvatsara Shravana krishna paksha dwitiya – 1671 A.D.), thousands of people had congregated in manchAle to see this rare event of a person entering a brindAvana alive. It had been done before only once – by vAdirAja tIrtha.

As usual, rAyaru got up before dawn, meditating on ShrI Hari and finished his bath during the early hours itself. After his japa and dhyana he gave a discourse on ShrImadAchArya’s works to his fortunate disciples for the last time. His disciples were grief stricken at the thought that this was going to be their master’s last discourse.

The master was filled with an overwhelming desire to teach as much as possible and the disciples were anxious and eager to absorb everything. The subject matter was as usual ShrImadAchArya’s Bhashya and ShrI JayatIrtha’s commentary for it.

That day’s discourse was the culmination of his life’s mission. For the thousands that had gathered there the realisation that they would not see such a treasure house of knowledge hereafter filled them with pain and agony. The discourse came to an end.

After bathing once again he started the puja of ShrI Rama and other icons of the samsthan. After going through all the details of the puja he blessed the entire gathering with tIrtha, prasad and phalamantrakshata.

As the appointed time was nearing he went to the spot that was already chosen and sat in padmAsana. He had his japa mala in his right hand and in front of him were all the moola granthas, sarva moola, tikas and tippanis on the vyasa peetha. For a while he was lost in contemplation; then he started his soul-stirring speech.

RAyaru enters brindAvana

RAyaru then took up his veena and started to sing in Bhairavi raaga the famous song,”Indu Enege Govinda” where he extols the Lord as His only Saviour and that he should be pardoned for having led an irreligious life without singing his glories. He ends the song with His mudrika “Dheera Venugopaala Bhaara Kaaniso Hariye”. Just as in His previous avatAra as VyAsaraja in this avatara also the blue darling of brindAvan in the form of an icon danced to the melodious of his darling who was going to enter the brindAvan.

After this rAyaru began reciting the pranava mantra. In a very short time he was lost in meditation. He reached the highest point in meditation. His face was serene. He was shining with a rare brilliance.

At one stage the japamala in the master’s hand became still. Venkanna and other disciples who understood this sign started arranging the slabs around him. They arranged the slabs upto his head and then as per his earlier instructions they placed a copper box containing one thousand two hundred LakshmeenArAyaNa shaligramas that had been specially brought from Gandaki river.

Then they placed the covering slab over it and filled it with earth. They poured twelve thousand varahas (abhisheka) over the brindavan that they had built. A grand feast was hosted to commemorate this glorious event.

Pls check this link if you want to know the details of the last speech of Rayaru

http://www.gururaghavendra1.org/lastspeech.htm

Click here for Sri Raghavendra Strotram
      </span></p>
  
  
  <label for="post-2" class="read-more-trigger"></label>
</div>
</div>
   
        
        <div  style="width:1170px; height:120px; background-color: black; margin-top: 30px; ">
            <p>fjhvhv</p>
        </div>
        
       

</body>

<!-- Mirrored from www.w3schools.com/html/tryit.asp?filename=tryhtml_div_capitals by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 May 2016 21:37:29 GMT -->
</html>

