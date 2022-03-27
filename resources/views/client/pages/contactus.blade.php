@extends('client/layouts/otherpagelay')
@section('content')
<div style="background-color: ghostwhite;text-align: center;padding: 35px;">
    <h5>Contact Us</h5>

</div>

<div style="background-color: white;">
    <div class="responsiveFormInCenter" style="padding:100px 0 100px 0">

        <form method="post" action="/contact#contact_form" class="contact-form">


            <h3 style="font-family: -webkit-pictograph;">SEND US A MESSAGE</h3>
            <p>
                <label style="display: block;" for="-name">Your Name (required)</label>
                <input style="width: 100%;padding:8px" required="required" type="text" id="-name" name="contact[name]" value="">
            </p>
            <p>
                <label style="display: block;" for="-email">Your Email (required)</label>
                <input style="width: 100%;padding:8px" required="required" type="email" id="-email" name="contact[email]" autocorrect="off" autocapitalize="off" value="" aria-required="true">
            </p>
            <p>
                <label style="display: block;" for="-phone">Your Phone Number</label>
                <input style="width: 100%;padding:8px" type="tel" id="-phone" name="contact[phone]" pattern="[0-9\-]*" value="">
            </p>
            <p>
                <label style="display: block;" for="-message">Your Message</label>
                <textarea style="width: 100%;" rows="10" id="-message" name="contact[body]" required="required"></textarea>
            </p>
            <input style="width: 100%;background-color:white;padding:8px" type="submit" class="button" value="Send">
        </form>
        

    </div>


</div>

@endsection