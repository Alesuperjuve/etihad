<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pesan gagal upload - File PDF tidak memenuhi syarat metadata.">
    <meta name="author" content="Nama Anda">
    <title>Pesan Gagal Upload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .btn-back {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="container text-center">
        <h2 class="mb-3 text-danger">Gagal Upload</h2>
        <p class="mb-4">File PDF yang diunggah tidak memenuhi syarat metadata.</p>
        <a href="{{ url()->previous() }}" class="btn btn-primary btn-back">Kembali</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
