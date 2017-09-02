@extends('layouts.app')

@section('title')
    {{ __('crud.view_all', ['model' => lcfirst(__('news-category.news_categories'))]) }}
@endsection

@section('content')
    <section class="section">
        <div class="container">
            <div class="content">
                <table class="table is-striped is-narrow">
                    <thead>
                    <tr>
                        <th><abbr title="{{ __('crud.id_description') }}">{{ __('crud.id') }}</abbr></th>
                        <th>{{ trans('news-category.name') }}</th>
                        <th>{{ trans('news-category.public') }}</th>
                        <th><abbr title="{{ trans('crud.actions') }}"></abbr></th>
                    </tr>
                    </thead>
                    <tfoot align="right">
                    <tr>
                        <td colspan="4">{{ trans('crud.count_models', ['count' => $newsCategories->total()]) }}</td>
                    </tr>
                    </tfoot>
                    <tbody>
                    @if(!$newsCategories->isEmpty())
                        @foreach($newsCategories as $newsCategory)
                            <tr>
                                <td>{{ $newsCategory->id }}</td>
                                <td>{{ $newsCategory->name }}</td>
                                <td>{{ $newsCategory->public }}</td>
                                <td>
                                    <div class="field has-addons">
                                        <p class="control">
                                            <a href="{!! route('admin.news-category.show', [$newsCategory->id]) !!}" title="{{ trans('crud.show') }}" class='button is-primary'>
                                                <span class="icon icon-black"><i class="fa fa-eye"></i></span>
                                            </a>
                                        </p>
                                        <p class="control">
                                            <a href="{!! route('admin.news-category.edit', [$newsCategory->id]) !!}" title="{{ trans('crud.edit') }}" class="button is-warning">
                                                <span class="icon"><i class="fa fa-pencil"></i></span>
                                            </a>
                                        </p>
                                        <p class="control">
                                            {!! Form::open(['route' => ['admin.news-category.destroy', $newsCategory->id], 'method' => 'delete']) !!}
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
                                {{ trans('crud.no_models_found', ['model'=> lcfirst(trans('news-category.news_categories'))]) }}
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
            {{ $newsCategories->appends(!empty($search) ? ['search' => $search] : null)->links() }}
        </div>
    </section>
    {{--<h1 class="panel-title pull-left">{{ trans('crud.view_all', ['model'=> strtolower(trans('news-category.news_categories'))]) }}</h1>--}}
    {{--<a class="btn btn-primary" href="{!! route('admin.news-category.create') !!}">{{ trans('crud.create') }}</a>--}}
@endsection