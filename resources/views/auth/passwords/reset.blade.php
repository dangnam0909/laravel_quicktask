@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('messages.resetPass')</div>

                <div class="card-body">
                    {!! Form::open(['route' =>'password.update', 'method' => 'POST']) !!}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            {!! Form::label('email', @trans('messages.lb_email'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}

                            <div class="col-md-6">
                                {!! Form::email('email', old('email'), ['class' => 'form-control', 'id' => 'email') !!}
                                @include('common.errors')
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('password', @trans('messages.lb_password'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::password('password', ['class' => 'form-control', 'id' => 'password') !!}
                                @include('common.errors')
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('password-cofim', @trans('messages.lb_confirmPass'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::password('password-confirm', ['class' => 'form-control', 'id' => 'password-confirm') !!}
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {!! Form::submit(@trans('messages.btn_resetPass'), ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                    {!! Form:close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
