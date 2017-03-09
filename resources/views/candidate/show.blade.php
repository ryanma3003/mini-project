@extends('partials.template')
@section('main')
<section id="main-content">
    <section class="wrapper site-min-height">
    <div class="row mt">
        <div class="col-lg-12">
            <div class="form-panel">
            <h2>Candidate Detail</h2>
    		<table class="table table-striped table-advance table-hover">
    				<tr>
    					<th>Name</th>
                        <td>{{ $candidate->name }}</td>
                    </tr>
                    <tr>
    					<th>Address</th>
                        <td>{{ $candidate->address }}</td>
                    </tr>
                    <tr>
    					<th>Birthday</th>
                        <td>{{ $candidate->birthday->format('d-m-Y') }}</td>
                    </tr>
                    <tr>
    					<th>Gender</th>
                        <td>{{ $candidate->jenis_kelamin }}</td>
                    </tr>
                    <tr>
    					<th>Salary</th>
                        <td>{{ $candidate->salary }}</td>
                    </tr>
                    <tr>
    					<th>College</th>
                        <td>{{ $candidate->college->college_name }}</td>
                    </tr>
                    <tr>
    					<th>Degree</th>
                        <td>{{ $candidate->degree->lastest_degree }}</td>
                    </tr>
                    <tr>
    					<th>Thesis</th>
                        <td>{{ $candidate->thesis }}</td>
                    </tr>
                    <tr>
    					<th>Status</th>
                        <td>{{ $candidate->status->marital_status }}</td>
                    </tr>
                    <tr>
    					<th>Religion</th>
                        <td>{{ $candidate->religion->religion_name }}</td>
                    </tr>
                    <tr>
    					<th>Phone</th>
                        <td>{{ $candidate->phone_number }}</td>
                    </tr>
    			</table>  
                </div>
            </div>
        </div>  						
@endsection