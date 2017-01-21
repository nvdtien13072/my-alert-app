<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Signin Template for Bootstrap</title>
    <script src="<?php echo base_url(); ?>public/jquery.min.js"></script>
    <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
    <link href="<?php echo base_url(); ?>public/bootstrap/css/bootstrap.css" rel="stylesheet">


    <style>
        .small {
            font-size: 85%
        }

        .help-block {
            display: block;
            margin-top: 5px;
            margin-bottom: 10px;
            color: #737373;
        }

        .form-control {
            border-radius: 0px !important;
        }

        .form-login {
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
            padding: 36px;
            margin-bottom: 36px;
            transition: all 250ms ease;
            border: 1px solid #e8e9e9;
        }

        .btn-login {
            background-color: #62072E;
            color: white;
            border-color: #7D0D44;

        }

        .btn-login:hover, .btn-login:focus {
            background-color: #ffffff;
            color: white;
            border-color: #7D0D44;
            color: #62072E;

        }

        .title-form {
            margin-bottom: 48px;
            font-weight: lighter;
            font-size: 24px;
            color: #62072E;
        }
    </style>
    <script>
        $(function () {


            $("#login-form").validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    }
                },
                message: {
                    email: "Please enter a valid email address",
                },

                submitHandler: function (form) {
                    login();
                }
            });
        });

    </script>


</head>

<body>

<div class="container" style="padding-top: 75px;">
    <h4 class="text-center title-form">Login Form</h4>
    <div class="row">
        <div class="form-login">
            <p><i class="glyphicon glyphicon-th-large"></i><strong>Login</strong></p>

            <form id="login-form" class="form-signin" method="post" action="">
                <fieldset>
                    <div class="form-group">
                        <input style="border-radius: 0px" type="text" name="email" value="" id="email" minlength="2"
                               class="form-control"
                               placeholder="Email address"
                               autofocus>
                        <p style="text-align: right">
                            <span class="small help-block">Usually, this is the email you used to register.</span>
                        </p>
                    </div>
                    <div class="form-group">
                        <input type="password" name="pword" id="pword" class="form-control" placeholder="Password" required/>
                    </div>
                </fieldset>
                <div class="form-group">
                    <input type="submit" value="Submit" onclick="login">
                </div>
                <p class="text-right">
                    <span class="small help-block">
                        <a style="color: #62072E" onclick="test123" tabindex="4">Forgot password?</a>
                        </span>
                </p>


            </form>

        </div>
    </div>


</div> <!-- /container -->

<!--<script src="--><?php //echo base_url(); ?><!--public/jquery.min.js"></script>-->
<!--<script src="--><?php //echo base_url(); ?><!--public/jquery-validation/jquery.validate.min.js"></script>-->
<script>

    function login() {
        url = '<?= URL_CALL_SERVICE?>/AdminPortal/Login';
        var email = $("#email");
        var password = $("#pword");

        data = {
            'data': {
                'Email': email.val(),
                'PassWord': password.val()
            }
        };

        var data2;

        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            async: false,
            success: function (resource, jqXHR) {
                data2 = resource;
            },
            statusCode: {
                200: function () {
                    get_list_function(data2);
                },
                401: function () {
                    alert('Dang nhap khong thanh cong');
                }
            },
        });

    }

    function send_session(session) {
        url = '<?php echo base_url()?>' + '/Site_security/check_session/' + session;
        $.ajax({
            url: url,
            type: 'POST',
            success: function (data) {
                window.location.href = "<?php echo base_url()?>StoreAccount/manage";
            },
        });
    }

    function send_list_function(session) {
        url = '<?php echo base_url()?>' + '/Site_security/get_list_function_to_session';

        $.ajax({
            url: url,
            data: {Name:session},
            type: 'POST',
            success: function (data) {

//                window.location.href = "<?php //echo base_url()?>//StoreAccount/manage";
            },
        });
    }

    function get_list_function(session) {
        var data2;
        url = 'http://myalertappwebapi.azurewebsites.net/api/AdminPortal/GetListFunction';
        $.ajax({
            url: url,
            type: 'POST',
            async: false,
            headers: {
                'Authorization': session
            },
            success: function (data, jqXHR) {
                data2 =data;


            },
            statusCode: {
                200: function () {
                    send_list_function(data2);
                    send_session(session);
                },
                401: function () {
                    alert('Ban khong quyen truy cap');
                }
            },
        });
    }
</script>
</body>
</html>
