<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Toko Mukena</title>
  <link rel="shortcut icon" type="image/png" href="{{asset('images/logos/mukena.png')}}" />
  <link rel="stylesheet" href="{{asset('css/styles.min.css')}}" />
  
  <style>
    div.dataTables_filter input {
      float: left;
      width:100;
    }
  </style>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  
  <!-- Untuk sweet alert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Tambahan form validation pop up -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

</head>