<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand fontChange" href="{{ route('teams.index') }}">SPORTNAVI</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active fontChange">
                <a class="nav-link" href="{{ route('teams.index') }}">Team <span
                        class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active fontChange">
                <a class="nav-link" href="{{ route('players.index') }}">Player</a>
            </li>
        </ul>
    </div>
</nav>
