
<!DOCTYPE html>
<!-- khpage.html
     Kyler Hinton's Openshift Hello World
  -->
<html lang="en">

  <head>
    <title> Hello OpenShift World </title>

	<link rel="stylesheet" type="text/css" href="mystyle.css">
	<script>
	function bigImg(x){
  	  x.style.height = "700px";
   	 x.style.width = "960px";
	}

	function normalImg(x) {
 	   x.style.height = "394.5px";
  	  x.style.width = "632px";
	}
	</script>
  </head>

  <body style="background-color:beige;">
   <!--   <?php
      echo "Hello World!";
      ?>-->
       <h1><b><p id="style2">Kyler Hinton's Home Page CS 313</h1><hr/>
        
        <h2><a href = "assignments.html"><p id="style3"> CS 313 Assignments</b></a></h2>
         
            <p id="style1"><img src ="https://scontent-b-dfw.xx.fbcdn.net/hphotos-xap1/v/t1.0-9/11306_829750367058213_7077255537369915540_n.jpg?oh=821f8b3e1d6e3836dd4018933a306aec&oe=54854AC0" alt = "Picture of Kyler" />
              <div id="div1">
                <style>p.monospace{ font-family:"Lucida Console", Monaco, monospace}</style><p class="monospace"> I am 25 years old and am a Senior at BYU-Idaho. I am a Software Engineering Major. <br/>
                I love to code, I am passionate about game development and hope to one day be involved in that part of the industry. I love sports and soda, particularly Dr. Pepper! <br/>
                I also am very proud of my new mechanical keyboard take a look below! <br/>
                <p id="style3"><img onmouseover="bigImg(this)" onmouseout="normalImg(this)" src ="http://www.daskeyboard.com/images/product/daskeyboard-4-ultimate/daskeyboard-4-ultimate-front-view-carousel.jpg" width="50%" height ="50%" alt = "daskeyboard" />
                <br/><br/>
                <hr><i><p class="monospace">I have been married for 6 months to the </i><b>love of my life Ashley</b><br/>Here is a photo of us over MLK weekend visiting the Gilbert Temple Open house. <br/><br/
                    <p id="style3"><img src ="https://fbcdn-sphotos-b-a.akamaihd.net/hphotos-ak-ash3/1526836_702320886467829_133263998_n.jpg" alt = "Gilbert Temple" />
                </div>

  </body>
  </html>
