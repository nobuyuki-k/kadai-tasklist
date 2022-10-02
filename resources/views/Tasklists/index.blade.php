@extends('layouts.app')

@section('content')

    <h1>Task一覧</h1>

    @if (count($Tasklists) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Task</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Tasklists as $task)
                <tr>
                    <td>{!! link_to_route('Tasklists.show', $task->id, ['Tasklist' => $task->id]) !!}</td>
                    <td>{{ $task->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    {{-- ToDo作成ページへのリンク --}}
    {!! link_to_route('Tasklists.create', '新規Taskの投稿', [], ['class' => 'btn btn-primary']) !!}

@endsection

