@extends('layouts.app')

@section('title')
    {{ __('crud.view_all', ['model' => lcfirst(__('news-tag.news_tags'))]) }}
@endsection

@section('content')
    <section class="section">
        <div class="container">
            <div id="app">
                <router-view></router-view>
            </div>
        </div>
    </section>
@endsection