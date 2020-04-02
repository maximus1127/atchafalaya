@extends('layouts.masterfront')



@section('header-styles')
<style>
  .alert-success{
    font-size: 20px;
    color: #006e2e;
    background-color: #93edb9;
    height: 50px;
    border-radius: 10px;
    margin: 10px 0;
    padding: 10px;
    width: 100%;
  }
  .alert-danger{
    font-size: 20px;
    color: #8a0000;
    background-color: #ed9393;
    height: 50px;
    border-radius: 10px;
    margin: 10px 0;
    padding: 10px;
    width: 100%;
  }

</style>

@endsection

@section('content')
<section class="contact">
    <div class="container">
      @if(Session::has('success'))
      <p class="alert-success">{{ Session::get('success') }}</p>
      @endif
      @if(Session::has('error'))
      <p class="alert-danger">{{ Session::get('error') }}</p>
      @endif

        <div class="contact__main">
            <div class="contact__map-container">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d110181.40493296902!2d-92.1113892!3d30.3461493!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86249093ed939eab%3A0xd95a0f674f3d1991!2sAtchafalaya+Homes+-+%22The+Proof+is+on+the+Roof%22!5e0!3m2!1sen!2sua!4v1534252953717"
                  width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                <!--    <div id="contact-map" data-lat="30.346182" data-lng="-92.041328")></div> .contact__map -->
            </div><!-- .contact__map-container -->

            <div class="row">
                <div class="col-md-6">
                    <h2 class="contact__title">Contact Us</h2>
                    <div class="contact__desc">
                        <p>You can contact us by calling, emailing or visiting us
                            @ {{$site->address.', '.$site->city.', '.$site->state.' '.$site->zip}}</p><br />
                        <p><strong>{{$site->general_manager}}, General Manager</strong></p>
                        <p><strong>Email: {{$site->general_manager_email}}</strong>
                        </p>
                        <p><strong>Phone: {{$site->phone_1_number}}</strong></p>
                        <br />
                        <h3>Hours:</h3>
                        {!!App\SiteWide::find(1)->hours!!}
                        <p style="margin-bottom: 20px;"><strong> </strong></p>
                        @if($site->phone_2_number != null && $site->phone_2_name != null)
                          <p><strong>{{$site->phone_2_name}}: {{$site->phone_2_number}}</strong></p>
                        @endif
                        @if($site->phone_3_number != null && $site->phone_3_name != null)
                          <p><strong>{{$site->phone_3_name}}: {{$site->phone_3_number}}</strong></p>
                        @endif
                        @if($site->phone_4_number != null && $site->phone_4_name != null)
                          <p><strong>{{$site->phone_4_name}}: {{$site->phone_4_number}}</strong></p>
                        @endif
                        @if($site->phone_5_number != null && $site->phone_5_name != null)
                          <p><strong>{{$site->phone_5_name}}: {{$site->phone_5_number}}</strong></p>
                        @endif
                    </div>
                    <ul class="agency__contact">
                        <li class="agency__contact-phone"><a href="#">{{$site->phone_1_number}}</a></li></a></li>
                        <li class="agency__contact-email"><a href="mailto:{{$site->general_manager_email}}">{{$site->general_manager_email}}</a></li>
                        <li class="agency__contact-address">
                            {{$site->address}},
                            {{$site->city}},
                            {{$site->state}}
                            {{$site->zip}}
                        </li>
                    </ul>
                </div><!-- .col -->
                <div class="col-md-6">
                    <h2 class="contact__title">Send Us a Message</h2>
                    <div class="contact__desc">

                    </div>

                    <form class="contact-form contact-form--no-padding" action="{{route('add-client')}}" method="post">
                      @csrf
                        <input type="hidden" name="nospam" value="" />
                        <div class="contact-form__body">
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="text" class="contact-form__field contact-form__field--contact" placeholder="First Name" name="fname" required>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="contact-form__field contact-form__field--contact" placeholder="Last Name" name="lname" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="contact-form__field contact-form__field--contact" placeholder="Email" name="email" required>
                                </div>
                            </div>
                            <input type="tel" class="contact-form__field contact-form__field--contact" placeholder="Phone number" name="phone">
                            <textarea class="contact-form__field contact-form__comment contact-form__field--contact" cols="30" rows="4" placeholder="Comment" name="message" required></textarea>
                            <div class="row">
                                <div class="g-recaptcha text-center col-md-12" style="margin-bottom:20px;" data-sitekey="6Le9gmkUAAAAABGy8hDcPYYXduOFF4O4uzeV2pEx"></div>

                            </div>


                        </div><!-- .contact-form__body -->
                        <div class="contact-form__footer">
                            <input type="submit" class="contact-form__submit contact-form__submit--contact" name="submit" value="Send Message">
                        </div><!-- .contact-form__footer -->
                    </form><!-- .contact-form -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .contact__main -->
    </div>
</section><!-- .contact -->

@endsection

@section('footer-scripts')
<script>
    $(document).ready(function() {
        $('header').removeClass('header--top');
    })
</script>
@endsection
