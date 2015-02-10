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
<h2>Manage Colleges</h2>
{{ Form::open(array('route' => 'colleges.index','method' => 'GET', 'class'=>'form-horizontal')) }}
    <h2>Search</h2>
    


<div class="col-md-6 form-group">
{{ Form::label('college_name', 'College Name', array('class' => 'col-sm-3 control-label')) }}
<div class="col-sm-9">
{{ Form::text('college_name', NULL, array('class' => 'form-control')) }}
</div> 
</div>

<div class="col-md-6 form-group">
    {{ Form::label('city_name', 'City', array('class' => 'col-sm-3 control-label')) }}
    <div class="col-sm-9">
        {{ Form::text('city_name', NULL, array('class' => 'form-control')) }}
    </div>
</div>




<div class="col-md-6 sub-box text-right">
    <span>{{Form::submit('Search', ['class' => 'btn btn-sm btn-primary'])}}</span>
 
</div>



    {{ Form::close() }}


    <table class="table table-striped table-bordered">
        <tr class="heading">
            <th>S.No.</th>
            <th>Name <a href="{{action('CollegesController@index', array('sort' => 'college_name', 'order' => 'asc'))}}">
                    <i class="glyphicon glyphicon-chevron-up"></i>
                </a>
                <a href="{{action('CollegesController@index', array('sort' => 'college_name', 'order' => 'desc'))}}">
                    <i class="glyphicon glyphicon-chevron-down"></i>
                </a></th>
            <th>City   <a href="{{action('CollegesController@index', array('sort' => 'city_name', 'order' => 'asc'))}}">
                    <i class="glyphicon glyphicon-chevron-up"></i>
                </a>
                <a href="{{action('CollegesController@index', array('sort' => 'city_name', 'order' => 'desc'))}}">
                    <i class="glyphicon glyphicon-chevron-down"></i>
                </a></th>
            <th>Rating   <a href="{{action('CollegesController@index', array('sort' => 'college_rating', 'order' => 'asc'))}}">
                    <i class="glyphicon glyphicon-chevron-up"></i>
                </a>
                <a href="{{action('CollegesController@index', array('sort' => 'college_rating', 'order' => 'desc'))}}">
                    <i class="glyphicon glyphicon-chevron-down"></i>
                </a></th>
            <th>Established   <a href="{{action('CollegesController@index', array('sort' => 'college_established', 'order' => 'asc'))}}">
                    <i class="glyphicon glyphicon-chevron-up"></i>
                </a>
                <a href="{{action('CollegesController@index', array('sort' => 'college_established', 'order' => 'desc'))}}">
                    <i class="glyphicon glyphicon-chevron-down"></i>
                </a></th>
            <th>Downloads   <a href="{{action('CollegesController@index', array('sort' => 's_total_brochure_download', 'order' => 'asc'))}}">
                    <i class="glyphicon glyphicon-chevron-up"></i>
                </a>
                <a href="{{action('CollegesController@index', array('sort' => 's_total_brochure_download', 'order' => 'desc'))}}">
                    <i class="glyphicon glyphicon-chevron-down"></i>
                </a></th>

            <th>Viewed   <a href="{{action('CollegesController@index', array('sort' => 's_total_course_viewed', 'order' => 'asc'))}}">
                    <i class="glyphicon glyphicon-chevron-up"></i>
                </a>
                <a href="{{action('CollegesController@index', array('sort' => 's_total_course_viewed', 'order' => 'desc'))}}">
                    <i class="glyphicon glyphicon-chevron-down"></i>
                </a></th>
            <th>Created   <a href="{{action('CollegesController@index', array('sort' => 'created_at', 'order' => 'asc'))}}">
                    <i class="glyphicon glyphicon-chevron-up"></i>
                </a>
                <a href="{{action('CollegesController@index', array('sort' => 'created_at', 'order' => 'desc'))}}">
                    <i class="glyphicon glyphicon-chevron-down"></i>
                </a></th>
            <th class="text-center">&nbsp;</th>
        </tr>
        <?php
        foreach ($colleges as $college): ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $college->college_name; ?></td>
            <td><?php echo $college->city_name; ?></td>
            <td><?php echo $college->college_rating; ?></td>
            <td><?php echo $college->college_established; ?></td>
            <td><?php echo $college->s_total_brochure_download; ?></td>
            <td><?php echo $college->s_total_course_viewed; ?></td>
            <td><?php echo NF::format_date_local($college->created_at); ?></td>
            <td>{{ Form::open(array('route' => array('colleges.destroy', $college->college_id), 'method' => 'delete', 'class' => 'form-inline')) }}
                {{ link_to_route('colleges.edit', 'Edit', array($college->college_id,
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
    <?php echo $colleges->links(); ?>
@stop