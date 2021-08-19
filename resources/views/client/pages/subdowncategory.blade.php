@extends('client/layouts/otherpagelay')
@section('content')
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

<div class="container-fluid" style="border: 0.1px solid gray;background-color: white; margin-top:10px;margin-bottom:10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div style="margin-bottom:10px; padding-top:10px">
        <h1 style="font-size: 25px;display:inline">Shop By Brands</h1>
    </div>
    <div id="carouselExampleControls" style="margin-top: 0px;" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div style="padding-bottom: 40px" class="row">
                    <div style="display:flex;align-items:center" class="col-md-2">

                        <div class="card" style="width: 14rem;">
                        <img class="d-block w-100" style="height:100px;object-fit:contain" src="public/clientassets/images/apple.jpg" alt="First slide">

                        </div>
                    </div>
                    <div style="display:flex;align-items:center" class="col-md-2">
                        <div class="card" style="width: 14rem;">
                          <img class="d-block w-100" style="height:100px;object-fit:contain" src="public/clientassets/images/Nanoleaf.jpg" alt="First slide">

                        </div>
                    </div>
                    <div style="display:flex;align-items:center" class="col-md-2">
                        <div class="card" style="width: 14rem;">
                          <img class="d-block w-100" style="height:100px;object-fit:contain" src="public/clientassets/images/asus.jpg" alt="First slide">

                        </div>
                    </div>
                    <div style="display:flex;align-items:center" class="col-md-2">
                        <div class="card" style="width: 14rem;">
                          <img class="d-block w-100" style="height:100px;object-fit:contain" src="public/clientassets/images/asus.jpg" alt="First slide">

                        </div>
                    </div>
                    <div style="display:flex;align-items:center" class="col-md-2">
                        <div class="card" style="width: 14rem;">
                          <img class="d-block w-100" style="height:100px;object-fit:contain" src="public/clientassets/images/asus.jpg" alt="First slide">

                        </div>
                    </div>
                    <div style="display:flex;align-items:center" class="col-md-2">
                        <div class="card" style="width: 14rem;">
                          <img class="d-block w-100" style="height:100px;object-fit:contain" src="public/clientassets/images/asus.jpg" alt="First slide">

                        </div>
                    </div>


                </div>

            </div>
            <div class="carousel-item">
                <div style="padding-bottom: 40px" class="row">
                    <div style="display:flex;align-items:center" class="col-md-2">

                        <div class="card" style="width: 14rem;">
                        <img class="d-block w-100" style="height:100px;object-fit:contain" src="public/clientassets/images/apple.jpg" alt="First slide">

                        </div>
                    </div>
                    <div style="display:flex;align-items:center" class="col-md-2">
                        <div class="card" style="width: 14rem;">
                          <img class="d-block w-100" style="height:100px;object-fit:contain" src="public/clientassets/images/Nanoleaf.jpg" alt="First slide">

                        </div>
                    </div>
                    <div style="display:flex;align-items:center" class="col-md-2">
                        <div class="card" style="width: 14rem;">
                          <img class="d-block w-100" style="height:100px;object-fit:contain" src="public/clientassets/images/asus.jpg" alt="First slide">

                        </div>
                    </div>
                    <div style="display:flex;align-items:center" class="col-md-2">
                        <div class="card" style="width: 14rem;">
                          <img class="d-block w-100" style="height:100px;object-fit:contain" src="public/clientassets/images/asus.jpg" alt="First slide">

                        </div>
                    </div>
                    <div style="display:flex;align-items:center" class="col-md-2">
                        <div class="card" style="width: 14rem;">
                          <img class="d-block w-100" style="height:100px;object-fit:contain" src="public/clientassets/images/asus.jpg" alt="First slide">

                        </div>
                    </div>
                    <div style="display:flex;align-items:center" class="col-md-2">
                        <div class="card" style="width: 14rem;">
                          <img class="d-block w-100" style="height:100px;object-fit:contain" src="public/clientassets/images/asus.jpg" alt="First slide">

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

<div style="background-color:white;border-bottom:1px solid gray;width:100%;height:100px;display:flex;align-items:center;">
    <div class="" style="width: 90%;margin-left: auto;margin-right: auto;">
        <div style="float: left;" class="">
            <h4>Speaker Accessories</h4>
        </div>
        <div style="float: right;">
            <button onclick="show_filter()" class="btn btn-primary">Filter</button>
        </div>

    </div>

