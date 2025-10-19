<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">GymCenter</a>
        <div>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{ route('trainers.index') }}" class="nav-link">Trainers</a></li>
                <li class="nav-item"><a href="{{ route('members.index') }}" class="nav-link">Members</a></li>
                <li class="nav-item"><a href="{{ route('sessions.index') }}" class="nav-link">Sessions</a></li>
            </ul>
        </div>
    </div>
</nav>
