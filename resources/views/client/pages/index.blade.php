@extends('client/layouts/homepagelay')
@section('content')
<div class="container-fluid" style="border: 0.1px solid gray;background-color: white; margin-top:10px;margin-bottom:10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div style="margin-bottom:10px">
        <h1 style="font-size: 25px;display:inline">Featured Categories</h1> <a style="display: inline;" href="">View All</a>
    </div>
    <div id="carouselExampleControls" style="margin-top: 0px;" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-4">

                        <div class="card" style="width: 27rem;">
                            <img class="d-block w-100" style="height:230px;object-fit:contain" src="public/clientassets/images/fc1.webp" alt="First slide">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="card-text">Some quick</p>
                                    </div>
                                    <div style="text-align: right;" class="col-md-6">
                                        <a href="#" class="btn btn-primary">Shop Now</a>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 27rem;">
                            <img class="d-block w-100" style="height:230px;object-fit:contain" src="public/clientassets/images/fc2.webp" alt="First slide">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="card-text">Some quick</p>
                                    </div>
                                    <div style="text-align: right;" class="col-md-6">
                                        <a href="#" class="btn btn-primary">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 27rem;">
                            <img class="d-block w-100" style="height:230px;object-fit:contain" src="public/clientassets/images/fc3.webp" alt="First slide">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="card-text">Some quick</p>
                                    </div>
                                    <div style="text-align: right;" class="col-md-6">
                                        <a href="#" class="btn btn-primary">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card" style="width: 27rem;">
                            <img class="d-block w-100" style="height:230px;object-fit:contain" src="public/clientassets/images/fc4.webp" alt="First slide">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="card-text">Some quick</p>
                                    </div>
                                    <div style="text-align: right;" class="col-md-6">
                                        <a href="#" class="btn btn-primary">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 27rem;">
                            <img class="d-block w-100" style="height:230px;object-fit:contain" src="public/clientassets/images/fc5.webp" alt="First slide">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="card-text">Some quick</p>
                                    </div>
                                    <div style="text-align: right;" class="col-md-6">
                                        <a href="#" class="btn btn-primary">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 27rem;">
                            <img class="d-block w-100" style="height:230px;object-fit:contain" src="public/clientassets/images/fc6.webp" alt="First slide">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="card-text">Some quick</p>
                                    </div>
                                    <div style="text-align: right;" class="col-md-6">
                                        <a href="#" class="btn btn-primary">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div>

<style>
    .mainclass {
        position: relative;
        width: 50%;
    }

    .image {
        opacity: 1;
        display: block;
        width: 100%;
        height: auto;
        transition: .5s ease;
        backface-visibility: hidden;
    }

    .middle {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
    }

    .mainclass:hover .image {
        opacity: 0.3;
    }

    .mainclass:hover .middle {
        opacity: 1;
    }
</style>

