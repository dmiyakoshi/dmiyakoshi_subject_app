@extends('layouts.main')

@section('title', '選手編集')

@section('content')
    <h1>選手情報編集</h1>
    <form action="{{ route('players.update', $player) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="name">名前</label>
            <input type="text" name="name" class="form-control col-md-6" value="{{ old('name', $player->name) }}">
        </div>
        <div class="form-group">
            <label for="team">所属チーム</label>
            <select name="team_id" id="team">
                @foreach ($teams as $team)
                    <option value="{{ $team->team_id }}"
                        @if ($team->team_id == $player->team_id selected else @endif>{{ $team->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="height">身長</label>
            <input type="text" name="height" class="form-control col-md-6" value="{{ old('height', $player->height) }}" step="0.1">
        </div>
        <div class="form-group">
            <label for="weight">体重</label>
            <input type="number" name="weight" class="form-control col-md-6" value="{{ old('weight', $player->weight) }}" step="0.1">
        </div>
        <div class="form-group">
            <label for="age">年齢</label>
            <input type="number" name="age" class="form-control col-md-6" value="{{ old('age', $player->age) }}">
        </div>
        <div class="form-group">
            <label for="salary">年俸(万円)</label>
            <input type="number" name="salary" class="form-control col-md-6" value="{{ old('salary', $player->salary) }}">
        </div>
        <div class="form-group">
            <label for="year_enrolled">所属年数</label>
            <input type="number" name="year_enrolled" class="form-control col-md-6" value="{{ old('year_enrolled', $player->year_enrolled) }}">
        </div>
        <input type="submit" value="更新" class="btn-info">
    </form>
@endsection
