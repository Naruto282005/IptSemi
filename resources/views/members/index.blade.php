@extends('layouts.app')

@section('content')
<h2 class="mb-3">Members List</h2>
<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Contact</th>
            <th>Membership Type</th>
            <th>Total Sessions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($members as $member)
        <tr>
            <td>{{ $member->name }}</td>
            <td>{{ $member->age }}</td>
            <td>{{ $member->contact_number }}</td>
            <td>{{ $member->membership_type }}</td>
            <td>{{ $member->sessions_count }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
