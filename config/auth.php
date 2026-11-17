<?php

use App\Models\Admin;
use App\Models\Barber;
use App\Models\Customer;

return [

    /* ---------------------------------------------------------------------
     | Authentication Defaults
     | ---------------------------------------------------------------------
     | Mantemos o guard 'web' (padrão do Laravel 13) como default, porque
     | ele ainda é usado por rotas internas/scaffolding. Os três painéis
     | usam guards explícitos: admin, barber, customer.
     */

    'defaults' => [
        'guard' => env('AUTH_GUARD', 'web'),
        'passwords' => env('AUTH_PASSWORD_BROKER', 'users'),
    ],

    /* ---------------------------------------------------------------------
     | Authentication Guards
     | ---------------------------------------------------------------------
     | Cada tipo de usuário tem seu próprio guard de sessão. Um cliente
     | logado no guard 'customer' NÃO possui sessão no guard 'admin' nem
     | no 'barber' — isolamento total de autenticação.
     */

    'guards' => [
        // Guard padrão do Laravel (mantido para não quebrar o scaffolding)
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],

        'barber' => [
            'driver' => 'session',
            'provider' => 'barbers',
        ],

        'customer' => [
            'driver' => 'session',
            'provider' => 'customers',
        ],
    ],

    /* ---------------------------------------------------------------------
     | User Providers
     | ---------------------------------------------------------------------
     | Quatro providers: 'users' (padrão do Laravel) + os três do sistema.
     */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => env('AUTH_MODEL', App\Models\User::class),
        ],

        'admins' => [
            'driver' => 'eloquent',
            'model' => Admin::class,
        ],

        'barbers' => [
            'driver' => 'eloquent',
            'model' => Barber::class,
        ],

        'customers' => [
            'driver' => 'eloquent',
            'model' => Customer::class,
        ],
    ],

    /* ---------------------------------------------------------------------
     | Resetting Passwords
     | ---------------------------------------------------------------------
     | A tabela password_reset_tokens é compartilhada (chave = email).
     | Cada guard tem seu próprio broker para isolamento de rate limit
     | e expiração. Em uma funcionalidade futura podemos separar as
     | tabelas físicas se necessário.
     */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => env('AUTH_PASSWORD_RESET_TOKEN_TABLE', 'password_reset_tokens'),
            'expire' => 60,
            'throttle' => 60,
        ],

        'admins' => [
            'provider' => 'admins',
            'table' => env('AUTH_PASSWORD_RESET_TOKEN_TABLE', 'password_reset_tokens'),
            'expire' => 60,
            'throttle' => 60,
        ],

        'barbers' => [
            'provider' => 'barbers',
            'table' => env('AUTH_PASSWORD_RESET_TOKEN_TABLE', 'password_reset_tokens'),
            'expire' => 60,
            'throttle' => 60,
        ],

        'customers' => [
            'provider' => 'customers',
            'table' => env('AUTH_PASSWORD_RESET_TOKEN_TABLE', 'password_reset_tokens'),
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /* ---------------------------------------------------------------------
     | Password Confirmation Timeout
     | ---------------------------------------------------------------------
     */

    'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),

];