
<div class="col-md-6 form-group">
{{ Form::label('article_title', 'Title', array('class' => 'col-sm-3 control-label')) }}
<div class="col-sm-9">
{{ Form::text('article_title', NULL, array('class' => 'form-control')) }}
</div>
{{ $errors->first('article_title', '<p class="alert alert-danger">:message</p>') }}
</div>

<div class="col-md-6 form-group">
    {{ Form::label('article_publish_date', 'Date', array('class' => 'col-sm-3 control-label')) }}

    <div class="col-sm-9">
        <div class="input-group date" id="datetimepicker1" data-date-format="YYYY-MM-DD">
        {{ Form::text('article_publish_date', NULL, array('class' => 'form-control',)) }}
            <span class="input-group-addon"> <span class="icon-calendar"></span> </span> </div>
    {{ $errors->first('article_publish_date', '<p class="alert alert-danger">:message</p>') }}
    </div>
</div>



<div class="col-md-12 form-group">

    <div class="col-sm-12">
        {{ Form::textarea('article_content', NULL, array('class' => 'form-control wysihtml5', 'style'=>'height:500px')) }}
    </div>
    {{ $errors->first('article_content', '<p class="alert alert-danger">:message</p>') }}
</div>

<div class="col-md-6 form-group">
    {{ Form::label('revised', 'Revised?', array('class' => 'col-sm-3 control-label')) }}
    <div class="col-sm-9">

        {{ Form::select('revised', array('Yes' => 'Yes', 'No' => 'No')) }}
    </div>
    {{ $errors->first('revised', '<p class="alert alert-danger">:message</p>') }}
</div>

<div class="col-md-12 sub-box text-right">
    <span>{{Form::submit('Save', ['class' => 'btn btn-sm btn-primary'])}}</span>
    <span>{{Form::reset('Cancel', ['class' => 'btn btn-sm'])}}</span> </div>
