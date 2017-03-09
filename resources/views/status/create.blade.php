@extends('partials.template')
@section('main')
<section id="main-content">
<section class="wrapper">
<div class="row mt">
<div class="col-lg-12">
<div class="form-panel">
<div id="status">
<h2>Status Form</h2>
@include('errors.form_error_list')
{!! Form::open(['url' => 'status', 'class' => 'form-horizontal style-form']) !!}
@include('status.form', ['submitButtonText' => 'Save'])
{!! Form::close() !!}
</div>
</div>
</div>
</div>
</section>
</section>
@endsection