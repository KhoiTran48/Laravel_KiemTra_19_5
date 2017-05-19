<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalog;
use App\News;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $news=News::select()->get()->toArray(); 
        return view('backend/news_list',array('news'=>$news));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Catalog::select()->get()->toArray(); 
        return view('backend/news_add',['catalog'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $news=new News;
        $news->id_catalog=$request->sltCate;
        $news->tenTieuDe=$request->txtTitle;
        $news->tacGia=$request->txtAuthor;
        $news->trichDan=$request->txtIntro;
        $news->image='image';
        $news->noiDung=$request->txtFull;
        $check=0;
        if($request->rdoPublic=='Y'){
            $check=1;
        }
        $news->congBoTin=$check;
        $news->save();
        return redirect()->route('list');
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
        $catalog=Catalog::select()->get()->toArray(); 
        $news= News::find($id)->toArray();
     
        return view('backend/news_edit',['news'=>$news,'catalog'=>$catalog]);
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
        $news= News::find($id);
        $news->id_catalog=$request->sltCate;
        $news->tenTieuDe=$request->txtTitle;
        $news->tacGia=$request->txtAuthor;
        $news->trichDan=$request->txtIntro;
        $news->image='image';
        $news->noiDung=$request->txtFull;
        $check=0;
        if($request->rdoPublic=='Y'){
            $check=1;
        }
        $news->congBoTin=$check;
        $news->save();
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
        News::destroy($id);
        return redirect()->route('list');
    }
    public function user(){
        $catalog=Catalog::select()->get()->toArray(); 
        $news=News::select()->get()->toArray(); 
        return view('frontend/index',['catalog'=>$catalog,'news'=>$news]);
    }
}
