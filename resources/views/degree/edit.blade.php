@extends('partials.template')
@section('main')
<section id="main-content">
<section class="wrapper">
<div class="row mt">
<div class="col-lg-12">
<div class="form-panel">
<div id="degree">
<h2>Degree Form</h2>
@include('errors.form_error_list')
{!! Form::model($degree, ['class' => 'form-horizontal style-form', 'method' => 'PATCH', 'action' => ['DegreeController@update', $degree->id]]) !!}
@include('degree.form', ['submitButtonText' => 'Update'])
{!! Form::close() !!}
</div>
</div>
</div>
</div>
</section>
</section>
@endsection