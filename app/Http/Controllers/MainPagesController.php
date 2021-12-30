<?php

namespace App\Http\Controllers;

use App\Models\Main;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Validate;

class MainPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main = Main::first();
        return view('pages.main', compact('main'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'sub_title' => 'required|string',
        ]);
        $main = Main::first();
        $main->title = $request->title;
        $main->title = $request ->sub_title;

        if($request ->file('bc_img')){
            $img_file = $request ->file('bc_img');
            $img_file ->storeAs('public/img/bc_img.' .$img_file->getClientOriginalExtension());
            $bc_img ->storeAs('public/img/bc_img.' .$img_file->getClientOriginalExtension());
        }

        return 'abc';
    }
}
