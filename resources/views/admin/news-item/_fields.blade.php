<div class="field">
    <label for="title" class="label">{{ __('news-item.title') }}</label>
    <div class="control">
        <input id="title" class="input {{ $errors->has('title') ? ' is-error' : '' }}" title="title" value="{{ old('title', $newsItem->title) }}" required autofocus placeholder="{{ __('news-item.title_placeholder') }}">
    </div>
    @if ($errors->has('title'))
        <p class="help is-danger">{{ $errors->first('title') }}</p>
    @endif
</div>

<div class="field">
    <div class="control">
        <label class="checkbox">
            <input type="checkbox" title="public" value="{{ old('public', $newsItem->public) }}" {{ old('public', $newsItem->public) ? 'checked' : '' }}> {{ trans('news-item.public') }}
        </label>
    </div>
</div>

<div class="field">
    <label for="message" class="label">{{ __('news-item.message') }}</label>
    <div class="control">
        <textarea class="textarea {{ $errors->has('message') ? ' is-error' : '' }}" id="message" title="message" required autofocus placeholder="{{ __('news-item.message_placeholder') }}">{{ old('message', $newsItem->message) }}</textarea>
    </div>
    @if ($errors->has('message'))
        <p class="help is-danger">{{ $errors->first('message') }}</p>
    @endif
</div>