@extends('client/layouts/otherpagelay')
@section('content')
<div style="background-color: ghostwhite;text-align: left;padding: 35px;">
    <h6 style="width: 90%;
    margin-left: auto;
    margin-right: auto;">Home > Scarves > Striped Blended Scarves</h6>
</div>
<div style="width:90%;margin-left:auto;margin-right:auto;">
    <div class="row">
        <div class="col-md-7">
            <div class="row">
                <div class="col-md-6">
                    <img style="width: 100%;height: 400px;margin-bottom:20px;" src="public/clientassets/images/1.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <img style="width: 100%;height: 400px;;margin-bottom:20px;" src="public/clientassets/images/1.jpg" alt="">
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <img style="width: 100%;height: 400px;;margin-bottom:20px;" src="public/clientassets/images/1.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <img style="width: 100%;height: 400px;;margin-bottom:20px;" src="public/clientassets/images/1.jpg" alt="">
                </div>

            </div>
        </div>
        <div style="font-family: -webkit-pictograph;" class="col-md-5">
            <h1>Striped Blended Scarf</h1>
            <p>No Reviews</p>
            <h5 style="line-height: 2;">Rs.1,490.00</h5>
            <h5 style="line-height: 2;">SKU: WESTSCF00833-999-999</h5>
            <h5 style="line-height: 2;">Availability : In Stock</h5>
            <div style="border: 1px solid black; padding:6px;width: 30%;text-align: center;display:inline-block">
                <button style="border: none;float: left;background-color:white;cursor:pointer"><i class="fa fa-trash-o"></i></button>
                <input style="width: 17px;border: navajowhite;" type="text" value="1">
                <button style="border: none;float: right;background-color:white;cursor:pointer">+</button>
            </div>
            <div style="padding: 0;display:inline" class="col-md-12">
                <button style="display:inline;border: 1px solid black;padding: 7px;width: 50%;background-color: black;color: white;margin-top: 10px;">CHECK OUT</button>
            </div>
            <div style="padding:0;display:inline;" class="col-md-12">
                <button style="border: 1px solid black;padding: 7px;background-color: black;color: white;margin-top: 10px;">CH</button>
            </div>


            <ul class="nav nav-tabs" style="margin-top: 30px;" id="myTab" role="tablist">
                <button style="margin:10px;background-color: white; background-color: white;height: 87px;border-radius: 50%;" class="nav-item">
                    <a class="nav-link active" style="border:none" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                </button>
                <button style="margin:10px;background-color: white; background-color: white;height: 87px;border-radius: 50%;" class="nav-item">
                    <a class="nav-link" style="border:none" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                </button>
                <button style="margin:10px;background-color: white; background-color: white;height: 87px;border-radius: 50%;" class="nav-item">
                    <a class="nav-link" style="border:none" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Home</a>
                </button>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    This is first tab data
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    This is second tab data
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    This is third tab data
                </div>
            </div>



        </div>





        <div style="width: 35%;margin-top:50px;
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

</div>


@endsection