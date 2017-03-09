@extends('partials.template')
@section('main')
<section id="main-content">
    <section class="wrapper site-min-height">
    		<table class="table table-striped table-advance table-hover">
    				<tr>
    					<th>Degree</th>
                        <td>{{ $degree->lastest_degree }}</td>
                    </tr>
    			</table>    						
@endsection