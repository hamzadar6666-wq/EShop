<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
       return [
        'success' => true,
        'message' => 'Categories List',
        'data' => $categories
       ] ;
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories,name|max:50'
        ]);
        $categories=Category::create($request->all());
        return [
            'success' => true,
            'message' => 'Category Created',
            'data' => $categories
           ] ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return [
            'success' => true,
            'message' => 'Category Details',
            'data' => $category
           ] ;
    }

    
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|unique:categories,name,'.$category->id.'|max:50'//$category->id to ignore current record and its better than just $id because we aare in route model binding
        ]);
        $category->update($request->all());
        return [
            'success' => true,
            'message' => 'Category Updated',
            'data' => $category
           ] ;  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return [
            'success' => true,
            'message' => 'Category Deleted',
            'data' => null
           ] ;
    }
}
