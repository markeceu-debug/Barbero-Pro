@extends('layouts.barber')
@section('title', 'Dashboard Barbeiro')

@section('content')
    <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2 mb-4">
        <div>
            <h2 class="text-warning fw-bold mb-1 h4">Olá, {{ auth('barber')->user()->name }}</h2>
            <p class="text-muted mb-0 small">A sua agenda do dia</p>
        </div>
        <span class="role-badge">Barbeiro</span>
    </div>

    <div class="row g-3">
        <div class="col-12 col-md-6">
            <div class="p-3 p-md-4 rounded-4 h-100" style="background:#111; border:1px solid rgba(212,175,55,.25);">
                <div class="text-warning mb-2"><i class="fas fa-calendar-day fa-2x"></i></div>
                <h5 class="fw-bold">Agenda de Hoje</h5>
                <p class="text-muted small mb-0">Em breve verá aqui os agendamentos do dia.</p>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="p-3 p-md-4 rounded-4 h-100" style="background:#111; border:1px solid rgba(212,175,55,.25);">
                <div class="text-warning mb-2"><i class="fas fa-hand-holding-dollar fa-2x"></i></div>
                <h5 class="fw-bold">Pagamentos em Dinheiro</h5>
                <p class="text-muted small mb-0">Registo de pagamentos em dinheiro em breve.</p>
            </div>
        </div>
    </div>
@endsection