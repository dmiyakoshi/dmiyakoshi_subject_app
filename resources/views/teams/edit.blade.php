@extends('layouts.main')

@section('title', 'チーム編集')

@section('content')
    <h1>チーム情報編集</h1>
    <form action="{{ route('teams.update', $team) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="name">チーム名</label>
            <input type="text" name="name" class="form-control col-md-6" value="{{ old('name', $team->name) }}">
        </div>
        <div class="form-group">
            <label for="company">親会社</label>
            <input type="text" name="company" class="form-control col-md-6" value="{{ old('company', $team->company) }}">
        </div>
        <div class="form-group">
            <label for="address">本拠地</label>
            <input type="text" name="address" class="form-control col-md-6" value="{{ old('address', $team->address) }}">
        </div>
        <div class="form-group">
            <label for="budget">予算(万円)</label>
            <input type="number" name="budget" class="form-control col-md-6" value="{{ old('budget', $team->budget) }}">
        </div>
        <input type="submit" value="更新" class="btn-info">
    </form>
@endsection
