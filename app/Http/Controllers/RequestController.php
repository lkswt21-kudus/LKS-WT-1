<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reqs = \App\Request::orderBy('created_at', 'desc')->get();

        return view('requests.index', compact('reqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = \App\Product::get();

        return view('requests.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $req = new \App\Request;
        $req->product_id = $request->get('product');
        $req->quantity = $request->get('quantity');
        $req->department = $request->get('department');
        $req->supplier = $request->get('supplier');
        $req->save();

        // $req->product->stock += $request->get('quantity');
        // $req->product->save();

        return redirect('requests');
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
        $req = \App\Request::find($id);

        return view('requests.edit', compact('req'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $req = \App\Request::find($id);
        $req->status = $request->get('status');
        $req->save();

        if( $request->get('status') === 'Accept') {
            $req->product->stock -= $request->get('quantity');
            $req->product->save();
        }

        return redirect('requests');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