<div class="container-fluid" style="margin-top:10px;margin-bottom:10px;background-color: white; margin-top:10px;margin-bottom:10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <h1 style="font-size: 25px;display:inline;">Featured Products</h1>
    <hr style="border: 1px solid red;">
    <div class="card mainclass" style="width:20rem;display:inline-block;margin:3px">
        <img class="d-block w-100 image" style="height:370px;object-fit:cover" src="public/clientassets/images/fp1.webp" alt="First slide">
        <div style="text-align: center;" class="card-body ">
            <button class="text middle btn btn-danger" style="margin-top: -50px;">Add To Cart</button>
            <p class="card-text">Some quick example text Some quick example text Some quick example text Some quick example text </p>
            <p style="line-height: 0;">VAVA</p>
            <p style="line-height: 1;">141 reviews</p>
            <p style="color: red; line-height:0">R.s 7,999.00</p>
        </div>
    </div>
    <div class="card mainclass" style="width:20rem;display:inline-block;margin:3px">
        <img class="d-block w-100 image" style="height:370px;object-fit:cover" src="public/clientassets/images/fp2.webp" alt="First slide">
        <div style="text-align: center;" class="card-body ">
            <button class="text middle btn btn-danger" style="margin-top: -50px;">Add To Cart</button>
            <p class="card-text">Some quick example text Some quick example text Some quick example text Some quick example text </p>
            <p style="line-height: 0;">VAVA</p>
            <p style="line-height: 1;">141 reviews</p>
            <p style="color: red; line-height:0">R.s 7,999.00</p>
        </div>
    </div>
    <div class="card mainclass" style="width:20rem;display:inline-block;margin:3px">
        <img class="d-block w-100 image" style="height:370px;object-fit:cover" src="public/clientassets/images/fp3.webp" alt="First slide">
        <div style="text-align: center;" class="card-body ">
            <button class="text middle btn btn-danger" style="margin-top: -50px;">Add To Cart</button>
            <p class="card-text">Some quick example text Some quick example text Some quick example text Some quick example text </p>
            <p style="line-height: 0;">VAVA</p>
            <p style="line-height: 1;">141 reviews</p>
            <p style="color: red; line-height:0">R.s 7,999.00</p>
        </div>
    </div>
    <div class="card mainclass" style="width:20rem;display:inline-block;margin:3px">
        <img class="d-block w-100 image" style="height:370px;object-fit:cover" src="public/clientassets/images/fp4.webp" alt="First slide">
        <div style="text-align: center;" class="card-body ">
            <button class="text middle btn btn-danger" style="margin-top: -50px;">Add To Cart</button>
            <p class="card-text">Some quick example text Some quick example text Some quick example text Some quick example text </p>
            <p style="line-height: 0;">VAVA</p>
            <p style="line-height: 1;">141 reviews</p>
            <p style="color: red; line-height:0">R.s 7,999.00</p>
        </div>
    </div>

</div>

<div class="container-fluid" style="margin-top:10px;margin-bottom:10px;background-color: white; margin-top:10px;margin-bottom:10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <h1 style="font-size: 25px;display:inline;">Top Products</h1>
    <hr style="border: 1px solid red;">
    <div class="card mainclass" style="width:20rem;display:inline-block;margin:3px">
        <img class="d-block w-100 image" style="height:370px;object-fit:cover" src="public/clientassets/images/tp1.webp" alt="First slide">
        <div style="text-align: center;" class="card-body ">
            <button class="text middle btn btn-danger" style="margin-top: -50px;">Add To Cart</button>
            <p class="card-text">Some quick example text Some quick example text Some quick example text Some quick example text </p>
            <p style="line-height: 0;">VAVA</p>
            <p style="line-height: 1;">141 reviews</p>
            <p style="color: red; line-height:0">R.s 7,999.00</p>
        </div>
    </div>
    <div class="card mainclass" style="width:20rem;display:inline-block;margin:3px">
        <img class="d-block w-100 image" style="height:370px;object-fit:cover" src="public/clientassets/images/tp2.webp" alt="First slide">
        <div style="text-align: center;" class="card-body ">
            <button class="text middle btn btn-danger" style="margin-top: -50px;">Add To Cart</button>
            <p class="card-text">Some quick example text Some quick example text Some quick example text Some quick example text </p>
            <p style="line-height: 0;">VAVA</p>
            <p style="line-height: 1;">141 reviews</p>
            <p style="color: red; line-height:0">R.s 7,999.00</p>
        </div>
    </div>
    <div class="card mainclass" style="width:20rem;display:inline-block;margin:3px">
        <img class="d-block w-100 image" style="height:370px;object-fit:cover" src="public/clientassets/images/tp3.webp" alt="First slide">
        <div style="text-align: center;" class="card-body ">
            <button class="text middle btn btn-danger" style="margin-top: -50px;">Add To Cart</button>
            <p class="card-text">Some quick example text Some quick example text Some quick example text Some quick example text </p>
            <p style="line-height: 0;">VAVA</p>
            <p style="line-height: 1;">141 reviews</p>
            <p style="color: red; line-height:0">R.s 7,999.00</p>
        </div>
    </div>
    <div class="card mainclass" style="width:20rem;display:inline-block;margin:3px">
        <img class="d-block w-100 image" style="height:370px;object-fit:cover" src="public/clientassets/images/tp4.webp" alt="First slide">
        <div style="text-align: center;" class="card-body ">
            <button class="text middle btn btn-danger" style="margin-top: -50px;">Add To Cart</button>
            <p class="card-text">Some quick example text Some quick example text Some quick example text Some quick example text </p>
            <p style="line-height: 0;">VAVA</p>
            <p style="line-height: 1;">141 reviews</p>
            <p style="color: red; line-height:0">R.s 7,999.00</p>
        </div>
    </div>

