@extends('layouts.app')

@section('title')
    {{ __('crud.edit_name', ['name' => lcfirst($newsTag->name)]) }}
@endsection

@section('content')
    <section class="section">
        <div class="container">
            <div class="content">
                {!! Form::model($newsTag, ['route' => ['admin.news-tag.update', $newsTag->id], 'method' => 'patch']) !!}
                @include('admin.news-tag._fields')
                <div class="field has-addons">
                    <p class="control">
                        <button type="submit" class="button is-primary">
                            <span class="icon is-small">
                                <i class="fa fa-floppy-o"></i>
                            </span>
                            <span>{{ __('crud.update') }}</span>
                        </button>
                    </p>
                    <p class="control">
                        <button type="reset" class="button is-warning">
                            <span class="icon is-small">
                                <i class="fa fa-repeat"></i>
                            </span>
                            <span>{{ __('crud.reset') }}</span>
                        </button>
                    </p>
                    <p class="control">
                        <a class="button is-danger" href="{!! route('admin.news-tag.show', [$newsTag]) !!}">
                            <span class="icon is-small">
                                <i class="fa fa-times"></i>
                            </span>
                            <span>{{ __('common.cancel') }}</span>
                        </a>
                    </p>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </section>
    {{--<h1 class="panel-title pull-left">{{ trans('crud.view_all', ['model'=> strtolower(trans('news-tag.news_tags'))]) }}</h1>--}}
    {{--<a class="btn btn-primary" href="{!! route('admin.news-tag.create') !!}">{{ trans('crud.create') }}</a>--}}
@endsection