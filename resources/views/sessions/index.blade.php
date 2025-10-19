@extends('layouts.app')

@section('content')
<h2 class="mb-3">Workout Sessions</h2>
<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>Member</th>
            <th>Trainer</th>
            <th>Session Date</th>
            <th>Duration (mins)</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sessions as $session)
        <tr>
            <td>{{ $session->member->name }}</td>
            <td>{{ $session->trainer->name }}</td>
            <td>{{ $session->session_date }}</td>
            <td>{{ $session->duration }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
