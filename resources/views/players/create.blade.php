@extends('layouts.main')

@section('title', '選手登録')

@section('content')
    <h1 class="fontChange">選手情報登録</h1>
    <form action="{{ route('players.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">名前</label>
            <input type="text" name="name" class="form-control col-md-6" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="team">所属チーム</label>
            <select name="team_id" id="team">
                @foreach ($teams as $team)
                    <option value="{{ $team->team_id }}" @if ($team->id == old('team')) selected @endif>{{ $team->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="height">身長</label>
            <input type="text" name="height" class="form-control col-md-6" value="{{ old('height') }}" step="0.1">
        </div>
        <div class="form-group">
            <label for="weight">体重</label>
            <input type="number" name="weight" class="form-control col-md-6" value="{{ old('weight') }}" step="0.1">
        </div>
        <div class="form-group">
            <label for="age">年齢</label>
            <input type="number" name="age" class="form-control col-md-6" value="{{ old('age') }}">
        </div>
        <div class="form-group">
            <label for="salary">年俸(万円)</label>
            <input type="number" name="salary" class="form-control col-md-6" value="{{ old('salary') }}">
        </div>
        <div class="form-group">
            <label for="year_enrolled">所属年数</label>
            <input type="number" name="year_enrolled" class="form-control col-md-6" value="{{ old('year_enrolled') }}">
        </div>
        <input type="submit" value="登録" class="btn-info">
    </form>
@endsection
