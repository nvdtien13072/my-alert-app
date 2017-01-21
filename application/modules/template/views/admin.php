<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Simple Sidebar - Start Bootstrap Template</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <link href="<?php echo base_url() ?>public/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <script>
        $(document).ready(function () {
            url = 'http://myalertappwebapi.azurewebsites.net/api/AdminPortal/GetListFunction';
            $.ajax({
                url: url,
                type: 'POST',
                headers: {
                    'Authorization': <?php ?>
                }
                data: data,
                beforeSend: function () {

                },
                success: function (data, jqXHR) {
                    send_session(data);

                }
            });
        });
    </script>

    <style>
        /* Toggle Styles */
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #E8E9E9;
        }

        .container {
            width: 100%;
            padding-left: 0px !important;
            padding-right: 0px !important;
        }

        #wrapper {

            /*padding-left: 0;*/
            /*margin-top: 45px;*/
            /*-webkit-transition: all 0.1s ease;*/
            /*-moz-transition: all 0.1s ease;*/
            /*-o-transition: all 0.1s ease;*/
            /*transition: all 0.1s ease;*/
            /*overflow: hidden;*/

        }

        #sidebar-wrapper {
            margin-left: -15px;
            margin-top: 30px !important;
            padding-top: 30px !important;
            z-index: 1000;
            position: fixed;
            /*left: 80px;*/
            width: 80px;
            height: 100%;
            /*margin-left: -80px;*/
            /*overflow-y: auto;*/
            background: #4D5359;
            /*-webkit-transition: all 0.1s ease;*/
            /*-moz-transition: all 0.1s ease;*/
            /*-o-transition: all 0.1s ease;*/
            /*transition: all 0.1s ease;*/
        }

        #wrapper.toggled #sidebar-wrapper {
            width: 80px;
            height: 100%;

        }

        #page-content-wrapper {
            position: relative;
            /*padding: 15px;*/
            width: 100%;
            overflow-x: hidden;
        }

        .xyz {
            /*min-width: 360px;*/
        }

        #wrapper.toggled #page-content-wrapper {
            /*position: relative;*/
            margin-right: 0px;
        }

        .fixed-brand {
            width: auto;
        }

        /* Sidebar Styles */

        .sidebar-nav {
            /*position: absolute;*/
            top: 0;
            margin: 0;
            padding: 0;
            list-style: none;
            margin-top: 2px;

        }

        .sidebar-nav li {
            /*width: 79px;*/
            height: 72px;
            background-color: #4D5359;
            /*line-height: 1;*/
            text-align: center;
            /*text-indent: 15px;*/
            line-height: 20px;

        }

        .sidebar-nav li a {
            display: block;
            text-decoration: none;
            color: #fff;
            padding-top: 15px;
            font-size: 10px;

        }

        .sidebar-nav li:hover {
            text-decoration: none;
            color: #fff;
            background-color: #303434;
            /*border-left: red 2px solid;*/
        }

        .sidebar-nav-bottom {
            bottom: 0;
            margin: 0;
            padding: 0;
            list-style: none;
            margin-top: 2px;

        }

        .sidebar-nav-bottom li {
            /*width: 79px;*/
            height: 72px;
            background-color: #4D5359;
            /*line-height: 1;*/
            text-align: center;
            /*text-indent: 15px;*/
            line-height: 20px;

        }

        .sidebar-nav-bottom li a {
            display: block;
            text-decoration: none;
            color: #fff;
            padding-top: 15px;
            font-size: 10px;

        }

        .sidebar-nav-bottom li:hover {
            text-decoration: none;
            color: #fff;
            background-color: #303434;
            /*border-left: red 2px solid;*/
        }

        .sidebar-nav li a:active,
        .sidebar-nav li a:focus {
            text-decoration: none;
        }

        .sidebar-nav > .sidebar-brand {
            height: 65px;
            font-size: 18px;
            line-height: 60px;
        }

        .sidebar-nav > .sidebar-brand a {
            color: #999999;
        }

        .sidebar-nav > .sidebar-brand a:hover {
            color: #fff;
            background: none;
        }

        .no-margin {
            margin: 0;
        }

        @media (min-width: 768px) {
            .col-md-11 {
                margin-left: -15px;
            }

        }

        @media (max-width: 992px) {
            #menu-toggle {
                display: inline-block !important;
                float: right
            }

            .col-md-11 {
                margin-left: 0px;
            }

            .navbar-header {
                width: 100% !important;
            }
        }

        @media (min-width: 991px) {
            #sidebar-wrapper {
                display: block !important;
            }
        }

        .fixed-brand {
            width: 80px;
        }

        #wrapper.toggled {
            /*padding-left: 0;*/
        }

        #sidebar-wrapper {
            display: none;

            /*width: 80px;*/
            height: 100%;
        }

        #wrapper.toggled #sidebar-wrapper {
            width: 80px;
            height: 100%;
        }

        #wrapper.toggled-2 #sidebar-wrapper {
            width: 80px;
            height: 100%;
        }

        #wrapper.toggled-2 #sidebar-wrapper:hover {
            width: 80px;
            height: 100%;
        }

        #page-content-wrapper {
            /*padding: 20px;*/
            position: relative;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }

        #wrapper.toggled #page-content-wrapper {
            position: relative;
            margin-right: 0;
            margin-left: 80px;
        }

        #wrapper.toggled-2 #page-content-wrapper {
            position: relative;
            margin-right: 0;
            /*margin-left: -200px;*/
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;
            width: auto;

        }

        .container {
            width: 100%;
            padding-left: 0px !important;
            padding-right: 0px !important;
        }

        /*.navbar {*/
        /*height: 30px;*/
        /*min-height: 30px;*/
        /*background-color: #FFFFFF;*/
        /*}*/
        /*.navbar-brand {*/
        /*padding: 7px;*/
        /*}*/
        .section-header-title {
            padding-left: 24px;
            padding-top: 0;
        }

        .section-header-title-text {
            font-size: 24px;
            font-weight: 200;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            /*max-width: 600px;*/
        }

        .section-header-title-actions {
            margin-left: 48px;
        }

        .section-header-alert-container-is-partial-width {
            margin-right: 325px;
        }

        .sidebar-nav.nav-pills.nav-stacked li a i {
            font-size: 25px !important;
            text-align: center;
            width: 100% !important;
            margin-bottom: 5px;

        }

        .x_panel {
            position: relative;
            width: 100%;
            margin-bottom: 10px;
            padding: 10px 17px;
            display: inline-block;
            background: #fff;
            border: 1px solid #E6E9ED;
            -webkit-column-break-inside: avoid;
            -moz-column-break-inside: avoid;
            column-break-inside: avoid;
            opacity: 1;
            transition: all .2s ease;
        }

        .x_title {
            border-bottom: 2px solid #E6E9ED;
            padding: 1px 5px 6px;
            margin-bottom: 10px;
        }

        .x_title h2 {
            margin: 5px 0 6px;
            float: left;
            display: block;
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
        }

        .panel_toolbox {
            float: right !important;
            min-width: 70px;
            list-style: none;
        }

        .panel_toolbox > li {
            float: right;
            cursor: pointer;
            padding-left: 10px;
        }

        .navbar-toggle {
            margin-right: 0px;
        }


    </style>
    <script>
        $(document).ready(function () {

//            get_rule();

        });

        function get_rule() {
            url = 'http://myalertappwebapi.azurewebsites.net/api/AdminPortal/GetListFunction';
            $.ajax({
                url: url,
                headers: {
                    "Authorization": "<?php echo $this->session->userdata('session')?>"
                },
                type: 'POST',
                success: function (data) {
                    send_list_function(data);
                },

            });
        }
        //        Set a value to the session 'menu'
        function send_list_function(lstFunction) {
            url = '<?php echo base_url()?>Site_security/get_list_function_to_session/';
            $.ajax({
                url: url,
                type: 'POST',
                data: {Name: lstFunction},
                dataType: 'json',
                success: function (data) {

                },

            });
        }


    </script>
