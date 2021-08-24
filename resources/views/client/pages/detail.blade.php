@extends('client/layouts/otherpagelay')
@section('content')
<div style="background-color: ghostwhite;text-align: left;padding: 35px;">
    <h6 style="width: 90%;
    margin-left: auto;
    margin-right: auto;">Home > Scarves > Striped Blended Scarves</h6>
</div>
<style>
    * {
        box-sizing: border-box;
    }

    .img-zoom-container {
        position: relative;
    }

    .img-zoom-lens {
        position: absolute;
        /*set the size of the lens:*/
        width: 40px;
        height: 40px;
    }

    .img-zoom-result {
        border: 1px solid #d4d4d4;
        /*set the size of the result div:*/
        width: 50%;
        height: 310px;
    }
</style>
<div style="width:90%;margin-left:auto;margin-right:auto;">
    <div class="row">
        <div class="col-md-7">

            <div style="display:flex" onmouseleave="hide_result_image()" class="img-zoom-container">
                <img onmouseover="show_result_image()" style="width: 50%;height:50%" id="myimage" src="public/clientassets/images/1.jpg">
                <div id="myresult" class="img-zoom-result"></div>
            </div>


        </div>

        <div style="font-family: -webkit-pictograph;" class="col-md-5">
            <h3>Striped Blended Scarf</h3>
            <span>
                <i class="bi bi-star"></i><i class="bi bi-star"></i>
                <i class="bi bi-star"></i><i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i>No Reviews</i>
            </span>

            <h5 style="line-height: 2;">Rs.1,490.00</h5>
            <h6 style="line-height: 2;">SKU: WESTSCF00833-999-999</h5>
            <h6 style="line-height: 2;">Availability : In Stock</h6>
            <div style="border: 1px solid black; padding:6px;width: 30%;text-align: center;display:inline-block">
                <button style="border: none;float: left;background-color:white;cursor:pointer"><i class="fa fa-trash-o"></i></button>
                <input style="width: 17px;border: navajowhite;" type="text" value="1">
                <button style="border: none;float: right;background-color:white;cursor:pointer">+</button>
            </div>
            <div style="padding: 0;display:inline" class="col-md-12">
                <button style="display:inline;border: 1px solid black;padding: 7px;width: 30%;background-color: black;color: white;margin-top: 10px;">CHECK OUT</button>
            </div>
            <div style="padding:0;display:inline;" class="col-md-12">
                <button style="border: 1px solid black;padding: 7px;background-color: white;color: white;margin-top: 10px;width:8%">
                    <i style="color: black;" class="fa fa-heart-o"></i>
                </button>
            </div>




        </div>

        <div style="margin-top: 40px;" class="col-md-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a style="color: red;" class="nav-link active" id="home-tab" data-toggle="tab" href="#description" role="tab" aria-controls="home" aria-selected="true">Description</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="profile" aria-selected="false">Reviews</a>
                </li>

            </ul>
            <div style="padding: 20px;" class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="home-tab">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed impedit, fugiat iure, eos perspiciatis tempora iusto fuga ut totam iste odio ex sapiente doloremque ipsam ipsum quia maxime ducimus quasi?
                </div>
                <div class="tab-pane fade row" id="reviews" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="col-md-6">


                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                            <div class="form-group">

                                <span>
                                    <i class="bi bi-star"></i><i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i><i class="bi bi-star"></i>
                                    <i class="bi bi-star"></i>
                                    <i>Rating</i>
                                </span>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Write Review</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <button class="btn btn-outline-dark">Sumbit Review</button>
                        </form>
                    </div>
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

