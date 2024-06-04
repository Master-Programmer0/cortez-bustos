@extends('layouts.app')

@section('content')
<div class="container">

    

    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><b>Student List</b></h5>
                    <button type="submit" class="btn btn-primary"  style="margin-left: 90%; margin-top: -5%">
                        <a style="color: white" href="{{ route('student.index') }}">ADD</a>
                    </button>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Middle Name</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">State</th>
                                    <th scope="col">City</th>
                                    <th scope="col">ZIP</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Birthday</th>
                                    <th scope="col">Hire Date</th>
                                    <th scope="col">Department</th>
                                    <th scope="col">Division</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $key => $employee)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $employee->first_name }}</td>
                                    <td>{{ $employee->last_name }}</td>
                                    <td>{{ $employee->middle_name }}</td>
                                    <td>{{ $employee->address }}</td>
                                    <td>{{ $employee->country }}</td>
                                    <td>{{ $employee->state }}</td>
                                    <td>{{ $employee->city }}</td>
                                    <td>{{ $employee->zip }}</td>
                                    <td>{{ $employee->age }}</td>
                                    <td>{{ $employee->birthday }}</td>
                                    <td>{{ $employee->hire_date }}</td>
                                    <td>{{ $employee->department }}</td>
                                    <td>{{ $employee->division }}</td>
                                    <td>
                                        <div class="btn-group-vertical" role="group" aria-label="Employee Actions">
                                            <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary btn-sm btn-block">
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                            </a>
                                            
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('css')
<style>
    .form-area {
        padding: 20px;
        margin-top: 20px;
        background-color: #FFFF00;
    }
    .bi-trash-fill {
        color: red;
        font-size: 18px;
    }
    .bi-pencil {
        color: green;
        font-size: 18px;
        margin-left: 20px;
    }
    .btn-group-vertical .btn {
        min-width: 90%; /* Ensure 90% of the width */
        height: auto; /* Ensure same height */
    }
</style>
@endpush