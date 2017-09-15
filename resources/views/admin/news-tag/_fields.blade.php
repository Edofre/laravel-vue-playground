<div class="field">
    <label for="name" class="label">{{ __('news-tag.name') }}</label>
    <div class="control">
        <input id="name" class="input {{ $errors->has('name') ? ' is-error' : '' }}" name="name" value="{{ old('name', $newsTag->name) }}" required autofocus placeholder="{{ __('news-tag.name_placeholder') }}">
    </div>
    @if ($errors->has('name'))
        <p class="help is-danger">{{ $errors->first('name') }}</p>
    @endif
</div>

<div class="field">
    <div class="control">
        <label class="checkbox">
            <input type="checkbox" name="public" value="{{ old('public', $newsTag->public) }}" {{ old('public', $newsTag->public) ? 'checked' : '' }}> {{ trans('news-tag.public') }}
        </label>
    </div>
</div>

<div class="field">
    <label for="description" class="label">{{ __('news-tag.description') }}</label>
    <div class="control">
        <textarea class="textarea {{ $errors->has('description') ? ' is-error' : '' }}" id="description" name="description" required autofocus placeholder="{{ __('news-tag.description_placeholder') }}">{{ old('description', $newsTag->description) }}</textarea>
    </div>
    @if ($errors->has('description'))
        <p class="help is-danger">{{ $errors->first('description') }}</p>
    @endif
</div>