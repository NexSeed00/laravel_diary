@extends('layout')

@section('styles')
    @include('share.flatpickr.styles')
@endsection

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-6">
        <nav class="bg-light border mb-3">
          <div class="bg-dark text-light pl-3 pt-2 pr-3 pb-2 rounded-top d-flex justify-content-between">日記を書く</div>
          <div class="p-3 bg-danger">
            @if($errors->any())
              <div>
                @foreach($errors->all() as $message)
                  <p class="alert alert-danger">{{ $message }}</p>
                @endforeach
              </div>
            @endif
            <form action="{{ route('tasks.store') }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="title">タイトル</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" />
              </div>
              <div class="form-group">
                <label for="due_date">期限</label>
                <input type="text" class="form-control" name="due_date" id="due_date" value="{{ old('due_date') }}" />
              </div>
              <div class="text-right">
                <button type="submit" class="btn btn-primary">送信</button>
              </div>
            </form>
          </div>
        </nav>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  @include('share.flatpickr.scripts')
@endsection