</div>


<div class="container-fluid" style="margin-top:10px;margin-bottom:10px;background-color: white; margin-top:10px;margin-bottom:10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <h1 style="font-size: 25px;display:inline;">New Arrivals </h1>
    <hr style="visibility:hidden">
    <div class="card mainclass" style="width:20rem;display:inline-block;margin:3px">
        <img class="d-block w-100 image" style="height:370px;object-fit:cover" src="public/clientassets/images/na1.webp" alt="First slide">
        <div style="text-align: center;" class="card-body ">
            <button class="text middle btn btn-danger" style="margin-top: -50px;">Add To Cart</button>
            <p class="card-text">Some quick example text Some quick example text Some quick example text Some quick example text </p>
            <p style="line-height: 0;">VAVA</p>
            <p style="line-height: 1;">141 reviews</p>
            <p style="color: red; line-height:0">R.s 7,999.00</p>
            <button class="btn btn-danger">Add To Cart</button>
        </div>
    </div>
    <div class="card mainclass" style="width:20rem;display:inline-block;margin:3px">
        <img class="d-block w-100 image" style="height:370px;object-fit:cover" src="public/clientassets/images/na2.webp" alt="First slide">
        <div style="text-align: center;" class="card-body ">
            <button class="text middle btn btn-danger" style="margin-top: -50px;">Add To Cart</button>
            <p class="card-text">Some quick example text Some quick example text Some quick example text Some quick example text </p>
            <p style="line-height: 0;">VAVA</p>
            <p style="line-height: 1;">141 reviews</p>
            <p style="color: red; line-height:0">R.s 7,999.00</p>
            <button class="btn btn-danger">Add To Cart</button>
        </div>
    </div>
    <div class="card mainclass" style="width:20rem;display:inline-block;margin:3px">
        <img class="d-block w-100 image" style="height:370px;object-fit:cover" src="public/clientassets/images/na3.webp" alt="First slide">
        <div style="text-align: center;" class="card-body ">
            <button class="text middle btn btn-danger" style="margin-top: -50px;">Add To Cart</button>
            <p class="card-text">Some quick example text Some quick example text Some quick example text Some quick example text </p>
            <p style="line-height: 0;">VAVA</p>
            <p style="line-height: 1;">141 reviews</p>
            <p style="color: red; line-height:0">R.s 7,999.00</p>
            <button class="btn btn-danger">Add To Cart</button>
        </div>
    </div>
    <div class="card mainclass" style="width:20rem;display:inline-block;margin:3px">
        <img class="d-block w-100 image" style="height:370px;object-fit:cover" src="public/clientassets/images/na4.webp" alt="First slide">
        <div style="text-align: center;" class="card-body ">
            <button class="text middle btn btn-danger" style="margin-top: -50px;">Add To Cart</button>
            <p class="card-text">Some quick example text Some quick example text Some quick example text Some quick example text </p>
            <p style="line-height: 0;">VAVA</p>
            <p style="line-height: 1;">141 reviews</p>
            <p style="color: red; line-height:0">R.s 7,999.00</p>
            <button class="btn btn-danger">Add To Cart</button>
        </div>
    </div>

</div>

