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
	
	</script>

</head>

<body>
<div class="container">

        <header class="row">

	    	

	    	    
        </header>

		<div class="row">
		      <nav class="navbar navbar-default " role="navigation">
		        <div class="navbar-header">

		          

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

        <br>
        <br><br><br>

        <div class="container">
	<div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title">Log In</h1>
                </div>
                <div class="panel-body">
                            <form role="form" action="/admin.php" method = "POST">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <input type="submit" class="btn btn-success btn-block">Log in</input>
                                    <h4>Only predefined admins can log in, modify and add new contents</a></h4>
                                </fieldset>
                            </form>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br>
		<footer class="row">
		         <h4><small>Site under construction.(Dev: Monir and Hridoy)</small></h4>
		         <p><small>  ©  SUST CSE 23th Batch</small></p>
		</footer>

</div>

<!-- javascript -->

	<script src="js/jquery-1.11.1.min.js"></script>
	
    <script src="js/bootstrap.js"></script>


</body>
</html>
