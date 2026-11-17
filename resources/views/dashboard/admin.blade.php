@extends('layouts.admin')
@section('title', 'Dashboard Admin')

@section('content')
    <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2 mb-4">
        <div>
            <h2 class="text-warning fw-bold mb-1 h4">Dashboard do Administrador</h2>
            <p class="text-muted mb-0 small">Visão geral da barbearia</p>
        </div>
        <span class="role-badge">Painel Admin</span>
    </div>

    <div class="row g-3">
        <div class="col-12 col-md-4">
            <div class="p-3 p-md-4 rounded-4 h-100" style="background:#111; border:1px solid rgba(212,175,55,.25);">
                <div class="text-warning mb-2"><i class="fas fa-scissors fa-2x"></i></div>
                <h5 class="fw-bold">Barbeiros</h5>
                <p class="text-muted small mb-0">Gestão de profissionais em breve.</p>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="p-3 p-md-4 rounded-4 h-100" style="background:#111; border:1px solid rgba(212,175,55,.25);">
                <div class="text-warning mb-2"><i class="fas fa-calendar-check fa-2x"></i></div>
                <h5 class="fw-bold">Agendamentos</h5>
                <p class="text-muted small mb-0">Lista de agendamentos em breve.</p>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="p-3 p-md-4 rounded-4 h-100" style="background:#111; border:1px solid rgba(212,175,55,.25);">
                <div class="text-warning mb-2"><i class="fas fa-money-bill-wave fa-2x"></i></div>
                <h5 class="fw-bold">Pagamentos</h5>
                <p class="text-muted small mb-0">Registo de pagamentos em breve.</p>
            </div>
        </div>
    </div>
@endsection