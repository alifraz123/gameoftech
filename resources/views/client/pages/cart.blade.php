@extends('client/layouts/otherpagelay')
@section('content')
<div style="background-color: ghostwhite;text-align: center;padding: 35px;">
    <h5>SHOPPING CART</h5>
</div>

<div style="width: 80%; margin-left:auto;margin-right:auto;">

    <div style="margin-top: 79px;border-bottom: 1px solid red;" class="row">
        <div class="col-md-6">
            PRODUCT
        </div>
        <div class="col-md-2">
            PRICE
        </div>
        <div class="col-md-2">
            QUANTITY
        </div>
        <div class="col-md-2">
            TOTAL
        </div>

    </div>
    <div style="
    margin-top: 50px;
    margin-bottom: 50px;border-bottom: 1px solid red;
    padding-bottom: 50px;" class="row">
        <div class="col-md-6">
            <img style="width: 30%; height:170px;" src="public/clientassets/images/1.jpg" alt="">
        </div>
        <div style="display: flex; align-items:center;" class="col-md-2">
            <p> R.s 1485.00</p>
        </div>
        <div style="display:flex;align-items:center;" class="col-md-2">
            <div style="border: 1px solid black; padding:6px; display:flex;align-items:center;">
                <button style="border: none;float: left;background-color:white;cursor:pointer"><i class="fa fa-trash-o"></i></button>
                <input style="width: 17px;border: navajowhite;" type="text" value="1">
                <button style="border: none;float: right;background-color:white;cursor:pointer">+</button>
            </div>
        </div>
        <div style="display: flex; align-items:center;" class="col-md-2">
            <div style="display: flex; align-items:center;" class="col-md-2">
                <p> R.s 1485.00</p>
            </div>
        </div>

    </div>
    <div style="
    margin-top: 50px;
    margin-bottom: 50px;border-bottom: 1px solid red;
    padding-bottom: 50px;" class="row">
        <div class="col-md-6">
            <img style="width: 30%; height:170px;" src="public/clientassets/images/1.jpg" alt="">
        </div>
        <div style="display: flex; align-items:center;" class="col-md-2">
            <p> R.s 1485.00</p>
        </div>
        <div style="display:flex;align-items:center;" class="col-md-2">
            <div style="border: 1px solid black; padding:6px; display:flex;align-items:center;">
                <button style="border: none;float: left;background-color:white;cursor:pointer"><i class="fa fa-trash-o"></i></button>
                <input style="width: 17px;border: navajowhite;" type="text" value="1">
                <button style="border: none;float: right;background-color:white;cursor:pointer">+</button>
            </div>
        </div>
        <div style="display: flex; align-items:center;" class="col-md-2">
            <div style="display: flex; align-items:center;" class="col-md-2">
                <p> R.s 1485.00</p>
            </div>
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
            <span class="" data-currency-pkr="Rs.5,480.00">Rs.5,480.00</span>


            <p>Taxes, shipping and discounts codes calculated at checkout</p>
            <button style="background-color: black; color:white;width:50%;" type="submit" data-confirm="" name="checkout" class="">Check Out</button>

        </div>
    </div>

    <div style="width: 35%;
    margin-left: auto;
    margin-right: auto;margin-bottom:50px">
    <div style="display: inline;">
        <hr style="width: 130px;
    background-color: red; height:0px;display:inline-block;margin:auto">
    </div>
    <div style="display: inline;">
        <p style="display: inline-block;">You May Like</p>
    </div>
    <div style="display: inline;">
        <hr style="width: 130px;
    background-color: red;height:0px;display:inline-block;margin:auto">
    </div>

    </div>


</div>


@endsection