<div class="form-group">
	{!! Form::label('religion_name', 'Religion', ['class' => 'col-sm-2 col-sm-2 control-label']) !!}
	<div class="col-sm-10">
	{!! Form::text('religion_name', null, ['class' => 'form-control']) !!}
	</div>
</div>
<div class="form-group">
	<div class="col-sm-2">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
	</div>
</div>