@extends('layouts.masterback')


@section('header-styles')
<style>

    #main_img_preview img {
        width: 150px;
        height: 150px;
    }

    .img-wrap {
        position: relative;
    }

    .img-wrap img {
        height: 100px;
        width: 150px
    }

    .img-wrap .close {
        position: absolute;
        bottom: 2px;
        left: 2px;
        z-index: 100;
    }
</style>
@endsection




@section('content')
<!-- MAIN CONTENT-->
<div class="main-content">
    @if(Session::has('success'))
    <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('success') }}</p>
    @endif
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6" style="margin: auto">
                    <form action="{{route('edit-property', $mobileHome->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <strong>New</strong> Home
                            </div>
                            <div class="card-body card-block">


                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Title</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="title" class="form-control" value="{{$mobileHome->title}}">
                                        <small class="form-text text-muted">What's this home called?</small>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Home Type</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="type" id="select" class="form-control">
                                            <option value="0">Please select</option>
                                            @foreach($types as $type)
                                            <option value="{{$type->id}}" {{$mobileHome->type_id == $type->id? 'selected':''}}>{{$type->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Options</label>
                                    </div>
                                    <div class="col col-md-9">
                                        <div class="form-check">
                                            <div class="checkbox">
                                                <label for="checkbox1" class="form-check-label ">
                                                    <input type="checkbox" id="checkbox1" name="featured" value="1" class="form-check-input" {{$mobileHome->featured != null? 'checked':''}}>On Special?
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkbox2" class="form-check-label ">
                                                    <input type="checkbox" id="checkbox2" name="show_on_home" value="1" class="form-check-input" {{$mobileHome->show_on_home != null? 'checked':''}}> Show On Homepage
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label for="checkbox3" class="form-check-label ">
                                                    <input type="checkbox" id="checkbox3" name="active" value="1" class="form-check-input" {{$mobileHome->active != null? 'checked':''}}> Active
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="bedrooms" class=" form-control-label">Bedrooms</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="bedrooms" name="bedrooms" class="form-control" placeholder="bedrooms" value="{{$mobileHome->bedrooms}}">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="bathrooms" class=" form-control-label">Bathrooms</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="bathrooms" name="bathrooms" class="form-control" placeholder="bathrooms" value="{{$mobileHome->bathrooms}}">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="square_feet" class=" form-control-label">Square Feet</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="square_feet" name="square_feet" class="form-control" placeholder="square feet" value="{{$mobileHome->square_feet}}">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="starting_price" class=" form-control-label">Starting Price</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="starting_price" name="starting_price" class="form-control" placeholder="starting price" value="{{$mobileHome->starting_price}}">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="contact" class=" form-control-label">Contact</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="contact" name="contact" class="form-control" placeholder="who to contact" value="{{$mobileHome->contact}}">
                                    </div>
                                </div>



                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="description" class=" form-control-label">Description</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="description" id="description" rows="9" class="form-control" placeholder="a good description">{{$mobileHome->description}}</textarea>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="details" class=" form-control-label">Details</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="details" id="details" rows="3" class="form-control" placeholder="some good details">{{$mobileHome->details}}</textarea>
                                    </div>
                                </div>


                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="multiple-select" class=" form-control-label">Features<br /> <small>Press Ctrl to select multiple</small></label>
                                    </div>
                                    <div class="col col-md-9">
                                        <select name="features[]" id="multiple-select" multiple="" class="form-control" style="height: 200px">
                                          @if($mobileHome->features != null)
                                            @foreach($features as $feature)
                                            <option value="{{$feature->name}}" {{in_array($feature->name, $mobileHome->features) ?'selected':''}}>{{$feature->name}}</option>
                                            @endforeach
                                          @endif
                                          @if($mobileHome->features == null)
                                            @foreach($features as $feature)
                                            <option value="{{$feature->name}}" >{{$feature->name}}</option>
                                            @endforeach
                                          @endif
                                        </select>
                                    </div>
                                </div>



                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="main_image" class=" form-control-label">Main Image</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="main_image" name="main_image" class="form-control-file">
                                        <div class="img-wrap">
                                            <span class="close" style="color: red; background-color: white" onclick="deleteMedia({{$mobileHome->getFirstMedia('thumb')->id}}, this)">&times;</span>
                                            {{$mobileHome->getFirstMedia('thumb')}}
                                        </div>
                                    </div>

                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="gallery_images" class=" form-control-label">Gallery Images</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="gallery_images" name="gallery_images[]" multiple="" class="form-control-file">
                                        @foreach($mobileHome->getMedia('gallery') as $media)
                                            <div class="img-wrap" style="float: left">
                                                <span class="close" style="color: red; background-color: white" onclick="deleteMedia({{$media->id}}, this)">&times;</span>
                                                {{$media}}
                                            </div>
                                            @endforeach
                                    </div>

                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="virtual_tour" class=" form-control-label">Virtual Tour</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="virtual_tour" name="virtual_tour" class="form-control" placeholder="link to virtual tour" value="{{$mobileHome->virtual_tour}}">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="floor_plan" class=" form-control-label">Floor Plan</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="floor_plan" name="floor_plan" class="form-control-file" placeholder="floor plan">
                                        <div class="img-wrap" style="float: left">
                                            <span class="close" style="color: red; background-color: white" onclick="deleteMedia({{$mobileHome->getFirstMedia('floor_plan')->id}}, this)">&times;</span>
                                            {{$mobileHome->getFirstMedia('floor_plan')}}
                                        </div>
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
<script>
    function deleteMedia(id, e) {
        axios.post('/delete-media/' + id).then(function(response) {
            if (response.data == "good") {
                $(e).parent().remove()
            }
        })
    }
</script>
@endsection
