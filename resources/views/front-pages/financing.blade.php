@extends('layouts.masterfront')


@section('content')
  <section class="page">
    <div class="container">

      <main>
        <h3><span style="font-size: 1.5em;"><span>Financing Your Manufactured or Modular Home</span></span></h3>
  <p><span style="font-size: 1.5em;"><span> </span></span></p>
  <p style="font-family: Arial, Helvetica, sans-serif; font-size: 9px;"><span style="font-size: 1.5em;">Buying a home is a huge milestone. </span><span style="font-size: 1.5em;">We're here to help assure that </span><span style="font-size: 1.5em;">the purchase of your new home is completed with as little </span><span style="font-size: 1.5em;">hassle and stress</span><span style="font-size: 1.5em;"> as possible. </span><span style="font-size: 1.5em;">Here at Atchafalaya Homes, we have professionals to help you with each step in your home purchase. </span><span style="font-size: 1.5em;">Atchafalaya Homes has many lenders that offer a range of manufactured and modular home financing options to meet the needs of all types of home buyers.</span></p>
  <p style="font-family: Arial, Helvetica, sans-serif; font-size: 9px;"><strong style="font-size: 1.5em;">We are not a lender.</strong><span style="font-size: 1.5em;"> But we are actively working in the market and constantly building relationships with new national, regional and local lenders who finance factory-built homes.</span></p>
  <p style="font-family: Arial, Helvetica, sans-serif; font-size: 9px;"><span style="font-size: 1.5em;">Here's just a little information on some of the loan types that our lenders offer:</span></p>
  <h3><span style="font-size: 1.5em;">FHA Loans</span></h3>
  <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">FHA loans are insured by the FHA and best suited for borrowers who don’t have a large down payment and that have less than perfect credit. Through our FHA loan programs, we can often qualify individuals who have had past credit challenges.  We also can often assist buyers with higher debt to income ratios who have other strong compensating factors to help justify their ability to apply a higher percentage of their monthly income toward their housing payment.  To be eligible for FHA financing, the manufactured home you are purchasing must have been built after June 15, 1976 and be permanently fixed to a foundation.  </p>
  <h3><span style="font-size: 1.5em;">VA Loans</span></h3>
  <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">We have special VA loans for veterans in need of financing for manufactured and modular homes. While many manufactured home financing companies do not offer VA loans, we work hard for our Veterans to provide lenders that provide these loans to qualifying veterans with a credit score of 620 or higher. Our VA loans can cover 100% of the loan cost, meaning $0 down payment. </p>
  <h1><span>Conventional Loans</span></h1>
  <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;"><span>A </span><strong>conventional loan</strong><span> is a mortgage that is not guaranteed or insured by any government agency, including the Federal Housing Administration (FHA), the Farmers Home Administration (FmHA) and the Department of Veterans Affairs (VA). It is typically fixed in its terms and rate.</span></p>
  <p> <img src="{{asset('images\Floor Plans\21st.png')}}" alt="21st Mortgage" width="142" height="122">            <img src="{{asset('images\Floor Plans\cascade.png')}}" alt="Cascade" width="200" height="120">               <img src="{{asset('images\Floor Plans\triad.png')}}" alt="Triad" width="175" height="120">                                                                             <img src="{{asset('images\Floor Plans\energystar-partner.gif')}}" alt="Energy Star" width="40" height="48">                 <img src="{{asset('images\Floor Plans\equal-opportunity-housing.png')}}" alt="Equal Housing" width="63" height="48"></p>
  <p> </p>
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
