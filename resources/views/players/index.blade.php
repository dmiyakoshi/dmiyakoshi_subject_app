@extends('layouts.main')

@section('title', '選手一覧')

@section('content')
    @foreach ($players as $player)
        <div class="row mt-3 mb-5">
            <li class="list-unstyled border col-md-6">
                <a class="teamName" href="{{ route('players.show', $player->player_id) }}">{{ $player->name }}</a>
                <p>所属チーム {{ $player->team->name }}</p>
            </li>
        </div>
    @endforeach
@endsection
