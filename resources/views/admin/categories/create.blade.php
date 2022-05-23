@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.category.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.categories.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.category.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', '') }}" required>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.category.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.category.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description') }}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.category.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.category.fields.visibility') }}</label>
                @foreach(App\Models\Category::VISIBILITY_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('visibility') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="visibility_{{ $key }}" name="visibility" value="{{ $key }}" {{ old('visibility', '0') === (string) $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="visibility_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('visibility'))
                    <div class="invalid-feedback">
                        {{ $errors->first('visibility') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.category.fields.visibility_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection