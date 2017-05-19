<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hocsinh;
use DateTime;
class HocsinhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Hocsinh::select()->get()->toArray(); 
       // dd($data);
        return view('index',array('abc'=>$data));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //echo '<pre>';
        /*if(!empty($_POST)){
            print_r($_POST);
        }*/
        
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /*echo '<pre>';
        print_r($_POST);
        print_r($request);*/
        $hocsinh=new Hocsinh;
        $hocsinh->hoten=$request->txtHoTen;
        $hocsinh->toan=$request->txtToan;
        $hocsinh->ly=$request->txtLy;
        $hocsinh->created_at=new DateTime();
        $hocsinh->save();
        return redirect()->route('list');
        //return redirect('list');
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
        /*$data=Hocsinh::select()->where(array('id'=>$id))->get()->toArray();
        dd($data);*/
        $hocsinh= Hocsinh::find($id)->toArray();
       /* echo '<pre>';
        dd($hocsinh);
        print_r($hocsinh);*/
        return view('edit',['data'=>$hocsinh]);
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
         $hocsinh= Hocsinh::find($id);
        $hocsinh->hoten=$request->txtHoTen;
        $hocsinh->toan=$request->txtToan;
        $hocsinh->ly=$request->txtLy;
        $hocsinh->created_at=new DateTime();
        $hocsinh->save();
        return redirect()->route('list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*$flight = Hocsinh::find($id);
        $flight->delete();*/
        Hocsinh::destroy($id);
        return redirect()->route('list');
    }
}
