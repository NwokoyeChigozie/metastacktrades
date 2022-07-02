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
                    $("#signup_form").submit(function(event) {
                        event.preventDefault();
                        //
                        var ref = $("#register_ref").val();
                        var full_name = $("#register_full_name").val();
                        var username = $("#register_username").val();
                        var email = $("#register_email").val();
                        var country = $("#country").val();
                        var email1 = $("#register_email2").val();
                        var password = $("#register_password").val();
                        var password2 = $("#register_password2").val();
                        var phone = $("#register_phone").val();
                        var create_button = $("#register_submit").val();
                        //                var agree = $('#agree').is(":checked");  
                        //                console.log("ref: " + ref + " full_name: " + full_name + " username: " + username +" country: " + country + " email: " + email + " email1: " + email1 + " password: " + password + " password2: " + password2 + " phone: " + phone + " create_button: " + create_button)


                        //                $("#new-password--js").val('');
                        $("#register_submit").html('<b>....</b>');
                        $.ajax({
                            type: "POST",
                            url: "../phpscripts/signup.php",
                            data: {
                                ref: ref,
                                full_name: full_name,
                                username: username,
                                country: country,
                                email: email,
                                email1: email1,
                                password: password,
                                password2: password2,
                                phone: phone,
                                create_button: create_button
                            },
                            success: function(response) {
                                $(".r_message").html(response);
                                //      console.log(response);
                                //      console.log("Done"); 
                                $("#register_submit").html('Register your account');
                            },
                            error: function(response) {
                                console.log(response);
                                $("#register_submit").html('Register your account');
                            }
                        });

                    });

                });
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
            <form method=post name="signup_form" id="signup_form">

                <div class="form-group">
                    <input class="form-control" type="text" name="username" id="register_username" value='' style="font-size: 14px;" autofocus placeholder="Username"/>
                </div>
                
                <div class="form-group">
                    <input class="form-control" type="text" name="full_name" id="register_full_name" value='' style="font-size: 14px;" autofocus placeholder="Full Name">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="register_phone" id="register_phone" value='' style="font-size: 14px;" autofocus placeholder="Phone Number">
                </div>
                <style>
                    select {
                        line-height: 3;
                        background: url("data:image/svg+xml;utf8,<svg fill='black' height='24' viewBox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'><path d='M7 10l5 5 5-5z'/><path d='M0 0h24v24H0z' fill='none'/></svg>") no-repeat right #ddd;
                        -webkit-appearance: none;
                        background-position-x: auto;
                    }
                </style>
                <div class="form-group">
                    <label for="country" style="margin-left:10px;color:#A8A8A8">Select Country:</label><br>
                    <select id="country" class="country_select" name="country" style="height:60px !important;width:inherit !important;font-size:13px !important;padding:0px 15px !important;margin-right:0px !important;border-radius:4px;">
                        <option value="">Select Your Country</option>
                        <option value="Afganistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bermuda">Bermuda</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bonaire">Bonaire</option>
                        <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Brazil">Brazil</option>
                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                        <option value="Brunei">Brunei</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Canary Islands">Canary Islands</option>
                        <option value="Cape Verde">Cape Verde</option>
                        <option value="Cayman Islands">Cayman Islands</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Channel Islands">Channel Islands</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Christmas Island">Christmas Island</option>
                        <option value="Cocos Island">Cocos Island</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo</option>
                        <option value="Cook Islands">Cook Islands</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cote DIvoire">Cote DIvoire</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Curaco">Curacao</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic">Czech Republic</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="East Timor">East Timor</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Falkland Islands">Falkland Islands</option>
                        <option value="Faroe Islands">Faroe Islands</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="French Guiana">French Guiana</option>
                        <option value="French Polynesia">French Polynesia</option>
                        <option value="French Southern Ter">French Southern Ter</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Great Britain">Great Britain</option>
                        <option value="Greece">Greece</option>
                        <option value="Greenland">Greenland</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guadeloupe">Guadeloupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Hawaii">Hawaii</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="India">India</option>
                        <option value="Iran">Iran</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Isle of Man">Isle of Man</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Korea North">Korea North</option>
                        <option value="Korea Sout">Korea South</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Laos">Laos</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libya">Libya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Macau">Macau</option>
                        <option value="Macedonia">Macedonia</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Martinique">Martinique</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Midway Islands">Midway Islands</option>
                        <option value="Moldova">Moldova</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Nambia">Nambia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherland Antilles">Netherland Antilles</option>
                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                        <option value="Nevis">Nevis</option>
                        <option value="New Caledonia">New Caledonia</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Niue">Niue</option>
                        <option value="Norfolk Island">Norfolk Island</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau Island">Palau Island</option>
                        <option value="Palestine">Palestine</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Phillipines">Philippines</option>
                        <option value="Pitcairn Island">Pitcairn Island</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                        <option value="Republic of Serbia">Republic of Serbia</option>
                        <option value="Reunion">Reunion</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russia</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="St Barthelemy">St Barthelemy</option>
                        <option value="St Eustatius">St Eustatius</option>
                        <option value="St Helena">St Helena</option>
                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                        <option value="St Lucia">St Lucia</option>
                        <option value="St Maarten">St Maarten</option>
                        <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                        <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                        <option value="Saipan">Saipan</option>
                        <option value="Samoa">Samoa</option>
                        <option value="Samoa American">Samoa American</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syria">Syria</option>
                        <option value="Tahiti">Tahiti</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Erimates">United Arab Emirates</option>
                        <option value="United States of America">United States of America</option>
                        <option value="Uraguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Vatican City State">Vatican City State</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                        <option value="Wake Island">Wake Island</option>
                        <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zaire">Zaire</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                </div>

                <div class="form-group">
                    <input class="form-control" type="text" name="email" id="register_email" value='' style="font-size: 14px;" autofocus placeholder="E-mail Address">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="email2" id="register_email2" value='' style="font-size: 14px;" autofocus placeholder="Confirm E-mail Address">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" id="register_password" value='' style="font-size: 14px;" placeholder="Password">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password2" id="register_password2" value='' style="font-size: 14px;" placeholder="Confirm Password">
                </div>
                <div class="account-modal-bottom" style="padding: 0 !important; position: relative; margin-top: 40px;text-align:center ">Referred by
                    <b style="text-decoration: underline;margin-left: 5px;">
                        <?php if (isset($_GET['ref'])) {
                            echo $_GET['ref'];
                        } else {
                            echo "n/a";
                        } ?></b>
                </div>
                <input class="form-control" type="hidden" id="register_ref" value="<?php
                                                                if (isset($_GET['ref'])) {
                                                                    echo $_GET['ref'];
                                                                } else {
                                                                    echo '';
                                                                }
                                                                ?>">

                <div class="account-modal-bottom" style="padding: 0 !important; position: relative; margin-top: 40px;text-align:center ">Already have
                    an Account? <a id="loginNowBtn" style="text-decoration: underline;margin-left: 5px;" href="/Login/login.php"><b>Login
                            Here</b></a></div>

                <div class="account-modal-bottom" style="padding: 0 !important; position: relative; margin: 40px auto !important;text-align: center;display: flex;justify-content: center; ">
                    <button class="btn btn--blue register-btn" style="text-decoration:none" id="register_submit">
                        <span>Register your account</span>
                        <div class="spinner" style="display:block">
                            <div class="bounce1"></div>
                            <div class="bounce2"></div>
                            <div class="bounce3"></div>
                        </div>
                    </button>
                </div>
                <div class="account-modal-bottom r_message" style="padding: 0 !important; position: relative; margin: 40px auto !important;text-align: center;display: flex;justify-content: center; ">
              
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
  
</body>
</html>


                        