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
                                    <div style="color: gray;font-size: 33px;text-align: center; margin-top:-15px;  font-family: serif;">GameOfTech</div>
                                </div>
                                <div style="text-align: right;" class="col-lg-4 col-12 col-md-12">

                                    <i class="fa fa-paperclip" style="font-size:24px;margin-left: 15px;margin-right:15px;"></i>
                                    <i class="fa fa-indent" style="font-size:24px;margin-left: 15px;margin-right:15px;"></i>
                                    <i class="fa fa-cut" style="font-size:24px;margin-left: 15px;margin-right:15px;"></i>
                                    <i class="fa fa-unlink" style="font-size:24px;margin-left: 15px;margin-right:15px;"></i>
                                    <i class="fa fa-table" style="font-size:24px;margin-left: 15px;margin-right:15px;"></i>

                                </div>

                            </div>

                            <hr>
                            <nav style="z-index: 1;padding:0;" class="navbar sticky-top">
                                <ul id="navbarul" class="abc">
                                    <li><a onmouseenter="fun()" onmouseleave="remove()" href="">First</a></li>
                                    <li><a onmouseenter="fun()" onmouseleave="remove()" href="">Second</a></li>
                                    <li><a onmouseenter="fun()" onmouseleave="remove()" href="">Third</a></li>
                                    <li><a onmouseenter="fun()" onmouseleave="remove()" href="">Four</a></li>
                                    <li><a onmouseenter="fun()" onmouseleave="remove()" href="">Five</a></li>
                                    <li><a onmouseenter="fun()" onmouseleave="remove()" href="">First</a></li>
                                    <li><a onmouseenter="fun()" onmouseleave="remove()" href="">Second</a></li>
                                    <li><a onmouseenter="fun()" onmouseleave="remove()" href="">Third</a></li>
                                    <li><a onmouseenter="fun()" onmouseleave="remove()" href="">Four</a></li>
                                    <li><a onmouseenter="fun()" onmouseleave="remove()" href="">Five</a></li>
                                    <li><a onmouseenter="fun()" onmouseleave="remove()" href="">First</a></li>
                                    <li><a onmouseenter="fun()" onmouseleave="remove()" href="">Second</a></li>
                                    <li><a onmouseenter="fun()" onmouseleave="remove()" href="">Third</a></li>
                                    <li><a onmouseenter="fun()" onmouseleave="remove()" href="">Four</a></li>
                                    <li><a onmouseenter="fun()" onmouseleave="remove()" href="">Five</a></li>
                                </ul>

                            </nav>
                        </div>


                    </div>


                    <div id="hovershow" class="hovershow" style="background-color:white;width:100%; height:300px;margin-top:10px;position:absolute;
               top:150px;z-index:100; 
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center; ">
                        <h1>This is heading one</h1>

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
                            width: 70px;
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