</div>




<div class="container-fluid" style="margin-top:10px;margin-bottom:10px;background-color: white; margin-top:10px;margin-bottom:10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    
    <hr style="visibility:hidden">
    <div class="card mainclass" style="width:16rem;display:inline-block;margin:0px">
        <img class="d-block w-100 image" style="height:280px;object-fit:cover" src="public/clientassets/images/na1.webp" alt="First slide">
        <div class="card-body ">
            <button class="text middle btn btn-danger" style="margin-top: -50px;">Quick View</button>
           
            <p style="line-height: 1;">Anker soundsync bluetooth reciever</p>
            <p style="line-height: 1;">R.s 5555</p>
            <p style="color: red; line-height:0">In Stock</p>

            <div style="border-top: 1px solid gray;margin-top:50px">
                Add to cart
            </div>
           
        </div>
    </div>
    <div class="card mainclass" style="width:16rem;display:inline-block;margin:0px">
        <img class="d-block w-100 image" style="height:280px;object-fit:cover" src="public/clientassets/images/na1.webp" alt="First slide">
        <div class="card-body ">
            <button class="text middle btn btn-danger" style="margin-top: -50px;">Quick View</button>
           
            <p style="line-height: 1;">Anker soundsync bluetooth reciever</p>
            <p style="line-height: 1;">R.s 5555</p>
            <p style="color: red; line-height:0">In Stock</p>

            <div style="border-top: 1px solid gray;margin-top:50px">
                Add to cart
            </div>
           
        </div>
    </div>
    <div class="card mainclass" style="width:16rem;display:inline-block;margin:0px">
        <img class="d-block w-100 image" style="height:280px;object-fit:cover" src="public/clientassets/images/na1.webp" alt="First slide">
        <div class="card-body ">
            <button class="text middle btn btn-danger" style="margin-top: -50px;">Quick View</button>
           
            <p style="line-height: 1;">Anker soundsync bluetooth reciever</p>
            <p style="line-height: 1;">R.s 5555</p>
            <p style="color: red; line-height:0">In Stock</p>

            <div style="border-top: 1px solid gray;margin-top:50px">
                Add to cart
            </div>
           
        </div>
    </div>
    <div class="card mainclass" style="width:16rem;display:inline-block;margin:0px">
        <img class="d-block w-100 image" style="height:280px;object-fit:cover" src="public/clientassets/images/na1.webp" alt="First slide">
        <div class="card-body ">
            <button class="text middle btn btn-danger" style="margin-top: -50px;">Quick View</button>
           
            <p style="line-height: 1;">Anker soundsync bluetooth reciever</p>
            <p style="line-height: 1;">R.s 5555</p>
            <p style="color: red; line-height:0">In Stock</p>

            <div style="border-top: 1px solid gray;margin-top:50px">
                Add to cart
            </div>
           
        </div>
    </div>
    <div class="card mainclass" style="width:16rem;display:inline-block;margin:0px">
        <img class="d-block w-100 image" style="height:280px;object-fit:cover" src="public/clientassets/images/na1.webp" alt="First slide">
        <div class="card-body ">
            <button class="text middle btn btn-danger" style="margin-top: -50px;">Quick View</button>
           
            <p style="line-height: 1;">Anker soundsync bluetooth reciever</p>
            <p style="line-height: 1;">R.s 5555</p>
            <p style="color: red; line-height:0">In Stock</p>

            <div style="border-top: 1px solid gray;margin-top:50px">
                Add to cart
            </div>
           
        </div>
    </div>
    <div class="card mainclass" style="width:16rem;display:inline-block;margin:0px">
        <img class="d-block w-100 image" style="height:280px;object-fit:cover" src="public/clientassets/images/na1.webp" alt="First slide">
        <div class="card-body ">
            <button class="text middle btn btn-danger" style="margin-top: -50px;">Quick View</button>
           
            <p style="line-height: 1;">Anker soundsync bluetooth reciever</p>
            <p style="line-height: 1;">R.s 5555</p>
            <p style="color: red; line-height:0">In Stock</p>

            <div style="border-top: 1px solid gray;margin-top:50px">
                Add to cart
            </div>
           
        </div>
    </div>
    <div class="card mainclass" style="width:16rem;display:inline-block;margin:0px">
        <img class="d-block w-100 image" style="height:280px;object-fit:cover" src="public/clientassets/images/na1.webp" alt="First slide">
        <div class="card-body ">
            <button class="text middle btn btn-danger" style="margin-top: -50px;">Quick View</button>
           
            <p style="line-height: 1;">Anker soundsync bluetooth reciever</p>
            <p style="line-height: 1;">R.s 5555</p>
            <p style="color: red; line-height:0">In Stock</p>

            <div style="border-top: 1px solid gray;margin-top:50px">
                Add to cart
            </div>
           
        </div>
    </div>
    <div class="card mainclass" style="width:16rem;display:inline-block;margin:0px">
        <img class="d-block w-100 image" style="height:280px;object-fit:cover" src="public/clientassets/images/na1.webp" alt="First slide">
        <div class="card-body ">
            <button class="text middle btn btn-danger" style="margin-top: -50px;">Quick View</button>
           
            <p style="line-height: 1;">Anker soundsync bluetooth reciever</p>
            <p style="line-height: 1;">R.s 5555</p>
            <p style="color: red; line-height:0">In Stock</p>

            <div style="border-top: 1px solid gray;margin-top:50px">
                Add to cart
            </div>
           
        </div>
    </div>



