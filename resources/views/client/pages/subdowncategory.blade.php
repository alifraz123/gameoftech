@extends('client/layouts/otherpagelay')
@section('content')

<div class="container-fluid" style="border: 0.1px solid gray;background-color: white; margin-top:10px;margin-bottom:10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <div style="margin-bottom:10px; padding-top:10px">
        <h1 style="font-size: 25px;display:inline">Shop By Brands</h1>
    </div>

    <div style="margin-bottom: 100px;" class="owl-carousel_Subdowncategory owl-carousel owl-theme">
        <div class="card mainclass" style="width:100%;display:inline-block;margin:3px;border:none">
            <div class="item" style="width:auto">
                <img class="image" style="height:100px;width:100%" src="/clientassets/images/1.jpg" alt="">
            </div>

        </div>

        <div class="card mainclass" style="width:100%;display:inline-block;margin:3px;border:none">
            <div class="item" style="width:auto">
                <img class="image" style="height:100px;width:100%" src="/clientassets/images/2.jpg" alt="">
            </div>

        </div>

        <div class="card mainclass" style="width:100%;display:inline-block;margin:3px;border:none">
            <div class="item" style="width:auto">
                <img class="image" style="height:100px;width:100%" src="/clientassets/images/3.jpg" alt="">
            </div>

        </div>

        <div class="card mainclass" style="width:100%;display:inline-block;margin:3px;border:none">
            <div class="item" style="width:auto">
                <img class="image" style="height:100px;width:100%" src="/clientassets/images/4.jpg" alt="">
            </div>

        </div>

        <div class="card mainclass" style="width:100%;display:inline-block;margin:3px;border:none">
            <div class="item" style="width:auto">
                <img class="image" style="height:100px;width:100%" src="/clientassets/images/1.jpg" alt="">
            </div>

        </div>

        <div class="card mainclass" style="width:100%;display:inline-block;margin:3px;border:none">
            <div class="item" style="width:auto">
                <img class="image" style="height:100px;width:100%" src="/clientassets/images/3.jpg" alt="">
            </div>

        </div>
        <div class="card mainclass" style="width:100%;display:inline-block;margin:3px;border:none">
            <div class="item" style="width:auto">
                <img class="image" style="height:100px;width:100%" src="/clientassets/images/3.jpg" alt="">
            </div>

        </div>
        <div class="card mainclass" style="width:100%;display:inline-block;margin:3px;border:none">
            <div class="item" style="width:auto">
                <img class="image" style="height:100px;width:100%" src="/clientassets/images/3.jpg" alt="">
            </div>

        </div>
        <div class="card mainclass" style="width:100%;display:inline-block;margin:3px;border:none">
            <div class="item" style="width:auto">
                <img class="image" style="height:100px;width:100%" src="/clientassets/images/3.jpg" alt="">
            </div>

        </div>
        <div class="card mainclass" style="width:100%;display:inline-block;margin:3px;border:none">
            <div class="item" style="width:auto">
                <img class="image" style="height:100px;width:100%" src="/clientassets/images/3.jpg" alt="">
            </div>

        </div>

    </div>



</div>

<div style="background-color:white;border-bottom:1px solid gray;width:100%;height:100px;display:flex;align-items:center;">
    <div class="image" style="width: 90%;margin-left: auto;margin-right: auto;">
        <div style="float: left;" class="image">
            <h4>Speaker Accessories</h4>
        </div>
        <div style="float: right;">
            <button onclick="show_filter()" class="btn btn-primary">Filter</button>
        </div>

    </div>

</div>




