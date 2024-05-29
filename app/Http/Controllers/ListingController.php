<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listings = listing::paginate(10);
        return view('listing', compact('listings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('creation-annonce');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $type = $request->string('type');
        
        // $style = $request->string('style');
        
        // $image = $request->file('image');
        
        // $prix = $request->integer('prix');
        
        // $surface = $request->integer('surface');
        
        // $piece = $request->integer('piece');
        
        // $meuble = $request->string('meuble');
        
        // $desc = $request->string('desc');
        
        // $clef = $request->string('mot-clef');
        // return [$type,$style,$image,$prix,$surface,$piece,$meuble,$desc,$clef,];

        $filename = '';
        if ($request->hasFile('image')) {
            $filename =  time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $filename);
        }

        $listings = listing::create([
            'user_id' => auth()->id(),
            'type' => $request->type,
            'style' => $request->style,
            'image' => 'images/' . $filename,
            'prix' => $request->prix,
            'surface' => $request->surface,
            'piece' => $request->piece,
            'meuble' => $request->meuble,
            'desc' => $request->desc,
            'motClef' => $request->motClef,
            'created' => $request->created
        ]);

        return redirect('listing');
    }

    /**
     * Display the specified resource.
     */
    public function show(Listing $listing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Listing $listing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Listing $listing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Listing $listing)
    {
        //
    }
}
