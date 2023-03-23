<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>予定表</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ secure_asset('css/adminlte.min.css') }}">
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Todo</h1>


            <!-- この部分を編集しましょう！ -->
            <small>〇〇〇〇-〇〇-〇〇</small>


          </div>
          <div class="col-sm-6">



            {{-- 学習の後半で編集する部分です！序盤は無視してください。
            <div class="float-sm-right">
              @guest
              @if (Route::has('login'))
              <a class="nav-link" href="{{ route('login') }}">ログイン</a>
              @endif
              @else
              {{ Auth::user()->name }}さん
              <a class="pl-2" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                ログアウト
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
              @endguest
            </div>
            --}}
            

            
          </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">



      {{-- 教科書終盤でこのコメントを削除しましょう！ 
      @if(Auth::check())
      --}}



      <div class="card">
        <div class="card-body p-0">

          <table class="table table-striped projects">
            <thead>
              <tr>
                <th style="width: 20%">タイトル</th>
                <th>作成日</th>
              </tr>
            </thead>
            <tbody>





              {{-- この部分のコメントを削除しましょう！ 
              @foreach($todos as $todo)

              <tr>
                <td>{{ $todo->title }}</td>
                <td>{{ $todo->created_at }}</td>
              </tr>

              @endforeach
              --}}




            </tbody>
          </table>
        </div>
      </div>




      {{-- 教科書終盤でこのコメントを削除しましょう！ 
      @else
      <p class="m-4">ようこそ！ログインしてください。</p>
      @endif
      --}}




    </section>
    <!-- /.content -->

    <footer class="p-2">
      <div class="float-right d-none d-sm-block">
        Powered by AdminLTE
      </div>
      <strong>Copyright &copy; <a href="https://codecamp.jp">CodeCamp</a>.</strong> All rights reserved.
    </footer>

    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <!-- Bootstrap 4 -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <!-- AdminLTE App -->
  <script src="{{ secure_asset('js/adminlte.min.js') }}"></script>
</body>

</html>