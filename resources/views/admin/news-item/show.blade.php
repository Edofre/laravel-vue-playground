@extends('layouts.app')

@section('title')
    {{ __('crud.show_name', ['name' => lcfirst($newsItem->name)]) }}
@endsection

@section('content')
    <section class="section">
        <div class="container">
            <!-- Main container -->
            <nav class="level">
                <div class="level-left">
                </div>
                <div class="level-right">
                    <div class="field has-addons">
                        <p class="control">
                            <a href="{!! route('admin.news-item.edit', [$newsItem->id]) !!}" title="{{ trans('crud.edit') }}" class="button is-warning">
                                {{ __('crud.edit') }}&nbsp;&nbsp;<span class="icon"><i class="fa fa-pencil"></i></span>
                            </a>
                        </p>
                        <p class="control">
                            {!! Form::open(['route' => ['admin.news-item.destroy', $newsItem->id], 'method' => 'delete']) !!}
                            {!! Form::button(__('crud.delete'). '&nbsp;&nbsp;<span class="icon icon-black"><i class="fa fa-trash"></i></span>', ['type' => 'submit', 'title'=> trans('crud.delete'),'class' => 'button is-danger', 'onclick' => "return confirm('".trans('crud.are_you_sure')."')"]) !!}
                            {!! Form::close() !!}
                        </p>
                    </div>
                </div>
            </nav>

            <div class="content">
                <dl>
                    <dt><strong>{{ __('crud.id') }}</strong></dt>
                    <dd>{{ $newsItem->id }}</dd>

                    <dt><strong>{{ __('news-item.news_category_id') }}</strong></dt>
                    <dd>{{ !is_null($newsItem->newsCategory) ? $newsItem->newsCategory->name : __('news-item.no_news_category_set') }}</dd>

                    <dt><strong>{{ __('news-item.title') }}</strong></dt>
                    <dd>{{ $newsItem->title }}</dd>

                    <dt><strong>{{ __('news-item.public') }}</strong></dt>
                    <dd>{{ $newsItem->public}}</dd>

                    <dt><strong>{{ __('news-item.message') }}</strong></dt>
                    <dd>{{ $newsItem->message }}</dd>

                    <dt><strong>{{ __('crud.created_at') }}</strong></dt>
                    <dd>{{ !is_null($newsItem->created_at) ? $newsItem->created_at->format('Y-m-d H:i:s') : '-' }}</dd>

                    <dt><strong>{{ __('crud.updated_at') }}</strong></dt>
                    <dd>{{ !is_null($newsItem->updated_at) ? $newsItem->updated_at->format('Y-m-d H:i:s') : '-' }}</dd>
                </dl>
            </div>
        </div>
    </section>
@endsection