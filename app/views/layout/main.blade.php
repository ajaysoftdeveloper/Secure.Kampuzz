<?php
$siteNav[] = array('name'=>'articles.index','title'=>'Articles','child'=>array(
        array('name'=>'articles.index','title'=>'Manage Articles'),
        array('name'=>'articles.create','title'=>'Create a New Article')
));

$siteNav[] = array('name'=>'colleges.index','title'=>'Colleges','child'=>array(
        array('name'=>'colleges.index','title'=>'Manage Colleges'),
        array('name'=>'colleges.create','title'=>'Create a New College')
));

$siteNav[] = array('name'=>'courses.index','title'=>'Courses','child'=>array(
        array('name'=>'courses.index','title'=>'Manage Courses'),
        array('name'=>'courses.create','title'=>'Create a New Course')
));


/*$siteNav[] = array('name'=>'articles.index','title'=>'College Listing','child'=>array(
        array('name'=>'articles.index','title'=>'Manage Courses'),
        array('name'=>'articles.create','title'=>'College Introduction'),
        array('name'=>'articles.create','title'=>'Alumni Stats'),
        array('name'=>'articles.create','title'=>'Placement Details'),
        array('name'=>'articles.create','title'=>'Manage Photos & Videos')
));

$siteNav[] = array('name'=>'colleges.index','title'=>'Students','child'=>array(
        array('name'=>'colleges.index','title'=>'Student Search')
));

$siteNav[] = array('name'=>'courses.index','title'=>'Questions','child'=>array(
        array('name'=>'courses.index','title'=>'Waiting Replies'),
        array('name'=>'courses.create','title'=>'View All')
));

$siteNav[] = array('name'=>'courses.index','title'=>'Microsite','child'=>array(
        array('name'=>'courses.index','title'=>'Branding Settings'),
        array('name'=>'courses.create','title'=>'Look & Feel Settings')
));

$siteNav[] = array('name'=>'courses.index','title'=>'Account','child'=>array(
        array('name'=>'courses.index','title'=>'View Summary'),
        array('name'=>'courses.create','title'=>'Add Credits')
));*/
?>
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
    {{ HTML::style('css/multi-select.css') }}
    {{ HTML::style('css/bootstrap-select.css') }}
    {{ HTML::style('css/select2.css') }}
    {{ HTML::style('css/jasny-bootstrap.css') }}
    {{ HTML::style('css/bootstrap-datetimepicker.css') }}
    {{ HTML::style('css/colorpicker.css') }}
    {{ HTML::style('css/bootstrap-wysihtml5.css') }}
    {{ HTML::style('css/bootstrapValidator.css') }}

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>

    <script src="{{ URL::asset('js/html5shiv.js') }}"></script>
    <script src="{{ URL::asset('assets/js/respond.min.js') }}"></script>
    <![endif]-->
</head>

