<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\Store\StoreNewsItemRequest;
use App\Http\Requests\Admin\Update\UpdateNewsItemRequest;
use App\Models\NewsItem;

/**
 * Class NewsItemController
 * @package App\Http\Controllers\Admin
 */
class NewsItemController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsItems = NewsItem::query()->orderBy('id', 'desc')->paginate(20);

        return view('admin.news-item.index', [
            'newsItems' => $newsItems,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news-item.create')->with([
            'newsItem' => new NewsItem(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param StoreNewsItemRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewsItemRequest $request)
    {
        $newsItem = NewsItem::create([
            'name'        => $request->input('name'),
            'description' => $request->input('description'),
            'public'      => $request->input('public', 0),
        ]);

        //        flash(__('news-item.created', ['name' => $newsItem->name]))->success()->important();
        return redirect()->route('admin.news-item.index');
    }

    /**
     * Display the specified resource.
     * @param NewsItem $newsItem
     * @return \Illuminate\Http\Response
     */
    public function show(NewsItem $newsItem)
    {
        return view('admin.news-item.show')->with([
            'newsItem' => $newsItem,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param NewsItem $newsItem
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsItem $newsItem)
    {
        return view('admin.news-item.edit')->with([
            'newsItem' => $newsItem,
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param UpdateNewsItemRequest|\Illuminate\Http\Request $request
     * @param NewsItem                                       $newsItem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewsItemRequest $request, NewsItem $newsItem)
    {
        $newsItem->update([
            'name'        => $request->input('name'),
            'description' => $request->input('description'),
            'public'      => $request->input('public', 0),
        ]);


        //        flash(__('news-item.updated', ['name' => $newsItem->name]))->success()->important();
        return redirect()->route('admin.news-item.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param NewsItem $newsItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsItem $newsItem)
    {
        $newsItem->delete();

        //        flash(__('news-item.deleted', ['name' => $newsItem->name]))->success()->important();
        return redirect()->route('admin.news-item.index');
    }
}
