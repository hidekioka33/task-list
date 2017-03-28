@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h1>tasl 新規作成ページ</h1>

<!--    {!! Form::model($tasklist, ['route' => 'tasklist.store']) !!}

        {!! Form::label('content', 'タスク名:') !!}
        {!! Form::text('content') !!}

        {!! Form::label('status', 'status:') !!}
        {!! Form::text('status') !!}
 
        {!! Form::submit('登録') !!}

    {!! Form::close() !!}
-->

    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-lg-offset-3 col-lg-6">
                
            {!! Form::model($tasklist, ['route' => 'tasklist.store']) !!}
            
                <div class="form-group">
                    {!! Form::label('content', 'タスク:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                    
                <div class="form-group">
                    {!! Form::label('status', 'ステータス:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
            
       </div>
    </div>

@endsection