<div class="container-fluid" style="border: 0.1px solid gray;background-color: white; margin-top:10px;margin-bottom:10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div style="margin-bottom:10px; padding-top:10px">
        <h1 style="font-size: 25px;display:inline">Featured Brands</h1> <a style="display: inline;" href="">View All</a>
    </div>
    <div id="carouselExampleControls" style="margin-top: 0px;" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-4">

                        <div class="card" style="width: 27rem;">
                            <img class="d-block w-100" style="height:230px;object-fit:cover" src="public/clientassets/images/apple.jpg" alt="First slide">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="card-text">Some quick</p>
                                    </div>
                                    <div style="text-align: right;" class="col-md-6">
                                        <a href="#" class="btn btn-primary">Shop Now</a>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 27rem;">
                            <img class="d-block w-100" style="height:230px;object-fit:cover" src="public/clientassets/images/Nanoleaf.jpg" alt="First slide">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="card-text">Some quick</p>
                                    </div>
                                    <div style="text-align: right;" class="col-md-6">
                                        <a href="#" class="btn btn-primary">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 27rem;">
                            <img class="d-block w-100" style="height:230px;object-fit:cover" src="public/clientassets/images/asus.jpg" alt="First slide">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="card-text">Some quick</p>
                                    </div>
                                    <div style="text-align: right;" class="col-md-6">
                                        <a href="#" class="btn btn-primary">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card" style="width: 27rem;">
                            <img class="d-block w-100" style="height:230px;object-fit:cover" src="public/clientassets/images/samsung.jpg" alt="First slide">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="card-text">Some quick</p>
                                    </div>
                                    <div style="text-align: right;" class="col-md-6">
                                        <a href="#" class="btn btn-primary">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 27rem;">
                            <img class="d-block w-100" style="height:230px;object-fit:cover" src="public/clientassets/images/Xaomi.jpg" alt="First slide">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="card-text">Some quick</p>
                                    </div>
                                    <div style="text-align: right;" class="col-md-6">
                                        <a href="#" class="btn btn-primary">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 27rem;">
                            <img class="d-block w-100" style="height:230px;object-fit:cover" src="public/clientassets/images/sony.jpg" alt="First slide">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="card-text">Some quick</p>
                                    </div>
                                    <div style="text-align: right;" class="col-md-6">
                                        <a href="#" class="btn btn-primary">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div>

<div style="border: 0.1px solid gray;background-color: white; margin-top:10px;margin-bottom:10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">


    <div class="row" style="margin: 0;">
        <div class="col-md-4">
            <div class="">

                <div class="card" style="width: 27rem;margin-bottom:10px;">
                    <img class="d-block w-100" style="height:130px;object-fit:cover;height:250px;margin-bottom:10px;margin-top:10px" src="public/clientassets/images/asus2_1.jpg" alt="First slide">

                    <div style="padding: 5px;" class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="card-text">Some quick</p>
                            </div>
                            <div style="text-align: right;" class="col-md-6">
                                <a href="#" class="btn btn-primary">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="card" style="width: 27rem;margin-bottom:10px;">
                    <img class="d-block w-100" style="height:130px;object-fit:cover;height:250px;margin-bottom:10px;margin-top:10px" src="public/clientassets/images/bloody2.jpg" alt="First slide">

                    <div style="padding: 5px;" class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="card-text">Some quick</p>
                            </div>
                            <div style="text-align: right;" class="col-md-6">
                                <a href="#" class="btn btn-primary">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4">

            <div class="card" style="width: 27rem;margin-bottom:10px;">
                <img class="d-block w-100" style="height:600px;object-fit:cover;margin-top:10px;margin-bottom:10px" src="public/clientassets/images/razer.jpg" alt="First slide">

                <div style="padding: 5px;" class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="card-text">Some quick</p>
                        </div>
                        <div style="text-align: right;" class="col-md-6">
                            <a href="#" class="btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div>
                <div class="card" style="width: 27rem;margin-bottom:10px;">
                    <img class="d-block w-100" style="height:130px;object-fit:cover;height:250px;margin-bottom:10px;margin-top:10px" src="public/clientassets/images/cougar2.jpg" alt="First slide">

                    <div style="padding: 5px;" class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="card-text">Some quick</p>
                            </div>
                            <div style="text-align: right;" class="col-md-6">
                                <a href="#" class="btn btn-primary">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card" style="width: 27rem;margin-bottom:10px;">
                    <img class="d-block w-100" style="height:130px;object-fit:cover;height:250px;margin-bottom:10px;margin-top:10px" src="public/clientassets/images/play.jpg" alt="First slide">

                    <div style="padding: 5px;" class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="card-text">Some quick</p>
                            </div>
                            <div style="text-align: right;" class="col-md-6">
                                <a href="#" class="btn btn-primary">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<div id="sidebar_" class="leftbar_onclick">
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
            <img style="width: 100%;object-fit:contain" src="public/clientassets/images/razer.jpg" alt="">
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
        <div  class="col-md-12">
            <button style="width: 114%;
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

@endsection