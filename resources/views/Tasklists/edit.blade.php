@extends('layouts.app')

@section('content')

    <h1>id: {{ $Tasklist->id }} のToDo編集ページ</h1>

    <div class="row">
        <div class="col-6">
            {!! Form::model($Tasklist, ['route' => ['Tasklists.update', $Tasklist->id], 'method' => 'put']) !!}

                <div class="form-group">
                    {!! Form::label('content', 'ToDo:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>

@endsection