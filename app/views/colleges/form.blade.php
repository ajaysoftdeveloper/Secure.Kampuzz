
<div class="col-md-6 form-group">
{{ Form::label('college_name', 'College Name', array('class' => 'col-sm-3 control-label')) }}
<div class="col-sm-9">
{{ Form::text('college_name', NULL, array('class' => 'form-control')) }}
</div>
{{ $errors->first('college_name', '<p class="alert alert-danger">:message</p>') }}
</div>

<div class="col-md-6 form-group">
    {{ Form::label('city_name', 'City Name', array('class' => 'col-sm-3 control-label')) }}
    <div class="col-sm-9">
        {{ Form::text('city_name', NULL, array('class' => 'form-control')) }}
    </div>
    {{ $errors->first('city_name', '<p class="alert alert-danger">:message</p>') }}
</div>

<div class="col-md-6 form-group">
    {{ Form::label('college_rating', 'Rating', array('class' => 'col-sm-3 control-label')) }}
    <div class="col-sm-9">
        {{ Form::text('college_rating', NULL, array('class' => 'form-control')) }}
    </div>
    {{ $errors->first('college_rating', '<p class="alert alert-danger">:message</p>') }}
</div>

<div class="col-md-6 form-group">
    {{ Form::label('college_established', 'Established', array('class' => 'col-sm-3 control-label')) }}
    <div class="col-sm-9">
        {{ Form::text('college_established', NULL, array('class' => 'form-control')) }}
    </div>
    {{ $errors->first('college_established', '<p class="alert alert-danger">:message</p>') }}
</div>

<div class="col-md-6 form-group">
    {{ Form::label('college_contact_person', 'Contact Person', array('class' => 'col-sm-3 control-label')) }}
    <div class="col-sm-9">
        {{ Form::text('college_contact_person', NULL, array('class' => 'form-control')) }}
    </div>
    {{ $errors->first('college_contact_person', '<p class="alert alert-danger">:message</p>') }}
</div>

<div class="col-md-6 form-group">
    {{ Form::label('college_email', 'Email', array('class' => 'col-sm-3 control-label')) }}
    <div class="col-sm-9">
        {{ Form::text('college_email', NULL, array('class' => 'form-control')) }}
    </div>
    {{ $errors->first('college_email', '<p class="alert alert-danger">:message</p>') }}
</div>

<div class="col-md-6 form-group">
    {{ Form::label('college_url', 'URL', array('class' => 'col-sm-3 control-label')) }}
    <div class="col-sm-9">
        {{ Form::text('college_url', NULL, array('class' => 'form-control')) }}
    </div>
    {{ $errors->first('college_url', '<p class="alert alert-danger">:message</p>') }}
</div>



<div class="col-md-6 form-group">
    {{ Form::label('college_phone', 'Phone', array('class' => 'col-sm-3 control-label')) }}
    <div class="col-sm-9">
        {{ Form::text('college_phone', NULL, array('class' => 'form-control')) }}
    </div>
    {{ $errors->first('college_phone', '<p class="alert alert-danger">:message</p>') }}
</div>

<div class="col-md-12 form-group">

    {{ Form::label('college_address', 'Address', array('class' => 'col-sm-3 control-label')) }}
    <div class="col-sm-9">
        {{ Form::textarea('college_address', NULL, array('class' => 'form-control', 'style'=>'height:100px')) }}
    </div>
    {{ $errors->first('college_address', '<p class="alert alert-danger">:message</p>') }}
</div>

<div class="col-md-12 form-group">

    {{ Form::label('why_join', 'Why Join?', array('class' => 'col-sm-3 control-label')) }}
    <div class="col-sm-9">
        {{ Form::textarea('why_join', NULL, array('class' => 'form-control wysihtml5', 'style'=>'height:300px')) }}
    </div>
    {{ $errors->first('why_join', '<p class="alert alert-danger">:message</p>') }}
</div>



<div class="col-md-12 sub-box text-right">
    <span>{{Form::submit('Save', ['class' => 'btn btn-sm btn-primary'])}}</span>
    <span>{{Form::reset('Cancel', ['class' => 'btn btn-sm'])}}</span>
</div>
