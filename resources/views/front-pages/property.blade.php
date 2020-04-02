@extends('layouts.masterfront')

@section('header-styles')
  <style>
  .property__slider-item img{
    width: 200px;
    height: 40px;
    object-fit: cover;
  }

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

/* .property__slider-image img{
  max-height: 1000px;
  width: 100%;
  object-fit: contain;
} */
  </style>

@endsection

@section('content')
<section class="property">
  <ul class="ht-breadcrumbs ht-breadcrumbs--y-padding ht-breadcrumbs--b-border">
      <div class="container">
          <li class="ht-breadcrumbs__item"><a class="ht-breadcrumbs__link" href="#"><span class="ht-breadcrumbs__title">Home</span></a></li>
          <li class="ht-breadcrumbs__item"><a class="ht-breadcrumbs__link" href="#"><span class="ht-breadcrumbs__title">Floor Plans</span></a></li>
          <li class="ht-breadcrumbs__item"><a class="ht-breadcrumbs__link" href="#"><span class="ht-breadcrumbs__title">{{$mobileHome->type->name}}</span></a></li>
          <li class="ht-breadcrumbs__item"><a class="ht-breadcrumbs__link" href="#"><span class="ht-breadcrumbs__title">{{$mobileHome->title}}</span></a></li>
      </div>
  </ul>
    <div class="property__header">
        <div class="container">
          @if(Session::has('success'))
          <p class="alert-success">{{ Session::get('success') }}</p>
          @endif
          @if(Session::has('error'))
          <p class="alert-danger">{{ Session::get('error') }}</p>
          @endif

            <div class="property__header-container">
                <ul class="property__main">
                    <li class="property__title property__main-item">
                        <h2 class="property__name">{{$mobileHome->title}}</h2>
                    </li>
                    <li class="property__details property__main-item">
                        <ul class="property__stats">
                            <li class="property__stat"><span class="property__figure">{{$mobileHome->bedrooms}}</span> Bedrooms</li>
                            <li class="property__stat"><span class="property__figure">{{$mobileHome->bathrooms}}</span> Baths</li>
                            <li class="property__stat"><span class="property__figure">{{$mobileHome->square_feet}}</span> sq.ft</li>
                        </ul><!-- .listing__stats -->
                    </li>
                    <li class="property__price property__main-item">
                        <h4 class="property__price-primary">Order Yours Today</h4>
                        <!--<h4 class="property__price-primary">Starting At</h4>
                <span class="property__price-secondary">$58,346</span>-->
                    </li>
                </ul><!-- .property__main -->

                <div class="sharethis-inline-share-buttons"></div>
            </div><!-- .property__header-container -->
        </div><!-- .container -->
    </div><!-- .property__header -->

    <div class="property__slider">
        <div class="container">
            <div class="property__slider-container property__slider-container--vertical">
                <ul class="property__slider-nav property__slider-nav--vertical">

                  {{-- foreach image in property --}}
                  @foreach($imgfull as $media)
                    <li class="property__slider-item">
                        {{$media}}
                    </li>
                  @endforeach
                    {{-- endforeach --}}

                </ul><!-- .property__slider-nav -->
                <div class="property__slider-main property__slider-main--vertical">
                    <div class="property__slider-images">
                      {{-- foreach image in property, same as above --}}
                      @foreach($imgfull as $media)
                        <div class="property__slider-image">
                          {{$media}}
                            <!-- <img src="/assets/gallery/15/1585.jpg"  alt="IMG_0282.jpg"> -->
                        </div><!-- .property__slider-image -->
                      @endforeach
                    {{-- endforeach --}}

                    </div><!-- .property__slider-images -->

                    <ul class="image-navigation">
                        <li class="image-navigation__prev">
                            <span class="ion-ios-arrow-left"></span>
                        </li>
                        <li class="image-navigation__next">
                            <span class="ion-ios-arrow-right"></span>
                        </li>
                    </ul>

                    <span class="property__slider-info"><i class="ion-android-camera"></i><span class="sliderInfo"></span></span>
                </div><!-- .property__slider-main -->
            </div><!-- .property__slider-container -->
        </div><!-- .container -->
    </div><!-- .property__slider -->

    <div class="property__container">
        <div class="container">
            <div class="row">
                <aside class="col-md-3">
                    <div class="widget__container">
                        <section class="widget">

                            <form class="contact-form contact-form--white" action="{{route('add-client')}}" method="post">
                              @csrf
                                <input type="hidden" name="domainAccountId" value="LAS-453047-01" />
                                <input type="hidden" name="guid" value="" />

                                <input type="hidden" name="nospam" value="" />
                                <div class="contact-form__header">
                                    <div class="contact-form__header-container">
                                        <div class="contact-info">
                                            <h3 class="contact-name">Contact Us</h3>


                                        </div><!-- .contact-info -->
                                    </div><!-- .contact-form__header-container -->
                                </div><!-- .contact-form__header -->
                                <div class="contact-form__body">
                                    <input type="hidden" name="property_id" value="{{$mobileHome->id}}" />
                                    {{-- <input type="hidden" name="property" value="The Thibodeaux" /> --}}
                                    <input type="text" class="contact-form__field" placeholder="First Name" name="fname" required>
                                    <input type="text" class="contact-form__field" placeholder="Last Name" name="lname" required>
                                    <input type="email" class="contact-form__field" placeholder="Email" name="email" required>
                                    <input type="tel" class="contact-form__field" placeholder="Phone number" name="phone" required>
                                    <textarea class="contact-form__field contact-form__comment" cols="30" rows="5" placeholder="Comment" name="message" required>I am interested in the "{{$mobileHome->title}}" home.</textarea>
                                    <div class="g-recaptcha" data-sitekey="6Le9gmkUAAAAABGy8hDcPYYXduOFF4O4uzeV2pEx" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>

                                </div><!-- .contact-form__body -->

                                <div class="contact-form__footer">
                                    <button type="submit" class="contact-form__submit">Contact Agent</button>
                                </div><!-- .contact-form__footer -->
                            </form><!-- .contact-form -->
                        </section><!-- .widget -->

                        <section class="widget widget--white widget--padding-20">
                            <h3 class="widget__title">Similar Homes</h3>
                            @foreach($similars as $similar)
                            <div class="similar-home">
                                <a href="{{route('property', $similar->id)}}">
                                    <div class="similar-home__image">
                                        <div class="similar-home__overlay"></div><!-- .similar-home__overlay -->
                                        <img src="{{$similar->getFirstMediaUrl('thumb')}}" alt="The Hawkeye">
                                    </div><!-- .similar-home__image -->
                                    <div class="similar-home__content">
                                        <h3 class="similar-home__title">{{$similar->title}}</h3>
                                        <span class="similar-home__price">
                                            <!--Starts at $20,000--></span>
                                    </div><!-- .similar-home__content -->
                                </a>
                            </div><!-- .similar-home -->
                          @endforeach

                        </section><!-- .widget -->

                    </div><!-- .widget__container -->
                </aside>

                <main class="col-md-9">
                    <div class="property__feature-container">
                        <!--<div class="property__feature">
                  <h3 class="property__feature-title">Schedule Viewing</h3>
                  <a href="#" class="property__feature-cta">Go See This Home</a>
                </div>-->
                        <!-- .property__feature -->

                        <div class="property__feature">
                            <h3 class="property__feature-title property__feature-title--b-spacing">Property Description</h3>
                            <p>{{$mobileHome->description}}</p>
                            @if($mobileHome->virtual_tour != null)
                              <p><a href="{{$mobileHome->virtual_tour}}">Click here to view a virtual tour of this home.</a></p>
                            @endif
                        </div><!-- .property__feature -->

                        <div class="property__feature">
                            <h3 class="property__feature-title property__feature-title--b-spacing">Home Details</h3>
                            <ul class="property__details-list">
                                <li class="property__details-item">{{$mobileHome->details}}</li>
                            </ul><!-- .property__details-list -->
                        </div><!-- .property__feature -->

                        <div class="property__feature">
                            <h3 class="property__feature-title property__feature-title--b-spacing">Home Features</h3>
                            <ul class="property__features-list">
                              @if($mobileHome->features != null)
                              @foreach($mobileHome->features as $feature)
                                <li class="property__features-item"><span class="property__features-icon ion-checkmark-round"></span>{{$feature}}
                                </li>
                              @endforeach
                            @endif

                            </ul><!-- .property__features-list -->
                        </div><!-- .property__feature -->

                        <div class="property__feature">
                            <h3 class="property__feature-title property__feature-title--b-spacing">Floor Plan</h3>
                            {{$floor_plan}}
                        </div><!-- .property__feature -->

                        <div class="property__feature">
                            <h3 class="property__feature-title property__feature-title--b-spacing">Schedule A Visit</h3>

                            <form class="property__form" action="index.php?id=55" method="post">
                                <input type="hidden" name="domainAccountId" value="LAS-453047-01" />
                                <input type="hidden" name="guid" value="" />
                                <input type="hidden" name="property_id" value="55" />
                                <input type="hidden" name="property" value="The Thibodeaux" />
                                <input type="hidden" name="submit_schedule" value="submit_schedule" />
                                <input type="hidden" name="nospam" value="" />
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="property__form-wrapper">
                                            <input type="text" name="date" class="property__form-field property__form-date" placeholder="Monday" data-format="l, F d, Y" data-min-year="2017" data-max-year="2020" data-translate-mode="true"
                                              data-modal="true" data-large-mode="true" required>
                                            <span class="ion-android-calendar property__form-icon"></span>
                                        </div><!-- .property__form-wrapper -->
                                    </div><!-- col -->
                                    <div class="col-sm-6">
                                        <div class="property__form-wrapper">
                                            <input type="text" name="time" class="property__form-field property__form-time" placeholder="07:30 AM" required>
                                            <span class="ion-android-alarm-clock property__form-icon"></span>
                                        </div><!-- .property__form-wrapper -->
                                    </div><!-- col -->
                                    <div class="col-sm-6">
                                        <input type="text" name="name" class="property__form-field" placeholder="Your Name" required>
                                    </div><!-- col -->
                                    <div class="col-sm-6">
                                        <input type="text" name="contact" class="property__form-field" placeholder="Your Email/Phone" required>
                                    </div><!-- col -->
                                    <div class="col-sm-12">
                                        <textarea rows="4" name="message" class="property__form-field" placeholder="Message" required>I'd like to schedule a viewing to see "{{$mobileHome->title}}"</textarea>
                                    </div><!-- col -->

                                    <div class="col-sm-12">
                                        <div class="g-recaptcha text-center" style="margin-bottom:20px;" data-sitekey="6Le9gmkUAAAAABGy8hDcPYYXduOFF4O4uzeV2pEx"></div>

                                    </div>
                                    <div class="col-sm-12">
                                        <button class="property__form-submit">Submit</button>
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </form>

                        </div><!-- .property__feature -->
                    </div><!-- .property__feature-container -->

                </main>
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .property__container -->

</section><!-- .property -->

@endsection


@section('footer-scripts')
<script>

  $(document).ready(function(){
    $('header').removeClass('header--top');
  })


</script>


@endsection
