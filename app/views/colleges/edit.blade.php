@extends('layout.main')

@section('content')


    {{ Form::model($college, array('route' => array('colleges.update', $college->college_id), 'method' => 'put', 'class'=>'form-horizontal')) }}
    {{ Form::hidden('page', Input::query('page')) }}
    {{ Form::hidden('order', Input::query('order')) }}
    {{ Form::hidden('sort', Input::query('sort')) }}
    <h2>Edit College</h2>
    @include('colleges.form')
    {{ Form::close() }}
@stop