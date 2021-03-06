@extends('layouts.app')

@section('title')
    {{ __('crud.view_all', ['model' => lcfirst(__('news-item.news_items'))]) }}
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
                            <a href="{!! route('admin.news-item.create') !!}" title="{{ __('crud.create') }}" class='button is-primary'>
                                {{ __('crud.create') }}&nbsp;&nbsp;<span class="icon"><i class="fa fa-plus"></i></span>
                            </a>
                        </p>
                    </div>
                </div>
            </nav>

            <div class="content">
                <table class="table is-striped is-narrow">
                    <thead>
                    <tr>
                        <th><abbr title="{{ __('crud.id_description') }}">{{ __('crud.id') }}</abbr></th>
                        <th>{{ trans('news-item.title') }}</th>
                        <th>{{ trans('news-item.public') }}</th>
                        <th><abbr title="{{ trans('crud.actions') }}"></abbr></th>
                    </tr>
                    </thead>
                    <tfoot align="right">
                    <tr>
                        <td colspan="4">{{ trans('crud.count_models', ['count' => $newsItems->total()]) }}</td>
                    </tr>
                    </tfoot>
                    <tbody>
                    @if(!$newsItems->isEmpty())
                        @foreach($newsItems as $newsItem)
                            <tr>
                                <td>{{ $newsItem->id }}</td>
                                <td>{{ $newsItem->title }}</td>
                                <td>@boolean($newsItem->public)</td>
                                <td>
                                    <div class="field has-addons">
                                        <p class="control">
                                            <a href="{!! route('admin.news-item.show', [$newsItem->id]) !!}" title="{{ trans('crud.show') }}" class='button is-primary'>
                                                <span class="icon icon-black"><i class="fa fa-eye"></i></span>
                                            </a>
                                        </p>
                                        <p class="control">
                                            <a href="{!! route('admin.news-item.edit', [$newsItem->id]) !!}" title="{{ trans('crud.edit') }}" class="button is-warning">
                                                <span class="icon"><i class="fa fa-pencil"></i></span>
                                            </a>
                                        </p>
                                        <p class="control">
                                            {!! Form::open(['route' => ['admin.news-item.destroy', $newsItem->id], 'method' => 'delete']) !!}
                                            {!! Form::button('<span class="icon icon-black"><i class="fa fa-trash"></i></span>', ['type' => 'submit', 'title'=> trans('crud.delete'),'class' => 'button is-danger', 'onclick' => "return confirm('".trans('crud.are_you_sure')."')"]) !!}
                                            {!! Form::close() !!}
                                        </p>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td>
                                {{ trans('crud.no_models_found', ['model'=> lcfirst(trans('news-item.news_items'))]) }}
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
            {{ $newsItems->appends(!empty($search) ? ['search' => $search] : null)->links() }}
        </div>
    </section>
    {{--<h1 class="panel-title pull-left">{{ trans('crud.view_all', ['model'=> strtolower(trans('news-item.news_items'))]) }}</h1>--}}
    {{--<a class="btn btn-primary" href="{!! route('admin.news-item.create') !!}">{{ trans('crud.create') }}</a>--}}
@endsection