@extends('layouts.main')

@section('title', 'チーム一覧')

@section('content')
    <h1>チーム一覧</h1>
    @foreach ($teams as $team)
        <div class="row mt-3 mb-5">
            <div>
                <img src="{{ url($team->image) }}" class="square-img">
            </div>
            <li class="list-unstyled border col-md-6">
                <a class="teamName" href="{{ route('teams.show', $team->team_id) }}">{{ $team->name }}</a>
                <p>本拠地 {{ $team->address }}</p>
            </li>
        </div>
    @endforeach
    <button type="button" class="btn-secondary ml-2" onclick="location.href='{{ route('teams.create') }}'">新規登録</button>
@endsection
