@extends('layouts.main')

@section('title', 'チーム詳細')

@section('content')
    <h1 class="fontChange">チーム情報</h1>
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
    <h2 class="fontChange">所属選手</h2>
    <div class="row">
        @foreach ($players as $player)
            <table class="table-bordered mb-5 mt-3 mr-3 col-md-4">
                <div>
                    <img src="{{ url($player->image) }}" class="square-img5 mt-3">
                </div>
                <colgroup span="1" style="width:200px;background-color:#efefef;"></colgroup>
                <tbody>
                    <tr>
                        <th>名前</th>
                        <td>
                            <p>{{ $player->name }}</p>
                        </td>
                    </tr>
                    <tr>
                        <th>身長</th>
                        <td>{{ $player->height }}</td>
                    </tr>
                    <tr>
                        <th>体重</th>
                        <td>{{ $player->weight }}</td>
                    </tr>
                    <tr>
                        <th>年齢</th>
                        <td>{{ $player->age }}</td>
                    </tr>
                    <tr>
                        <th>年俸</th>
                        <td>{{ $player->salary }}万円</td>
                    </tr>
                    <tr>
                        <th>所属年数</th>
                        <td>{{ $player->year_enrolled }}</td>
                    </tr>
                </tbody>
            </table>
        @endforeach
    </div>

    <div class="buttonClass">
        <a href="{{ route('teams.index') }}">戻る</a>
    </div>
    <div class="buttonClass">
        <button type="button" class="btn-secondary"
            onclick="location.href='{{ route('teams.edit', $team) }}'">編集</button>
    </div>
    <div class="buttonClass">
        <form action="{{ route('teams.destroy', $team) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-warning" onclick="if(!confirm('本当に削除しますか？')){return false}">削除する
            </button>
        </form>
    </div>
@endsection
