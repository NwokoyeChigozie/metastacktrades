 <!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Metastacktrades - Forex and CFD broker with possibility to trade in cents!</title>
    <meta charset="utf-8">
    <meta name="description" content="Forex and CFD broker with possibility to trade in cents!">
    <meta name="keywords" content="Forex and CFD broker with possibility to trade in cents!">
    <meta name="author" content="App">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
    <link rel="apple-touch-icon" sizes="120x120" href="../apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
<link rel="manifest" href="../site.webmanifest">
<link rel="mask-icon" href="../safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#fff7f7">
<meta name="theme-color" content="#ffffff">
    <!-- favicon-->
    <link rel="shortcut icon" type="image/ico" href="../images/favicon2.png" />
    <!-- Font Family-->
    <link href="Stylesheets/css.css" rel="stylesheet">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="Stylesheets/bootstrap.css">
    <!-- Animation CSS-->
    <link rel="stylesheet" href="Stylesheets/animate.css">
    <!-- Owl carousel .css-->
    <link rel="stylesheet" href="Stylesheets/owl_002.css">
    <link rel="stylesheet" href="Stylesheets/owl.css">
    <!-- font-awesome css-->
    <link rel="stylesheet" href="Stylesheets/font-awesome.css">
    <!-- swiper slider-->
    <link rel="stylesheet" href="Stylesheets/swiper.css">
    <!-- Style .css-->
    <link id="color" rel="stylesheet" href="Stylesheets/color1.css" media="screen">
       <link rel="stylesheet" href="Fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
                    $("#login_form").submit(function(event) {
                        console.log("event");
                        event.preventDefault();

                      var email = $("#email").val();
                      var password = $("#password").val();
                      var login_button = $("#submit").val();


                        $("#submit").html('<b>....</b>');
                        $.ajax({
                            type: "POST",
                            url: "../phpscripts/login.php",
                            data: {
                                email: email,
                                password: password,
                                login_button: login_button
                            },
                            success: function(response) {
                                console.log("res",response);
                                $(".l_message").html(response);
                                $("#submit").html('LOGIN');
                            },
                            error: function(response) {
                                console.log(response);
                                $("#submit").html('LOGIN');
                            }
                        });

                    });

                });
                
    // $(document).ready(function(){
    //  $("form").submit(function(event){
         
    //   event.preventDefault();
    //   var email = $("#email").val();
    //   var password = $("#password").val();
    //   var login_button =    $("#submit").val();
         
    //   $(".error_message").load("../phpscripts/login.php", {
    //   email : email,
    //   password : password,
    //   login_button : login_button
    //   });
    //  });   
    // });
</script>
  </head>
  <body>
    <!-- loader-->
    
    <!-- loader end-->
    <section class="auth-page">
      <div class="animation-circle-inverse"><i></i><i></i><i></i></div>
      <div class="animation-circle"><i></i><i></i><i></i></div>
      <div class="auth-card">
        <div class="text-center">
            
          <h2>Sign In</h2>
          <div class="line"></div>
          <p>Welcome To Metastacktrades, Please Sign in With Your Personal Account Information.</p>
        </div>
        <div class="main">
          <form id="login_form" class="auth-form" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label><i class="fa fa-envelope-o"></i>
              <input class="form-control" id="email" required="" name="email" type="text" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label><i class="fa fa-lock"></i>
              <input class="form-control" id="password" name="password" type="password" placeholder="Password">
<!--            <a class="forgot-pass" href="../forgot-password">forgot?</a>-->
            </div>
            <div class="form-group">
              <button class="btn submit" id="submit" type="submit">Sign in</button>
            </div>
              <div class="account-modal-bottom l_message" style="padding: 0 !important; position: relative; margin: 40px auto !important;text-align: center;display: flex;justify-content: center; ">
                    <!--<div class="alert alert-danger" style="border-radius:3px;text-align:center;background-color:#E23D28;color:#fff;padding:10px 85px;margin-top:0px"> Registration Successful</div>-->
                </div>
          </form>
        </div>
      </div>
    </section>
   
    <!-- js file-->
    <script src="Stylesheets/jquery-3.js"></script>
    <!-- bootstrap js file-->
    <script src="Stylesheets/bootstrap.js"></script>
    <!-- popper js file-->
    <script src="Stylesheets/popper.js"></script>
    <!-- Owl carousel js file-->
    <script src="Stylesheets/owl.js"></script>
    <!-- tilt js file-->
    <script src="Stylesheets/tilt.js"></script>
    <!-- script js file-->
    <script src="Stylesheets/script.js"></script>
      <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f0c8ffe67771f3813c0f56f/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

  
</body></html>


                        