<html>
<head>
    <meta charset="utf-8">
    <title>MusicLane</title>
    <link rel="shortcut icon" href="as.png" type="image/png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" media="screen" href="css/b1njTimeline.css">
    <link href="css/custom.css" rel="stylesheet">
    
    <!-- Live search JS function -->
    <script>
	function showResult(str) {
	  if (str.length==0) { 
	    document.getElementById("livesearch").innerHTML="";
	    document.getElementById("livesearch").className =
   			document.getElementById("livesearch").className.replace( /(?:^|\s)livesearchbox(?!\S)/g , '' );
	    return;
	  }
	  if (window.XMLHttpRequest) {
	    // code for IE7+, Firefox, Chrome, Opera, Safari
	    xmlhttp=new XMLHttpRequest();
	  } else {  // code for IE6, IE5
	    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp.onreadystatechange=function() {
	    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
	      document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
	      document.getElementById("livesearch").className ="livesearchbox";
	    }
	  }
	  xmlhttp.open("GET","livesearch.php?q="+str,true);
	  xmlhttp.send();
	}
	</script>

</head>

<body>
<div class="container">

        <header class="row">

	    	

	    	
        </header>

		<div class="row">
		      <nav class="navbar navbar-default " role="navigation">
		        <div class="navbar-header">

		          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
			          <span class="sr-only">Toggle Navigation</span>
			          <span class="icon-bar"></span>
			          <span class="icon-bar"></span>
			          <span class="icon-bar"></span>
		          </button>

		        </div>
		        <div class="collapse navbar-collapse" id="collapse">
			    	<ul class="nav navbar-nav">
			        	<li><a href="index.php">Home</a></li>
			        	<li><a href="about.php">About</a></li>
			        	<li><a href="Timeline2.php">Timeline</a></li>
	        	        <li><a href="gallery.php">Listen to music</a></li>
			        	<li><a href="contact.php">Contact</a></li>  

			        	<li><a href="login.php">Log in</a></li> 
			        </ul> 
		        </div>
		      </nav> 
        </div>

        <div class="row">

	         <div class="jumbotron DescContainer">
			        
                 <h2 class="AudioHeader">Contact Us</h2>
                 <h3 class="AudioDesc">E-mail: monirulhasann@gmail.com</h3>
			 </div>

			 <div class="jumbotron">
			        <div class="col-lg-4">

			        </div>

			        <div class="col-lg-4">
			         <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FGoodMusicBD&amp;width=150&amp;height=290&amp;
			         colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;
			         show_border=true&amp;appId=190875767665770" scrolling="no"
			          frameborder="0" style="border:none; overflow:hidden; width:250px; height:110px;" 
			          allowTransparency="true"></iframe>
			        </div>

			         <div class="col-lg-4">

			        </div>


		          </div>

	    </div>


		<footer class="row">
		         <p><small>Site under construction.(Dev: Monir and Hridoy)</small></p>
		         <p><small>SUST CSE 23th Batch</small></p>
		</footer>

</div>

<!-- javascript -->

	<script src="js/jquery-1.11.1.min.js"></script>
	
    <script src="js/bootstrap.js"></script>


</body>
</html>
