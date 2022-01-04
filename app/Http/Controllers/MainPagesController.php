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
            $img_file->storeAs('public/img/','bc_img.' . $img_file->getClientOriginalExtension());
            $main->bc_img = 'storage/img/bc_img.' . $img_file->getClientOriginalExtension();
        }

        if($request ->file('resume')){
            $pdf_file = $request ->file('resume');
            $pdf_file ->storeAs('public/pdf/', 'resume.' .$pdf_file->getClientOriginalExtension());
            $main->resume = 'storage/pdf/pdf_img.' . $pdf_file->getClientOriginalExtension();
        }
        $main->save();

        return redirect()->route('admin.main')->with('success', "Youre Main Page data has been updated successfully");
    }
}
