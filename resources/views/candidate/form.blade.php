<div class="form-group">
	{!! Form::label('name', 'Name', ['class' => 'col-sm-2 col-sm-2 control-label']) !!}
	<div class="col-sm-10">
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
	</div>
</div>
<div class="form-group">
	{!! Form::label('address', 'Address', ['class' => 'col-sm-2 col-sm-2 control-label']) !!}
	<div class="col-sm-10">
	{!! Form::text('address', null, ['class' => 'form-control']) !!}
	</div>
</div>
<div class="form-group">
	{!! Form::label('birthday', 'Date of Birth', ['class' => 'col-sm-2 col-sm-2 control-label']) !!}
	<div class="col-sm-4">
	{!! Form::date('birthday', !empty($candidate) ? $candidate->birthday->format('Y-m-d'): null, ['class' => 'form-control', 'id' => 'birthday']) !!}
	</div>
</div>
<div class="form-group">
	{!! Form::label('jenis_kelamin', 'Gender', ['class' => 'col-sm-2 col-sm-2 control-label']) !!}
	<div class="col-sm-10 radio">
	<label>{!! Form::radio('jenis_kelamin', 'L') !!} Male</label>
	<label>{!! Form::radio('jenis_kelamin', 'P') !!} Female</label>
	</div>
</div>
<div class="form-group">
	{!! Form::label('salary', 'Expected Salary', ['class' => 'col-sm-2 col-sm-2 control-label']) !!}
	<div class="col-sm-10">
	{!! Form::text('salary', null, ['class' => 'form-control']) !!}
	</div>
</div>
<div class="form-group">
	{!! Form::label('id_college', 'College', ['class' => 'col-sm-2 col-sm-2 control-label']) !!}
	<div class="col-sm-10">
	@if(count($college_list) > 0)
	{!! Form::select('id_college', $college_list, null, ['class' => 'form-control', 'id' => 'id_college', 'placeholder' => 'Choose College']) !!}
	@else
		<p>There is no record yet.</p>
	@endif
	</div>
</div>
<div class="form-group">
	{!! Form::label('id_degree', 'Degree', ['class' => 'col-sm-2 col-sm-2 control-label']) !!}
	<div class="col-sm-10">
	@if(count($degree_list) > 0)
	{!! Form::select('id_degree', $degree_list, null, ['class' => 'form-control', 'id' => 'id_degree', 'placeholder' => 'Choose Degree']) !!}
	@else
		<p>There is no record yet.</p>
	@endif
	</div>
</div>
<div class="form-group">
	{!! Form::label('thesis', 'Thesis', ['class' => 'col-sm-2 col-sm-2 control-label']) !!}
	<div class="col-sm-10">
	{!! Form::text('thesis', null, ['class' => 'form-control']) !!}
	</div>
</div>
<div class="form-group">
	{!! Form::label('id_status', 'Status', ['class' => 'col-sm-2 col-sm-2 control-label']) !!}
	<div class="col-sm-10">
	@if(count($degree_list) > 0)
	{!! Form::select('id_status', $status_list, null, ['class' => 'form-control', 'id' => 'id_status', 'placeholder' => 'Choose Status']) !!}
	@else
		<p>There is no record yet.</p>
	@endif
	</div>
</div>
<div class="form-group">
	{!! Form::label('id_religion', 'Religion', ['class' => 'col-sm-2 col-sm-2 control-label']) !!}
	<div class="col-sm-10">
	@if(count($degree_list) > 0)
	{!! Form::select('id_religion', $religion_list, null, ['class' => 'form-control', 'id' =>'id_religion', 'placeholder' => 'Choose Religion']) !!}
	@else
		<p>There is no record yet.</p>
	@endif
	</div>
</div>
<div class="form-group">
	{!! Form::label('phone_number', 'Phone', ['class' => 'col-sm-2 col-sm-2 control-label']) !!}
	<div class="col-sm-10">
	{!! Form::text('phone_number', null, ['class' => 'form-control']) !!}
	</div>
</div>
<div class="form-group">
	<div class="col-sm-2">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
	</div>
</div>