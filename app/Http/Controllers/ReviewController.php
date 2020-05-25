<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Review;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::all();
        return view('review.index',compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('review.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {	
        $review = new Review();
        $review->text = $request->get('text');
        $review->rating = $request->get('rating');
        $review->id_product = $id;
		$review->save();
        return redirect('product')->with('success','Review created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	$review = Review::where('_id', $id)->first();
    	$product = $review->product;
		return view('review.show', compact('review', 'product', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review = Review::where('_id', $id)->first();
        return view('review.edit',compact('review','id'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		$review = Review::where('_id', $id)->first();
        $review->text = $request->get('text');
        $review->rating = $request->get('rating');
        $review->id_user = Auth::id();
        $review->id_product = $request->get('id_product'); 
        $review->save();
		return redirect('review')->with('success', 'Review has been successfully update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $review = Review::where('_id', $id)->first();
        $review->delete();
        return redirect()->route('review.index')
                ->with('success','Review deleted successfully');
    }
}
