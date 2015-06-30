<html>
    <head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="shortcut icon" href="https://d3ui957tjb5bqd.cloudfront.net/images/screenshots/products/3/33/33667/preview-0-220x146.png">
        <title>Optimal Login</title>
        <link rel="stylesheet" href="css/index_default.css">
        <script src="js/index.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    </head>
    <body>
		<div class="header-label">
		<p>OPTIMAL™ STORAGE</p></div>
        <div class="form-wrapper">
    <div id="register-panel">
        <div id="register-form">
            <form action="register.php" method="post">
                <div class="form-item">
					<input name="text"
                    placeholder="Username" required="required" type="text">
                </div>

                <div class="form-item">
					<input name=
                    "password" placeholder="Email" required="required" type=
                    "text">
                </div>

                <div class="form-item">
					<input name="password"
                    placeholder="Password" required="required" type="password">
                </div>

                <div class="button-panel">
                    <input class="button" title="Sign In" type="submit" value=
                    "Register">
                </div>
            </form>

            <div class="reminder">
                <p>
                    Already a member?<a href="#" id="login"> Login</a>
                    <span>➞</span>
                </p>

                <p>
                    <a href="#"></a>
                </p>
            </div>
        </div>
    </div>

    <form action="index.php" method="post">
        <div class="form-item">
            <input name="username" placeholder="Username" id="username" required="required" type=
            "text">
        </div>

        <div class="form-item">
			<input name="password"
            placeholder="Password" required="required" type="password">
        </div>

        <div class="button-panel">
            <input class="button" title="Sign In" type="submit" value=
            "Sign In">
        </div>
    </form>

    <div class="reminder">
        <p>
            Not a member? <a href="#" id="signup"> Sign up now</a>
            <span>➞</span>
        </p>

        <p>
            <a href="#">Forgot password?</a>
        </p>
    </div>
</div>
<script>
    $(document).ready(function() {
       $('#register-panel').hide(); 
    });
$('#signup').click(function() {
    $('#register-panel').show();
});
    $('#login').click(function() {
       $('#register-panel').hide(); 
    });
</script>
	</body>
</html>