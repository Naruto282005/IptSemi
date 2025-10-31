@extends('layouts.app')

@section('content')
<div class="text-center py-5" style="min-height: 80vh; display: flex; flex-direction: column; justify-content: center; align-items: center;">
    <h1 class="fw-bold mb-3">Welcome to Gym Management System</h1>
    <img src="{{ asset('images/banner.png') }}" alt="Gym Banner" class="img-fluid mb-4" style="max-width: 500px; border-radius: 10px;">
    <p class="lead text-muted">Stay strong, stay healthy, and stay consistent!</p>
</div>
@endsection
