@extends('layouts.masterback')


@section('content')
        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">


            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">Welcome back
                                <span>{{ucFirst(Auth::user()->name)}}!</span>
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->

            <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container" id="app">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Active Homes</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <div class="rs-select2--light rs-select2--md">
                                        <select  name="property" id="showProperties">
                                            <option selected="selected" value="all">All Properties</option>
                                            @foreach(App\Type::all() as $type)
                                            <option value="{{$type->name}}">{{$type->name}}</option>
                                          @endforeach
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>


                                </div>
                                <div class="table-data__tool-right">
                                    <a href="/add-home" ><button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        <i class="zmdi zmdi-plus"></i>add home</button></a>

                                </div>
                            </div>
                            <div class="table-responsive table-responsive-data2">
                              <homes-rows ></homes-rows>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->

@endsection


@section('footer-scripts')
<script>

  $("#showProperties").change(function(){
    $('.tr-shadow').each(function(row){
      if($(this).data('hometype') != $('#showProperties').val()){
        $(this).hide();
      } else {
        $(this).show()
      }
      if($("#showProperties").val() == 'all'){
        $('.tr-shadow').each(function(row){
          $(this).show();
        })
      }
    })
  })



</script>

@endsection
