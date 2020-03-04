<html>
<title>EMDR TAKE LEAVE FORM</title>
<link rel="icon" type="image/png" href="images/icons/login.ico"/>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
<!-- This is a very simple parallax effect achieved by simple CSS 3 multiple backgrounds, made by http://twitter.com/msurguy -->
<style type="text/css">
	body{
    background: url(http://mymaplist.com/img/parallax/back.png);
	background-color:#1a1a1a;
    background: url(http://mymaplist.com/img/parallax/pinlayer2.png),url(http://mymaplist.com/img/parallax/pinlayer1.png),url(http://mymaplist.com/img/parallax/back.png);    
}

.vertical-offset-100{
    padding-top:100px;
}
.limiter{
	background-color:#1a1a1a;
}
</style>
<body class="limiter">
<div class="container">
    <div class="row vertical-offset-100">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Sign in</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" method="POST" action="loginController.php">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="id" name="id" type="text" required>
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="password" name="password" type="password" required >
			    		</div>
						<div class="form-group">
						<label for="type">Action Type:</label>
							<SELECT name="action">
								<option >Manage</option>
								<option >Personal</option>
							</SELECT>
							</div>
			    		<div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"> Remember Me
			    	    	</label>
			    	    </div>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" name="btnLoginSubmit" value="Login">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>
</body>
</html>