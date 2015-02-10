<?php

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
            <th>Dept.</th>
            <th>Child Course</th>

            <th class="text-center">&nbsp;</th>
        </tr>
        <?php
        foreach ($courses as $course): ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td>
                {{ link_to_route('courses.child', $course->course_name, array($course->course_id)) }}</td>
            <td>
                {{ link_to_route('courses.child', DB::table('kp_courses')->where('parent_course_id', $course->course_id)->count(), array($course->course_id)) }}

              </td>

            <td>{{ Form::open(array('route' => array('courses.destroy', $course->course_id), 'method' => 'delete', 'class' => 'form-inline')) }}
                {{ link_to_route('courses.edit', 'Edit', array($course->course_id,
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
    <?php echo $courses->links(); ?>
@stop