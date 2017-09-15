<div class="field">
    <label for="title" class="label">{{ __('news-item.news_category_id') }}</label>
    <div class="control">
        <div class="select">
            {!! Form::select('news_category_id', \App\Models\NewsCategory::getFormData(), $newsItem->news_category_id, ['placeholder' => __('news-item.news_category_id_placeholder')]) !!}
        </div>
    </div>
    @if ($errors->has('news_category_id'))
        <p class="help is-danger">{{ $errors->first('news_category_id') }}</p>
    @endif
</div>

<div class="field">
    <label for="title" class="label">{{ __('news-item.title') }}</label>
    <div class="control">
        <input id="title" class="input {{ $errors->has('title') ? ' is-error' : '' }}" name="title" value="{{ old('title', $newsItem->title) }}" required autofocus placeholder="{{ __('news-item.title_placeholder') }}">
    </div>
    @if ($errors->has('title'))
        <p class="help is-danger">{{ $errors->first('title') }}</p>
    @endif
</div>

<div class="field">
    <div class="control">
        <label class="checkbox">
            <input type="checkbox" name="public" value="{{ old('public', $newsItem->public) }}" {{ old('public', $newsItem->public) ? 'checked' : '' }}> {{ trans('news-item.public') }}
        </label>
    </div>
</div>

<div class="field">
    <label for="message" class="label">{{ __('news-item.message') }}</label>
    <div class="control">
        <textarea class="textarea {{ $errors->has('message') ? ' is-error' : '' }}" id="message" name="message" required autofocus placeholder="{{ __('news-item.message_placeholder') }}">{{ old('message', $newsItem->message) }}</textarea>
    </div>
    @if ($errors->has('message'))
        <p class="help is-danger">{{ $errors->first('message') }}</p>
    @endif
</div>

@push('scripts')
    {{--<script type="text/javascript">--}}
        {{--// Set some defaults for the select2--}}
        {{--$("select").select2({--}}
            {{--placeholder: 'Select',--}}
            {{--allowClear: true,--}}
        {{--});--}}
    {{--</script>--}}
@endpush