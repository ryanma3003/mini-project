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
{!! Form::model($religion, ['class' => 'form-horizontal style-form', 'method' => 'PATCH', 'action' => ['ReligionController@update', $religion->id]]) !!}
@include('religion.form', ['submitButtonText' => 'Update'])
{!! Form::close() !!}
</div>
</div>
</div>
</div>
</section>
</section>
@endsection