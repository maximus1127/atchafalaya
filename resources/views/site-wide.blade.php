@extends('layouts.masterback')


@section('header-styles')
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6" style="margin: auto">
                    <form action="{{route('edit-site')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                      @csrf
                        <div class="card">
                            <div class="card-header">
                                <strong>Site</strong> Information
                            </div>
                            <div class="card-body card-block">


                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input1" class=" form-control-label">Phone 1 Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input1" name="phone_1_name" class="form-control" value="{{$site->phone_1_name}}">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input2" class=" form-control-label">Phone 1 Number</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input2" name="phone_1_number" class="form-control" value="{{$site->phone_1_number}}">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input3" class=" form-control-label">Phone 2 Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input3" name="phone_2_name" class="form-control" value="{{$site->phone_2_name}}">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input4" class=" form-control-label">Phone 2 Number</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input4" name="phone_2_number" class="form-control" value="{{$site->phone_2_number}}">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input5" class=" form-control-label">Phone 3 Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input5" name="phone_3_name" class="form-control" value="{{$site->phone_3_name}}">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input6" class=" form-control-label">Phone 3 Number</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input6" name="phone_3_number" class="form-control" value="{{$site->phone_3_number}}">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input7" class=" form-control-label">Phone 4 Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input7" name="phone_4_name" class="form-control" value="{{$site->phone_4_name}}">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input8" class=" form-control-label">Phone 4 Number</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input8" name="phone_4_number" class="form-control" value="{{$site->phone_4_number}}">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input9" class=" form-control-label">Phone 5 Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input9" name="phone_5_name" class="form-control" value="{{$site->phone_5_name}}">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input10" class=" form-control-label">Phone 5 Number</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input10" name="phone_5_number" class="form-control" value="{{$site->phone_5_number}}">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input11" class=" form-control-label">General Manager</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input11" name="general_manager" class="form-control" value="{{$site->general_manager}}">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input12" class=" form-control-label">General Manager Email</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input12" name="general_manager_email" class="form-control" value="{{$site->general_manager_email}}">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="details" class=" form-control-label">Hours</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                       <textarea id="summernote" name="hours">{{$site->hours}}</textarea>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input13" class=" form-control-label">Address</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input13" name="address" class="form-control" value="{{$site->address}}">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input14" class=" form-control-label">City</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input14" name="city" class="form-control" value="{{$site->city}}">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input13" class=" form-control-label">State</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input13" name="state" class="form-control" value="{{$site->state}}">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input13" class=" form-control-label">Zip</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input13" name="zip" class="form-control" value="{{$site->zip}}">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input13" class=" form-control-label">Facebook Link</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input13" name="facebook" class="form-control" value="{{$site->facebook}}">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input13" class=" form-control-label">Twitter Link</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input13" name="twitter" class="form-control" value="{{$site->twitter}}">
                                    </div>
                                </div>

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

@section('footer-scripts')
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
<script>
  $(document).ready(function() {
  $('#summernote').summernote();
});
</script>
@endsection
