@extends('layouts.app')

@section('content')

    <h1>id = {{ $Tasklist->id }} のTask詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $Tasklist->id }}</td>
        </tr>
        <tr>
            <th>ToDo</th>
            <td>{{ $Tasklist->content }}</td>
        </tr>
    </table>
    {{-- ToDo編集ページへのリンク --}}
    {!! link_to_route('Tasklists.edit', 'このTaskを編集', ['Tasklist' => $Tasklist->id], ['class' => 'btn btn-light']) !!}
    {{-- ToDo削除フォーム --}}
    {!! Form::model($Tasklist, ['route' => ['Tasklists.destroy', $Tasklist->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@endsection
