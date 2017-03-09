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
{!! Form::model($candidate, ['class' => 'form-horizontal style-form', 'method' => 'PATCH', 'action' => ['CandidateController@update', $candidate->id]]) !!}
@include('candidate.form', ['submitButtonText' => 'Update'])
{!! Form::close() !!}
</div>
</div>
</div>
</div>
</section>
</section>
@endsection