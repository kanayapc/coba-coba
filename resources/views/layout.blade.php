<!DOCTYPE html>
<html lang="en">
<head>
    <!-- masukkan header dari layouts -> header.blade -->
    @include('layouts/header')
</head>
<body>
    Selamat Datang {{ $nama }}
    <hr>
    
    <!-- Masukkan untuk template konten -->
    @include('layouts/body')
    
    <hr>
    <!-- masukkan footer dari layouts -> footer.blade -->
    @include('layouts/footer')
</body>
</html>