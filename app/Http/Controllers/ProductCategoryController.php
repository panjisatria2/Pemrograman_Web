<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categories::all();
        return view('dashboard.categories.index', [
            'categories' => $categories,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $category = new Categories;
        $category->name = $request ->input('name');
        $category->slug = $request ->input('slug');
        $category->description = $request ->input('description');

        $category->save();
        return redirect()-> back()
        ->with('Success Message','Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
