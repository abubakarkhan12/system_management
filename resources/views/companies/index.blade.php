@extends('layouts.app')

@section('content')
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Companies</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Logo</th>
                                <th>Website</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($companies as $company)
                                <tr>
                                    <td>{{ $company->name }}</td>
                                    <td>{{ $company->email }}</td>
                                    <td><img src="{{ asset('storage/app/public/' . $company->logo) }}" alt="{{ $company->name }}" width="100"></td>                                    <td>{{ $company->website }}</td>
                                    <td>
                                        <a href="{{ route('companies.show', $company->id) }}" class="btn btn-primary btn-sm">Show</a>
                                        <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('companies.destroy', $company->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this company?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $companies->links() }}

                    <a href="{{ route('companies.create') }}" class="btn btn-primary btn-sm">Create Company</a>
                </div>
            </div>
        </div>
@endsection
