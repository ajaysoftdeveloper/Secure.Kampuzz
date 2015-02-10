<div class="col-md-6 form-group">
    {{ Form::label('course_name', 'Course Name', array('class' => 'col-sm-3 control-label')) }}
    <div class="col-sm-9">
        {{ Form::text('course_name', NULL, array('class' => 'form-control')) }}
    </div>
    {{ $errors->first('course_name', '<p class="alert alert-danger">:message</p>') }}
</div>

<div class="col-md-6 form-group">
    {{ Form::label('parent_course_id', 'Parent Course', array('class' => 'col-sm-3 control-label')) }}
    <div class="col-sm-9">
        {{ Form::select('parent_course_id', Course::CatTree($course->parent_course_id), $course->parent_course_id, array('class' => 'form-control')) }}

    </div>
    {{ $errors->first('parent_course_id', '<p class="alert alert-danger">:message</p>') }}
</div>

<div class="col-md-12 sub-box text-right">
    <span>{{Form::submit('Save', ['class' => 'btn btn-sm btn-primary'])}}</span>
    <span>{{Form::reset('Cancel', ['class' => 'btn btn-sm'])}}</span> </div>