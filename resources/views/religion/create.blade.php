@extends('partials.template')
@section('main')
<section id="main-content">
<section class="wrapper">
<div class="row mt">
<div class="col-lg-12">
<div class="form-panel">
<div id="religion">
<h2>Religion Form</h2>
@include('errors.form_error_list')
{!! Form::open(['url' => 'religion', 'class' => 'form-horizontal style-form']) !!}
@include('religion.form', ['submitButtonText' => 'Save'])
{!! Form::close() !!}
</div>
</div>
</div>
</div>
</section>
</section>
@endsection