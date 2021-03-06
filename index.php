<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html ng-app>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.14/angular.min.js"></script>
        <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
		<title>Princeton Ballroom Dance Club</title>
        <link href="ballroom.css" rel="stylesheet" type="text/css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>
    </head>
    <body>
    	<div id="menu">
    		<ul>
    			<li><a class="nav" href="index.html">Princeton Competition</a></li>
	    		<li><a class="nav" href="register.html">REGISTER</a></li>
	    		<li><a class="nav" href="#about">ABOUT</a></li>
	    		<li><a class="nav" href="#sch">SCHEDULE</a></li>
	    		<li><a class="nav" href="#rules">RULES</a></li>
                <li><a class="nav" href="#judges">JUDGES</a></li>
	    		<li><a class="nav" href="#directions">DIRECTIONS</a></li>
	    		<li><a class="nav" href="faq.html">FAQ</a></li>
	    		<li><a class="nav" href="http://princeton.edu/~pbdc">PRINCETON TEAM</a></li>
    		</ul>
    	</div>
    	</break>
    	<!--<div>
	    	<input type="text" ng-model="katherine" placeholder="enter name here">
	    	<hr>
	    	<h1>Hello {{katherine}}!</h1>
    	</div>-->
    	<div id="main" class="home-blocks">
            <div id="main-right">
                <h1>Princeton Ballroom Competition</h1>
                <table id="main-logo">
                    <tr>
                        <td>Dillion Gym, Princeton, NJ </td>
                        <td><a href="http://maps.google.com/maps/ms?ie=UTF8&amp;hl=en&amp;msa=0&amp;msid=101898161101184657193.00048de1233f13276cd20&amp;ll=40.345661,-74.658773&amp;spn=0.003925,0.006866&amp;z=17&amp;source=embed"><img src="map-logo.png" height="25px" alt="Go to the competition!" display:inline-block></a></td>
                    </tr>
                </table>
                <h1>SATURDAY OCTOBER 18 2014</h1>
                <a href="register.html"><div id="submit">Register</div></a>
            </div>
    	</div>
        <div id="about" class="home-blocks">
        </div>
        <div id="sch" class="home-blocks">
        </div>
        <div id="judges" class="home-blocks">
        </div>
        <div id="rules" class="home-blocks">
        </div>
        <div id="directions" class="home-blocks">
            <br/>
            <div class="center-text">
                <h1>Directions & Parking</h1>
                <table id="directions-logo">
                    <tr>
                        <td>Getting to Dillon Gym: </td>
                        <td><a href="http://maps.google.com/maps/ms?ie=UTF8&amp;hl=en&amp;msa=0&amp;msid=101898161101184657193.00048de1233f13276cd20&amp;ll=40.345661,-74.658773&amp;spn=0.003925,0.006866&amp;z=17&amp;source=embed"><img src="background-map-logo.png" alt="Go to the competition!" display:inline-block></a></td>
                    </tr>
                </table>
            </div>
            <div id="directions-map">
                <iframe height="300" width="75%" frameborder="0" scrolling="no" src="http://maps.google.com/maps/ms?ie=UTF8&amp;hl=en&amp;msa=0&amp;msid=101898161101184657193.00048de1233f13276cd20&amp;ll=40.345661,-74.658773&amp;spn=0.003925,0.006866&amp;z=17&amp;output=embed"></iframe>
                <br />
                <small>View <a href="http://maps.google.com/maps/ms?ie=UTF8&amp;hl=en&amp;msa=0&amp;msid=101898161101184657193.00048de1233f13276cd20&amp;ll=40.345661,-74.658773&amp;spn=0.003925,0.006866&amp;z=17&amp;source=embed" style="color:#0000FF;text-align:left">Dillon Gym</a> in a larger map</small>
            </div>
            </div>
            <div id="housing" class="home-blocks">
              <div class="center-text">
                <br/>
                <br/>
                <h1>Contact & Housing</h1>
              </div>
              <div id="housing-left">
                  <?php 
                    if (isset($_POST["email"])) { 
                        $ToEmail = 'cloudsrpretty168@gmail.com'; 
                        $EmailSubject = $_POST["subject"]; 
                        $mailheader = "From: ".$_POST["email"]."\r\n"; 
                        $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
                        $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
                        $MESSAGE_BODY = "Name: ".$_POST["name"].""; 
                        $MESSAGE_BODY .= "Email: ".$_POST["email"].""; 
                        $MESSAGE_BODY .= "Comment: ".nl2br($_POST["comment"]).""; 
                        mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
                  ?> 
                    <div id="form-contact-box">
                      Thank you for your message! We'll get back to you as fast as we can!
                    </div>
                  <?php 
                    } else { 
                  ?> 
                      <form action="index.php" method="post" id="form-contact-box">
                      <input name="name" type="text" id="name" placeholder="name">
                      <input name="email" type="text" id="email" placeholder="email">
                      <input name="subject" type="text" id="subject" placeholder="subject">
                      <textarea name="comment" cols="45" rows="6" id="comment" class="bodytext" placeholder="leave us a message!"></textarea>
                      <input type="submit" id="submit" name="Submit" value="Send">
                    </form> 
                  <?php 
                  }; 
                  ?>
              </div>
              <div id="housing-right">
                <table>
                  <tr>
                    <td><img src="hotel.png" id="housing-pic"></td>
                    <td><img src="hotel.png" id="housing-pic"></td>
                  </tr>
                  <tr>
                    <td><img src="hotel.png" id="housing-pic"></td>
                    <td><img src="hotel.png" id="housing-pic"></td>
                  </tr>
                </table>
              </div>
            </div>
        </div>

    </body>
    <footer>
    	<table id="footer-table">
    		<tr>
    			<p id="footer-table-logo">Insert image logo here</p>
    		</tr>
    		<tr>
    			<td class="footer-table-td">Hello</td>
    			<td class="footer-table-td">Sup</td>
    			<td class="footer-table-td">derp</td>
    		</tr>
    	</table>
    </footer>
</html>
