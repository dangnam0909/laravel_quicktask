@extends('layouts.app')

@section('content')

    <div class="panel-body">
        @include('common.errors')

        {!! Form::open(['method' => 'POST', 'router' =>'task.add', 'class' => 'form-horizontal']) !!}
            <div class="form-group">
                {!! Form::label('task-name', trans('messages.lb_task'), ['class' => 'col-sm-3 control-label']) !!}
                
                <div class="col-sm-6">
                    {!! Form::text('name', '', ['class' => 'form-control', 'id' => 'task-name']) !!}

                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    {!! Form::submit(trans('messages.addTask'), ['class' => 'btn btn-default']) !!}
                </div>
            </div>
        {!! Form::close() !!}
    </div>
    @if (count($tasks) > config('setting.defaulttask'))
        <div class="panel panel-default">
            <div class="panel-heading">
                @lang('home.tasks')
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <thead>
                        <th>@lang('home.titletask')</th>
                        <th>&nbsp;</th>
                    </thead>

                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <td class="table-text">
                                    <div>{{ $task->name }}</div>
                                </td>

                                <td>
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['tasks.destroy', $task->id]]) !!}
                                        {!! Form::submit(trans('home.deletetask'), ['class' => 'btn btn-default']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif

@endsection
