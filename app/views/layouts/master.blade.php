<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Laravel Admin Interface</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    {{HTML::style("/css/bootstrap.min.css")}}
    {{HTML::style("/css/font-awesome.min.css")}}
    {{HTML::style("/css/ionicons.min.css")}}
    {{HTML::style("/css/AdminLTE.css")}}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    {{HTML::script("https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js")}}
    {{HTML::style("https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js")}}
    <![endif]-->

    @yield('styles')

</head>

<body class="skin-blue">
<!-- header logo: style can be found in header.less -->

@include('layouts.header')

<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->

    @include('layouts.navigation')

    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">

        @yield('content')

    </aside><!-- /.right-side -->
</div><!-- ./wrapper -->

{{HTML::script("/js/jquery.2.0.3.js")}}
{{HTML::script("/js/jquery-ui-1.10.3.min.js")}}
{{HTML::script("/js/bootstrap.min.js")}}
{{HTML::script("js/plugins/iCheck/icheck.min.js")}}
{{HTML::script("js/AdminLTE/app.js")}}

@yield('scripts')

</body>
</html>