<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\User;
class EditPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $list = User::all()->where('isAdmin',null)->sortBy('lock');
        $data = array(
            'list' => $list
        );
        return view('edit.edit',compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        if($id !== ''){
            $list = User::find($id);
            /*
            $data = array(
                'list' => $list
            );*/
            return view('edit.editform', compact('list'));
        }
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
        $request->validate([
            'name'=>'required',
            'surname'=>'required',
            'email'=>'required',
            'tel'=> 'required',
            'store_name'=>'required',
            'lock'=>'required',
        ]);
    
        $list = User::find($id);

        $list->name = $request->get('name');
        $list->surname = $request->get('surname');
        $list->email = $request->get('email');
        $list->tel = $request->get('tel');
        $list->store_name = $request->get('store_name');
        $list->lock = $request->get('lock');
        $list->come = $request->get('come');
        $list->count = $request->get('count');
        $list->ban = $request->get('ban');

        $list->save();
        return redirect('edit'); //->with('success', 'Stock has been updated'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $list = User::find($id);
        $list->delete();
        //Session::flash('message','Delete Success');
        return redirect('edit');
        
    }
}
