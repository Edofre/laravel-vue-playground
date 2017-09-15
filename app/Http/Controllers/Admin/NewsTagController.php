<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\Store\StoreNewsTagRequest;
use App\Http\Requests\Admin\Update\UpdateNewsTagRequest;
use App\Models\NewsTag;

/**
 * Class NewsTagController
 * @package App\Http\Controllers\Admin
 */
class NewsTagController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsTags = NewsTag::query()->orderBy('id', 'desc')->paginate(20);

        return view('admin.news-tag.index', [
            'newsTags' => $newsTags,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news-tag.create')->with([
            'newsTag' => new NewsTag(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param StoreNewsTagRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewsTagRequest $request)
    {
        $newsTag = NewsTag::create([
            'name'        => $request->input('name'),
            'description' => $request->input('description'),
            'public'      => $request->input('public', 0),
        ]);

        //        flash(__('news-tag.created', ['name' => $newsTag->name]))->success()->important();
        return redirect()->route('admin.news-tag.index');
    }

    /**
     * Display the specified resource.
     * @param NewsTag $newsTag
     * @return \Illuminate\Http\Response
     */
    public function show(NewsTag $newsTag)
    {
        return view('admin.news-tag.show')->with([
            'newsTag' => $newsTag,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param NewsTag $newsTag
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsTag $newsTag)
    {
        return view('admin.news-tag.edit')->with([
            'newsTag' => $newsTag,
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param UpdateNewsTagRequest|\Illuminate\Http\Request $request
     * @param NewsTag                                       $newsTag
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewsTagRequest $request, NewsTag $newsTag)
    {
        $newsTag->update([
            'name'        => $request->input('name'),
            'description' => $request->input('description'),
            'public'      => $request->input('public', 0),
        ]);


        //        flash(__('news-tag.updated', ['name' => $newsTag->name]))->success()->important();
        return redirect()->route('admin.news-tag.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param NewsTag $newsTag
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsTag $newsTag)
    {
        $newsTag->delete();

        //        flash(__('news-tag.deleted', ['name' => $newsTag->name]))->success()->important();
        return redirect()->route('admin.news-tag.index');
    }
}
