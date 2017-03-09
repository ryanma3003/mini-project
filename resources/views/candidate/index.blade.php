@extends('partials.template')
@section('main')
@if (Auth::check())
<section id="main-content">
    <section class="wrapper">
    <div class="row mt">
    <div class="col-md-12">
    	<div class="content-panel">
        @include('partials.flash_message')
			<div class="addition" style="padding: 10px;">
				<a href="{{ URL('candidate/create') }}">
					<button type="button" class="btn btn-theme03">
						Add <i class="fa fa-plus"></i>		
					</button>
				</a>
			</div>

            @include('candidate.pencarian')
			@if(count($candidate_list) > 0)
            <section id="unseen">
    		<table class="table table-striped table-advance table-condensed cf">
    			<thead>
    				<tr>
    					<th>Name</th>
    					<th>Address</th>
    					<th>Birthday</th>
    					<th>JK</th>
    					<th>Salary</th>
    					<th>College</th>
    					<th>Degree</th>
    					<th>Thesis</th>
    					<th>Status</th>
    					<th>Religion</th>
    					<th>Phone</th>
    					<th>Action</th>
    				</tr>
    			</thead>
    			<tbody>
                    <?php $i = 0; ?>
    				<?php foreach($candidate_list as $candidate): ?>
    					<tr>
    						<td>{{ $candidate->name }}</td>
    						<td>{{ $candidate->address }}</td>
    						<td>{{ $candidate->birthday->format('d-m-Y') }}</td>
    						<td>{{ $candidate->jenis_kelamin }}</td>
    						<td>{{ $candidate->salary }}</td>
    						<td>{{ $candidate->college->college_name }}</td>
    						<td>{{ $candidate->degree->lastest_degree }}</td>
    						<td>{{ $candidate->thesis }}</td>
    						<td>{{ $candidate->status->marital_status }}</td>
    						<td>{{ $candidate->religion->religion_name }}</td>
    						<td>{{ $candidate->phone_number }}</td>
    						<td>
                                <div style="display:inline-block;">
    							{{ link_to('candidate/' . $candidate->id, '', ['class' => 'fa fa-check btn btn-success btn-xs']) }}
                                </div>
                                <div style="display:inline-block;">
    							{{ link_to('candidate/' . $candidate->id . '/edit', '', ['class' => 'fa fa-pencil btn btn-primary btn-xs']) }}
                                </div>
                                <div style="display:inline-block;">
                                {{ link_to('export/xlsx', '', ['class' => 'fa fa-download btn btn-info btn-xs']) }}
                                </div>
                                <div style="display:inline-block;">
    							{!! Form::open(['method' => 'DELETE', 'action' => ['CandidateController@destroy', $candidate->id]]) !!}
    							{!! Form::button('<i class="fa fa-trash-o"></i>', array('type' => 'submit', 'class' => 'btn btn-danger btn-xs')) !!}
    							{!! Form::close() !!}
                                </div>
    						</td>
    					</tr>
    				<?php endforeach ?>
    			</tbody>
    		</table>
            </section>
    		@else
    			<center>No Records.</center>
    		@endif
            <div class="pull-left">
            <br/>
            <span class="label label-warning">
                <strong>Candidate Count : {{ $jumlah_candidate }}</strong>
            </span>
            </div>
            <div class= "pagination pull-right">
                {{ $candidate_list->links() }}
            </div>
    	</div>
    </div>
    </div>
    </section>
</section>
@endif
@endsection