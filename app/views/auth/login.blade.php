<!DOCTYPE html>
<html>
<head>
    <title>Kampuzz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <!-- Bootstrap -->

    {{ HTML::style('css/bootstrap.css') }}
    {{ HTML::style('css/color_blue.css') }}
    {{ HTML::style('css/font-awesome.min.css') }}
    {{ HTML::style('css/style.css') }}
    {{ HTML::style('css/responsive.css') }}


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{ URL::asset('js/html5shiv.js') }}"></script>
    <script src="{{ URL::asset('assets/js/respond.min.js') }}"></script>
    <![endif]-->
</head>

<style>
    html {
        display: table;
        height: 100%;
        width: 100%;
    }

    body {
        display: table-cell;
        vertical-align: middle;
    }
</style>

<body id="login">
<div class="col-md-4"></div>


    {{ Form::open(array('route' => 'login.post', 'class'=>'login-form col-md-4')) }}

    <p style="text-align: center"><a href="index.html"><img class="img-responsive" style="text-align: center" src="images/logo.png"></a></p>
    <h2 class="bottom-margin"> Please sign in </h2>

@if (Session::get('message'))
    <div class="alert alert-danger">{{ Session::get('message') }}</div>
@endif

    <div class="form-group bottom-space">
        <label class="control-label" for="email"><strong>User Name</strong></label>
        <input type="text" class="form-control" id="username" name="username" placeholder=" Type User Name">

    </div>
    <div class="form-group">
        <label class="control-label" for="password"><strong>Password</strong></label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">

    </div>
    <div class="checkbox">
        <label>

        </label>


    </div>
    <div class="form-group">

        <button type="submit" class="btn btn-default btn-primary btn-sm">Sign in</button>

    </div>

    {{ Form::close() }}

<div class="col-md-4"></div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
<script src="{{ URL::asset('js/bootstrap.js') }}"></script>


</body>
</html>