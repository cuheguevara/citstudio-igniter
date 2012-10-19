<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo APP_NAME;?> - {title_bar} </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Admin Panel Template">
        <meta name="author" content="Westilian: Kamrujaman Shohel">
        <!-- styles -->
        <link href="<?php echo base_url().ASSETS;?>admin/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url().ASSETS;?>admin/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="<?php echo base_url().ASSETS;?>admin/css/jquery-ui-1.8.16.custom.css" rel="stylesheet">
        <link href="<?php echo base_url().ASSETS;?>admin/css/jquery.jqplot.css" rel="stylesheet">
        <link href="<?php echo base_url().ASSETS;?>admin/css/prettify.css" rel="stylesheet">
        <link href="<?php echo base_url().ASSETS;?>admin/css/elfinder.min.css" rel="stylesheet">
        <link href="<?php echo base_url().ASSETS;?>admin/css/elfinder.theme.css" rel="stylesheet">
        <link href="<?php echo base_url().ASSETS;?>admin/css/fullcalendar.css" rel="stylesheet">
        <link href="<?php echo base_url().ASSETS;?>admin/js/plupupload/jquery.plupload.queue/css/jquery.plupload.queue.css" rel="stylesheet">
        <link href="<?php echo base_url().ASSETS;?>admin/css/styles.css" rel="stylesheet">
        <link href="<?php echo base_url().ASSETS;?>admin/css/icons-sprite.css" rel="stylesheet">
        <link id="themes" href="<?php echo base_url().ASSETS;?>admin/css/themes.css" rel="stylesheet">
        <!--[if IE 7]>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().ASSETS;?>admin/css/ie/ie7.css" />
        <![endif]-->
        <!--[if IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().ASSETS;?>admin/css/ie/ie8.css" />
        <![endif]-->
        <!--[if IE 9]>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().ASSETS;?>admin/css/ie/ie9.css" />
        <![endif]-->
        <!--fav and touch icons -->
        <link rel="shortcut icon" href="ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <div class="branding">
                        <div class="logo">
                            <a href="index.html"><img src="<?php echo base_url().ASSETS;?>admin/img/logo.png" width="168" height="40" alt="Logo"></a>
                        </div>
                    </div>
                    <ul class="nav pull-right">
                        <li><a href="#"><i class="icon-share-alt icon-white"></i> Go to Main Site</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="login-container">
            <div class="well-login">
                <div class="control-group">
                    <div class="controls">
                        <div>
                            <input type="text" placeholder="Username or Email" class="login-input user-name">
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div>
                            <input type="password" placeholder="Password" class="login-input user-pass">
                        </div>
                    </div>
                </div>
                <div class="clearfix">
                    <button class="btn btn-inverse login-btn" type="submit">Login</button>
                </div>
                <div class="remember-me">
                    <input class="rem_me" type="checkbox" value=""> Remeber Me
                </div>
            </div>
        </div>
        <!-- javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url().ASSETS;?>admin/js/jquery.js"></script>
        <script src="<?php echo base_url().ASSETS;?>admin/js/jquery-ui-1.8.16.custom.min.js"></script>
        <script src="<?php echo base_url().ASSETS;?>admin/js/bootstrap.js"></script>
        <script src="<?php echo base_url().ASSETS;?>admin/js/prettify.js"></script>
        <script src="<?php echo base_url().ASSETS;?>admin/js/jquery.sparkline.min.js"></script>
        <script src="<?php echo base_url().ASSETS;?>admin/js/jquery.nicescroll.min.js"></script>
        <script src="<?php echo base_url().ASSETS;?>admin/js/accordion.jquery.js"></script>
        <script src="<?php echo base_url().ASSETS;?>admin/js/smart-wizard.jquery.js"></script>
        <script src="<?php echo base_url().ASSETS;?>admin/js/vaidation.jquery.js"></script>
        <script src="<?php echo base_url().ASSETS;?>admin/js/jquery-dynamic-form.js"></script>
        <script src="<?php echo base_url().ASSETS;?>admin/js/fullcalendar.js"></script>
        <script src="<?php echo base_url().ASSETS;?>admin/js/raty.jquery.js"></script>
        <script src="<?php echo base_url().ASSETS;?>admin/js/jquery.noty.js"></script>
        <script src="<?php echo base_url().ASSETS;?>admin/js/jquery.cleditor.min.js"></script>
        <script src="<?php echo base_url().ASSETS;?>admin/js/data-table.jquery.js"></script>
        <script src="<?php echo base_url().ASSETS;?>admin/js/TableTools.min.js"></script>
        <script src="<?php echo base_url().ASSETS;?>admin/js/ColVis.min.js"></script>
        <script src="<?php echo base_url().ASSETS;?>admin/js/plupload.full.js"></script>
        <script src="<?php echo base_url().ASSETS;?>admin/js/elfinder/elfinder.min.js"></script>
        <script src="<?php echo base_url().ASSETS;?>admin/js/chosen.jquery.js"></script>
        <script src="<?php echo base_url().ASSETS;?>admin/js/uniform.jquery.js"></script>
        <script src="<?php echo base_url().ASSETS;?>admin/js/jquery.tagsinput.js"></script>
        <script src="<?php echo base_url().ASSETS;?>admin/js/jquery.colorbox-min.js"></script>
        <script src="<?php echo base_url().ASSETS;?>admin/js/check-all.jquery.js"></script>
        <script src="<?php echo base_url().ASSETS;?>admin/js/inputmask.jquery.js"></script>
        <script src="http://bp.yahooapis.com/2.4.21/browserplus-min.js"></script>
        <script src="<?php echo base_url().ASSETS;?>admin/js/plupupload/jquery.plupload.queue/jquery.plupload.queue.js"></script>
        <script src="<?php echo base_url().ASSETS;?>admin/js/excanvas.min.js"></script>
        <script src="<?php echo base_url().ASSETS;?>admin/js/jquery.jqplot.min.js"></script>
        <script src="<?php echo base_url().ASSETS;?>admin/js/chart/jqplot.highlighter.min.js"></script>
        <script src="<?php echo base_url().ASSETS;?>admin/js/chart/jqplot.cursor.min.js"></script>
        <script src="<?php echo base_url().ASSETS;?>admin/js/chart/jqplot.dateAxisRenderer.min.js"></script>
        <script src="<?php echo base_url().ASSETS;?>admin/js/custom-script.js"></script>
        <!-- html5.js for IE less than 9 -->
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- css3-mediaqueries.js for IE less than 9 -->
        <!--[if lt IE 9]>
                <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->
        <script src="<?php echo base_url().ASSETS;?>admin/js/ios-orientationchange-fix.js"></script>
    </body>
</html>