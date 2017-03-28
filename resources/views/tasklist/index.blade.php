@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
      <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-lg-offset-3 col-lg-6">

    <h1>タスク一覧</h1>

    @if (count($tasklist) > 0)
<!--        <ul>
            @foreach ($tasklist as $task)
                <li>{!! link_to_route('tasklist.show', $task->id, ['id' => $task->id]) !!} : {{ $task->content }} > {{ $task->status }}</li>
            @endforeach

        </ul>
-->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タスク</th>
                    <th>ステータス</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasklist as $tasklists)
                    <tr>
                        <td>{!! link_to_route('tasklist.show', $tasklists->id, ['id' => $tasklists->id]) !!}</td>
                        <td>{{ $tasklists->content }}</td>
                        <td>{{ $tasklists->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </DIV>
    </DIV>

    @endif

     {!! link_to_route('tasklist.create', '新規taskの登録', null, ['class' => 'btn btn-primary']) !!}

@endsection