@extends('partials.template')
@section('main')
<section id="main-content">
<section class="wrapper">
<div class="row mt">
<div class="col-lg-12">
<div class="form-panel">
<div id="college">
<h2>College Form</h2>
@include('errors.form_error_list')
{!! Form::model($college, ['class' => 'form-horizontal style-form', 'method' => 'PATCH', 'action' => ['CollegeController@update', $college->id]]) !!}
@include('college.form', ['submitButtonText' => 'Update'])
{!! Form::close() !!}
</div>
</div>
</div>
</div>
</section>
</section>
@endsection