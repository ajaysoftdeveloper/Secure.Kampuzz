@extends('layout.main')

@section('content')


    {{ Form::open(array('route' => 'colleges.store', 'class'=>'form-horizontal')) }}
    <h2>Add a New College</h2>
    @include('colleges.form')
    {{ Form::close() }}
@stop