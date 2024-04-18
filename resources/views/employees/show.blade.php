@extends('layouts.app')

@section('content')

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Employee Details</div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>ID:</th>
                                <td>{{ $employee->id }}</td>
                            </tr>
                            <tr>
                                <th>Name:</th>
                                <td>{{ $employee->first_name }} {{ $employee->last_name }}</td>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <td>{{ $employee->email }}</td>
                            </tr>
                            <tr>
                                <th>Phone:</th>
                                <td>{{ $employee->phone }}</td>
                            </tr>
                            <tr>
                                <th>Company:</th>
                                <td>{{ $employee->company->name }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <a href="{{ route('employees.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
@endsection
