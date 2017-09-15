@extends('layouts.app')

@section('title')
    {{ __('crud.edit_name', ['name' => lcfirst($newsItem->name)]) }}
@endsection

@section('content')
    <section class="section">
        <div class="container">
            <nav class="level">
                <div class="level-left">
                </div>
                <div class="level-right">
                    <div class="field has-addons">
                        <p class="control">
                            <a href="{!! route('admin.news-item.index') !!}" title="{{ __('crud.view_all', ['model' => lcfirst(__('news-item.news_items'))]) }}" class='button is-primary'>
                                {{ __('crud.view_all', ['model' => lcfirst(__('news-item.news_items'))]) }}&nbsp;&nbsp;<span class="icon"><i class="fa fa-list"></i></span>
                            </a>
                        </p>
                        <p class="control">
                            <a href="{!! route('admin.news-item.show', [$newsItem->id]) !!}" title="{{ trans('crud.show') }}" class='button is-info'>
                                {{ __('crud.show') }}&nbsp;&nbsp;<span class="icon"><i class="fa fa-eye"></i></span>
                            </a>
                        </p>
                        <p class="control">
                            {!! Form::open(['route' => ['admin.news-item.destroy', $newsItem->id], 'method' => 'delete']) !!}
                            {!! Form::button(__('crud.delete'). '&nbsp;&nbsp;<span class="icon"><i class="fa fa-trash"></i></span>', ['type' => 'submit', 'title'=> trans('crud.delete'),'class' => 'button is-danger', 'onclick' => "return confirm('".trans('crud.are_you_sure')."')"]) !!}
                            {!! Form::close() !!}
                        </p>
                    </div>
                </div>
            </nav>

            <div class="content">
                {!! Form::model($newsItem, ['route' => ['admin.news-item.update', $newsItem->id], 'method' => 'patch']) !!}
                @include('admin.news-item._fields')
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
                        <a class="button is-danger" href="{!! route('admin.news-item.show', [$newsItem]) !!}">
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