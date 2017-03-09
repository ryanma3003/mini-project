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
{!! Form::open(['url' => 'college', 'class' => 'form-horizontal style-form']) !!}
@include('college.form', ['submitButtonText' => 'Save'])
{!! Form::close() !!}
</div>
</div>
</div>
</div>
</section>
</section>
@endsection