@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('messages.resetPass')</div>

                <div class="card-body">
                    @include('common.error')
                    
                    {!! Form::open(['route' => 'password.email', 'method' => 'POST']) !!}

                        <div class="form-group row">
                            {!! Form::label('email', @trans('messages.lb_emailAdd'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::email('email', old('email'), ['class' => 'form-control', 'id' => 'email']) !!}
                                 @include('common.error')
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
