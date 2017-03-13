<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AimStore - Signup</title>

    <link href="/aimstore/css/bootstrap.min.css" rel="stylesheet">
    <link href="/aimstore/css/datepicker3.css" rel="stylesheet">
    <link href="/aimstore/css/styles.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

    {{--<!--[if lt IE 9]>--}}
    {{--<link href="css/rgba-fallback.css" rel="stylesheet">--}}
    {{--<script src="js/html5shiv.js"></script>--}}
    {{--<script src="js/respond.min.js"></script>--}}
    {{--<![endif]-->--}}

</head>

<body>

<div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">Sign up</div>
            <div class="panel-body">
                <form action="/sign-up" role="form">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="Name" name="name" type="text" autofocus="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Confirm Password" type="password" value="">
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->



<script src="/aimstore/js/jquery-1.11.1.min.js"></script>
<script src="/aimstore/js/bootstrap.min.js"></script>
<script>
    !function ($) {
        $(document).on("click","ul.nav li.parent > a > span.icon", function(){
            $(this).find('em:first').toggleClass("glyphicon-minus");
        });
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    })
    $(window).on('resize', function () {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })
</script>
</body>

</html>
