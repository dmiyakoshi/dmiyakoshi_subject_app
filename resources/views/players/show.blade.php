@extends('layouts.main')

@section('title', '選手詳細')

@section('content')
    <h1 class="fontChange">選手情報</h1>
    <div class="row mt-3">
        <table class="table-bordered mb-5 mt-3">
            <div>
                <img src="{{ url($player->image) }}" class="square-img3 mt-3">
            </div>
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
                    <th>所属チーム</th>
                    <td>{{ $player->team->name }}</td>
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
    </div>
    <div class="buttonClass">
        <a href="{{ route('players.index') }}">戻る</a>
    </div>
    <div class="buttonClass">
        <button type="button" class="btn-secondary"
            onclick="location.href='{{ route('players.edit', $player) }}'">編集</button>
    </div>
    <div class="buttonClass">
        <form action="{{ route('players.destroy', $player) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-warning" onclick="if(!confirm('本当に削除しますか？')){return false}">削除する</button>
        </form>
    </div>
@endsection
