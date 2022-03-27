@extends('client/layouts/otherpagelay')
@section('content')
<style>
    p {
        line-height: 1;
    }

    .subcategories_list {
        font-style: normal;
        cursor: default;
        visibility: visible;
        border: none;
        box-sizing: border-box;
        list-style: none;
        margin: 0;
        padding: 0;
        line-height: 1.6;
        margin-bottom: 1.25rem;
        list-style-position: outside;
        font-family: inherit;
        color: #333;
        font-size: .938rem;
        font-weight: 400;
        text-align: left;
    }
</style>

<div style="width: 88%; margin-left:auto;margin-right:auto">
    <h2>Categories</h2>
</div>

<div class="container-fluid categoryClass">
    <div style="display:inline-block;padding-top:10px;margin-top:2vh;width:18rem;text-align:center" class="card ">

        <img class="d-block w-100"  style="background-color:gainsboro" src="/clientassets/images/c1.png" alt="">
        <div class="card-body" >
          
       
            <ul class="subcategories_list">
            <h5 style="text-align: left;">Audio</h5>
                <li><a href="category">Home Audio</a></li>
                <li><a href="https://www.tejar.pk/portable-audio-video/bluetooth-speakers">Speakers</a></li>
                <li><a href="https://www.tejar.pk/portable-audio-video/headphones">Headphones</a></li>
                <li><a href="https://www.tejar.pk/portable-audio-video/docks-radios-and-boomboxes">Docks, Radios &amp; Boomboxes</a></li>
                <li><a href="https://www.tejar.pk/portable-audio-video/car-audio">Car Audio</a></li>
                <li><a href="https://www.tejar.pk/portable-audio-video/mp3-players-accessories">iPods &amp; MP3 Players</a></li>
                <li><a href="https://www.tejar.pk/portable-audio-video/microphones">Microphones</a></li>
                <li><a href="https://www.tejar.pk/portable-audio-video/musical-instruments">Musical Instruments</a></li>

            </ul>
        </div>


    </div>
    <div style="display:inline-block;padding-top:10px;margin-top:2vh;width:18rem" class="card ">

        <img class="d-block w-100" style="background-color:gainsboro" src="/clientassets/images/c2.png" alt="">
        <div class="card-body" style="width: auto;">

            <ul class="subcategories_list">
                  <h5 style="text-align: left;">Computer & Accessories</h5>
                <li><a href="https://www.tejar.pk/computers-accessories/laptops">Laptops</a></li>
                <li><a href="https://www.tejar.pk/computers-accessories/desktops">Desktops</a></li>
                <li><a href="https://www.tejar.pk/computers-accessories/laptop-accessories">Laptop Accessories</a></li>
                <li><a href="https://www.tejar.pk/computers-accessories/monitors">Monitors &amp; Accessories</a></li>
                <li><a href="https://www.tejar.pk/computers-accessories/printers">Printers &amp; Toners</a></li>
                <li><a href="https://www.tejar.pk/computers-accessories/computer-components">Computer Components</a></li>
                <li><a href="https://www.tejar.pk/computers-accessories/keyboards-mice">Keyboards &amp; Mice</a></li>
                <li><a href="https://www.tejar.pk/computers-accessories/input-devices">Input Devices</a></li>
                <li><a href="https://www.tejar.pk/computers-accessories/computer-accessories">Computer Accessories &amp; Peripherals</a></li>
                <li><a href="https://www.tejar.pk/computers-accessories/cables-interconnects">Cables &amp; Interconnects</a></li>
                <li><a href="https://www.tejar.pk/computers-accessories/computer-cable-adapters">Computer Cable Adapters</a></li>
                <li><a href="https://www.tejar.pk/computers-accessories/data-storage">Data Storage</a></li>
                <li><a href="https://www.tejar.pk/computers-accessories/networking-products">Wi-Fi &amp; Networking</a></li>

            </ul>
        </div>


    </div>
    <div style="display:inline-block;padding-top:10px;margin-top:2vh;width:18rem" class="card  ">

        <img class="d-block w-100" style="background-color:gainsboro" src="/clientassets/images/c3.png" alt="">
        <div class="card-body" style="width: auto;">

            <ul class="subcategories_list">
                  <h5 style="text-align: left;">GPS, Marine & Car Electronics</h5>
                <li><a href="https://www.tejar.pk/home-office/home-automation">Home Automation</a></li>
                <li><a href="https://www.tejar.pk/home-office/lighting">Lighting</a></li>
                <li><a href="https://www.tejar.pk/home-office/air-quality">Heating, Cooling &amp; Air Quality</a></li>
                <li><a href="https://www.tejar.pk/home-office/home-alarms-sensors">Home Alarms &amp; Sensors</a></li>
                <li><a href="https://www.tejar.pk/home-office/security-cameras-surveillance">Security Cameras &amp; Surveillance</a></li>
                <li><a href="https://www.tejar.pk/home-office/smart-locks-alarms">Smart Locks &amp; Alarms</a></li>
                <li><a href="https://www.tejar.pk/home-office/home-appliances">Home Appliances</a></li>
                <li><a href="https://www.tejar.pk/home-office/vacuum-parts">Vacuum Cleaners &amp; Floor Care</a></li>
                <li><a href="https://www.tejar.pk/home-office/kitchenware-kitchen-appliances">Kitchenware &amp; Kitchen Appliances</a></li>
                <li><a href="https://www.tejar.pk/home-office/pet-supplies">Pet Supplies</a></li>
                <li><a href="https://www.tejar.pk/home-office/home-essentials">Home &amp; Office Essentials</a></li>
                <li><a href="https://www.tejar.pk/home-office/office-electronics">Office Electronics</a></li>
                <li><a href="https://www.tejar.pk/home-office/office-supplies">Office Supplies</a></li>
                <li><a href="https://www.tejar.pk/home-office/power-hand-tools">Power &amp; Hand Tools</a></li>

            </ul>
        </div>


    </div>
    <div style="display:inline-block;padding-top:10px;margin-top:2vh;width:18rem" class="card  ">

        <img class="d-block w-100" style="background-color:gainsboro" src="/clientassets/images/c4.png" alt="">
        <div class="card-body" style="width: auto;">

            <ul class="subcategories_list">
                  <h5 style="text-align: left;">Sports & Outdoor</h5>
                <li><a href="https://www.tejar.pk/movies-music-games/consoles">Consoles</a></li>
                <li><a href="https://www.tejar.pk/movies-music-games/game-hardware">PC Gaming</a></li>
                <li><a href="https://www.tejar.pk/movies-music-games/accessories">Multi-Platform Gaming</a></li>

            </ul>
        </div>


    </div>
    <div style="display:inline-block;padding-top:10px;margin-top:2vh;width:18rem" class="card  ">

        <img class="d-block w-100" style="background-color:gainsboro" src="/clientassets/images/c5.png" alt="">
        <div class="card-body" style="width: auto;">

            <ul class="subcategories_list">
                  <h5 style="text-align: left;">Camera Camcoder & Photo</h5>
                <li><a href="https://www.tejar.pk/sports-outdoors/tablets">Tablets, iPads &amp; eBook Readers</a></li>
                <li><a href="https://www.tejar.pk/sports-outdoors/tablet-accessories">Tablet Accessories</a></li>
                <li><a href="https://www.tejar.pk/sports-outdoors/batteries-battery-packs">Cell Phone Batteries &amp; Chargers</a></li>
                <li><a href="https://www.tejar.pk/sports-outdoors/holsters">Cell Phone Cases &amp; Clips</a></li>
                <li><a href="https://www.tejar.pk/sports-outdoors/mobile-photography-accessories">Mobile Photography Accessories</a></li>
                <li><a href="https://www.tejar.pk/sports-outdoors/cell-phone-accessories">Cell Phone Accessories</a></li>

            </ul>
        </div>


    </div>
    <div style="display:inline-block;padding-top:10px;margin-top:2vh;width:18rem" class="card  ">

        <img class="d-block w-100" style="background-color:gainsboro" src="/clientassets/images/c6.png" alt="">
        <div class="card-body" style="width: auto;">

            <ul class="subcategories_list">
                  <h5 style="text-align: left;">Drones & Toys</h5>
                <li><a href="https://www.tejar.pk/beauty-health/smart-watches">Smartwatches &amp; Accessories</a></li>
                <li><a href="https://www.tejar.pk/beauty-health/fitness-activity-monitors">Activity Trackers &amp; Accessories</a></li>
                <li><a href="https://www.tejar.pk/beauty-health/health-monitors">Health Monitoring &amp; Testing</a></li>
                <li><a href="https://www.tejar.pk/beauty-health/beauty-personal-care">Beauty &amp; Fashion</a></li>
                <li><a href="https://www.tejar.pk/beauty-health/tools-appliances">Personal Care</a></li>
                <li><a href="https://www.tejar.pk/beauty-health/hair-care">Hair Care</a></li>
                <li><a href="https://www.tejar.pk/beauty-health/baby-toddler-toys">Baby Care</a></li>
                <li><a href="https://www.tejar.pk/beauty-health/art-craft">Art &amp; Craft</a></li>

            </ul>
        </div>


    </div>
    <div style="display:inline-block;padding-top:10px;margin-top:2vh;width:18rem" class="card  ">

        <img class="d-block w-100" style="background-color:gainsboro" src="/clientassets/images/c7.png" alt="">
        <div class="card-body" style="width: auto;">

            <ul class="subcategories_list">
                  <h5 style="text-align: left;">Audio</h5>
                <li><a href="https://www.tejar.pk/drones-toys/drones-accessories">Drones &amp; Accessories</a></li>
                <li><a href="https://www.tejar.pk/drones-toys/toys">Toys</a></li>

            </ul>
        </div>


    </div>
    <div style="display:inline-block;padding-top:10px;margin-top:2vh;width:18rem" class="card  ">

        <img class="d-block w-100" style="background-color:gainsboro" src="/clientassets/images/c8.png" alt="">
        <div class="card-body" style="width: auto;">

            <ul class="subcategories_list">
                  <h5 style="text-align: left;">Health Fitness Bueaty</h5>
                <li><a href="https://www.tejar.pk/camera-camcorder-photo/camera-lenses">Cameras</a></li>
                <li><a href="https://www.tejar.pk/camera-camcorder-photo/video">Camcorders</a></li>
                <li><a href="https://www.tejar.pk/camera-camcorder-photo/post-production-equipment">Pro Video Equipment</a></li>
                <li><a href="https://www.tejar.pk/camera-camcorder-photo/cameras-camera-accessories">Camera Lenses &amp; Lens Accessories</a></li>
                <li><a href="https://www.tejar.pk/camera-camcorder-photo/printers-scanners">Printers &amp; Scanners</a></li>
                <li><a href="https://www.tejar.pk/camera-camcorder-photo/storage-presentation-materials">Storage, Presentation &amp; Cleaning Materials</a></li>

            </ul>
        </div>


    </div>
    <div style="display:inline-block;padding-top:10px;margin-top:2vh;width:18rem" class="card  ">

        <img class="d-block w-100" style="background-color:gainsboro" src="/clientassets/images/c9.png" alt="">
        <div class="card-body" style="width: auto;">

            <ul class="subcategories_list">
                  <h5 style="text-align: left;">TV & Videos</h5>
                <li><a href="https://www.tejar.pk/sports-outdoor/golf">Sports</a></li>
                <li><a href="https://www.tejar.pk/sports-outdoor/outdoor-recreation">Outdoor Recreation</a></li>
                <li><a href="https://www.tejar.pk/sports-outdoor/travelling">Travelling</a></li>
                <li><a href="https://www.tejar.pk/sports-outdoor/binoculars-scopes">Binoculars &amp; Scopes</a></li>
                <li><a href="https://www.tejar.pk/sports-outdoor/outdoor-living">Outdoor Living</a></li>
                <li><a href="https://www.tejar.pk/sports-outdoor/hookahs-vaporizers">Hookahs &amp; Vaporizers</a></li>

            </ul>
        </div>


    </div>
    <div style="display:inline-block;padding-top:10px;margin-top:2vh;width:18rem" class="card  ">

        <img class="d-block w-100" style="background-color:gainsboro" src="/clientassets/images/c10.png" alt="">\
        <div class="card-body" style="width: auto;">

            <ul class="subcategories_list">
                  <h5 style="text-align: left;">Cell Phone Accessories & Tablets</h5>
                <li><a href="https://www.tejar.pk/gps-marine-car-electronics/gps-navigation">GPS &amp; Navigation</a></li>
                <li><a href="https://www.tejar.pk/gps-marine-car-electronics/marine-electronics">Marine Electronics</a></li>
                <li><a href="https://www.tejar.pk/gps-marine-car-electronics/car-security-convenience">Car Security &amp; Convenience</a></li>
                <li><a href="https://www.tejar.pk/gps-marine-car-electronics/car-accessories">Car Chargers &amp; Accessories</a></li>

            </ul>

        </div>

    </div>
</div>
@endsection