</head>
<body>


<div class="container">
    <div class="row" style="margin-left: 0; margin-right: 0">
        <div id="wrapper" class="col-md-1">

            <div class="left_col scroll-view">

            </div>

            <nav class="navbar navbar-default navbar-fixed-top">
                <!--            Before reponsive-->
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display-->
                    <div class="navbar-header" style="height: 25px !important;">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" id="menu-toggle"
                                aria-expanded="false"
                        >
                            <span class="fa fa-bars" aria-hidden="true"></span>
                        </button>
                        <a class="navbar-brand" href="#"><i class="fa fa-rocket fa-4"></i>MY ALERT APPLICATION</a>
                    </div>
                </div>
                <!--            After reponsive-->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <!--                        <button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2"><span-->
                            <!--                                    class="glyphicon glyphicon-th-large" aria-hidden="true"></span></button>-->
                        </li>
                    </ul>
                </div><!-- bs-example-navbar-collapse-1-->
            </nav>
            <!-- Sidebar -->
            <div id="sidebar-wrapper" style="position: fixed">
                <ul class="sidebar-nav nav-pills nav-stacked" id="menu" style="height: 100%">

                    <li>
                        <a name="menu" href="<?php echo base_url() ?>/StoreBusiness/manage"><i class="fa fa-building"></i>Business </a>

                    </li>
                    <li>
                        <a name="menu" href="<?php echo base_url() ?>/StoreAccount/manage"> <i class="fa fa-user"></i>Account</a>

                    </li>
                    <li>
                        <a name="menu" href="<?php echo base_url() ?>/StoreEmail/manage"><i class="fa fa-envelope"></i>Email</a>

                    </li>
                    <li><a name="menu" href="<?php echo base_url() ?>YourAccount/manage"><i class="fa fa-cogs"></i>Profile</a></li>
                    <li style="bottom: 70px; position: fixed; width: 80px"><a name="menu" href=" href=" <?php echo base_url() ?>YourAccount/manage"><i class="fa fa-expeditedssl"></i>Change Password</a></li>
                    <li style="bottom: 0; position: fixed; width: 80px"><a name="menu" href="<?php echo base_url() ?>Site_security/logout"><i class="fa fa-sign-out"></i>Logout</a></li>


                </ul>


            </div><!-- /#sidebar-wrapper -->
        </div>

        <!-- Page Content -->
        <div id="" style=" background-color: #E8E9E9; padding-top: 70px" class="col-md-11">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Form Design
                        <small>different form elements</small>
                    </h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br>
                    <?php $this->load->view($view_module . '/' . $view_file); ?>
                </div>
            </div>


        </div>
        <!-- /#page-content-wrapper -->
    </div>
</div>
</div>

<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");

        if ($('#sidebar-wrapper').css('display') == 'none') {
            $('#sidebar-wrapper').show();
        } else {
            $('#sidebar-wrapper').hide();
        }
    });


    function initMenu() {
        $('#menu ul').hide();
        $('#menu ul').children('.current').parent().show();
        //$('#menu ul:first').show();
        $('#menu li a').click(
            function () {
                var checkElement = $(this).next();
                if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
                    return false;
                }
                if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
                    $('#menu ul:visible').slideUp('normal');
                    checkElement.slideDown('normal');
                    return false;
                }
            }
        );
    }
    $(document).ready(function () {
        initMenu();
    });

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
</body>
</html>