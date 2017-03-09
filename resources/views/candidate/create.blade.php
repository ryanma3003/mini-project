@extends('partials.template')
@section('main')
<section id="main-content">
<section class="wrapper">
<div class="row mt">
<div class="col-lg-12">
<div class="form-panel">
<div id="candidate">
<h2>Candidate Form</h2>
@include('errors.form_error_list')
{!! Form::open(['url' => 'candidate', 'class' => 'form-horizontal style-form']) !!}
@include('candidate.form', ['submitButtonText' => 'Save'])
{!! Form::close() !!}
</div>
</div>
</div>
</div>
</section>
</section>
@endsection