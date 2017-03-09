@extends('partials.template')
@section('main')
<section id="main-content">
    <section class="wrapper site-min-height">
    		<table class="table table-striped table-advance table-hover">
    				<tr>
    					<th>College Name</th>
                        <td>{{ $college->college_name }}</td>
                    </tr>
    			</table>    						
@endsection