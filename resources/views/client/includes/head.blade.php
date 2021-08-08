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

    <title>GameOfTech</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .sticky {
            position: fixed;
            top: 0;
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


    <header id="ntheader" class="">

        <div class="">
            <div id="shopify-section-header_top" class="">
                <div class="">
                    <div class="">
                        <div style="padding: 6px;background-color: gainsboro;" class="row ">
                            <div class="col-lg-4 col-12 t col-md-12 ">
                                <div style="color: gray;font-size: 12px;" class="">Call Us: +92(0)42 111-738-245</div>
                            </div>

                            <div class="col-lg-4 col-12 col-md-12">
                                <div style="color: gray;font-size: 12px;text-align: center;" class="header-text">Free Shipping on all orders worth
                                    <span class="">Rs. 2000</span> Above
                                </div>
                            </div>
                            <div class="col-lg-4 col-12 col-md-12">

                            </div>
                        </div>

                        <div id="navbar" style="background: white;
    z-index: 1;
    left: 0px;">
                            <div style="margin-top:25px;background-color:white" class="row">
                                <div class="col-lg-4 col-12 col-md-12 ">
                                </div>
                                <div class="col-lg-4 col-12 col-md-12">
                                    <div style="color: gray;font-size: 33px;text-align: center; margin-top:-15px;  font-family: serif;">
                                    <a href="{{ url('/') }}"><img src="public/clientassets/images/GameOfTech.png" style="width: 50%" alt=""></a>
                                
                                </div>
                                </div>
                                <div style="text-align: right;" class="col-lg-4 col-12 col-md-12">

                                    <i onclick="show_sidebar()" class="fa fa-search" style="font-size:24px;margin-left: 7px;margin-right:7px;cursor:pointer"></i>
                                    <i onclick="show_sidebar()" class="fa fa-sign-in" style="font-size:24px;margin-left: 7px;margin-right:7px;cursor:pointer"></i>
                                    <i onclick="show_sidebar()" class="fa fa-heart-o" style="font-size:24px;margin-left: 7px;margin-right:7px;cursor:pointer"></i>
                                    <i onclick="show_sidebar()" class="fa fa-cart-plus" style="font-size:24px;margin-left: 7px;margin-right:7px;cursor:pointer"></i>
                                    <i onclick="show_sidebar()" class="fa fa-truck" style="font-size:24px;margin-left: 7px;margin-right:30px;cursor:pointer"></i>

                                </div>

                            </div>

                            <hr>
                            <nav style="z-index: 1;padding:0;" class="navbar sticky-top">
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
                        </div>


                    </div>


                    <div onmouseenter="fun()" onmouseleave="remove()" id="hovershow" class="hovershow" style="background-color:white;width:100%; height:300px;margin-top:10px;position:absolute;
               top:150px;z-index:100; 
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center; ">
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
                                    <img src="public/clientassets/images/1.jpg" style="width: 100%; height: 221px; object-fit:cover"  alt="">

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
                            padding-bottom: 15px;
                            font-size: 15px;

                        }
                    </style>

                    <div>

                    </div>


                </div>



            </div>

        </div>


    </header>