@extends('layout.master')
@section('content')
    
        <!-- Breadcrumb End -->
        <!-- Google Map Start -->
        <div class="container">
            <div id="map">
            	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.6289214333533!2d78.206960114757!3d26.208746883435897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3976c3a3faabd5e3%3A0x88d563b9d79500ed!2sPN%20INFOSYS!5e0!3m2!1sen!2sin!4v1591645297533!5m2!1sen!2sin"  height="450" frameborder="0" style="border:0;width: 100%;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
        <!-- Google Map End -->
        <!-- Contact Email Area Start -->
        <div class="contact-email-area ptb-60">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h3>Contact Us</h3>
                        <p class="text-capitalize mb-40">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <form id="contact-form" class="contact-form" action="mail.php" method="post">
                            <div class="address-wrapper">
                                <div class="row">    
                                    <div class="col-md-12">
                                        <div class="address-fname">
                                            <input type="text" name="name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="address-email">
                                            <input type="email" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="address-web">
                                            <input type="text" name="website" placeholder="Website">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="address-subject">
                                            <input type="text" name="subject" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="address-textarea">
                                            <textarea name="message" placeholder="Write your message"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="form-message ml-15"></p>
                            <div class="col-xs-12 footer-content mail-content">
                                <div class="send-email">
                                    <input type="submit" value="Submit" class="submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('frontend.brand_slider_of_ecommerce')
@endsection