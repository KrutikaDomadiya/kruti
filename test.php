

<!DOCTYPE html>
<html>

<head>
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body style="background-color:#000033;color: white">
    <h4># Browser interaction and form validations</h4><br>
    <h3><span style="font-family: cursive;color: white">Please Register to konw daily updates</span></h3>


                <div class="col-md-6 login-right" style="margin-top: 20px;margin-left: 0px;">
                
                    <form action="#" method="POST">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" id="username" class="form-control" placeholder="Username"
                                autocomplete="off" required>
                        </div>
                        <h5 id="show-error"> </h5>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="Password" name="password" id="password" class="form-control" placeholder="Password"
                                autocomplete="off" required>
                        </div>
                        <h5 id="show-error1"> </h5>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" autocomplete="off" required>
                        </div>
                        <h5 id="show-error2"> </h5>
                        <div class="form-group">
                            <label>Contact Number</label>
                            <input type="text" name="number" id="number" class="form-control" autocomplete="off" placeholder="Contact Number" required>
                        </div>
                        <h5 id="show-error3"> </h5>
                        <button type="submit" id="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#show-error').hide();
            $('#show-error1').hide();
            $('#show-error2').hide();
            $('#show-error3').hide();
            var user_err = true;
            var pass_err = true;
            var contact_err = true;
            var email_err = true;

            $('#username').keyup(function () {
                username_check();
            });

            function username_check() {
                var user_val = $('#username').val();

                if (user_val.length == '') {
                    $('#show-error').show();
                    $('#show-error').html("**Please Fill the Username");
                    $('#show-error').focus();
                    $('#show-error').css("color", "red");
                    user_err = false;
                    return false;
                }
                else {
                    $('#show-error').hide();
                }
            }

            $('#password').keyup(function () {
                password_check();
            });

            function password_check() {
                var pass_val = $('#password').val();

                if (pass_val.length == '') {
                    $('#show-error1').show();
                    $('#show-error1').html("**Please Fill the Password");
                    $('#show-error1').focus();
                    $('#show-error1').css("color", "red");
                    user_err = false;
                    return false;
                }
                else {
                    $('#show-error1').hide();
                }
            }
            $('#email').keyup(function () {
                email_check();
            });

            function email_check() {
                var email_val = $('#email').val();
                var regex = /^[a-zA-Z0-9._]+@[a-zA-Z0-9]+\.[a-z]{2,6}$/;

                if (!(email_val.match(regex))) {
                    $('#show-error2').show();
                    $('#show-error2').html("**Provide Valid Email");
                    $('#show-error2').focus();
                    $('#show-error2').css("color", "red");
                    email_err = false;
                    return false;
                }
                else {
                    $('#show-error2').hide();
                }
            }
            $('#number').keyup(function () {
                number_check();
            });

            function number_check() {
                var number_val = $('#number').val();
                var regnum = /^[6-9][0-9]{9}/;
                if (!(number_val.match(regnum))) {
                    $('#show-error3').show();
                    $('#show-error3').html("**Provide Valid Contact Number");
                    $('#show-error3').focus();
                    $('#show-error3').css("color", "red");
                    contact_err = false;
                    return false;
                }
                if ((number_val.length < 10) || (number_val.length > 10)) {
                    $('#show-error3').show();
                    $('#show-error3').html("**Provide 10 Digit Number");
                    $('#show-error3').focus();
                    $('#show-error3').css("color", "red");
                    contact_err = false;
                    return false;
                }
                else {
                    $('#show-error3').hide();
                }
            }

            $('#submit').click(function () {
                 user_err = true;
                 pass_err = true;
                 contact_err = true;
                 email_err = true;
                 username_check();
                 password_check();
                 email_check();

                 if(( user_err == true) && ( pass_err == true) && ( contact_err == true) && ( email_err == true)){
                     return true;
                 }
                 else{
                     return false;
                 }
            });
        });
    </script>
</body>

</html>