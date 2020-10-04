@extends('layout')

@section('content')
<div class="container">
    <div class="row">
      <div class="col col-md-4">
          <nav class="panel panel-default">
            <div class="panel-heading">プロフィール画像</div>
              <br>
                <div class="panel-body">
                  @if ($errors->any())
                  <div class="alert alert-danger">
                  <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                  </ul>
                  </div>
                  @endif
                  <figure>
                      <?php
                      if (Storage::disk('public')->exists('/storage/images/'))
                      {}
                      print '<img src="/storage/images/'.Auth::user()->id.'.jpg" alt=" " width="330" height="150">'; 
                      ?>
                  </figure>
                  <br>
                  <form method="POST" action="{{ url('profile') }}" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <input type="file" name="photo">
                  <br>
                  <input type="submit" value="追加する">
                  </form>
                  <br>
                  <a href="{{url('delete')}}" name="delete">削除する</a>
                  </div>
                  <br>
                  <div class="panel-heading">案件フォルダ</div> 
                  <div class="panel-body">
                  <a href="{{ route('folders.create') }}" class="btn btn-default btn-block">
                  案件フォルダを追加する
                  </a>
                 </div>
                  <div class="list-group">
                  @foreach($folders as $folder)
                  <a
                  href="{{ route('tasks.index', ['folder' => $folder->id]) }}"
                  class="list-group-item {{ $current_folder_id === $folder->id ? 'active' : '' }}"
                  >
                  {{ $folder->title }}
                  </a>
                  @endforeach
                  </div>
                  </nav>
                  <a href="{{ route('folders.delete', ['folder' => $current_folder_id]) }}">
                  選択中のフォルダを削除する
                  </a> 
                  </div>
                  <div class="column col-md-8">
                  <div class="panel panel-default">
                  <div class="panel-heading">タスク</div>
                  <div class="panel-body">
                  <div class="text-right">
                  <a href="{{ route('tasks.create', ['folder' => $current_folder_id]) }}" class="btn btn-default btn-block">
                 タスクを追加する
                  </a>
            </div>
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
                <td>
                {{ $task->formatted_due_date }}
                </td>
                <td>
                <a href="{{ route('tasks.edit', ['folder' => $current_folder_id, 'task' => $task->id]) }}">
                    編集する
                  </a>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div><div class="text-right">{{ $tasks->links() }}</div>
    </div>
  </div>
@endsection