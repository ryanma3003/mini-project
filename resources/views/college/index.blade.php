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
				<a href="{{ URL('college/create') }}">
					<button type="button" class="btn btn-theme03">
						Add <i class="fa fa-plus"></i>		
					</button>
				</a>
            </div>
            @include('college.pencarian')
			@if(count($college_list) > 0)
    		<table class="table table-striped table-advance table-hover">
    			<thead>
    				<tr>
                        <th>No</th>
    					<th>College Name</th>
                        <th>Action</th>
    				</tr>
    			</thead>
    			<tbody>
                    <?php $i = 0; ?>
    				<?php foreach($college_list as $college): ?>
    					<tr>
                            <td>{{ ++$i }}</td>
    						<td>{{ $college->college_name }}</td>
    						<td>
                            <div style="display: inline-block;">
    							{{ link_to('college/' . $college->id . '/edit', '', ['class' => 'fa fa-pencil btn btn-primary btn-xs']) }}
                            </div>
                            <div style="display: inline-block;">
    							{!! Form::open(['method' => 'DELETE', 'action' => ['CollegeController@destroy', $college->id]]) !!}
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
            <div class= "pagination pull-right">
                {{ $college_list->links() }}
            </div>
    	</div>
    </div>
    </div>
    </section>
</section>
@endif
@endsection