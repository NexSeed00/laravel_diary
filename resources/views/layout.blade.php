<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ToDo App</title>
  @yield('styles')
  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
<header class="mb-5">
  <nav class="bg-dark nav pl-5 pr-5 pt-2 pb-2 justify-content-between">
    <a class="navbar-brand text-light" href="/">ToDo App</a>
    <div class="navbar-brand">
      @if(Auth::check())
        <span class="text-light">ようこそ, {{ Auth::user()->name }}さん</span>
        ｜
        <a href="#" id="logout" class="text-light">ログアウト</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      @else
        <a class="text-light" href="{{ route('login') }}">ログイン</a>
        ｜
        <a class="text-light" href="{{ route('register') }}">会員登録</a>
      @endif
    </div>
  </nav>
</header>
<main>
  @yield('content')
</main>
@if(Auth::check())
  <script>
    document.getElementById('logout').addEventListener('click', function(event) {
      event.preventDefault();
      document.getElementById('logout-form').submit();
    });
  </script>
@endif
@yield('scripts')
</body>
</html>