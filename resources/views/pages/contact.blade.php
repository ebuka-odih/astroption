
@extends('pages.layout.app')
@section('content')

<section style="padding-bottom:150px; padding-top:150px" class="page_header padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-content">
                <h1>Contact Us</h1>


            </div>
        </div>
    </div>
</section>


<!--Contact Deatils -->
<section id="contact" class="padding">
    <div class="container">
        <div class="row padding-bottom">
            <div class="col-md-4 contact_address heading_space wow fadeInLeft" data-wow-delay="400ms">
                <h2 class="heading heading_space"><span>Get</span> in Touch <span class="divider-left"></span></h2>
                <p>Feel free to write to our customer service representative on any issue that you cant handle that actually relates to our Service</p>
                <div class="address">
                    <i class="icon icon-map-pin border_radius"></i>
                    <h4>Visit Us</h4>
                    <p>32108 16414 SAN PEDRO, SUITE 930, SAN ANTONIO, TX 78232 </p>
                </div>
                <div class="address second">
                    <i class="icon icon-envelope border_radius"></i>
                    <h4>Email Us</h4>
                    <p><a href="mailto:support@astroption.com">admin@astroption.com</a></p>
                </div>
                <div class="address">
                    <i class="icon icon-phone4 border_radius"></i>
                    <h4>Call Us</h4>
                    <p>+35795522426</p>
                </div>
            </div>
            <div class="col-md-8 wow fadeInRight" data-wow-delay="4500ms">
                <h2 class="heading heading_space"> <span>Send us an</span> Email<span class="divider-left"></span></h2>



                <script language=javascript>

                    function checkform() {
                        if (document.mainform.name.value == '') {
                            alert("Please type your full name!");
                            document.mainform.name.focus();
                            return false;
                        }
                        if (document.mainform.email.value == '') {
                            alert("Please enter your e-mail address!");
                            document.mainform.email.focus();
                            return false;
                        }
                        if (document.mainform.message.value == '') {
                            alert("Please type your message!");
                            document.mainform.message.focus();
                            return false;
                        }
                        return true;
                    }

                </script>

                <form method=post name=mainform onsubmit="return checkform()" class="form-inline findus"><input type="hidden" name="form_id" value="16319483182507"><input type="hidden" name="form_token" value="5c5a21af024b09f019d7abae8dd27230">
                    <input type=hidden name=a value=support>
                    <input type=hidden name=action value=send>


                    <div class="row">
                        <div class="col-md-12">
                            <div id="result"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" value="" placeholder="Name"   required>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" value="" placeholder="Email"   required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <textarea placeholder="Comment" name="message" ></textarea>





                            <button class="btn_common yellow border_radius" type="submit">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>


    </div>
    </div>
</section>
<!--Contact Deatils -->


@endsection
