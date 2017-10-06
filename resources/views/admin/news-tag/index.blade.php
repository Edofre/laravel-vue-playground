@extends('layouts.app')

@section('title')
    {{ __('crud.view_all', ['model' => lcfirst(__('news-tag.news_tags'))]) }}
@endsection

@section('content')
    <section class="section">
        <div class="container">
            <div class="content">
                <table class="table is-striped is-narrow">
                    <thead>
                    <tr>
                        <th><abbr title="{{ __('crud.id_description') }}">{{ __('crud.id') }}</abbr></th>
                        <th>{{ trans('news-tag.name') }}</th>
                        <th>{{ trans('news-tag.public') }}</th>
                        <th><abbr title="{{ trans('crud.actions') }}"></abbr></th>
                    </tr>
                    </thead>
                    <tfoot align="right">
                    <tr>
                        <td colspan="4">{{ trans('crud.count_models', ['count' => $newsTags->total()]) }}</td>
                    </tr>
                    </tfoot>
                    <tbody>
                    @if(!$newsTags->isEmpty())
                        @foreach($newsTags as $newsTag)
                            <tr>
                                <td>{{ $newsTag->id }}</td>
                                <td>{{ $newsTag->name }}</td>
                                <td>@boolean($newsTag->public)</td>
                                <td>
                                    <div class="field has-addons">
                                        <p class="control">
                                            <a href="{!! route('admin.news-tag.show', [$newsTag->id]) !!}" title="{{ trans('crud.show') }}" class='button is-primary'>
                                                <span class="icon icon-black"><i class="fa fa-eye"></i></span>
                                            </a>
                                        </p>
                                        <p class="control">
                                            <a href="{!! route('admin.news-tag.edit', [$newsTag->id]) !!}" title="{{ trans('crud.edit') }}" class="button is-warning">
                                                <span class="icon"><i class="fa fa-pencil"></i></span>
                                            </a>
                                        </p>
                                        <p class="control">
                                            {!! Form::open(['route' => ['admin.news-tag.destroy', $newsTag->id], 'method' => 'delete']) !!}
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
                                {{ trans('crud.no_models_found', ['model'=> lcfirst(trans('news-tag.news_tags'))]) }}
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
            {{ $newsTags->appends(!empty($search) ? ['search' => $search] : null)->links() }}
        </div>
    </section>
    {{--<h1 class="panel-title pull-left">{{ trans('crud.view_all', ['model'=> strtolower(trans('news-tag.news_tags'))]) }}</h1>--}}
    {{--<a class="btn btn-primary" href="{!! route('admin.news-tag.create') !!}">{{ trans('crud.create') }}</a>--}}
@endsection