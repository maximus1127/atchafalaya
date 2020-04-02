@extends('layouts.masterback')

@section('content')
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6" style="margin: auto">
                    <form action="{{route('add-client')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                      @csrf
                        <div class="card">
                            <div class="card-header">
                                <strong>New</strong> Client
                            </div>
                            <div class="card-body card-block">


                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">First Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="fname" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input2" class=" form-control-label">Last Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input2" name="lname" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input3" class=" form-control-label">Email</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input3" name="email" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input4" class=" form-control-label">Phone</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input4" name="phone" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input5" class=" form-control-label">Message</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea id="text-input5" name="message" class="form-control"></textarea>
                                    </div>
                                </div>

                                {{-- <input type="hidden" name="manual" value="1" /> --}}

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>

                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
</div>

</div>

@endsection