<div id="carouselExampleControls" style="margin-top: 0px;" class="carousel slide container" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row">
                <div class="col-md-3">

                    <div class="card mainclass" style="width:100%;display:inline-block;margin:3px;border:none">
                        <img class="d-block w-100 image" style="height:370px;object-fit:cover" src="public/clientassets/images/fp1.webp" alt="First slide">
                        <div style="text-align: center;" class="card-body ">

                            <p class="card-text">Stripped blended scarf </p>
                            <p style="line-height: 0;">1548 PKR</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mainclass" style="width:100%;display:inline-block;margin:3px;border:none">
                        <img class="d-block w-100 image" style="height:370px;object-fit:cover" src="public/clientassets/images/fp1.webp" alt="First slide">
                        <div style="text-align: center;" class="card-body ">

                            <p class="card-text">Stripped blended scarf </p>
                            <p style="line-height: 0;">1548 PKR</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mainclass" style="width:100%;display:inline-block;margin:3px;border:none">
                        <img class="d-block w-100 image" style="height:370px;object-fit:cover" src="public/clientassets/images/fp1.webp" alt="First slide">
                        <div style="text-align: center;" class="card-body ">

                            <p class="card-text">Stripped blended scarf </p>
                            <p style="line-height: 0;">1548 PKR</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mainclass" style="width:100%;display:inline-block;margin:3px;border:none">
                        <img class="d-block w-100 image" style="height:370px;object-fit:cover" src="public/clientassets/images/fp1.webp" alt="First slide">
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
                        <img class="d-block w-100 image" style="height:370px;object-fit:cover" src="public/clientassets/images/fp1.webp" alt="First slide">
                        <div style="text-align: center;" class="card-body ">

                            <p class="card-text">Stripped blended scarf </p>
                            <p style="line-height: 0;">1548 PKR</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mainclass" style="width:100%;display:inline-block;margin:3px;border:none">
                        <img class="d-block w-100 image" style="height:370px;object-fit:cover" src="public/clientassets/images/fp1.webp" alt="First slide">
                        <div style="text-align: center;" class="card-body ">

                            <p class="card-text">Stripped blended scarf </p>
                            <p style="line-height: 0;">1548 PKR</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mainclass" style="width:100%;display:inline-block;margin:3px;border:none">
                        <img class="d-block w-100 image" style="height:370px;object-fit:cover" src="public/clientassets/images/fp1.webp" alt="First slide">
                        <div style="text-align: center;" class="card-body ">

                            <p class="card-text">Stripped blended scarf </p>
                            <p style="line-height: 0;">1548 PKR</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mainclass" style="width:100%;display:inline-block;margin:3px;border:none">
                        <img class="d-block w-100 image" style="height:370px;object-fit:cover" src="public/clientassets/images/fp1.webp" alt="First slide">
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

<script>
    document.getElementById('myresult').style.display = "none";

    function imageZoom(imgID, resultID) {
        document.getElementById('myresult').style.display = "block";
        var img, lens, result, cx, cy;
        img = document.getElementById(imgID);
        result = document.getElementById(resultID);
        /*create lens:*/
        lens = document.createElement("DIV");
        lens.setAttribute("class", "img-zoom-lens");
        /*insert lens:*/
        img.parentElement.insertBefore(lens, img);
        /*calculate the ratio between result DIV and lens:*/
        cx = result.offsetWidth / lens.offsetWidth;
        cy = result.offsetHeight / lens.offsetHeight;
        /*set background properties for the result DIV:*/
        result.style.backgroundImage = "url('" + img.src + "')";
        result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
        /*execute a function when someone moves the cursor over the image, or the lens:*/
        lens.addEventListener("mousemove", moveLens);
        img.addEventListener("mousemove", moveLens);
        /*and also for touch screens:*/
        lens.addEventListener("touchmove", moveLens);
        img.addEventListener("touchmove", moveLens);

        function moveLens(e) {
            var pos, x, y;
            /*prevent any other actions that may occur when moving over the image:*/
            e.preventDefault();
            /*get the cursor's x and y positions:*/
            pos = getCursorPos(e);
            /*calculate the position of the lens:*/
            x = pos.x - (lens.offsetWidth / 2);
            y = pos.y - (lens.offsetHeight / 2);
            /*prevent the lens from being positioned outside the image:*/
            if (x > img.width - lens.offsetWidth) {
                x = img.width - lens.offsetWidth;
            }
            if (x < 0) {
                x = 0;
            }
            if (y > img.height - lens.offsetHeight) {
                y = img.height - lens.offsetHeight;
            }
            if (y < 0) {
                y = 0;
            }
            /*set the position of the lens:*/
            lens.style.left = x + "px";
            lens.style.top = y + "px";
            /*display what the lens "sees":*/
            result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
        }

        function getCursorPos(e) {
            var a, x = 0,
                y = 0;
            e = e || window.event;
            /*get the x and y positions of the image:*/
            a = img.getBoundingClientRect();
            /*calculate the cursor's x and y coordinates, relative to the image:*/
            x = e.pageX - a.left;
            y = e.pageY - a.top;
            /*consider any page scrolling:*/
            x = x - window.pageXOffset;
            y = y - window.pageYOffset;
            return {
                x: x,
                y: y
            };
        }
    }
</script>
<script>
    function show_result_image() {
        imageZoom("myimage", "myresult");
        console.log("show")
    }

    function hide_result_image() {
        document.getElementById('myresult').style.display = "none";
        console.log("hide")
    }
    // Initiate zoom effect:
</script>
@endsection