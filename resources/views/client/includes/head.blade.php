<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link href="https://fonts.googleapis.com/css?family=Lato:400,900,700,400italic" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/clientassets/style.css">
    <title>GameOfTech</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .sticky {
            position: fixed;
            top: 10px;
            width: 100%;
        }

        .navbarul {
            padding-top: 14px !important;
        }

        .hovershow {
            display: none;
        }
    </style>
</head>

<body>


    <header id="ntheader">


        <div id="shopify-section-header_top">

            <div style="padding: 6px;background-color: gainsboro;margin:0" class="row">
                <div class="col-lg-4 col-sm-12  col-md-4 ">
                    <div style="color: gray;font-size: 12px;">Call Us: +92(0)42 111-738-245</div>
                </div>

                <div class="col-lg-4 col-sm-12 col-md-4">
                    <div style="color: gray;font-size: 12px;text-align: center;" class="header-text">Free Shipping on all orders worth
                        <span>Rs. 2000</span> Above
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 col-md-4">

                </div>
            </div>

            <div id="navbar" style="background: white;margin-top:-10px;z-index: 1;left: 0px;">
                <div style="background-color:white;margin:25px 0 10px 0" class="row">
                    <div class="col-lg-4 col-sm-12 col-md-4 ">
                    </div>
                    <div class="col-lg-4 col-sm-12 col-md-4">
                        <div style="color: gray;font-size: 33px;text-align: center; margin-top:-15px;  font-family: serif;">
                            <a href="{{ url('/') }}"><img src="/clientassets/images/GameOfTech.png" style="width: 40%" alt=""></a>

                        </div>
                    </div>
                    <div style="text-align: right;" class="col-lg-4 col-sm-12 col-md-4">

                        <i class="fa fa-search" style="font-size:24px;margin-left: 7px;margin-right:7px;cursor:pointer"></i>
                        <i onclick="show_sidebar_login()" class="fa fa-sign-in" style="font-size:24px;margin-left: 7px;margin-right:7px;cursor:pointer"></i>
                        <i class="fa fa-heart-o" style="font-size:24px;margin-left: 7px;margin-right:7px;cursor:pointer"></i>
                        <i onclick="show_sidebar()" class="fa fa-cart-plus" style="font-size:24px;margin-left: 7px;margin-right:7px;cursor:pointer"></i>
                        <i class="fa fa-truck" style="font-size:24px;margin-left: 7px;margin-right:30px;cursor:pointer"></i>

                    </div>

                </div>


                <nav style="z-index: 1;padding:0px;border-top:1px solid gainsboro;padding-top: 19px;padding-bottom: 0px;" class="navbar sticky-top">
                    <ul id="navbarul">
                        <li><a onmouseenter="fun()" onmouseleave="remove()" href="">New In</a></li>
                        <li><a onmouseenter="fun()" onmouseleave="remove()" href="">Women</a></li>
                        <li><a onmouseenter="fun()" onmouseleave="remove()" href="">Man</a></li>
                        <li><a onmouseenter="fun()" onmouseleave="remove()" href="">Kids</a></li>
                        <li><a onmouseenter="fun()" onmouseleave="remove()" href="">Beauty</a></li>
                        <li><a onmouseenter="fun()" onmouseleave="remove()" href="">Accessories</a></li>
                        <li><a onmouseenter="fun()" onmouseleave="remove()" href="">Home</a></li>
                        <li><a onmouseenter="fun()" onmouseleave="remove()" href="">Style Guide</a></li>
                        <li><a onmouseenter="fun()" onmouseleave="remove()" href="">Store Locator</a></li>

                    </ul>

                </nav>
                <style>
                    .nav-hover {
                        background-color: white;
                        width: 100%;
                        height: 300px;
                        margin-top: 34px;
                        position: absolute;
                        top: 122px;
                        z-index: 100;
                        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                        text-align: center;
                    }
                </style>


                <div onmouseenter="fun()" onmouseleave="remove()" id="hovershow" class="hovershow nav-hover">
                    <div class="container">
                        <div style="margin-top: 40px;" class="row">
                            <div class="col-md-3">
                                <div style="border-bottom: 1px solid gray;text-align:left">
                                    <h6>Ready To Wear</h6>
                                </div>
                                <ul style="text-align: left; list-style-type:none;padding:0">
                                    <li>Printed</li>
                                    <li>Solid Colored</li>
                                    <li>Luxury Pret</li>
                                    <li>Embroided</li>
                                    <li>Silk</li>
                                    <li>Ready To Wear Outfits</li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <div style="border-bottom: 1px solid gray;text-align:left">
                                    <h6>Ready To Wear</h6>
                                </div>
                                <ul style="text-align: left; list-style-type:none;padding:0">
                                    <li>Printed</li>
                                    <li>Solid Colored</li>
                                    <li>Luxury Pret</li>
                                    <li>Embroided</li>
                                    <li>Silk</li>
                                    <li>Ready To Wear Outfits</li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <div style="border-bottom: 1px solid gray;text-align:left">
                                    <h6>Ready To Wear</h6>
                                </div>
                                <ul style="text-align: left; list-style-type:none;padding:0">
                                    <li>Printed</li>
                                    <li>Solid Colored</li>
                                    <li>Luxury Pret</li>
                                    <li>Embroided</li>
                                    <li>Silk</li>
                                    <li>Ready To Wear Outfits</li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <img src="/clientassets/images/1.jpg" style="width: 100%; height: 221px; object-fit:cover" alt="">

                            </div>

                        </div>

                    </div>


                </div>
            </div>


        </div>


        <script>
            function fun() {
                document.getElementById('hovershow').style.display = 'block';
            }

            function remove() {
                document.getElementById('hovershow').style.display = 'none';
            }
        </script>

        <style>
            .navbar ul {
                list-style: none;
                padding: 0;
                margin: 0;
                background-color: white;
                color: black;
                text-align: center;
                width: 100%;
            }

            .navbar li {
                display: inline-block;
            }

            .navbar a {
                text-decoration: none;
                color: black;
                width: 90px;
                display: block;
                padding-bottom: 25px;
                font-size: 15px;

            }
        </style>

        <div>





        </div>




    </header>


    <!-- This is sidebar code for view cart and checkout start -->
    <div style="position: fixed;" id="sidebar_" class="leftbar_onclick">
        <div style="border-bottom: 1px solid gainsboro;margin:0;align-items:center" class="row">
            <div style="text-align: left;margin-top:10px" class="col-md-6">
                <p>SHOPPING CART</p>
            </div>
            <div style="text-align: right;" class="col-md-6">
                <p style="cursor:pointer;margin-top:10px" onclick="hide_sidebar()">&#10006;</p>
            </div>
        </div>

        <div style="margin: 0; margin-top:20px;text-align:center;" class="row">
            <div class="col-md-6">
                <img style="width: 100%;object-fit:contain" src="/clientassets/images/razer.jpg" alt="">
            </div>
            <div class="col-md-6">
                <p style="line-height: 2;">Engima </p>
                <p style="line-height: 0;">100ml</p>
                <p style="line-height: 1;">Rs. 2990.00</p>
                <div style="border: 1px solid black; padding:6px">
                    <button style="border: none;float: left;background-color:white;cursor:pointer"><i class="fa fa-trash-o"></i></button>
                    <input style="width: 17px;border: navajowhite;" type="text" value="1">
                    <button style="border: none;float: right;background-color:white;cursor:pointer">+</button>
                </div>

            </div>
        </div>


        <div style="margin: 0;position:absolute;bottom:0" class="row">
            <div class="col-md-6">
                <p style="font-weight: bold;font-size: 20px;">Subtotal:</p>
            </div>
            <div style="float: right;" class="col-md-6">
                <p style="float:right;font-size:22px">R.s 4980:00</p>
            </div>

            <div style="margin: 0;" class="row">
                <div class="col-md-12">
                    <button style="width: 100%;
    padding: 10px;
    background-color: white;">
                        <a href="cart" style="color:black; padding: 10px; width: 114%;text-decoration:none">VIEW CART</a>
                    </button>

                </div>
                <div class="col-md-12">
                    <button style="border: 1px solid black;padding: 10px;width: 114%;background-color: black;color: white;margin-top: 10px;">
                        <a href="checkout" style="color:white; padding: 10px; width: 114%;text-decoration:none"> CHECK OUT </a>
                    </button>
                </div>

            </div>
        </div>




    </div>
    <style>
        #sidebar_ {
            display: none;
        }

        .leftbar_onclick {
            position: absolute;
            right: 0;
            top: 0;
            width: 300px;
            background-color: white;
            height: 97.5vh;
            z-index: 1;

        }
    </style>
    <script>
        function show_sidebar() {
            document.getElementById('sidebar_').style.display = "block";
        }

        function hide_sidebar() {
            document.getElementById('sidebar_').style.display = "none";
        }
    </script>

    <!-- This is sidebar code for view cart and checkout end -->







    <!-- This is sidebar code for login start -->
    <div style="overflow: scroll;position:fixed" id="sidebar_login" class="leftbar_onclick">
        <div style="border-bottom: 1px solid gainsboro;margin:0;align-items:center" class="row">
            <div style="text-align: left;margin-top:10px" class="col-md-6">
                <p>LOGIN</p>
            </div>
            <div style="text-align: right;" class="col-md-6">
                <p style="cursor:pointer;margin-top:10px" onclick="hide_sidebar_login()">&#10006;</p>
            </div>
        </div>
        <div style="width: 100%;
    margin-left: auto;
    margin-right: auto; margin-top:30px" class="row container">
            <div class="col-md-12">
                <label for="">Email *</label>
                <input type="email" class="form-control">

            </div>

        </div>

        <div style="width: 100%;
    margin-left: auto;
    margin-right: auto; margin-top:30px" class="row container">
            <div class="col-md-12">
                <label for="">PASSWORD *</label>
                <input type="text" class="form-control">

            </div>

        </div>
        <div style="width:80%;margin-left:auto;margin-right:auto">

            <button style="border: 1px solid black;padding: 10px;width: 100%;background-color: black;color: white;margin-top: 10px;">
                <a href="checkout" style="color:white; padding: 10px; width: 114%;text-decoration:none"> LOGIN </a>
            </button>

            <p style="display: inline;">New Customer ? <span style="color: blue; cursor:pointer" onclick="gg()">Create Your Account</span> </p>

        </div>

    </div>






    <style>
        #sidebar_login {
            display: none;
        }

        .leftbar_onclick {
            position: absolute;
            right: 0;
            top: 0;
            width: 350px;
            background-color: white;
            height: 100vh;
            z-index: 1;

        }
    </style>
    <script>
        function show_sidebar_login() {
            document.getElementById('sidebar_login').style.display = "block";
        }

        function hide_sidebar_login() {
            document.getElementById('sidebar_login').style.display = "none";
        }
    </script>

    <!-- This is sidebar code for login end -->






    <!-- This is sidebar code for signup start -->
    <div id="sidebar_signup" style="position: fixed;" class="leftbar_onclick">
        <div style="border-bottom: 1px solid gainsboro;margin:0;align-items:center" class="row">
            <div style="text-align: left;margin-top:10px" class="col-md-6">
                <p>SIGN UP</p>
            </div>
            <div style="text-align: right;" class="col-md-6">
                <p style="cursor:pointer;margin-top:10px" onclick="hide_sidebar_signup()">&#10006;</p>
            </div>
        </div>
        <div style="width: 100%;
    margin-left: auto;
    margin-right: auto; margin-top:30px" class="row container">
            <div class="col-md-12">
                <label for="">FIRST NAME *</label>
                <input type="text" class="form-control">

            </div>

        </div>

        <div style="width: 100%;
    margin-left: auto;
    margin-right: auto; margin-top:30px" class="row container">
            <div class="col-md-12">
                <label for="">LAST NAME *</label>
                <input type="text" class="form-control">

            </div>

        </div>

        <div style="width: 100%;
    margin-left: auto;
    margin-right: auto; margin-top:30px" class="row container">
            <div class="col-md-12">
                <label for="">Email *</label>
                <input type="email" class="form-control">

            </div>

        </div>

        <div style="width: 100%;
    margin-left: auto;
    margin-right: auto; margin-top:30px" class="row container">
            <div class="col-md-12">
                <label for="">PASSWORD *</label>
                <input type="text" class="form-control">

            </div>

        </div>

        <div style="width:80%;margin-left:auto;margin-right:auto">

            <button style="border: 1px solid black;padding: 10px;width: 100%;background-color: black;color: white;margin-top: 10px;">
                <a href="checkout" style="color:white; padding: 10px; width: 114%;text-decoration:none"> REGISTER </a>
            </button>

            <p style="display: inline;">Already have an account ? <span style="color: blue;cursor:pointer" onclick="login()">Login here</span> </p>

        </div>

    </div>






    <style>
        #sidebar_signup {
            display: none;
        }

        .leftbar_onclick {
            position: absolute;
            right: 0;
            top: 0;
            width: 350px;
            background-color: white;
            height: 97.5vh;
            z-index: 1;

        }
    </style>
    <script>
        function gg() {
            document.getElementById('sidebar_signup').style.display = "block";
        }

        function login() {
            document.getElementById('sidebar_signup').style.display = "none";
            document.getElementById('sidebar_login').style.display = "block";
        }

        function hide_sidebar_signup() {
            document.getElementById('sidebar_signup').style.display = "none";
            document.getElementById('sidebar_login').style.display = "none";
        }
    </script>
    <script>
        window.onscroll = function() {
            myFunction()
        };

        var navbar = document.getElementById("navbar");
        var navbarul = document.getElementById('navbarul');


        function myFunction() {
            if (window.pageYOffset >= 200) {
                navbar.classList.add("sticky");
                navbarul.classList.add("navbarul")
            } else {
                navbar.classList.remove("sticky");
                navbarul.classList.remove("navbarul");

            }
        }
    </script>

    <!-- This is sidebar code for signup end -->