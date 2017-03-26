@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<h1>id = {{ $tasklist->id }} タスク詳細ページ</h1>
<P>{{ $tasklist->content }}</P>

    {!! link_to_route('tasklist.edit', 'このタスクを編集', ['id' => $taskulist->id]) !!}
 
    {!! Form::model($tasklist, ['route' => ['tasklist.destroy', $tasklist->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}

@endsection