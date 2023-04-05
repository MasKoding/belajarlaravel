<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Siswa</title>
</head>
<body>
    {{-- jika nama ada tampilkan nama selainnya tampilkan 'Semua' --}}
    @if ($nama)
      <h1>Hello, Selamat Datang  {{ $nama }} </h1> 
    @else
      <h1>Hello, Selamat Datang  Semua </h1> 
    @endif
       
           
       

    </body>
</html>