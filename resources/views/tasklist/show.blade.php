@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-lg-offset-3 col-lg-6">

<h1>id = {{ $tasklist->id }} タスク詳細ページ</h1>
<!--<P>{{ $tasklist->content }}</P>

    {!! link_to_route('tasklist.edit', 'このタスクを編集', ['id' => $tasklist->id]) !!}
 
    {!! Form::model($tasklist, ['route' => ['tasklist.destroy', $tasklist->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}
-->

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $tasklist->id }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $tasklist->content }}</td>
        </tr>
        <tr>
            <th>STATUS</th>
            <td>{{ $tasklist->status }}</td>
        </tr>
    </table>
    </DIV>
</DIV>
    
   {!! link_to_route('tasklist.edit', 'このtaskを編集', ['id' => $tasklist->id], ['class' => 'btn btn-default']) !!}

    {!! Form::model($tasklist, ['route' => ['tasklist.destroy', $tasklist->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}


@endsection