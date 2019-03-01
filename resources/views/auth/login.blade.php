@extends('layout')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-6">
        <nav class="bg-light border mb-3">
          <div class="bg-dark text-light pl-3 pt-2 pb-2 rounded-top">ログイン</div>
          <div class="p-3">
            @if($errors->any())
              <div class="alert alert-danger">
                @foreach($errors->all() as $message)
                  <p>{{ $message }}</p>
                @endforeach
              </div>
            @endif
            <form action="{{ route('login') }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" />
              </div>
              <div class="form-group">
                <label for="password">パスワード</label>
                <input type="password" class="form-control" id="password" name="password" />
              </div>
              <div class="text-right">
                <button type="submit" class="btn btn-primary">送信</button>
              </div>
            </form>
          </div>
        </nav>
        <div class="text-center">
          <a href="{{ route('password.request') }}">パスワードリセット</a>
        </div>
      </div>
    </div>
  </div>
@endsection