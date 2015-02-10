@extends('layout.main')

@section('content')


    {{ Form::open(array('route' => 'articles.store', 'class'=>'form-horizontal')) }}
    <h2>Create Article</h2>
    @include('articles.form')
    {{ Form::close() }}
@stop