</div>
<!-- This is leftsidebar code for filters start -->
<div style="overflow: scroll; position:fixed" id="sidebar_filter" class="leftbar_onclick_filter">
    <div style="border-bottom: 1px solid gainsboro;margin:0;align-items:center;background-color:black;color:white" class="row">
        <div style="text-align: left;margin-top:10px" class="col-md-6">
            <p>Filter</p>
        </div>
        <div style="text-align: right;" class="col-md-6">
            <p style="cursor:pointer;margin-top:10px" onclick="hide_filter()">&#10006;</p>
        </div>
    </div>

    <div style="margin: 0; margin-top:20px;text-align:center;border-bottom:1px solid gainsboro" class="">
    <div style="border-bottom: 1px solid black;width:80px;margin:10px">
    By Color
    </div>
    <ul style="list-style-type: none;margin-left:22px;text-align:left">
        <li>yellow</li>
        <li>black</li>
        <li>orrange</li>
        <li>red</li>
        <li>blue</li>
        <li>gray</li>
    </ul>  
    </div>


    <div style="margin: 0; margin-top:20px;text-align:center;border-bottom:1px solid gainsboro" class="">
    <div style="border-bottom: 1px solid black;width:80px;margin:10px">
    By Price
    </div>
    <ul style="list-style-type: none;margin-left:22px;text-align:left">
        <li> <input type="checkbox" name="" id=""> 500-1000 </li>
        <li><input type="checkbox" name="" id=""> 1000-3000</li>
        <li><input type="checkbox" name="" id=""> 3000-6000</li>
        <li><input type="checkbox" name="" id=""> 6000-8000</li>
        <li><input type="checkbox" name="" id=""> 8000-10000</li>
    </ul>  
    </div>

    <div style="margin: 0; margin-top:20px;text-align:center;border-bottom:1px solid gainsboro" class="">
    <div style="border-bottom: 1px solid black;width:80px;margin:10px">
    By Brand
    </div>
    <ul style="list-style-type: none;margin-left:22px;text-align:left">
        <li>Sony</li>
        <li>Samsung</li>
        <li>Apple</li>
        <li>LG</li>
        <li>Vivo</li>
        <li>Honor</li>
        <li>infinix</li>
        <li>Mi</li>
    </ul>  
    </div>

    <div style="margin: 0; margin-top:20px;text-align:center;border-bottom:1px solid gainsboro" class="">
    <div style="border-bottom: 1px solid black;width:80px;margin:10px">
    By Category
    </div>
    <ul style="list-style-type: none;margin-left:22px;text-align:left">
        <li>TV</li>
        <li>Sound</li>
        <li>Camera</li>
        <li>Laptop</li>
        <li>Gaming</li>
        <li>Accessories</li>
    </ul>  
    </div>




</div>

<style>
    #sidebar_filter {
        display: none;
    }

    .leftbar_onclick_filter {
        
        position: absolute;
        left: 0;
        top: 0;
        width: 350px;
        background-color: white;
        height: 97.5vh;
        z-index: 1;

    }
</style>
<script>
    function show_filter() {
        document.getElementById('sidebar_filter').style.display = "block";
    }

    function hide_filter() {
        document.getElementById('sidebar_filter').style.display = "none";
    }
</script>

<!-- This is leftsidebar code for filters end -->

@endsection