@extends('layouts.app')

@section('title')
    {{ __('crud.create_model', ['model' => lcfirst(__('news-item.news_item'))]) }}
@endsection

@section('content')
    <section class="section">
        <div class="container">
            <div class="content">
                {!! Form::open(['route' => 'admin.news-item.store']) !!}
                @include('admin.news-item._fields')
                <div class="field has-addons">
                    <p class="control">
                        <button type="submit" class="button is-primary">
                            <span class="icon is-small">
                                <i class="fa fa-floppy-o"></i>
                            </span>
                            <span>{{ __('crud.create') }}</span>
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
                        <a class="button is-danger" href="{!! route('admin.news-item.index') !!}">
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
    {{--<h1 class="panel-title pull-left">{{ trans('crud.view_all', ['model'=> strtolower(trans('news-item.news_items'))]) }}</h1>--}}
    {{--<a class="btn btn-primary" href="{!! route('admin.news-item.create') !!}">{{ trans('crud.create') }}</a>--}}
@endsection