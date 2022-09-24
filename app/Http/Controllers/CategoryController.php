<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\CategoryRequest;
use DB;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $categories=  Category::with(['products'])->oldest()->paginate(3);
    //   return  DB::table('categories')->get();
    //    return $categories;
    $cat=Category::count();
    // return $cat;
       return view('category_index')->with('categories',$categories)->with('cat',$cat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        //
    //    return $request->hasFile('image');
// $path='';
       if ($request->hasFile('image')) {
       $file = $request->file('image');
        $file->move(public_path('uploads'), $file->getClientOriginalName());
$path='uploads/'.$file->getClientOriginalName();
// return $path;

       }
     


        $cat = Category::create([
    'name' => $request->name,
    'description' => $request->description,
    'image' => $path,
]);
        // if ($category->save()) {
        //     return "true";
        // }else{
        //     return "fdalse";
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

       $category= Category::find($id);
        return view("category_show")->with('category',$category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $category= Category::find($id);
        return view("category_edit")->with('category',$category);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request)
    {
        // return $request;

        Category::where('id', $request->id)
      ->update(['name' => $request->name,'description' => $request->description]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);

    }
}
