<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes App - Tampilan Awal</title>

    {{-- Bootstrap CSS dari CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body, html {
            margin: 0;
            padding: 0;
            overflow: hidden;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        }
        .note-item:hover {
            background-color: rgba(0, 0, 0, 0.05);
        }
    </style>
</head>
<body>
    <div class="container-fluid vh-100">
        <div class="row h-100">
            {{-- Sidebar kiri --}}
            <div class="col-md-3 bg-light border-end p-0 d-flex flex-column">
                <div class="p-3 border-bottom bg-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 fw-bold">📝 Catatan Saya</h5>
                    <button class="btn btn-primary btn-sm">
                        <i class="bi bi-plus-lg"></i> Baru
                    </button>
                </div>

                {{-- List dummy --}}
                <div class="flex-grow-1 overflow-auto">
                    <div class="note-item p-3 border-bottom" style="cursor:pointer;">
                        <h6 class="mb-1 fw-bold text-truncate">Judul Catatan Contoh</h6>
                        <p class="mb-1 text-muted small text-truncate">Isi singkat catatan...</p>
                        <small class="text-muted">1 jam yang lalu</small>
                    </div>
                    <div class="note-item p-3 border-bottom" style="cursor:pointer;">
                        <h6 class="mb-1 fw-bold text-truncate">Catatan Favorit ⭐</h6>
                        <p class="mb-1 text-muted small text-truncate">Ini contoh catatan favorit...</p>
                        <small class="text-muted">Kemarin</small>
                    </div>
                </div>

                <div class="p-2 border-top bg-white text-center">
                    <small class="text-muted">Total: 2 catatan</small>
                </div>
            </div>

            {{-- Area utama --}}
            <div class="col-md-9 p-0 d-flex flex-column">
                <div class="p-3 border-bottom bg-white d-flex justify-content-between align-items-center">
                    <button class="btn btn-outline-warning btn-sm">
                        ⭐ Tandai Favorit
                    </button>
                    <button class="btn btn-outline-danger btn-sm">
                        <i class="bi bi-trash"></i> Hapus
                    </button>
                </div>

                <div class="flex-grow-1 overflow-auto p-4 bg-white">
                    <input type="text"
                           class="form-control form-control-lg border-0 fw-bold ps-0 mb-4"
                           placeholder="Judul Catatan"
                           style="font-size:2rem;">
                    <textarea class="form-control border-0 ps-0"
                              rows="25"
                              placeholder="Mulai menulis catatan Anda di sini..."
                              style="resize:none; font-size:1.1rem; line-height:1.8;"></textarea>
                </div>
            </div>
        </div>
    </div>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
