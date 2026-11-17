<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente — BarberPro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family:'Poppins','Segoe UI',sans-serif; background:#0a0a0a; min-height:100vh; display:flex; align-items:center; padding:1rem; }
        .login-card { background:#111; border:1px solid rgba(212,175,55,.35); border-radius:20px; box-shadow:0 20px 50px rgba(0,0,0,.6); }
        .login-card .card-header-custom { background:#000; color:#d4af37; border-bottom:2px solid #d4af37; border-radius:20px 20px 0 0; padding:1rem 1.4rem; font-weight:700; font-size:1.05rem; }
        .login-card .card-body { padding:2rem; }
        .form-label { color:#ccc; font-size:.85rem; font-weight:600; }
        .form-control { background:#1a1a1a; border:1px solid #333; color:#fff; border-radius:50px; padding:.7rem 1.1rem; }
        .form-control:focus { background:#1a1a1a; color:#fff; border-color:#d4af37; box-shadow:0 0 0 .2rem rgba(212,175,55,.2); }
        .form-check-label { color:#ccc; font-size:.85rem; }
        .btn-gold { background:linear-gradient(135deg,#d4af37 0%,#c5a028 100%); color:#000; border:none; border-radius:50px; font-weight:700; padding:.7rem 1.2rem; }
        .btn-gold:hover { background:#e5c454; color:#111; }
        .brand-badge { display:inline-flex; align-items:center; gap:.5rem; color:#d4af37; font-weight:800; font-size:1.6rem; text-decoration:none; }
        .alert-soft { background:rgba(220,53,69,.12); border:1px solid rgba(220,53,69,.4); color:#f8b6bc; border-radius:12px; font-size:.85rem; }
        .role-pill { display:inline-block; background:rgba(212,175,55,.12); border:1px solid #d4af37; color:#d4af37; font-size:.72rem; font-weight:700; padding:4px 12px; border-radius:50px; letter-spacing:.5px; text-transform:uppercase; }
        @media (max-width: 575.98px) {
            .login-card .card-body { padding:1.4rem; }
            .brand-badge { font-size:1.3rem; }
        }
    </style>
</head>
<body>
<div class="container" style="max-width:440px;">
    <div class="text-center mb-4">
        <a href="#" class="brand-badge"><i class="fas fa-cut"></i> BarberPro</a>
        <div class="mt-2"><span class="role-pill">Área do Cliente</span></div>
    </div>

    <div class="login-card">
        <div class="card-header-custom"><i class="fas fa-user"></i> Acesse sua conta</div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert-soft p-3 mb-3">
                    @foreach ($errors->all() as $error) <div><i class="fas fa-circle-exclamation me-1"></i> {{ $error }}</div> @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('customer.login.attempt') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">E-mail</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" required autofocus>
                </div>
                <div class="mb-3">
                    <label class="form-label">Senha</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-check mb-3">
                    <input type="checkbox" name="remember" value="1" class="form-check-input" id="remember">
                    <label class="form-check-label" for="remember">Lembrar-me</label>
                </div>
                <button type="submit" class="btn btn-gold w-100"><i class="fas fa-right-to-bracket me-1"></i> Entrar</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>