<div class="container-fluid" style="margin:10px 0 10px 0;background-color: white;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

    <hr style="visibility:hidden">
    <div style="display: flex;flex-wrap:wrap;">

        <div class="card mainclass" style="width:auto;text-align:center;display:inline-block;margin:3px;">
            <img class="image" style="width:auto;height:155px;object-fit:cover" src="/clientassets/images/na1.webp" alt="First slide">
            <div class="card-body ">
                <button class="text middle btn btn-danger" style="margin-top: -50px;">Quick View</button>

                <p style="line-height: 1;width:25vw">Anker soundsync bluetooth reciever</p>
                <p style="line-height: 1;">R.s 5555</p>
                <p style="color: red; line-height:0">In Stock</p>

                <div style="border-top: 1px solid gray;margin-top:50px">
                    Add to cart
                </div>

            </div>
        </div>

        <div class="card mainclass" style="width:auto;text-align:center;display:inline-block;margin:3px">
            <img class="image" style="width:auto;height:155px;object-fit:cover;" src="/clientassets/images/na1.webp" alt="First slide">
            <div class="card-body ">
                <button class="text middle btn btn-danger" style="margin-top: -50px;">Quick View</button>


                <p style="line-height: 1;width:25vw;text-align:center">Anker soundsync bluetooth reciever</p>
                <p style="line-height: 1;">R.s 5555</p>
                <p style="color: red; line-height:0">In Stock</p>

                <div style="border-top: 1px solid gray;margin-top:50px">
                    Add to cart
                </div>
            </div>
        </div>
        <div class="card mainclass" style="text-align:center;width:auto;display:inline-block;margin:0px; margin:0 0 5px 0">
            <img class="image" style="height:170px;object-fit:cover" src="/clientassets/images/na1.webp" alt="First slide">
            <div class="card-body ">
                <button class="text middle btn btn-danger" style="margin-top: -50px;">Quick View</button>

                <p style="line-height: 1;width:25vw">Anker soundsync bluetooth reciever</p>
                <p style="line-height: 1;">R.s 5555</p>
                <p style="color: red; line-height:0">In Stock</p>

                <div style="border-top: 1px solid gray;margin-top:50px">
                    Add to cart
                </div>

            </div>
        </div>
        <div class="card mainclass" style="text-align:center;width:auto;display:inline-block;margin:0px; margin:0 0 5px 0">
            <img class="image" style="height:170px;object-fit:cover" src="/clientassets/images/na1.webp" alt="First slide">
            <div class="card-body ">
                <button class="text middle btn btn-danger" style="margin-top: -50px;">Quick View</button>

                <p style="line-height: 1;width:25vw">Anker soundsync bluetooth reciever</p>
                <p style="line-height: 1;">R.s 5555</p>
                <p style="color: red; line-height:0">In Stock</p>

                <div style="border-top: 1px solid gray;margin-top:50px">
                    Add to cart
                </div>

            </div>
        </div>
        <div class="card mainclass" style="text-align:center;width:auto;display:inline-block;margin:0px; margin:0 0 5px 0">
            <img class="image" style="height:170px;object-fit:cover" src="/clientassets/images/na1.webp" alt="First slide">
            <div class="card-body ">
                <button class="text middle btn btn-danger" style="margin-top: -50px;">Quick View</button>

                <p style="line-height: 1;width:25vw">Anker soundsync bluetooth reciever</p>
                <p style="line-height: 1;">R.s 5555</p>
                <p style="color: red; line-height:0">In Stock</p>

                <div style="border-top: 1px solid gray;margin-top:50px">
                    Add to cart
                </div>

            </div>
        </div>
        <div class="card mainclass" style="text-align:center;width:auto;display:inline-block;margin:0px; margin:0 0 5px 0">
            <img class="image" style="height:170px;object-fit:cover" src="/clientassets/images/na1.webp" alt="First slide">
            <div class="card-body ">
                <button class="text middle btn btn-danger" style="margin-top: -50px;">Quick View</button>

                <p style="line-height: 1;width:25vw">Anker soundsync bluetooth reciever</p>
                <p style="line-height: 1;">R.s 5555</p>
                <p style="color: red; line-height:0">In Stock</p>

                <div style="border-top: 1px solid gray;margin-top:50px">
                    Add to cart
                </div>

            </div>
        </div>
        <div class="card mainclass" style="text-align:center;width:auto;display:inline-block;margin:0px; margin:0 0 5px 0">
            <img class="image" style="height:170px;object-fit:cover" src="/clientassets/images/na1.webp" alt="First slide">
            <div class="card-body ">
                <button class="text middle btn btn-danger" style="margin-top: -50px;">Quick View</button>

                <p style="line-height: 1;width:25vw">Anker soundsync bluetooth reciever</p>
                <p style="line-height: 1;">R.s 5555</p>
                <p style="color: red; line-height:0">In Stock</p>

                <div style="border-top: 1px solid gray;margin-top:50px">
                    Add to cart
                </div>

            </div>
        </div>
        <div class="card mainclass" style="text-align:center;width:auto;display:inline-block;margin:0px; margin:0 0 5px 0">
            <img class="image" style="height:170px;object-fit:cover" src="/clientassets/images/na1.webp" alt="First slide">
            <div class="card-body ">
                <button class="text middle btn btn-danger" style="margin-top: -50px;">Quick View</button>

                <p style="line-height: 1;width:25vw">Anker soundsync bluetooth reciever</p>
                <p style="line-height: 1;">R.s 5555</p>
                <p style="color: red; line-height:0">In Stock</p>

                <div style="border-top: 1px solid gray;margin-top:50px">
                    Add to cart
                </div>

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

    <div style="margin: 0; margin-top:20px;text-align:center;border-bottom:1px solid gainsboro" class="image">
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


    <div style="margin: 0; margin-top:20px;text-align:center;border-bottom:1px solid gainsboro" class="image">
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

    <div style="margin: 0; margin-top:20px;text-align:center;border-bottom:1px solid gainsboro" class="image">
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

    <div style="margin: 0; margin-top:20px;text-align:center;border-bottom:1px solid gainsboro" class="image">
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