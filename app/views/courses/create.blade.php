@extends('layout.main')

@section('content')


    {{ Form::open(array('route' => 'courses.store', 'class'=>'form-horizontal')) }}
    <h2>Add a New Course</h2>
    @include('courses.form')
    {{ Form::close() }}
@stop