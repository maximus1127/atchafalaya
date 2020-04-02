@extends('layouts.masterfront')

@section('header-styles')
  <style>
  .property__slider-item img{
    width: 200px;
    height: 40px;
    object-fit: cover;
  }

  .thumb_images img {
    height: 215px;
  }
/* .property__slider-image img{
  max-height: 1000px;
  width: 100%;
  object-fit: contain;
} */
  </style>

@endsection

@section('content')
  <section class="page">
    <div class="container">
      <ul class="ht-breadcrumbs ht-breadcrumbs--y-padding ht-breadcrumbs--b-border"><div class="container"><li class="ht-breadcrumbs__item"><a class="ht-breadcrumbs__link" href="index.php?id=1"><span class="ht-breadcrumbs__title">Home</span></a></li>
  <li class="ht-breadcrumbs__item"><a class="ht-breadcrumbs__link" href="#"><span class="ht-breadcrumbs__title">Floor Plans</span></a></li>
  <li class="ht-breadcrumbs__item"><a class="ht-breadcrumbs__link" href="#"><span class="ht-breadcrumbs__title">{{$type}}</span></a></li></div></ul>
      <br />
        <main class="row">
          @foreach($homes as $home)
          <div class="item-grid__container col-md-4">
            {{-- foreach of each listing --}}

    <div class="listing">
      <div class="item-grid__image-container">
        <a href="{{route('property', $home->id)}}">
          <div class="item-grid__image-overlay"></div><!-- .item-grid__image-overlay -->
          <div class="thumb_images">
          {{$home->getFirstMedia('thumb')}}
        </div>
          <span class="listing__favorite"><i class="fa fa-plus" aria-hidden="true"></i></span>
        </a>
      </div><!-- .item-grid__image-container -->
      <div class="item-grid__content-container">
        <div class="listing__content">
          <div class="listing__header">
            <div class="listing__header-primary">
              <h3 class="listing__title"><a href="#">{{$home->title}}</a></h3>
            </div><!-- .listing__header-primary -->
            <!-- <p class="listing__price"><a href="#">Request a Quote $</a></p> -->
          </div><!-- .listing__header -->
          <div class="listing__details">
            <ul class="listing__stats">
              <li><span class="listing__figure">{{$home->bedrooms}}</span> Beds</li>
              <li><span class="listing__figure">{{$home->bathrooms}}</span> Baths</li>
              <li><span class="listing__figure">{{$home->square_feet}}</span> sq.ft</li>
            </ul><!-- .listing__stats -->
            <a href="{{route('property', $home->id)}}" class="listing__btn">Details <span class="listing__btn-icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
          </div><!-- .listing__details -->
        </div><!-- .listing-content -->
      </div><!-- .item-grid__content-container -->
    </div><!-- .listing -->

{{-- endforeach --}}
          </div>
                  @endforeach
        </main>

    </div>


  </section>

@endsection


@section('footer-scripts')
<script>

  $(document).ready(function(){
    $('header').removeClass('header--top');
  })


</script>


@endsection
