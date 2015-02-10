@extends('layout.main')
@section('content')

    {{ Form::open(array('route' => 'password.post', 'class'=>'form-horizontal')) }}
    <h2>Change Password</h2>


    <div class="col-md-12 form-group">
        {{ Form::label('password', 'Current Password', array('class' => 'col-sm-3 control-label')) }}
        <div class="col-sm-9">
            {{ Form::password('password', array('class' => 'form-control')) }}
        </div>
        {{ $errors->first('password', '<p class="alert alert-danger">:message</p>') }}
    </div>

    <div class="col-md-12 form-group">
        {{ Form::label('new_password', 'New Password', array('class' => 'col-sm-3 control-label')) }}
        <div class="col-sm-9">
            {{ Form::password('new_password', array('class' => 'form-control')) }}
        </div>
        {{ $errors->first('new_password', '<p class="alert alert-danger">:message</p>') }}
    </div>

    <div class="col-md-12 form-group">
        {{ Form::label('confirm_password', 'Confirm Password', array('class' => 'col-sm-3 control-label')) }}
        <div class="col-sm-9">
            {{ Form::password('confirm_password', array('class' => 'form-control')) }}
        </div>
        {{ $errors->first('confirm_password', '<p class="alert alert-danger">:message</p>') }}
    </div>

    <div class="col-md-12 sub-box text-right">
        <span>{{Form::submit('Change Password', ['class' => 'btn btn-sm btn-primary'])}}</span>
        <span>{{Form::reset('Cancel', ['class' => 'btn btn-sm'])}}</span> </div>


    {{ Form::close() }}
@stop