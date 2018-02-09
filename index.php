<!DOCTYPE html>
<html>
<head>
	<title>Online Store</title>
	<link rel="shortcut icon" type="image/png" href="images/icon.png"/><!--Adding fevicon with the name of website-->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"><!--Linking bootstrap this will make page responsive-->
	<link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script><!--This brings all libraries of javascript so that we can use them-->
</head>

<script type="text/javascript">
    $(document).ready(function(){
      $('#para').click(function(){
        $('.register_form').addClass('vanish');
        $('.login_form').removeClass('vanish');
      })

      $('#para2').click(function(){
        $('.login_form').addClass('vanish');
        $('.register_form').removeClass('vanish');
      })
    })
</script>


<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Chorbazaar</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li style="color:#fff"><a href="#about">About Us</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container-fluid">
    	<div class="row">
    		<div class="col-md-7">
    			<h1 class="text_center super_large white" >Project on Web Dewelopment</h1>
    		</div>
    		<div class="col-md-5">
    			<div class="register_form white">
    				<form class="form" method="POST" action="Perform_reg.php">
                        <label>Username:</label><br>
                        <input type="text" class="form-control" name="username"><br>
	    				<label>Email:</label><br>
	    				<input type="email" class="form-control" name="email"><br>
	    				<label>Password:</label><br>
	    				<input type="password" class="form-control" name="password"><br>
	    				<input id="register" type="submit" value="Register Me" class="btn btn-success btn-block">
	    			</form>
	    			<p id="para">Already a member? Sign In</p>
    			</div>


    			<div class="login_form white vanish">
    				<form class="form" method="POST" action="perform_login.php">
	    				<label>Email:</label><br>
	    				<input type="email" class="form-control" name="email"><br>
	    				<label>Password:</label><br>
	    				<input type="password" class="form-control" name="password"><br>
	    				<input id="register" type="submit" value="Sign in" class="btn btn-danger btn-block">
	    			</form>
	    			<p id="para2">Not a member? sign up</p>
    			</div>
    			
    		</div>
    		
    	</div>
    </div>
</body>
</html>