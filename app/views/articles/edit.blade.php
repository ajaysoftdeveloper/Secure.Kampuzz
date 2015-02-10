@extends('layout.main')

@section('content')


    {{ Form::model($article, array('route' => array('articles.update', $article->id), 'method' => 'put', 'class'=>'form-horizontal')) }}
    {{ Form::hidden('page', Input::query('page')) }}
    {{ Form::hidden('order', Input::query('order')) }}
    {{ Form::hidden('sort', Input::query('sort')) }}
    <h2>Edit Article</h2>
    @include('articles.form')
    {{ Form::close() }}
@stop