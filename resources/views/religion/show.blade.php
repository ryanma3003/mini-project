@extends('partials.template')
@section('main')
<section id="main-content">
    <section class="wrapper site-min-height">
    		<table class="table table-striped table-advance table-hover">
    				<tr>
    					<th>Religion</th>
                        <td>{{ $religion->religion_name }}</td>
                    </tr>
    			</table>    						
@endsection