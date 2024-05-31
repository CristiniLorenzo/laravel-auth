@extends('layouts.admin')

@section('content')
    <h1>Progetti</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Client Name</th>
                <th>Slug</th>
                <th>Created at</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->client_name }}</td>
                    <td>{{ $project->slug }}</td>
                    <td>{{ $project->created_at }}</td>

                </tr>
            @endforeach
            
        </tbody>
    </table>
@endsection