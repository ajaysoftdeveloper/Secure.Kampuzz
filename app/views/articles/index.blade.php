<?php
View::composer(Paginator::getViewName(), function($view) {
    $queryString = array_except(Input::query(), Paginator::getPageName());
    $view->paginator->appends($queryString);
});
        $i=1;
        if(Input::query('page')>1){
            $i=(1+Input::query('page')*Config::get('view.max_results_per_page'))-Config::get('view.max_results_per_page');
        }
?>
@extends('layout.main')
@section('content')
<table class="table table-striped table-bordered">
    <tr class="heading">
<th>S.No.</th>
        <th>Title <a href="{{action('ArticlesController@index', array('sort' => 'article_title', 'order' => 'asc'))}}">
                    <i class="glyphicon glyphicon-chevron-up"></i>
                </a>
                <a href="{{action('ArticlesController@index', array('sort' => 'article_title', 'order' => 'desc'))}}">
                    <i class="glyphicon glyphicon-chevron-down"></i>
                </a></th>
        <th>Date   <a href="{{action('ArticlesController@index', array('sort' => 'article_publish_date', 'order' => 'asc'))}}">
                <i class="glyphicon glyphicon-chevron-up"></i>
            </a>
            <a href="{{action('ArticlesController@index', array('sort' => 'article_publish_date', 'order' => 'desc'))}}">
                <i class="glyphicon glyphicon-chevron-down"></i>
            </a></th>
        <th>Revised   <a href="{{action('ArticlesController@index', array('sort' => 'revised', 'order' => 'asc'))}}">
                <i class="glyphicon glyphicon-chevron-up"></i>
            </a>
            <a href="{{action('ArticlesController@index', array('sort' => 'revised', 'order' => 'desc'))}}">
                <i class="glyphicon glyphicon-chevron-down"></i>
            </a></th>
        <th class="text-center">&nbsp;</th>
    </tr>
    <?php foreach ($articles as $article): ?>
    <tr>
        <td><?php echo $i; ?></td>
       <td><?php echo $article->article_title; ?></td>
        <td><?php echo NF::format_date_local($article->article_publish_date); ?></td>
        <td><?php echo $article->revised; ?></td>
        <td>{{ Form::open(array('route' => array('articles.destroy', $article->id), 'method' => 'delete', 'class' => 'form-inline')) }}
            {{ link_to_route('articles.edit', 'Edit', array($article->id,
            'page'=>Input::query('page'),
            'sort'=>Input::query('sort'),
            'order'=>Input::query('order')
            ), ['class' => 'btn btn-sm btn-primary']) }}
 {{Form::submit('Delete', ['class' => 'btn btn-sm btn-danger'])}}
            {{ Form::close() }}</td>
    </tr>
    <?php
    $i++;
    endforeach; ?>
</table>
<?php echo $articles->links(); ?>
@stop