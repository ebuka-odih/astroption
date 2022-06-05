@extends('pages.layout.app')
@section('content')



    <section id="home" class="p-0 single-slide light-slider">

        <div id="rev_single_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="trax_slider_01">
            <!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
            <div id="rev_single" class="rev_slider fullwidthabanner" data-version="5.4.8.1">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-3" data-transition="crossfade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="{{ asset('front/images/slide-img2.jpg') }}" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('images/banner.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <!-- Overlay -->
                        <div class="bg-black bg-overlay opacity-7 z-index-1"></div>
                        <div class="rs-background-video-layer" data-forcerewind="on" data-volume="mute" data-videowidth="100%" data-videoheight="100vh" data-videomp4="video/video.mp4" data-videopreload="auto" data-videoloop="loopandnoslidestop" data-forceCover="1" data-aspectratio="16:9" data-autoplay="true" data-autoplayonlyfirsttime="false"></div>
                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-120','-80','-80','-80']" data-whitespace="nowrap" data-responsive_offset="on" data-width="['none','none','none','none']" data-type="text" data-textalign="['center','center','center','center']" data-transform_idle="o:1;" data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-splitin="none" data-splitout="none">
                            <h2 class="font-xlight">Own Your Trading</h2>
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-30','0','0','0']" data-whitespace="nowrap" data-responsive_offset="on" data-width="['none','none','none','none']" data-type="text" data-textalign="['center','center','center','center']" data-fontsize="['24','24','18','16']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="900" data-splitin="none" data-splitout="none">
                            <h2> Experience </h2>
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['50','75','75','75']" data-whitespace="nowrap" data-responsive_offset="on" data-width="['none','none','none','none']" data-type="text" data-textalign="['center','center','center','center']" data-fontsize="['24','24','18','16']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1600" data-splitin="none" data-splitout="none">
                            <p class="font-light text-capitalize">Test Drive our Trading Platforms</p>
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['140','160','160','160']" data-width="['500','500','500','500']" data-textalign="['center','center','center','center']" data-type="text" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="s:900;e:Power2.easeInOut;s:900;e:Power2.easeInOut;" data-start="1800" data-splitin="none" data-splitout="none" data-responsive_offset="on">

                        </div>
                    </li>
                </ul>
            </div>
            <!-- END REVOLUTION SLIDER -->
        </div>
        <!--scroll down-->
        <a href="#our-feature" class="scroll-down pagescroll whitecolor hover-default">Scroll Down <i class="fas fa-long-arrow-alt-down"></i></a>
    </section>

    <!--ABout US-->

    <section style=" background-position:top; background-repeat:no-repeat" class="padding" id="pricing">
        <div class="container">
            <div class="row">

                <center>
                    <center>
                        <div style="width:100%; height:170px; background-image:url(front/images/pricing.png); background-position:center; background-size:contain; background-repeat:no-repeat                  "></div>
                    </center>
                    <h1 style="color:#FFFFFF" class="asog-r2">Invest and watch us grow your profit</h1>
                </center>
                <div class="col-md-7 col-sm-7 wow fadeInLeft" data-wow-delay="400ms">
                    <div class="image">
                        <img src="{{ asset('front/images/sell.png') }}" alt="Xwin" class="img-responsive border-radius">
                        <div class="overlay border-radius text-center"></div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-5 shop_info wow fadeInRight" data-wow-delay="400ms">
                    <h2 style="color:#333" class="heading bottom25"><span>BUY</span>/&nbsp; SELL<span class="divider-left"></span></h2>
                    <h4 class="price_product" style="color:#000">Trading the easy way</h4>
                    <p style="font-size:22px; color:#333" class="margin10">Whether you are a beginner or a veteran Forex/CFD trader, the best way to familiarise yourself with our platform is to open an account also known as register or signup. Use the account completely free of cost to practice Astroption under real market conditions; trade with bitcoin and gain confidence with us.</p>
                    <div class="quote bottom25">

                        <a href="app/indexcca3.html?a=signup" class="btn_common yellow border_radius">Open account</a>
                    </div>


                </div>
            </div>




        </div>
    </section>


    <div style="width:100%; background-color:#0855B4">

        <div style="background-color:#0855B4" class="col-md-12 text-center wow fadeInDown">

            <div style="margin-top:20px; margin-bottom:14x;" class="col-md-8">

                <div style="color:#FFF">

                    <h3 style="color:#FFF; font-size:3em; text-align:left">
                        Solid Financial strength you can depend on</h3>



                    <p style="font-size:20px; color:#FFFFFF; text-align:left; font-weight:lighter" class="pricing_sentence">

                        We are part of GAIN Capital Holdings, Inc. (NYSE: GCAP) a publicly traded company that meets the highest standards of corporate governance, financial reporting and disclosure.
                    </p>



                </div>

            </div>

            <div class="col-md-4" style=" background-image:url(front/images/capture.png); background-repeat:no-repeat; height:250px"> </div>




        </div>


    </div>


    <section class="padding" id="pricing">
        <div class="container">



            <div style="padding-top:100px; padding-bottom:100px" class="row">

                <div class="col-sm-12 text-center">
                    <h2 class="heading">Powerful Trading Platforms & Tools <span class="divider-center"></span></h2>
                </div>
                <div class="icon_wrapclearfix">
                    <div class="col-sm-4 icon_box text-center margin_tophalf wow fadeInUp" data-wow-delay="300ms">

                        <h4 class="text-capitalize bottom20 margin10">-11.43% Low Odd</h4>
                        <center>
                            <div style="height:100px; width:250px; background-image:url(front/images/1.html); background-position:center"></div>
                        </center>
                        <p class="no_bottom"> Investment distribution complex per week fall is set on our company capital and not on investors </p>
                    </div>



                    <div class="col-sm-4 icon_box text-center margin_tophalf wow fadeInUp" data-wow-delay="400ms">

                        <h4 class="text-capitalize bottom20 margin10">11.39 High prcentage</h4>
                        <center>
                            <div style="height:100px; width:250px; background-image:url(front/images/2.png); background-position:center"></div>
                        </center>
                        <p class="no_bottom">Access to 11.39 rise on general price level which targets the investors wallet</p>
                    </div>
                    <div class="col-sm-4 icon_box text-center margin_tophalf wow fadeInUp" data-wow-delay="500ms">

                        <h4 class="text-capitalize bottom20 margin10">Unlimited Rise </h4>
                        <center>
                            <div style="height:100px; width:250px; background-image:url(front/images/3.png); background-position:center"></div>
                        </center>
                        <p class="no_bottom">Extram Rise in general profit level by weekly increase on a fast rate</p>
                    </div>
                </div>
            </div>
            <div class="row">


                <div class="col-md-12 text-center wow fadeInDown">
                    <h2 class="heading"><span>Investment</span> Options <span class="divider-center"></span></h2>
                    <p class="heading_space margin10">Open an account in as little as 5 minutes</p>
                </div>
                <div class="col-md-12 margin10">
                    <div class="pricing">
                        <div class="pricing_item wow fadeInUp" data-wow-deeay="300ms">
                            <h3>Starter plan</h3>
                            <div style="font-size:16px; color:#669900; font-weight:bolder; text-align:center" class="pricing_price">15% AFTER 24 HOURS</div>

                            <ul class="pricing_list">
                                <li class="pricing_feature">MINIMUM&nbsp;&nbsp;<strong style="font-weight:lighter; font-size:15px; color:#000000">$20</strong></li>
                                <li class="pricing_feature">MAXIMUM&nbsp;&nbsp;<strong style="font-weight:lighter; font-size:15px; color:#000000">UNLIMITED</strong></li>
                                <li class="pricing_feature">REFERRAL&nbsp;&nbsp;<strong style="font-weight:lighter; font-size:15px; color:#000000">2%</strong></li>

                                <li style="color:#000000">AUTOMATED PROFIT</li>
                            </ul>
                            <a class="btn_common btn_border text-center" href="app/indexcca3.html?a=signup">Choose plan</a>
                        </div>





                        <div class="pricing_item wow fadeInUp" data-wow-deeay="300ms">
                            <h3>Advanced plan</h3>
                            <div style="font-size:16px; color:#669900; font-weight:bolder; text-align:center" class="pricing_price">35% AFTER 35 HOURS</div>

                            <ul class="pricing_list">
                                <li class="pricing_feature">MINIMUM&nbsp;&nbsp;<strong style="font-weight:lighter; font-size:15px; color:#000000">$400</strong></li>
                                <li class="pricing_feature">MAXIMUM&nbsp;&nbsp;<strong style="font-weight:lighter; font-size:15px; color:#000000">UNLIMITED</strong></li>
                                <li class="pricing_feature">REFERRAL&nbsp;&nbsp;<strong style="font-weight:lighter; font-size:15px; color:#000000">5%</strong></li>

                                <li style="color:#000000">AUTOMATED PROFIT</li>
                            </ul>
                            <a class="btn_common btn_border text-center" href="app/indexcca3.html?a=signup">Choose plan</a>
                        </div>

                        <div class="pricing_item wow fadeInUp" data-wow-deeay="300ms">
                            <h3>Premium plan</h3>
                            <div style="font-size:16px; color:#669900; font-weight:bolder; text-align:center" class="pricing_price"> 55% AFTER  48 HOURS</div>

                            <ul class="pricing_list">
                                <li class="pricing_feature">MINIMUM&nbsp;&nbsp;<strong style="font-weight:lighter; font-size:15px; color:#000000">$800</strong></li>
                                <li class="pricing_feature">MAXIMUM&nbsp;&nbsp;<strong style="font-weight:lighter; font-size:15px; color:#000000">UNLIMITED</strong></li>
                                <li class="pricing_feature">REFERRAL&nbsp;&nbsp;<strong style="font-weight:lighter; font-size:15px; color:#000000">10%</strong></li>

                                <li style="color:#000000">AUTOMATED PROFIT</li>
                            </ul>
                            <a class="btn_common btn_border text-center" href="app/indexcca3.html?a=signup">Choose plan</a>
                        </div>




                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>






    <section style="background-color:#000000" id="main-banner-area" class="position-relative">
        <div id="revo_main_wrapper" class="rev_slider_wrapper fullwidthbanner-container m-0 p-0 bg-light" data-alias="classic4export">
            <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
            <div id="rev_main" class="rev_slider fullwidthabanner" data-version="5.4.1">
                <ul>
                    <!-- SLIDE 1 -->
                    <li style="background-image:url(front/images/banner1-2.jpg)" data-index="rs-01" data-transition="fade" data-slotamount="default" data-easein="Power100.easeInOut" data-easeout="Power100.easeInOut" data-masterspeed="2000" data-fsmasterspeed="1500" data-param1="01">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('front/images/banner1-2.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-130','-130','-110','-80']" data-width="none" data-height="none" data-type="text" data-textAlign="['center','center','center','center']" data-responsive_offset="on" data-start="1000" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                            <h1 class="text-dark text-capitalize font-xlight text-center"> Asia Morning: U.S. Stocks</h1>


                        </div>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-50','-20']" data-width="none" data-height="none" data-type="text" data-textAlign="['center','center','center','center']" data-responsive_offset="on" data-start="1000" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                            <h1 class="text-dark text-capitalize font-bold text-center"> Take a Breather</h1>
                        </div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-10','-10','10','40']" data-width="none" data-height="none" data-type="text" data-textAlign="['center','center','center','center']" data-responsive_offset="on" data-start="1500" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                            <h1 class="text-dark text-capitalize font-xlight text-center"><small>July 10, 2020 2:25 AM</small></h1>
                        </div>
                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['40','40','60','90']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-textAlign="['center','center','center','center']" data-responsive_offset="on" data-start="2000" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                            <h4 class="text-dark font-light text-center">Provide your info and Trading experience. </h4>
                        </div>
                    </li>
                    <!-- SLIDE 2 -->
                    <li style="background-image:url(front/images/banner1-3.jpg)" data-index="rs-02" data-transition="fade" data-slotamount="default" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="2000" data-fsmasterspeed="1500" data-param1="02">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('front/images/banner-light1-3.html') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-130','-130','-110','-80']" data-width="none" data-height="none" data-type="text" data-textAlign="['center','center','center','center']" data-responsive_offset="on" data-start="1000" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                            <h1 class="text-dark text-capitalize font-xlight text-center">Let's Create</h1>
                        </div>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-50','-20']" data-width="none" data-height="none" data-type="text" data-textAlign="['center','center','center','center']" data-responsive_offset="on" data-start="1000" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                            <h1 class="text-dark text-capitalize font-bold text-center">Outstanding flexible plans</h1>
                        </div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-10','-10','10','40']" data-width="none" data-height="none" data-type="text" data-textAlign="['center','center','center','center']" data-responsive_offset="on" data-start="1500" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                            <h1 class="text-dark text-capitalize font-xlight text-center">That fits you</h1>
                        </div>
                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['40','40','60','90']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-textAlign="['center','center','center','center']" data-responsive_offset="on" data-start="2000" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                            <h4 class="text-dark font-light text-center">Cashout anytime anywhere</h4>
                        </div>
                    </li>

                </ul>
            </div>
        </div>

    </section>







    <section style=" padding-top:90px; padding-bottom:120px; background-color:#036; background-image:url(front/images/bgr.jpg); background-repeat:repeat-y; background-position:top; background-repeat:no-repeat">
        <div class="container aboutus">
            <div class="row">
                <center>
                    <div style="width:100%; height:200px; background-image:url(front/images/stock.html); background-position:center; margin-bottom:60px; background-repeat:no-repeat"></div>
                </center>
                <div class="col-md-5 wow fadeInLeft" data-wow-delay="300ms">
                    <h2 style="color:#FFFFFF" class="heading heading_space"><span style="color:#FFFFFF">Welcome </span>to astroption.com <span class="divider-left"></span></h2>


                    <h4 style="color:#FFFFFF" class="bottom25">Register with astroption.com today and start discovering a wide variety of benefits CDF on web platform: </h4>
                    <p style="color:#FFFFFF" class="bottom25">We have 2,000+ financial instruments across various classes, such as stocks, crypto and more.</p>
                    <p style="color:#FFFFFF" class="bottom25">Additionally, to enable traders and investors direct access to our market, some asset classes, such as stocks and cryptoassets, offer direct ownership of the underlying assets, which we buy and hold in each client’s name.</p>



                    <div></div>
                </div>
                <div class="col-md-2 wow fadeInRight" data-wow-delay="300ms">


                </div>


                <div class="col-md-5 wow fadeInLeft" data-wow-delay="300ms">

                    <div>


                        <h4 style="color:#FFFFFF" class="bottom25">

                            We enables clients to deposit and withdraw using bitcoin paymentgateway however there are variety of other payment methods, such minimum deposits and unified fees.
                        </h4>


                    </div>

                    <p class="bottom25">
                    <p class="pricing_sentence" style="color:#099; border-bottom:dotted 1px #00FF33">Our parents company, GAIN Capital Holdings, Inc. </p>
                    <ul style="font-size:17px; color:#FFF" class="pricing_list">
                        <li class="pricing_feature">Bitcoin investment</li>
                        <li class="pricing_feature">Cdf astroption.com</li>
                        <li class="pricing_feature">Stock astroption.com</li>
                        <li class="pricing_feature">Binary option </li>
                        <li class="pricing_feature">FX prediction</li>
                    </ul>
                    <a class="btn_common blue text-center" href="indexe47ee47e.html?a=about">Learn more </a>

                    </p>
                </div>
            </div>
        </div>
    </section>


    <section style="padding-top:80px">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInDown">

                </div>
            </div>








            <div class="row">
                <div class="col-md-5 col-sm-5 wow fadeInLeft" data-wow-delay="400ms">
                    <div class="image">
                        <img src="{{ asset('front/images/hrd2.jpg') }}" alt="Xwin" class="img-responsive border-radius">
                        <p style="color:#66CC00">Margin level indicates</p>
                        <div class="overlay border-radius text-center"></div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 shop_info wow fadeInRight" data-wow-delay="400ms">
                    <h2 class="heading bottom25"><span>API Documentation</span> Level<span class="divider-left"></span></h2>

                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener" target="_blank"><span class="blue-text">Cryptocurrency Markets</span></a> by TradingView</div>
                        <script type="text/javascript" src="s3.tradingview.com/external-embedding/embed-widget-screener.html" async>
                            {
                                "width": "576",
                                "height": "251",
                                "defaultColumn": "overview",
                                "screener_type": "crypto_mkt",
                                "displayCurrency": "USD",
                                "colorTheme": "dark",
                                "locale": "en"
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->

                    Welcome to Open API. Here you'll find all the documentation you need to help you create revolutionary new services and applications into your business, powered by the https://astroption.com Platform. With your ingenuity, together we can serve the needs of individuals and organizations across the globe and change the financial services ecosystem forever to start using our API send us an email describing how you want our API configured for you. </p>
                    <div class="quote bottom25">

                        <a href="mailto:support@astroption.com" class="btn_common yellow border_radius">REQUEST API</a>
                    </div>


                </div>
            </div>
        </div>
    </section>









    <section id="teams" class="padding-bottom">
        <div class="container">
            <div class="row">


                <div class="col-sm-6 col-md-4 equalheight">
                    <div class="team margin_top wow fadeIn" data-wow-delay="700ms">
                        <div class="image bottom25">
                            <img src="{{ asset('front/images/team1.jpg') }}" alt="teams" class=" border_radius">
                            <span class="post">Active Leaders</span>
                        </div>


                    </div>
                </div>
                <div class="col-sm-6 col-md-4 equalheight">
                    <div class="team margin_top wow fadeIn" data-wow-delay="800ms">
                        <div class="image bottom25">
                            <img src="{{ asset('front/images/team2.jpg') }}" alt="teams" class=" border_radius">
                            <span class="post">Active leaders</span>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-md-4 equalheight">
                    <div class="team margin_top wow fadeIn" data-wow-delay="900ms">
                        <div class="image bottom25">
                            <img src="{{ asset('front/images/team3.jpg') }}" alt="teams" class=" border_radius">
                            <span class="post">Active Leaders</span>
                        </div>


                    </div>
                </div>




            </div>

            <div style="height:200px" class="item">

                <p style="font-size:20px" class="review_text">We've been proud to connect independent traders to the potential of the global currency markets since we started. Today, we continue to challenge ourselves to provide traders with what they need to succeed. </p>
                <br>
                <h4>Global market Leaders of astroption.com</h4>

                <center>
                    <a style="background-color:#00CC33" href="indexe47ee47e.html?a=about" class="border_radius btn_common white_border">Learn more</a>
                </center>

            </div>



        </div>
    </section>


    <!-- Gallery -->

    <!-- Gallery -->


    <!--Fun Facts-->

    <!--Fun Facts-->


    <!--Customers Review-->
    <section id="reviews" class="padding bg_light">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center wow fadeInDown">
                    <h2 class="heading heading_space"><span>Client</span> Testimonials <span class="divider-center"></span></h2>
                    <div id="review_slider" class="owl-carousel text-center">
                        <div class="item">
                            <img src="{{ asset('front/images/customer1.png') }}" class="client_pic border_radius" alt="costomer">
                            <p class="review_text">I've been happy with the services provided by https://astroption.com service london.i was introduced by a work mate at my work place and i can tell you i have never made such cashout in my entire life. https://astroption.com has show they are the expert in the field</p>
                            <h4>John Smith</h4>
                            <p>Direct investor</p>
                        </div>
                        <div class="item">
                            <img src="{{ asset('front/images/customer2.png') }}" class="client_pic border_radius" alt="costomer">
                            <p class="review_text">am illoyed by name and i have made many referral into this system and am geting my cashout within seconds of cashout availability. if you actually want a platform built with trust, it is forrexexpert.uk</p>
                            <h4>Jhmange Illoyd</h4>
                            <p>Referral bonus investor</p>
                        </div>
                        <div class="item">
                            <img src="{{ asset('front/images/customer3.png') }}" class="client_pic border_radius" alt="costomer">
                            <p class="review_text">Now i make more with https://astroption.com than in my work place, i had to stop working for people where i get $1500/month. now i can cashout over $499.5,000 every 36 Hours, try and see </p>
                            <h4>Robert Jhon</h4>
                            <p>Ditect Investor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Customers Review-->



    <!--Pricings-->

    <!--Pricings-->


    <!-- experts -->
    <section style="padding-top:100px; padding-bottom:100px">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInDown">

                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-sm-5 wow fadeInLeft" data-wow-delay="400ms">
                    <div class="image">
                        <img src="{{ asset('front/images/hrd.jpg') }}" alt="Xwin" class="img-responsive border-radius">
                        <div class="overlay border-radius text-center"></div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 shop_info wow fadeInRight" data-wow-delay="400ms">
                    <h2 class="heading bottom25"><span>Margin</span> Level<span class="divider-left"></span></h2>


                    <p class="bottom25">Margin level indicates your account health. At a glance, you can understand if your account is profitable and if unprofitable positions must be closed. Every second counts. However with The revamped portfolio interface now makes it easier for you to manage your assets much more effectively.</p>
                    <div class="quote bottom25">

                        <a href="#." class="btn_common yellow border_radius">Get a quote</a>
                    </div>
                    <p class="tag_cate half_space">Category: <a href="#.">Tools</a>, <a href="#.">Palm</a>, <a href="#.">Trigger</a></p>
                    <div class="share clearfix">
                        <p class="pull-left"><strong>Share Product:</strong></p>
                        <ul class="pull-right">
                            <li><a href="http://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="http://www.twitter.com/"><i class="icon-twitter4"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble5"></i></a></li>
                            <li><a href="http://www.instagram.com/"><i class="icon-instagram"></i></a></li>
                            <li><a href="#"><i class="icon-vimeo4"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- experts -->


    <!-- News-->
    <section id="course_all" class="padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 equalheight">
                    <div class="course margin_top wow fadeIn" data-wow-delay="400ms">
                        <div class="image bottom25">
                            <img src="{{ asset('front/images/blog1.jpg') }}" alt="Services" class="border_radius">
                        </div>
                        <h3 class="bottom10"><a href="#">Transparent, competitive pricing</a></h3>
                        <p class="bottom20">Get the most out of every trade with our clear, competitive pricing. No complicated schemes, no small print. ...</p>

                    </div>
                </div>


                <div class="col-sm-6 col-md-4 equalheight">
                    <div class="course margin_top wow fadeIn" data-wow-delay="400ms">
                        <div class="image bottom25">
                            <img src="{{ asset('front/images/blog2.jpg') }}" alt="Services" class="border_radius">
                        </div>
                        <h3 class="bottom10"><a href="#">System availability</a></h3>
                        <p class="bottom20">Market volatility, volume, and system availability will fasten account access and trade executions...</p>

                    </div>
                </div>

                <div class="col-sm-6 col-md-4 equalheight">
                    <div class="course margin_top wow fadeIn" data-wow-delay="900ms">
                        <div class="image bottom25">
                            <img src="{{ asset('front/images/blog3.jpg') }}" alt="Services" class="border_radius">
                        </div>
                        <h3 class="bottom10"> <a href="#">Trade forex with Ease</a></h3>
                        <p class="bottom20">Dont just wast time in research, learn to be a good investor and add to your income</p>

                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection

