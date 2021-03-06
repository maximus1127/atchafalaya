var ww = document.body.clientWidth;

$(document).ready(function () {
  'use strict';

  // Header 
  $(".header__nav a:not(:only-child)").each(function () {
    $(this).addClass("parent");
  });

  $(".nav-toggle").on('click', function () {
    $(this).toggleClass("active");
    $(".header__menu").slideToggle(200);
    return false;
  });

  adjustMenu();

  // Famous Agents Slider
  $(".famous-agents__wrapper").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: false,
    responsive: [
      {
        breakpoint: 1199,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  $(".famous-agents__navigation-prev").on('click', function () {
    $(".famous-agents__wrapper").slick('slickPrev');
  });

  $(".famous-agents__navigation-next").on('click', function () {
    $(".famous-agents__wrapper").slick('slickNext');
  });

  // New Listing Slider

  $(".new-listing__wrapper").slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    dots: true,
    customPaging: function (slider, i) {
      var thumb = $(slider.$slides[i]).data();
      return '<span class="slick-dots__icon"></span>';
    },
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          dots: false,
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  // Testimonial Slider

  $(".testimonial__slider--top").slick({
    asNavFor: '.testimonial__slider--bottom, .testimonial__slider--middle',
    arrows: false,
    autoplay: true,
    autoplaySpeed: 5000,
    slidesToShow: 1,
    slidesToScroll: 1,
  });

  $(".testimonial__slider--bottom").slick({
    asNavFor: '.testimonial__slider--top, .testimonial__slider--middle',
    arrows: false,
    autoplay: true,
    autoplaySpeed: 5000,
    slidesToShow: 1,
    slidesToScroll: 1,
  });

  $(".testimonial__slider--middle").slick({
    asNavFor: '.testimonial__slider--top, .testimonial__slider--bottom',
    arrows: false,
    autoplay: true,
    autoplaySpeed: 5000,
    slidesToShow: 3,
    slidesToScroll: 1,
    focusOnSelect: true,
  });

  $(".testimonial__inner").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 8000,
    arrows: false,
  });

  $(".testimonial__navigation-prev").on('click', function () {
    $(".testimonial__inner").slick('slickPrev');
  });

  $(".testimonial__navigation-next").on('click', function () {
    $(".testimonial__inner").slick('slickNext');
  });

  // Feature Listing Slider

  $(".featured-listing__slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    swipeToSlide: true,
    customPaging: function (slider, i) {
      var thumb = $(slider.$slides[i]).data();
      return '<span class="slick-dots__icon"></span>';
    },
  });

  // Feature Listing Slider Syncing
  $('.featured-listing__videos').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: false,
    fade: true,
    asNavFor: '.featured-listing__nav'
  });
  $('.featured-listing__nav').slick({
    vertical: true,
    verticalSwiping: true,
    swipeToSlide: true,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.featured-listing__videos',
    focusOnSelect: true,
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: false,
    responsive: [
      {
        breakpoint: 1199,
        settings: {
          vertical: false,
          verticalSwiping: false,
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },

      {
        breakpoint: 768,
        settings: {
          vertical: false,
          verticalSwiping: false,
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
    ]
  });

  // Property Slider Syncing

  $(".property__slider-nav--vertical").slick({
    vertical: true,
    verticalSwiping: true,
    slidesToShow: 8,
    slidesToScroll: 1,
    focusOnSelect: true,
    autoplay: false,
    infinite: false,
    prevArrow: '<span class="ion-ios-arrow-up slick-vertical-arrow slick-vertical-prev-arrow"></span>',
    nextArrow: '<span class="ion-ios-arrow-down slick-vertical-arrow slick-vertical-next-arrow"></span>',
    asNavFor: '.property__slider-images',
    responsive: [
      {
        breakpoint: 1199,
        settings: {
          prevArrow: '<span class="ion-ios-arrow-left slick-horizontal-arrow slick-horizontal-prev-arrow"></span>',
          nextArrow: '<span class="ion-ios-arrow-right slick-horizontal-arrow slick-horizontal-next-arrow"></span>',
          vertical: false,
          verticalSwiping: false,
          slidesToShow: 6,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 767,
        settings: {
          prevArrow: '<span class="ion-ios-arrow-left slick-horizontal-arrow slick-horizontal-prev-arrow"></span>',
          nextArrow: '<span class="ion-ios-arrow-right slick-horizontal-arrow slick-horizontal-next-arrow"></span>',
          vertical: false,
          verticalSwiping: false,
          slidesToShow: 4,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 479,
        settings: {
          prevArrow: '<span class="ion-ios-arrow-left slick-horizontal-arrow slick-horizontal-prev-arrow"></span>',
          nextArrow: '<span class="ion-ios-arrow-right slick-horizontal-arrow slick-horizontal-next-arrow"></span>',
          vertical: false,
          verticalSwiping: false,
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
    ]
  });

  $(".property__slider-nav--horizontal").slick({
    slidesToShow: 8,
    slidesToScroll: 1,
    focusOnSelect: true,
    autoplay: false,
    infinite: false,
    prevArrow: '<span class="ion-ios-arrow-left slick-horizontal-arrow slick-horizontal-prev-arrow"></span>',
    nextArrow: '<span class="ion-ios-arrow-right slick-horizontal-arrow slick-horizontal-next-arrow"></span>',
    asNavFor: '.property__slider-images',
    responsive: [
      {
        breakpoint: 1199,
        settings: {
          slidesToShow: 6,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 479,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
    ]
  });

  $(".property__slider-images").on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
    var i = (currentSlide ? currentSlide : 0) + 1;
    $(".sliderInfo").text(i + "/" + slick.slideCount + " Photos");
  });

  $(".image-navigation__prev").on('click', function () {
    $(".property__slider-images").slick('slickPrev');
  });

  $(".image-navigation__next").on('click', function () {
    $(".property__slider-images").slick('slickNext');
  });

  $(".property__slider-images").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    infinite: false,
    arrows: false,
    fade: true,
    asNavFor: '.property__slider-nav',
  });

  // Listing Search Form 
  $(".ht-field").dropkick({
    mobile: true,
  });
  
  $(".listing-search__property-size").slider({
    range: true,
    min: 1000,
    max: 8000,
    step: 100,
    values: [1000, 8000],
    slide: function (event, ui) {
      $("#property-amount").text(ui.values[0] + " - " + ui.values[1]);
    }
  });

  $("#property-amount").text($(".listing-search__property-size").slider("values", 0) + " - " + $(".listing-search__property-size").slider("values", 1));

  $(".listing-search__lot-size").slider({
    range: true,
    min: 1000,
    max: 8000,
    step: 100,
    values: [1000, 8000],
    slide: function (event, ui) {
      $("#lot-amount").text(ui.values[0] + " - " + ui.values[1]);
    }
  });

  $("#lot-amount").text($(".listing-search__lot-size").slider("values", 0) + " - " + $(".listing-search__lot-size").slider("values", 1));

  $(".listing-search__btn").on('click', function () {

    $(this).toggleClass("js-hide");
    if ($(this).hasClass("js-hide")) {
      $(this).text("Hide");
    } else {
      $(this).text("Advance Search");
    }

    $(".listing-search__advance").slideToggle();
  
    return false;
  });

  $(".listing-search__more-btn").on('click', function () {
    $(this).toggleClass('listing-search__more-btn--show');
    $(".listing-search__more-inner").slideToggle();
    return false;
  });

  $(".main-listing__form-more-filter").on('click', function () {

    $(this).toggleClass("js-hide");
    if ($(this).hasClass("js-hide")) {
      $(this).text("Less Filter");
    } else {
      $(this).text("More Filter");
    }

    $(".main-listing__form-expand").slideToggle();

    return false;
  });

  // Property Accordion
  $(".property__accordion").on('click', '.property__accordion-header', function () {
    $(this).next().slideToggle(350);
    $(this).find('.property__accordion-expand').toggleClass('fa-caret-up fa-caret-down');
    $(this).parent().siblings().find('.property__accordion-content').slideUp(350);
    $(this).parent().siblings().find('.property__accordion-expand').removeClass('fa-caret-up').addClass('fa-caret-down');
  });

  // Property Tab
  $(".property__tab-list").on("click", ".property__tab", function(e) {
    e.preventDefault();
    $(".property__tab").removeClass("property__tab--active");
    $(".property__tab-content").removeClass("is-visible");
    $(this).addClass("property__tab--active");
    $($(this).attr("href")).addClass("is-visible");
  });
  
  // Property Form
  $(".property__form-date").dateDropper();
  $(".property__form-time").timeDropper();

  // Countdown Timer
  var deadline = new Date("16 September, 2018 00:00:00");

  function updateTimer(deadline) {
    var time = Date.parse(deadline) - Date.parse(new Date());
    
    return {
      'days' : Math.floor( time / (1000 * 60 * 60 * 24) ),
      'hours': Math.floor( time / (1000 * 60 * 60) % 24 ),
      'minutes': Math.floor( time / (1000 * 60) % 60 ),
      'seconds': Math.floor( time / (1000) % 60 ),
      'total': time
    };
  }

  function startTimer(deadline) {
    var timeInterval = setInterval(function () {

      var timer = updateTimer(deadline);

      $('.days').html(timer.days);
      $('.hours').html(('0' + timer.hours).slice(-2));
      $('.minutes').html(('0' + timer.minutes).slice(-2));
      $('.seconds').html(('0' + timer.seconds).slice(-2));

      if (timer.total <= 0) {
        clearInterval(timeInterval);
      }
    }, 1000);
  }

  startTimer(deadline);

  // Polyfill for sticky maps
  if ($(".map-container--sticky").length > 0) {
    Stickyfill.add($(".map-container--sticky")[0]);
  }
});

function adjustMenu() {
  if (ww < 992) {
    $(".header__nav li").unbind('mouseenter mouseleave');
    $("a.parent").unbind('click').bind('click', function() {
      $(this).parent('li').toggleClass('hover');
      $(this).toggleClass('active');
      return false;
    });
  } else if (ww >= 992) {
    $(".header__nav li").removeClass('hover');
    $(".header__nav li a").unbind('click');
    $("a.parent").removeClass('active').on('click', function () {
      // return false;
    });
    $('.header__nav li').unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function () {
      $(this).toggleClass("hover");
    });
  }
}

$(window).on('resize orientationchange', function () {
  ww = document.body.clientWidth;
  adjustMenu();
});

function initMap3 (lat, lon) {
  var latlng = new google.maps.LatLng(lat,lon);
  var options = {
    zoom: 15,
    center: latlng,
    disableDefaultUI: true,
    zoomControl: true,
    zoomControlOptions: {
      position: google.maps.ControlPosition.LEFT_BOTTOM,
    },
    styles: [
      {
        "featureType": "landscape",
        "stylers": [
          {
              "hue": "#FFBB00"
          },
          {
              "saturation": 43.400000000000006
          },
          {
              "lightness": 37.599999999999994
          },
          {
              "gamma": 1
          }
        ]
      },
      {
        "featureType": "road.highway",
        "stylers": [
          {
              "hue": "#FFC200"
          },
          {
              "saturation": -61.8
          },
          {
              "lightness": 45.599999999999994
          },
          {
              "gamma": 1
          }
        ]
      },
      {
        "featureType": "road.arterial",
        "stylers": [
          {
              "hue": "#FF0300"
          },
          {
              "saturation": -100
          },
          {
              "lightness": 51.19999999999999
          },
          {
              "gamma": 1
          }
        ]
      },
      {
        "featureType": "road.local",
        "stylers": [
          {
              "hue": "#FF0300"
          },
          {
              "saturation": -100
          },
          {
              "lightness": 52
          },
          {
              "gamma": 1
          }
        ]
      },
      {
        "featureType": "water",
        "stylers": [
          {
              "hue": "#0078FF"
          },
          {
              "saturation": -13.200000000000003
          },
          {
              "lightness": 2.4000000000000057
          },
          {
              "gamma": 1
          }
        ]
      },
      {
        "featureType": "poi",
        "stylers": [
          {
              "hue": "#00FF6A"
          },
          {
              "saturation": -1.0989010989011234
          },
          {
              "lightness": 11.200000000000017
          },
          {
              "gamma": 1
          }
        ]
      }
    ]
  };
  var map = new google.maps.Map(document.getElementById("contact-map"), options);
  var marker = new google.maps.Marker({
    map: map,
    position: latlng,
    icon: 'images/map_marker.png'
  });
}

if ($("#contact-map").length > 0) {
  google.maps.event.addDomListener( window, 'load', function () {
    var $t = $("#contact-map");
    initMap3(parseFloat($t.data("lat")),parseFloat($t.data("lng")));
  });
}

