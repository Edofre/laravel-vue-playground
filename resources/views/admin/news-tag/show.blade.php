@extends('layouts.app')

@section('title')
    {{ __('crud.show_name', ['name' => lcfirst($newsTag->name)]) }}
@endsection

@section('content')
    <section class="section">
        <div class="container">
            <div class="content">
                <dl>
                    <dt><strong>{{ __('crud.id') }}</strong></dt>
                    <dd>{{ $newsTag->id }}</dd>

                    <dt><strong>{{ __('news-tag.name') }}</strong></dt>
                    <dd>{{ $newsTag->name }}</dd>

                    <dt><strong>{{ __('news-tag.public') }}</strong></dt>
                    <dd>{{ $newsTag->public}}</dd>

                    <dt><strong>{{ __('news-tag.description') }}</strong></dt>
                    <dd>{{ $newsTag->description }}</dd>

                    <dt><strong>{{ __('crud.created_at') }}</strong></dt>
                    <dd>{{ !is_null($newsTag->created_at) ? $newsTag->created_at->format('Y-m-d H:i:s') : '-' }}</dd>

                    <dt><strong>{{ __('crud.updated_at') }}</strong></dt>
                    <dd>{{ !is_null($newsTag->updated_at) ? $newsTag->updated_at->format('Y-m-d H:i:s') : '-' }}</dd>
                </dl>
            </div>
        </div>
    </section>
    {{--<h1 class="panel-title pull-left">{{ trans('crud.view_all', ['model'=> strtolower(trans('news-tag.news_categories'))]) }}</h1>--}}
    {{--<a class="btn btn-primary" href="{!! route('admin.news-tag.create') !!}">{{ trans('crud.create') }}</a>--}}
@endsection