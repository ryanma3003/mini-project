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
{!! Form::model($status, ['class' => 'form-horizontal style-form', 'method' => 'PATCH', 'action' => ['StatusController@update', $status->id]]) !!}
@include('status.form', ['submitButtonText' => 'Update'])
{!! Form::close() !!}
</div>
</div>
</div>
</div>
</section>
</section>
@endsection