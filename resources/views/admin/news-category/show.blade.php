@extends('layouts.app')

@section('title')
    {{ __('crud.show_name', ['name' => lcfirst($newsCategory->name)]) }}
@endsection

@section('content')
    <section class="section">
        <div class="container">
            <div class="content">
                <dl>
                    <dt><strong>{{ __('crud.id') }}</strong></dt>
                    <dd>{{ $newsCategory->id }}</dd>

                    <dt><strong>{{ __('news-category.name') }}</strong></dt>
                    <dd>{{ $newsCategory->name }}</dd>

                    <dt><strong>{{ __('news-category.public') }}</strong></dt>
                    <dd>{{ $newsCategory->public}}</dd>

                    <dt><strong>{{ __('news-category.description') }}</strong></dt>
                    <dd>{{ $newsCategory->description }}</dd>

                    <dt><strong>{{ __('crud.created_at') }}</strong></dt>
                    <dd>{{ !is_null($newsCategory->created_at) ? $newsCategory->created_at->format('Y-m-d H:i:s') : '-' }}</dd>

                    <dt><strong>{{ __('crud.updated_at') }}</strong></dt>
                    <dd>{{ !is_null($newsCategory->updated_at) ? $newsCategory->updated_at->format('Y-m-d H:i:s') : '-' }}</dd>
                </dl>
            </div>
        </div>
    </section>
    {{--<h1 class="panel-title pull-left">{{ trans('crud.view_all', ['model'=> strtolower(trans('news-category.news_categories'))]) }}</h1>--}}
    {{--<a class="btn btn-primary" href="{!! route('admin.news-category.create') !!}">{{ trans('crud.create') }}</a>--}}
@endsection