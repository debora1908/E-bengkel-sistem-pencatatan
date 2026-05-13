<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Bengkel | Premium System</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Montserrat:wght@700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary-color: #10b981; /* Emerald Green */
            --secondary-color: #064e3b; /* Dark Green */
            --bg-body: #f8fafc;
            --dark-surface: #1e293b; /* Slate Dark */
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-body);
            color: #1e293b;
        }

        h1, h2, h3, .navbar-brand {
            font-family: 'Montserrat', sans-serif;
        }

        /* Navbar Berwarna Gelap Mewah */
        .navbar {
            background-color: var(--dark-surface);
            padding: 18px 0;
            border-bottom: 3px solid var(--primary-color);
        }

        .navbar-brand {
            font-weight: 800;
            font-size: 1.4rem;
            letter-spacing: -0.5px;
            color: #fff !important;
        }

        .navbar-brand span {
            color: var(--primary-color);
        }

        .nav-link {
            color: rgba(255,255,255,0.8) !important;
            font-weight: 500;
            margin-left: 20px;
            transition: 0.3s;
        }

        .nav-link:hover {
            color: var(--primary-color) !important;
        }

        /* Container & Card */
        .main-content {
            padding-top: 50px;
        }

        .card {
            border: none;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0,0,0,0.03);
        }

        /* Tombol Custom Emerald */
        .btn-emerald {
            background-color: var(--primary-color);
            color: white;
            border-radius: 12px;
            padding: 10px 24px;
            font-weight: 600;
            border: none;
            transition: 0.3s;
        }

        .btn-emerald:hover {
            background-color: var(--secondary-color);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(16, 185, 129, 0.2);
        }

        /* Footer */
        footer {
            margin-top: 100px;
            padding: 30px;
            background: #fff;
            border-top: 1px solid #e2e8f0;
            font-size: 0.85rem;
            color: #64748b;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('kendaraan.index') }}">
                <i class="fas fa-bolt me-2"></i>E-<span>BENGKEL</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <i class="fas fa-bars text-white"></i>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kendaraan.index') }}">
                            <i class="fas fa-car-side me-1"></i> Daftar Servis
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container main-content">
        @yield('content')
    </div>

    <footer>
        <div class="container text-center">
            <p class="mb-0 fw-bold">&copy; 2026 Premium E-Bengkel System</p>
            <small>Designed for High Performance</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>