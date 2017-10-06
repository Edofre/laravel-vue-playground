<?php

namespace App\Http\Controllers\Api;

use App\Models\NewsTag;
use Illuminate\Http\Request;

/**
 * Class NewsTagController
 * @package App\Http\Controllers\Api
 */
class NewsTagController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return NewsTag::where(['public' => true])->latest()->get();
    }


    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request $request
     * @return NewsTag|\Illuminate\Database\Eloquent\Model
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'        => 'required',
            'description' => 'required',
        ]);

        $newsTag = NewsTag::create([
            'name'        => $request->input('name'),
            'description' => $request->input('description'),
            'public'      => 1,
        ]);

        return $newsTag;
    }

    /**
     * Remove the specified resource from storage.
     * @param NewsTag $newsTag
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsTag $newsTag)
    {
        return response()->json($newsTag->delete());
    }
}