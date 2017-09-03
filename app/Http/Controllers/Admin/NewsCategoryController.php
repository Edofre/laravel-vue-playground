<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\Store\StoreNewsCategoryRequest;
use App\Http\Requests\Admin\Update\UpdateNewsCategoryRequest;
use App\Models\NewsCategory;

/**
 * Class NewsCategoryController
 * @package App\Http\Controllers\Admin
 */
class NewsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsCategories = NewsCategory::query()->orderBy('id', 'desc')->paginate(20);

        return view('admin.news-category.index', [
            'newsCategories' => $newsCategories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news-category.create')->with([
            'newsCategory' => new NewsCategory(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param StoreNewsCategoryRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewsCategoryRequest $request)
    {
        $newsCategory = NewsCategory::create([
            'name'        => $request->input('name'),
            'description' => $request->input('description'),
            'public'      => $request->input('public', 0),
        ]);

        //        flash(__('news-category.created', ['name' => $newsCategory->name]))->success()->important();
        return redirect()->route('admin.news-category.index');
    }

    /**
     * Display the specified resource.
     * @param NewsCategory $newsCategory
     * @return \Illuminate\Http\Response
     */
    public function show(NewsCategory $newsCategory)
    {
        return view('admin.news-category.show')->with([
            'newsCategory' => $newsCategory,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param NewsCategory $newsCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsCategory $newsCategory)
    {
        return view('admin.news-category.edit')->with([
            'newsCategory' => $newsCategory,
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param UpdateNewsCategoryRequest|\Illuminate\Http\Request $request
     * @param NewsCategory                                       $newsCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewsCategoryRequest $request, NewsCategory $newsCategory)
    {
        $newsCategory->update([
            'name'        => $request->input('name'),
            'description' => $request->input('description'),
            'public'      => $request->input('public', 0),
        ]);


        //        flash(__('news-category.updated', ['name' => $newsCategory->name]))->success()->important();
        return redirect()->route('admin.news-category.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param NewsCategory $newsCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsCategory $newsCategory)
    {
        $newsCategory->delete();

        //        flash(__('news-category.deleted', ['name' => $newsCategory->name]))->success()->important();
        return redirect()->route('admin.news-category.index');
    }
}
