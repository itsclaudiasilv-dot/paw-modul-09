<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Web Statis - Modul 09</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <span class="navbar-brand mb-0 h1">Static Page Clone</span>
        </div>
    </nav>

    <main class="container my-5">
        <div class="p-5 bg-white rounded shadow-sm custom-hero">
            <h1 class="display-6 fw-bold">Selamat Datang di Halaman Statis</h1>
            <p class="lead text-muted">
                Halaman ini diintegrasikan ke dalam Laravel 13 menggunakan Blade View, Route, dan styling di resources/sass/app.scss.
            </p>
            <a href="{{ url('/routing') }}" class="btn btn-primary">Kembali ke /routing</a>
        </div>
    </main>
</body>
</html>
