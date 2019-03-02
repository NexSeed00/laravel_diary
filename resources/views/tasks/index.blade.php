@extends('layout')

<!DOCTYPE html>
<html lang="ja">
<body>
@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-6">
        <div class="bg-light border mb-3">
        <div class="bg-dark text-light pl-3 pt-2 pr-3 pb-2 rounded-top d-flex justify-content-between">
          <div>Diary</div>
          <a href="{{ route('tasks.create') }}" class="text-right text-light">追加</a>
        </div>
        <table class="table">
            <thead>
            <tr>
            <th>タイトル</th>
            <th>状態</th>
            <th>期限</th>
            <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($tasks as $task)
                <tr>
                <td>{{ $task->title }}</td>
                <td>
                    <span class="label {{ $task->status_class }}">{{ $task->status_label }}</span>
                </td>
                <td>{{ $task->formatted_due_date }}</td>
                <td><a href="{{ route('tasks.edit', ['task_id' => $task->id]) }}">編集</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
      </div>
    </div>
  </div>
@endsection
