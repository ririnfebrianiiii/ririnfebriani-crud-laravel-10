@extends('layouts.app')

@section('content')

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Website Posting</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f9fa;
      }

      .container {
        max-width: 1000px;
        text-align: left;
      }

      h1 {
        color: #343a40;
        font-size: 36px;
      }

      p {
        color: #6c757d;
        font-size: 18px;
        margin-top: 20px;
      }

      .btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        font-size: 18px;
        transition: background-color 0.3s;
      }

      .btn:hover {
        background-color: #e0e3e7;
      }
    </style>
  </head>

  <body>
    <div class="container"><br>
      <h1><b>Selamat Datang di Data Post !!</b></h1>
      <p>silahkan tekan tombol 'TAMBAH POST' jika ingin menambahkan data post dan tekan 'Lihat Data' jika ingin melihat
        data yang sudah ada
      </p>
      <a href="{{ route('posts.index') }}" class="btn bg-warning">Lihat Data</a>
      <a href="{{ route('posts.create') }}" class="btn"><i class="bi bi-plus-square-dotted"></i>
        TAMBAH POST</a>
    </div>
  </body>

  </html>
@endsection
