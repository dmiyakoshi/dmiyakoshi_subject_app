@extends('layouts.main')

@section('title', 'チーム登録')

@section('content')
    <h1>チーム情報登録</h1>
    <form action="{{ route('teams.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">チーム名</label>
            <input type="text" name="name" class="form-control col-md-6" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="company">親会社</label>
            <input type="text" name="company" class="form-control col-md-6" value="{{ old('company') }}">
        </div>
        <div class="form-group">
            <label for="address">本拠地</label>
            <input type="text" name="address" class="form-control col-md-6" value="{{ old('address') }}">
        </div>
        <div class="form-group">
            <label for="budget">予算(万円)</label>
            <input type="number" name="budget" class="form-control col-md-6" value="{{ old('budget') }}">
        </div>
        <input type="submit" value="登録" class="btn-info">
    </form>
@endsection
