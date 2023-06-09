<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('judul_halaman')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</head>
<body>

@include('template.template_front.partials.headers')
@include('template.template_front.partials.carousel')

<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 border border-2">
            {{-- Bagian konten --}}
            <h1>Ini Halaman @yield('nama_halaman')</h1>
            @yield('konten')
        </div>

        <div class="col-md-4 border border-2">
            <h1>Ini Post Terbaru</h1>
            @yield('nama_halaman')
        </div>
    </div>
 </div>


</div>



@include('template.template_front.partials.footer')
</body>
</html>
