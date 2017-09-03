<div class="field">
    <label for="name" class="label">{{ __('news-category.name') }}</label>
    <div class="control">
        <input id="name" class="input {{ $errors->has('name') ? ' is-error' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="{{ __('news-category.name_placeholder') }}">
    </div>
    @if ($errors->has('name'))
        <p class="help is-danger">{{ $errors->first('name') }}</p>
    @endif
</div>

<div class="field">
    <div class="control">
        <label class="checkbox">
            <input type="checkbox" name="public" {{ old('public') ? 'checked' : '' }}> {{ trans('news-category.public') }}
        </label>
    </div>
</div>

<div class="field">
    <label for="description" class="label">{{ __('news-category.description') }}</label>
    <div class="control">
        <textarea class="textarea {{ $errors->has('description') ? ' is-error' : '' }}" id="description" name="description" required autofocus placeholder="{{ __('news-category.description_placeholder') }}">{{ old('description') }}</textarea>
    </div>
    @if ($errors->has('description'))
        <p class="help is-danger">{{ $errors->first('description') }}</p>
    @endif
</div>

