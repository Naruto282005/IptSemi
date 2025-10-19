@extends('layouts.app')

@section('content')
<h2 class="mb-3">Trainers List</h2>
<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>Name</th>
            <th>Specialization</th>
            <th>Experience (Years)</th>
            <th>Total Sessions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($trainers as $trainer)
        <tr>
            <td>{{ $trainer->name }}</td>
            <td>{{ $trainer->specialization }}</td>
            <td>{{ $trainer->experience_years }}</td>
            <td>{{ $trainer->sessions_count }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
