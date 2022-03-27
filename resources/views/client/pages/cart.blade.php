@extends('client/layouts/otherpagelay')
@section('content')
<div style="background-color: ghostwhite;text-align: center;padding: 35px;">
    <h5>SHOPPING CART</h5>
</div>

<div class="container">

    <div style="margin-top: 79px;border-bottom: 1px solid red;display:flex;justify-content:space-between">
        <div>
            PRODUCT
        </div>
        <div>
            PRICE
        </div>
        <div>
            QUANTITY
        </div>
        <div>
            TOTAL
        </div>

    </div>
    <div style="margin: 50px 0 50px 0;padding-bottom:35px;border-bottom: 1px solid red;display:flex;justify-content:space-between">
        <div style="width: 25%;">
            <img style="width: 100%; height:auto;" src="/clientassets/images/1.jpg" alt="">
        </div>
        <div>
            <p> R.s 1485.00</p>
        </div>
        <div style="display:flex;align-items:baseline">
            <div style="border: 1px solid black; padding:6px; display:flex;">
                <button style="border: none;float: left;background-color:white;cursor:pointer"><i class="fa fa-trash-o"></i></button>
                <input style="width: 17px;border: navajowhite;" type="text" value="1">
                <button style="border: none;float: right;background-color:white;cursor:pointer">+</button>
            </div>
        </div>
        <div>
            <p> R.s 1485.00</p>
        </div>

    </div>
    <div style="
    margin: 50px 0 50px 0;border-bottom: 1px solid red;padding-bottom: 35px;display:flex;justify-content:space-between">
        <div style="width: 25%;">
            <img style="width: 100%; height:auto;" src="/clientassets/images/1.jpg" alt="">
        </div>
        <div>
            <p> R.s 1485.00</p>
        </div>
        <div style="display:flex;align-items:baseline;">
            <div style="border: 1px solid black; padding:6px; display:flex;align-items:center;">
                <button style="border: none;float: left;background-color:white;cursor:pointer"><i class="fa fa-trash-o"></i></button>
                <input style="width: 17px;border: navajowhite;" type="text" value="1">
                <button style="border: none;float: right;background-color:white;cursor:pointer">+</button>
            </div>
        </div>

        <div>
            <p> R.s 1485.00</p>
        </div>


    </div>


    <div style="margin-top: 80px;
    margin-bottom: 80px;" class="row">
        <div class="col-12 col-md-6 ">
            <label style="display: inherit;">
                <span class=" ">Add Order Note</span>
            </label>
            <textarea name="note" rows="5" style="width: 100%;" placeholder="How can we help you?">

               </textarea>
        </div>
        <div style="text-align: right; line-height:2" class="col-12 col-md-6">

            <strong>Subtotal:</strong>
            <span data-currency-pkr="Rs.5,480.00">Rs.5,480.00</span>


            <p>Taxes, shipping and discounts codes calculated at checkout</p>
            <button style="background-color: black; color:white;width:50%;" type="submit" data-confirm="" name="checkout">Check Out</button>

        </div>
    </div>

    <div style="width:100%;text-align:center;margin-left: auto;margin-right: auto;margin-bottom:50px">
        <div style="display: inline;">
            <hr style="width: 100px;
    background-color: red; height:0px;display:inline-block;margin:auto">
        </div>
        <div style="display: inline;">
            <p style="display: inline-block;">You May Like</p>
        </div>
        <div style="display: inline;">
            <hr style="width: 100px;
    background-color: red;height:0px;display:inline-block;margin:auto">
        </div>

    </div>


</div>


<div id="carouselExampleControls" style="margin-top: 0px;" class="carousel slide container" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-12">

                    <div class="card mainclass" style="width:100%;display:inline-block;margin:3px;border:none">
                        <img class="d-block w-100 image" style="height:370px;object-fit:cover" src="/clientassets/images/fp1.webp" alt="First slide">
                        <div style="text-align: center;" class="card-body ">

                            <p class="card-text">Stripped blended scarf </p>
                            <p style="line-height: 0;">1548 PKR</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-12">
                    <div class="card mainclass" style="width:100%;display:inline-block;margin:3px;border:none">
                        <img class="d-block w-100 image" style="height:370px;object-fit:cover" src="/clientassets/images/fp1.webp" alt="First slide">
                        <div style="text-align: center;" class="card-body ">

                            <p class="card-text">Stripped blended scarf </p>
                            <p style="line-height: 0;">1548 PKR</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-12">
                    <div class="card mainclass" style="width:100%;display:inline-block;margin:3px;border:none">
                        <img class="d-block w-100 image" style="height:370px;object-fit:cover" src="/clientassets/images/fp1.webp" alt="First slide">
                        <div style="text-align: center;" class="card-body ">

                            <p class="card-text">Stripped blended scarf </p>
                            <p style="line-height: 0;">1548 PKR</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-12">
                    <div class="card mainclass" style="width:100%;display:inline-block;margin:3px;border:none">
                        <img class="d-block w-100 image" style="height:370px;object-fit:cover" src="/clientassets/images/fp1.webp" alt="First slide">
                        <div style="text-align: center;" class="card-body ">

                            <p class="card-text">Stripped blended scarf </p>
                            <p style="line-height: 0;">1548 PKR</p>

                        </div>
                    </div>
                </div>


            </div>

        </div>
        <div class="carousel-item">
            <div class="row">
                <div class="col-md-3">

                    <div class="card mainclass" style="width:100%;display:inline-block;margin:3px;border:none">
                        <img class="d-block w-100 image" style="height:370px;object-fit:cover" src="/clientassets/images/fp1.webp" alt="First slide">
                        <div style="text-align: center;" class="card-body ">

                            <p class="card-text">Stripped blended scarf </p>
                            <p style="line-height: 0;">1548 PKR</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mainclass" style="width:100%;display:inline-block;margin:3px;border:none">
                        <img class="d-block w-100 image" style="height:370px;object-fit:cover" src="/clientassets/images/fp1.webp" alt="First slide">
                        <div style="text-align: center;" class="card-body ">

                            <p class="card-text">Stripped blended scarf </p>
                            <p style="line-height: 0;">1548 PKR</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mainclass" style="width:100%;display:inline-block;margin:3px;border:none">
                        <img class="d-block w-100 image" style="height:370px;object-fit:cover" src="/clientassets/images/fp1.webp" alt="First slide">
                        <div style="text-align: center;" class="card-body ">

                            <p class="card-text">Stripped blended scarf </p>
                            <p style="line-height: 0;">1548 PKR</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mainclass" style="width:100%;display:inline-block;margin:3px;border:none">
                        <img class="d-block w-100 image" style="height:370px;object-fit:cover" src="/clientassets/images/fp1.webp" alt="First slide">
                        <div style="text-align: center;" class="card-body ">

                            <p class="card-text">Stripped blended scarf </p>
                            <p style="line-height: 0;">1548 PKR</p>

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

@endsection