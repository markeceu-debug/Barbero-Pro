@extends('layouts.customer')
@section('title', 'Dashboard Cliente')

@section('content')
    <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-2 mb-4">
        <div>
            <h2 class="text-warning fw-bold mb-1 h4">Bem-vindo, {{ auth('customer')->user()->name }}</h2>
            <p class="text-muted mb-0 small">Gerencie os seus agendamentos</p>
        </div>
        <span class="role-badge">Cliente</span>
    </div>

    <div class="row g-3">
        <div class="col-12 col-md-6">
            <div class="p-3 p-md-4 rounded-4 h-100" style="background:#111; border:1px solid rgba(212,175,55,.25);">
                <div class="text-warning mb-2"><i class="fas fa-calendar-plus fa-2x"></i></div>
                <h5 class="fw-bold">Novo Agendamento</h5>
                <p class="text-muted small mb-0">Marcação online em breve.</p>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="p-3 p-md-4 rounded-4 h-100" style="background:#111; border:1px solid rgba(212,175,55,.25);">
                <div class="text-warning mb-2"><i class="fas fa-clock-rotate-left fa-2x"></i></div>
                <h5 class="fw-bold">Histórico</h5>
                <p class="text-muted small mb-0">Histórico e status de pagamento em breve.</p>
            </div>
        </div>
    </div>
@endsection