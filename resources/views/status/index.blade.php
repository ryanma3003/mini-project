@extends('partials.template')
@section('main')
@if (Auth::check())
<section id="main-content">
    <section class="wrapper">
    <div class="row mt">
    <div class="col-md-12">
    	<div class="content-panel">
            @include('partials.flash_message')
			<div class="col-sm-12">
				<a href="{{ URL('status/create') }}">
					<button type="button" class="btn btn-theme03">
						Add <i class="fa fa-plus"></i>		
					</button>
				</a>
			</div>
			@if(count($status_list) > 0 )
    		<table class="table table-striped table-advance table-hover">
    			<thead>
    				<tr>
                        <th>No</th>
    					<th>Status</th>
                        <th>Action</th>
    				</tr>
    			</thead>
    			<tbody>
                    <?php $i = 0; ?>
    				<?php foreach($status_list as $status): ?>
    					<tr>
                            <td>{{ ++$i }}</td>
    						<td>{{ $status->marital_status }}</td>
    						<td>
                            <div style="display: inline-block;">
    							{{ link_to('status/' . $status->id. '/edit', '', ['class' => 'fa fa-pencil btn btn-primary btn-xs']) }}
                            </div>
                            <div style="display: inline-block;">
    							{!! Form::open(['method' => 'DELETE', 'action' => ['StatusController@destroy', $status->id]]) !!}
    							{!! Form::button('<i class="fa fa-trash-o"></i>', array('type' => 'submit', 'class' => 'btn btn-danger btn-xs')) !!}
    							{!! Form::close() !!}
                            </div>
    						</td>
    					</tr>
    				<?php endforeach ?>
    			</tbody>
    		</table>
    		@else
    			<center>No Records.</center>
    		@endif
    	</div>
    </div>
    </div>
    </section>
</section>
@endif
@endsection