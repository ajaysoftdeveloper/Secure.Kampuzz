@extends('layout.main')

@section('content')


    {{ Form::model($course, array('route' => array('courses.update', $course->course_id), 'method' => 'put', 'class'=>'form-horizontal')) }}
    {{ Form::hidden('page', Input::query('page')) }}
    {{ Form::hidden('order', Input::query('order')) }}
    {{ Form::hidden('sort', Input::query('sort')) }}
    <h2>Edit Course</h2>

    @include('courses.form')





    {{ Form::close() }}
@stop