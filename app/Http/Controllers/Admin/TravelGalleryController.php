<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TravelGallery;
use App\Models\TravelPackage;
use App\Http\Requests\Admin\TravelGalleryRequest;
use App\Http\Requests\Admin\TravelGalleryImageRequest;
use Illuminate\Support\Facades\Storage;

class TravelGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = TravelGallery::orderBy('updated_at', 'DESC')->with(['travel_package'])->get();

        return view('pages.admin.travel-gallery.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $travel_packages = TravelPackage::get();

        return view('pages.admin.travel-gallery.create', [
            'travel_packages' => $travel_packages
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TravelGalleryRequest $request)
    {
        $data = $request->get();
        $data['image'] = $request->image->store('assets/gallery', 'public');

        TravelGallery::create($data);
        
        return redirect()->route('travel-gallery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = TravelGallery::findOrFail($id);
        $travel_packages = TravelPackage::get();

        return view('pages.admin.travel-gallery.edit', [
            'item' => $item,
            'travel_packages' => $travel_packages
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TravelGalleryImageRequest $request, $id)
    {
        $data = $request->get();
        $item = TravelGallery::findOrFail($id);
        
        // check if there is an image input, then delete previous image
        if ($request->image) {
            Storage::delete('public/' . $item->image); //delete image from local storage

            $data['image'] = $request->image->store('assets/gallery', 'public'); //store new image
        }

        $item->update($data);

        return redirect()->route('travel-gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = TravelGallery::findOrFail($id);
        
        Storage::delete('public/' . $item->image); //delete image from local storage
        
        $item->delete();

        return redirect()->route('travel-gallery.index');
    }
}
