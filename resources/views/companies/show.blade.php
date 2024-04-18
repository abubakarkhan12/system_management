@extends('layouts.app')

@section('content')
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ $company->name }}</div>

                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Name</th>
                                <td>{{ $company->name }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $company->email }}</td>
                            </tr>
                            <tr>
                                <th>Logo</th>
                                <td><img src="{{ asset('storage/'.$company->logo) }}" alt="{{ $company->name }}" width="100"></td>
                            </tr>
                            <tr>
                                <th>Website</th>
                                <td>{{ $company->website }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <a href="{{ route('companies.index') }}" class="btn btn-primary btn-sm">Back</a>
                </div>
            </div>
        </div>
@endsection
