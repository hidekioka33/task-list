@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h1>tasl 新規作成ページ</h1>

    {!! Form::model($tasklist, ['route' => 'tasklist.store']) !!}

        {!! Form::label('content', 'タスク名:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('登録') !!}

    {!! Form::close() !!}



@endsection