<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Category::with('posts')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newCategory= new Category();
        $newCategory->name = $request->name;
        $newCategory->created_by=$request->created_by;
        $newCategory->updated_by=$request->updated_by;
        $newCategory->save();
        return response()->json($newCategory);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $newCategory =Category::findOrFail($id);
        $newCategory->name = $request->name;
        $newCategory->created_by=$request->created_by;
        $newCategory->updated_by=$request->updated_by;
        $newCategory->save();
        return response()->json($newCategory); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        Category::destroy($id);
        return (['message' => 'deleted successful']);
    }
}
