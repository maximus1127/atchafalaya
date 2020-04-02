<?php

namespace App\Http\Controllers;

use App\MobileHome;
use Illuminate\Http\Request;
use App\Feature;
use App\Type;
use App\Http\Resources\MobileHome as MHResource;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class MobileHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobileHomes = MHResource::collection(MobileHome::with('type')->where('active', '1')->orderBy('title')->get());
        return response()->json(['mobileHomes' => $mobileHomes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $features = Feature::orderBy('name')->get();
        $types = Type::all();
        return view('form', compact('features', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $home = new MobileHome();
        $home->title = $request->title;
        $home->featured = $request->featured == null? '0': '1';
        $home->show_on_home = $request->show_on_home == null? '0':'1';
        $home->type_id = $request->type;
        $home->bedrooms = $request->bedrooms;
        $home->virtual_tour = $request->virtual_tour;
        $home->bathrooms = $request->bathrooms;
        $home->square_feet = $request->square_feet;
        $home->starting_price = $request->starting_price;
        if ($request->hasFile('floor_plan')) {
            $home->addMedia($request->floor_plan)->toMediaCollection('floor_plan');
        }
        $home->contact = $request->contact;
        $home->description = $request->description;
        $home->details = $request->details;
        $home->features = \json_encode($request->features);
        $home->active = $request->active == null? '0': '1';
        if ($request->hasFile('main_image')) {
            $home->addMedia($request->main_image)->toMediaCollection('thumb');
        }
        foreach ($request->file('gallery_images') as $img) {
            $home->addMedia($img)->toMediaCollection('gallery');
        }
        $home->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MobileHome  $mobileHome
     * @return \Illuminate\Http\Response
     */
    public function show(MobileHome $mobileHome)
    {
        $imgfull = $mobileHome->getMedia('gallery');
        $floor_plan = $mobileHome->getFirstMedia('floor_plan');
        $similars = MobileHome::where('active', '1')
                                ->where('id', '!=', $mobileHome->id)
                                ->where('type_id', $mobileHome->type_id)->take(3)->get();

        return view('front-pages.property', compact('mobileHome', 'imgfull', 'floor_plan', 'similars'));
    }


    public function viewModels($id)
    {
        $homes =  MobileHome::where('type_id', $id)->where('active', '1')->get();
        $type = Type::find($id)->name;
        return view('front-pages.view-types-of', compact('homes', 'type'));
    }

    public function archive(MobileHome $mobileHome)
    {
        $mobileHome->update(['active' => 0]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MobileHome  $mobileHome
     * @return \Illuminate\Http\Response
     */
    public function edit(MobileHome $mobileHome)
    {
        $types = Type::all();
        $features = Feature::all();
        return view('edit-form', compact('mobileHome', 'types', 'features'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MobileHome  $mobileHome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MobileHome $mobileHome)
    {
        $mobileHome->title = $request->title;
        $mobileHome->featured = $request->featured == null? '0': '1';
        $mobileHome->show_on_home = $request->show_on_home == null? '0':'1';
        $mobileHome->type_id = $request->type;
        $mobileHome->bedrooms = $request->bedrooms;
        $mobileHome->virtual_tour = $request->virtual_tour;
        $mobileHome->bathrooms = $request->bathrooms;
        $mobileHome->square_feet = $request->square_feet;
        $mobileHome->starting_price = $request->starting_price;
        if (!$mobileHome->hasMedia('floor_plan') && $request->floor_plan != null) {
            $mobileHome->addMedia($request->floor_plan)->toMediaCollection('floor_plan');
        }
        $mobileHome->contact = $request->contact;
        $mobileHome->description = $request->description;
        $mobileHome->details = $request->details;
        $mobileHome->features = \json_encode($request->features);
        $mobileHome->active = $request->active == null? '0': '1';
        if (!$mobileHome->hasMedia('thumb') && $request->main_image != null) {
            $mobileHome->addMedia($request->main_image)->toMediaCollection('thumb');
        }
        if ($request->gallery_images != null) {
            foreach ($request->file('gallery_images') as $img) {
                $mobileHome->addMedia($img)->toMediaCollection('gallery');
            }
        }
        $mobileHome->save();
        return back()->with('success', 'Home Is Updated');
    }

    public function updateShowOnHome(MobileHome $mobileHome)
    {
        $mobileHome->update(['show_on_home' => !$mobileHome->show_on_home]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MobileHome  $mobileHome
     * @return \Illuminate\Http\Response
     */
    public function destroy(MobileHome $mobileHome)
    {
        //
    }


    public function deleteMedia(Media $media)
    {
        if ($media->delete()) {
            return response('good');
        }
    }
}
