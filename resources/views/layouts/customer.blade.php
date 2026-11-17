<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Cliente') — BarberPro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family:'Poppins','Segoe UI',sans-serif; background:#0a0a0a; color:#e0e0e0; min-height:100vh; }
        .navbar { background:rgba(0,0,0,.95); border-bottom:2px solid #d4af37; padding:.8rem 0; }
        .navbar-brand { color:#d4af37 !important; font-weight:800; font-size:1.4rem; white-space:nowrap; }
        .btn-outline-gold { border:2px solid #d4af37; color:#d4af37; background:transparent; border-radius:50px; font-weight:600; padding:.4rem 1rem; font-size:.85rem; }
        .btn-outline-gold:hover { background:#d4af37; color:#000; }
        .role-badge { background:rgba(212,175,55,.12); border:1px solid #d4af37; color:#d4af37; font-size:.68rem; font-weight:700; padding:3px 10px; border-radius:50px; text-transform:uppercase; letter-spacing:.5px; white-space:nowrap; }
        .navbar-user { color:#aaa; font-size:.8rem; white-space:nowrap; }
        main { padding-top:1.5rem; padding-bottom:2rem; }
        @media (max-width: 575.98px) {
            .navbar-brand { font-size:1.1rem; }
            .navbar-user { display:none; }
            .role-badge { font-size:.6rem; padding:2px 8px; }
            main { padding-top:1rem; }
        }
    </style>
</head>
<body>
<nav class="navbar">
    <div class="container d-flex flex-wrap align-items-center gap-2">
        <a class="navbar-brand" href="{{ route('customer.dashboard') }}"><i class="fas fa-cut"></i> BarberPro</a>
        <span class="role-badge">Cliente</span>
        <div class="ms-auto d-flex align-items-center gap-2">
            <span class="navbar-user"><i class="fas fa-user me-1"></i> {{ auth('customer')->user()->name ?? '' }}</span>
            <form method="POST" action="{{ route('customer.logout') }}" class="m-0">
                @csrf
                <button class="btn btn-outline-gold btn-sm"><i class="fas fa-right-from-bracket me-1"></i> Sair</button>
            </form>
        </div>
    </div>
</nav>
<main class="container">
    @yield('content')
</main>
</body>
</html>