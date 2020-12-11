@extends('layouts.admin')
@section('content')
<div class="main-card">
    <div class="header">
        {{ trans('global.create') }} {{ trans('cruds.customers.title_singular') }}
    </div>

    <form method="POST" action="{{ route("admin.customers.store") }}" enctype="multipart/form-data">
        @csrf
        <div class="body">
            <div class="mb-3">
                <label for="name" class="text-xs required">{{ trans('cruds.customers.fields.name') }}</label>

                <div class="form-group">
                    <input type="text" id="name" name="name" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" required>
                </div>
                @if($errors->has('name'))
                    <p class="invalid-feedback">{{ $errors->first('name') }}</p>
                @endif
                <span class="block">{{ trans('cruds.customers.fields.name_helper') }}</span>
            </div>
            <div class="mb-3">
                <label for="email" class="text-xs required">{{ trans('cruds.customers.fields.email') }}</label>

                <div class="form-group">
                    <input type="email" id="email" name="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required>
                </div>
                @if($errors->has('email'))
                    <p class="invalid-feedback">{{ $errors->first('email') }}</p>
                @endif
                <span class="block">{{ trans('cruds.customers.fields.email_helper') }}</span>
            </div>
            <div class="mb-3">
                <label for="quiz_score" class="text-xs required">{{ trans('cruds.customers.fields.quiz_score') }}</label>

                <div class="form-group">
                    <input type="number" id="quiz_score" name="quiz_score" class="{{ $errors->has('quiz_score') ? ' is-invalid' : '' }}" value="{{ old('quiz_score') }}" required>
                </div>
                @if($errors->has('name'))
                    <p class="invalid-feedback">{{ $errors->first('quiz_score') }}</p>
                @endif
                <span class="block">{{ trans('cruds.customers.fields.quiz_score_helper') }}</span>
            </div>
        </div>

        <div class="footer">
            <button type="submit" class="submit-button">{{ trans('global.save') }}</button>
        </div>
    </form>
</div>
@endsection