<body>
<div id="wrap">
    <div class="row header">
        <div class="col-xs-6 col-sm-4 col-md-4">
            <a href="{{ URL::route('dashboard') }}" class="navbar-brand"><img src={{ URL::asset('images/logo.png') }} alt="Kampuzz" title="Kampuzz" /></a>
            </div>
        <div class="col-xs-6 col-sm-8 col-md-8">
            <div class="btn-group pull-right xs_marg">


                <div class="dropdown pull-left">
                    <button class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown"> <span class="glyphicon glyphicon-user"></span> <span class="caret"></span> </button>
                    <ul class="dropdown-menu pull-right m-top">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> My Profile</a></li>
                        <li><a href="{{ URL::route('password') }}"><span class="glyphicon glyphicon-cog"></span> Change Password</a></li>
                        <li><a href="{{ URL::route('logout') }}"><span class="glyphicon glyphicon-off"></span> Log Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
         </div>
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <div class="row top-navbar">
                <div class="col-xs-4 top-navhandler">
                    <button type="button" class="navbar-toggle pull-left" data-toggle="collapse"
                            data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li>{{ htmlspecialchars_decode(link_to_route('dashboard','<span class="glyphicon glyphicon-home"></span>')) }}</li>
                <?php
                    for($i=0;$i<count($siteNav);$i++){
                 echo '<li class="dropdown';
                        if (in_array(Route::currentRouteName(), $siteNav[$i])) {
                            $activeItem = $siteNav[$i];
                            echo ' active';

                        }
                        echo '"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">'. $siteNav[$i]['title'] . ' <b class="caret"></b> </a>';
                   echo ' <ul class="dropdown-menu">';
                        $child = $siteNav[$i]['child'];
                        for($j=0;$j<count($child);$j++){
echo '<li>' . link_to_route($child[$j]['name'],$child[$j]['title']) .'</li>';
                            }

                  echo '  </ul>';

                echo '</li>';

                    }


                    ?>


            </ul>
        </div>
    </nav>
    <div class="row subnav">
        <div class="col-xs-1 col-sm-6">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Library</a></li>
                <li class="active">Data</li>
            </ol>
        </div>

    </div>

    <!-- Begin page content -->

    <div class="row">
        <div id="openCloseIdentifier"></div>
        <div id="slider" class="col-md-2">
            <div class="leftpan" id="my-affix">
                <div id="openCloseWrap" style="background: none repeat scroll 0% 0% transparent;">
                    <div id="topMenuImage" class="topMenuAction">
                        <div id="close_btn"></div>
                    </div>
                </div>
                <?php if(isset($activeItem)){ ?>
                <div class="f-box">

                    <h2><?php echo $activeItem['title']; ?></h2>
                    <ul>
                        <?php
                        for($i=0;$i<count($activeItem['child']);$i++){
echo '<li>'.  link_to_route($activeItem['child'][$i]['name'],$activeItem['child'][$i]['title']) . '</li>';
                        }
                        ?>

                    </ul>
                </div>
<?php } ?>
            </div>
        </div>
        <div class="col-md-10 right-body">
            <div class="dash-big-b-inner">
                <div class="box-content">
@yield('content')
                </div>
            </div>
        </div>
    </div>
</div>
<div id="footer">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-10 text-right">
            <p class="text-muted credit">&copy; 2015 <a href="http://www.netfunda.com" target="_blank">Netfunda Technologies</a>. All rights reserved</p>
        </div>
    </div>
</div>

<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
<script src="{{ URL::asset('js/bootstrap.js') }}"></script>
<script src="{{ URL::asset('js/moment.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap-datetimepicker.js') }}"></script>
<script src="{{ URL::asset('js/jquery.dataTables.js') }}"></script>
<script src="{{ URL::asset('js/DT_bootstrap.js') }}"></script>
<script src="{{ URL::asset('js/jquery.multi-select.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap-select.js') }}"></script>
<script src="{{ URL::asset('js/select2.js') }}"></script>
<script src="{{ URL::asset('js/jasny-bootstrap.js') }}"></script>
<script src="{{ URL::asset('js/pGenerator.jquery.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap-colorpicker.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap-switch.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap-maxlength.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.touchspin.js') }}"></script>
<script src="{{ URL::asset('js/wysihtml5-0.3.0.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap-wysihtml5.js') }}"></script>
<script src="{{ URL::asset('js/jquery.hotkeys.js') }}"></script>
<script src="{{ URL::asset('js/bootstrapValidator.js') }}"></script>
<script src="{{ URL::asset('js/jquery.cookie.js') }}"></script>
<script>
    $('.wysihtml5').wysihtml5();
    /*for CSS changer*/
    $(function () {
        $('#datetimepicker1').datetimepicker({
            pickTime: false
        });
    });

    if($.cookie("css")) {
        $("#test22").prop("href",$.cookie("css"));
    }

    $("#c_change a").click(function() {
        $("#test22").attr("href",$(this).attr('rel'));
        $.cookie("css",$(this).attr('rel'), {expires: 365, path: '/'});
        return false;
    });

    /*End*/

    /*for left slide Panel */


    if($.cookie("xyz")=="hide") {

        $("#slider").animate({marginLeft:"-15.9%"},10);
        $("#topMenuImage").html('<div id="open_btn"></div>');
        $("#openCloseWrap").css({"background":"#fff"});
        $(".right-body").animate({"width":"99.2%"},10);
        $("#openCloseIdentifier").hide();

    }

    else{
        $("#slider").animate({marginLeft:"0%"},10);
        $("#topMenuImage").html('<div id="close_btn"></div>');
        $("#openCloseWrap").css({"background":"none"});
        $(".right-body").animate({"width":"83.3333%"},10);
        $("#openCloseIdentifier").show();

    }





    $(".topMenuAction").click(function(){


        if($("#openCloseIdentifier").is(":visible")){

            $("#slider").animate({marginLeft:"-15.9%"},10);
            $("#topMenuImage").html('<div id="open_btn"></div>');
            $("#openCloseWrap").css({"background":"#fff"});
            $(".right-body").animate({"width":"99.2%"},10);
            $("#openCloseIdentifier").hide();
            $.cookie("xyz","hide", {expires: 365, path: '/'});
        }

        else{
            $("#slider").animate({marginLeft:"0%"},10);
            $("#topMenuImage").html('<div id="close_btn"></div>');
            $("#openCloseWrap").css({"background":"none"});
            $(".right-body").animate({"width":"83.3333%"},10);
            $("#openCloseIdentifier").show();
            $.cookie("xyz","visible", {expires: 365, path: '/'});
        }
        console.log($.cookie("xyz"));
    });



    /*End*/

    /*for Dropdown on Hover*/

    $(function(){
        $('.dropdown').hover(function() {
            $(this).addClass('open');
        }, function() {
            $(this).removeClass('open');
        });
    });

    /*End*/




    /* For Drop Search ul li Selection on top  */
    $( document ).ready(function() {
        $('#search_list li').click(function() {
            $('#shidden').val($(this).text());
            $('#searchbar').prop("placeholder",$(this).text());
        });
    });
    /* End  */



    $(document).ready(function() {
        $('#two-col-form-validation').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },


            fields: {
                firstName: {
                    validators: {
                        notEmpty: {
                            message: 'The first name is required and cannot be empty'
                        }
                    }
                },
                lastName: {
                    validators: {
                        notEmpty: {
                            message: 'The last name is required and cannot be empty'
                        }
                    }
                },

                username: {
                    validators: {
                        notEmpty: {
                            message: 'The username is required and cannot be empty'
                        },

                        stringLength: {
                            min: 6,
                            message: 'The full name must be less than 6 characters'
                        }
                    }
                },


                mobilePhone: {
                    validators: {
                        notEmpty: {
                            message: 'The last name is required and cannot be empty'
                        },
                        digits: {
                            message: 'The mobile phone number is not valid'
                        }
                    }
                },

                age: {
                    validators: {

                        notEmpty: {
                            message: 'The email address is required'
                        },

                        between: {
                            min: 10,
                            max: 99,
                            message: 'The age must be between 10 and 90'
                        }
                    }
                },


                email: {
                    validators: {
                        notEmpty: {
                            message: 'The email address is required'
                        },
                        emailAddress: {
                            message: 'The input is not a valid email address'
                        }
                    }
                },

                website: {
                    validators: {

                        notEmpty: {
                            message: 'The email address is required'
                        },

                        uri: {
                            message: 'The website address is not valid'
                        }
                    }
                },

                gender: {
                    validators: {
                        notEmpty: {
                            message: 'The gender is required'
                        }
                    }
                }
            }

        });

    });

    $('#resetBtn').click(function() {
        $('#two-col-form-validation').data('bootstrapValidator').resetForm(true);
    });

</script>
</body>
</html>