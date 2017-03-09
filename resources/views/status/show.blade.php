@extends('partials.template')
@section('main')
<section id="main-content">
    <section class="wrapper site-min-height">
    		<table class="table table-striped table-advance table-hover">
    				<tr>
    					<th>Status</th>
                        <td>{{ $status->marital_status }}</td>
                    </tr>
    			</table>    						
@endsection