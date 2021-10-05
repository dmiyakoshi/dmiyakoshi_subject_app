@extends('layouts.main')

@section('title', 'チーム詳細')

@section('content')
    <h1>チーム情報</h1>
    <div class="row mt-3">
        <table class="table-bordered mb-5 mt-3">
            <div>
                <img src="{{ url($team->image) }}" class="square-img2 mt-3">
            </div>
            <colgroup span="1" style="width:200px;background-color:#efefef;"></colgroup>
            <tbody>
                <tr>
                    <th>チーム名</th>
                    <td>
                        <p>{{ $team->name }}</p>
                    </td>
                </tr>
                <tr>
                    <th>本拠地</th>
                    <td>{{ $team->address }}</td>
                </tr>
                <tr>
                    <th>親会社</th>
                    <td>{{ $team->company }}</td>
                </tr>
                <tr>
                    <th>優勝回数</th>
                    <td>{{ $team->campion }}</td>
                </tr>
                <tr>
                    <th>予算</th>
                    <td>{{ $team->budget }}万円</td>
                </tr>
            </tbody>
        </table>
    </div>
    <a href="{{ route('teams.index') }}">戻る</a>
    <button type="button" class="btn-secondary ml-2" onclick="location.href='{{ route('teams.edit', $team) }}'">編集</button>
@endsection
