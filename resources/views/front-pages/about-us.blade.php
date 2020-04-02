@extends('layouts.masterfront')



@section('content')
  <section class="about-us">
    <div class="container">


      <div class="about-us__main">
        <div class="row">
          <main class="col-md-8 col-md-main">
            <div class="about-us__img">
              <img src="images\uploads\logo_dark.png" alt="About us">
            </div><!-- .about-us__img -->
            <h1 class="about-us__title">About Us</h1>
            <p>The Atchafalaya Homes story begins with Mike and Doug Stephens, two brothers who grew up in a family that was in the manufactured home industry.  After several years of working in the industry, the brothers decided to venture out on their own in June of 1998 - opening Atchafalaya Homes with just five used homes. Within four years, Atchafalaya Homes rose to the largest and most well-respected manufactured home dealer in the state of Louisiana.</p>
  <p>After 20 years in business, Mike and Doug still take pride in providing you with the highest standards in the industry with the value and service you deserve for a fraction of the price of other manufactured home providers. Atchafalaya Homes provides the highest quality Modular Homes, Manufactured Homes, Cabins, and Tiny Homes offering a solution for all your housing needs. We have a large selection of carefully designed model homes for you to walk through at price ranges that are sure to fit any budget. We are also a custom builder and have hundreds of floor plans to choose from such as single-wides, double-wides, triple-wides, and cabins. The best part is we can customize them all to your family’s needs. Come see us today to design the perfect home for your family. If we don’t have it, we can build it! We love making your dreams come true, and remember it’s not just a house it is your home.</p>
  <h3>The Little Red Truck Story!</h3>
  <p> </p>
  <p>Just how did that little Red Truck end up on our roof? Well, let me tell you a little story about that little red truck. I had a Little Old Cajun Man show up asking about our homes and he said he would never buy a trailer (because they are not strong, and they would never withstand a storm). So, I looked around and I noticed a little red truck in the parking lot (and it happened to belong to one of my salespeople) and I asked the man, "if I drive that little red truck right there on the roof of that home and show you just how strong our homes are, will you buy one?" He said "if you can drive that little red truck on the roof of that house, I will pay you cash for that home." Challenge Accepted! So, the very next day we met again, and I had that Little Red Truck put up on the roof of that house and I drove that truck across the roof of that Strong Home and the Little Cajun Man paid me CASH for that New Home. I ended up buying that Little Red Truck from my salesman and it has been on the roof of one of my homes ever since that day.  </p>
  <h3>Atchafalaya Homes:</h3>
  <ul>
  <li>Offers New Manufactured, Modular, Single-Wides, Double-Wides, and Triple-Wide Homes. </li>
  <li>We also have the largest selection of Used and Repo homes in the State of Louisiana. </li>
  <li>Has an in-house, full-time service department for all your service needs. We are there for you when you need us.</li>
  <li>Offers a full-time finance department for all your financing needs that specializes in Home Only (Chattel) Lending, Conventional Lending, FHA, and VA Loans, making the most complicated process easy for our customers.</li>
  <li>Offers land home packages. We have full-time real estate agents to help you find land anywhere in the states of Louisiana, Texas, Arkansas, and Mississippi.</li>
  <li>Can take care of all your land improvement needs (septic installation, electric connections, water connections, water well installation, and home foundations).  </li>
  <li>Knows how hectic a home purchase and move can be. Therefore, we are committed to providing all the services that a home buyer will need to obtain their dream of owning a home.</li>
  </ul>
  <p>We at Atchafalaya Homes are honored and privileged that you have chosen us for your new home purchase.</p>
  <h3>The proof is on the roof!!  </h3>
          </main><!-- .col -->
          {{-- <aside class="col-md-4 col-md-sidebar">
            <section class="widget">

              <form class="contact-form contact-form--bordered contact-form--wild-sand" action="index.php?id=4" method="post">
                <input type="hidden" name="domainAccountId" value="LAS-453047-01">
  <input type="hidden" name="guid" value="">
                <div class="contact-form__header">
                  <h3 class="contact-form__title">Drop Us a Line</h3>
                </div><!-- .contact-form__header -->

                <div class="contact-form__body">
                  <input type="text" class="contact-form__field" placeholder="Name" name="name" required="">
                  <input type="email" class="contact-form__field" placeholder="Email" name="email" required="">
                  <input type="tel" class="contact-form__field" placeholder="Phone number" name="phone">
                  <textarea class="contact-form__field contact-form__comment" cols="30" rows="4" placeholder="Comment" name="message" required=""></textarea>
                  <div class="g-recaptcha" data-sitekey="6Le9gmkUAAAAABGy8hDcPYYXduOFF4O4uzeV2pEx"></div>
  <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=en"></script>

                </div><!-- .contact-form__body -->

                <div class="contact-form__footer">
                  <input type="submit" class="contact-form__submit" name="submit" value="Send Message">
                </div><!-- .contact-form__footer -->
              </form><!-- .contact-form -->
            </section><!-- .widget -->

          </aside><!-- .col --> --}}
        </div><!-- .row -->
      </div><!-- .about-us__main -->
    </div><!-- .container -->
  </section><!-- .about-us -->


@endsection

@section('footer-scripts')
  <script>

    $(document).ready(function(){
      $('header').removeClass('header--top');
    })


  </script>
@endsection
