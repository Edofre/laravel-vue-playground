@extends('layouts.app')

@section('title')
    {{ __('crud.show_name', ['name' => lcfirst($newsItem->name)]) }}
@endsection

@section('content')
    <section class="section">
        <div class="container">
            <div class="content">
                <dl>
                    <dt><strong>{{ __('crud.id') }}</strong></dt>
                    <dd>{{ $newsItem->id }}</dd>

                    <dt><strong>{{ __('news-category.title') }}</strong></dt>
                    <dd>{{ $newsItem->title }}</dd>

                    <dt><strong>{{ __('news-category.public') }}</strong></dt>
                    <dd>{{ $newsItem->public}}</dd>

                    <dt><strong>{{ __('news-category.message') }}</strong></dt>
                    <dd>{{ $newsItem->message }}</dd>

                    <dt><strong>{{ __('crud.created_at') }}</strong></dt>
                    <dd>{{ !is_null($newsItem->created_at) ? $newsItem->created_at->format('Y-m-d H:i:s') : '-' }}</dd>

                    <dt><strong>{{ __('crud.updated_at') }}</strong></dt>
                    <dd>{{ !is_null($newsItem->updated_at) ? $newsItem->updated_at->format('Y-m-d H:i:s') : '-' }}</dd>
                </dl>
            </div>
        </div>
    </section>
    {{--<h1 class="panel-title pull-left">{{ trans('crud.view_all', ['model'=> strtolower(trans('news-items.news_items'))]) }}</h1>--}}
    {{--<a class="btn btn-primary" href="{!! route('admin.news-items.create') !!}">{{ trans('crud.create') }}</a>--}}
@endsection