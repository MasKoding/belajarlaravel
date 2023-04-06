<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    {{-- fungsi asset() untuk memanggil folder public --}}
   <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ url('blog/index') }}">Laravel Blog</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/blog/index">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/blog/tentang">Tentang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/blog/kontak">Kontak</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav> 
        {{-- isi content dinamis --}}
        @yield('content')

  <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
  </body>
</html>