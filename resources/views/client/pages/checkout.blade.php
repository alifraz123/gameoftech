<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link href="https://fonts.googleapis.com/css?family=Lato:400,900,700,400italic" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>checkout</title>
</head>
<body>

<style>
  .button5 {
    background-color: white;
    color: black;
    border: 2px solid #555555;
  }
  .button {
    background-color: transparent; /*  */
    border: 1px solid black;
    color: black;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
  }
</style>
<div style="display: flex; flex-wrap: wrap; margin-bottom: 10px;" class="">
  <div style="padding-left: 0px;padding-top: 50px;" class="col-md-7">
    <div style="width: 80%;
    margin-left: 133px;
    margin-right: auto;" class="container">


      <h3 style="font-size: 40px;font-family: 'FontAwesome';"> GAME OF TECH </h3>
      <div style="background-color:honeydew; border-radius: 10px;">
        <p style="padding:10px"> <span style="font-weight: bold;"> Cart </span> > <span style="color: darkgray;"> checkout_page </span></p>
      </div>

      <div style="display: flex;justify-content: space-between;">
        <div>
          <h6>Contact Information</h6>
        </div>
        <div>
          <p>Already have an account ? <a href="/auth/login" style="color: blue">Login</a></p>
        </div>

      </div>
      <form class="container">
        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="email" class="form-control" required name="email" id="email" placeholder="Email">
          </div>
          <div class="form-group col-md-6">
            <input type="phone" class="form-control" required name="phone" id="phone" placeholder="Phone">
          </div>
        </div>
        <h6>Shipping Address </h6>
        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="Text" class="form-control" required name="firstname" id="firstname" placeholder="First Name">
          </div>
          <div class="form-group col-md-6">
            <input type="Text" class="form-control" required name="lastname" id="lastname" placeholder="Last Name">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <input type="text" class="form-control" required name="address" placeholder="Address" id="address">
          </div>
          <div class="form-group col-md-12">
            <input type="text" class="form-control" required name="apartment" placeholder="Appartment, Suit etc. (optionls)" id="apartment">
          </div>
          <div class="form-group col-md-12">
            <input type="text" class="form-control" required name="city" placeholder="City" id="city">
          </div>

        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="text" class="form-control" required name="country" placeholder="Country/Region" id="country">
          </div>
          <div class="form-group col-md-6">
            <input type="text" class="form-control" required name="postalcode" placeholder="postal Code" id="postalcode">
          </div>
        </div>

        <div class="form-row">

          <input style="margin-right: 10px;" onchange="account()" id="account_checkbox" type="checkbox">
          <label style="margin-top: -4px;">Create an account ?</label>
        </div>

        <div id="account_psd" class="form-row">
          <label>Enter Password For Create Account</label>
          <input type="password" id="account_password" class="form-control">
        </div>


      </form>
    </div>

  </div>


  <!-- second section start -->
  <div style="padding-right: 0px;padding-top: 50px;;border-left: 1px solid grey;background-color:#FAFAFA" class=" col-md-5">
    <!-- <h2 style="width: 80%; margin-right: auto; margin-left: auto; margin-top: 10px;">Your Order</h2> -->

    <div style="display:flex;width: 80%;margin-left: auto;margin-right: auto;margin-bottom:20px" class="">

      <div style="position:relative" class="">
        <img src="/clientassets/images/2.jpg" style="width: 80px;height:80px;" alt="">
        <p style="border-radius: 50%;background-color: grey;color:white;text-align:center;position: absolute;
    top: -8px;
    right: -10px;
    width: 25px;">1</p>
      </div>

      <div style="width: 30%; margin-left: auto; margin-right: auto;display:flex;align-items:center" class="">
        <p>product name</p>
      </div>
      <div style="display:flex;align-items:center" class="">
        R.s 1452
      </div>

    </div>
    <div style="display:flex;width: 80%;margin-left: auto;margin-right: auto;" class="">

      <div style="position:relative" class="">
        <img src="/clientassets/images/2.jpg" style="width: 80px;height:80px;" alt="">
        <p style="border-radius: 50%;background-color: grey;color:white;text-align:center;position: absolute;
    top: -8px;
    right: -10px;
    width: 25px;">1</p>
      </div>

      <div style="width: 30%; margin-left: auto; margin-right: auto;display:flex;align-items:center" class="">
        <p>product name</p>
      </div>
      <div style="display:flex;align-items:center" class="">
        R.s 1452
      </div>

    </div>



    <hr style="background-color: gray; margin:10px;margin-top: 30px;
    width: 80%;
    margin-left: auto;
    margin-right: auto;">


    <table style="margin-top: 10px; " class="table table-borderless bg-white">
      <thead>

      </thead>
      <tbody style="overflow: hidden;" class="bg-white" id="show_cart_total">
        
       
        <div style="padding: 10px;  width: 80%;margin-left: auto; margin-right: auto;">
          <div style="display: inline;font-weight: bold">Sub Total</div>

          <div id="shipping_value" style="display: inline; float: right;font-weight: bold">4200</div>
         
        </div>
       
        <div style="padding: 10px; border-bottom: 1px solid black; width: 80%;margin-left: auto; margin-right: auto;">
          <div style="display: inline;font-weight: bold">Shipping</div>

          <div id="shipping_value" style="display: inline; float: right;font-weight: bold">200</div>
         
        </div>
        <div style="padding: 10px;  width: 80%;margin-left: auto; margin-right: auto;">
          <div style="display: inline;font-weight: bold">Total</div>

          <div id="shipping_value" style="display: inline; float: right;font-weight: bold">PKR 4400</div>
         
        </div>


      </tbody>
    </table>

    <div style="text-align: center;">
      <button style="margin-left: 0px;width: 80%; " class="button button5">Place Order</button>
    </div>

  </div>

</div>
  
</body>
</html>