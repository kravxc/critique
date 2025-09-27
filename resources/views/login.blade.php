@extends('layouts.layout')
@vite(['resources/js/app.js','resources/js/auth.js','resources/css/registration.css'])
@section('content')

<div class="register-card">
    <div class="card-header">
        <h1 class="card-title">Присоединяйся к нам</h1>
        <p class="card-subtitle">Поделись своим мнением — оно важно 💌</p>
    </div>


    <div class="progress-bar">
        <div class="progress-fill" id="progressFill"></div>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('auth.submit') }}">
        @csrf
        <div class="form-group">
            <label class="form-label">
                <i data-lucide="mail"></i>
                Email
            </label>
            <input
                type="email"
                id="email"
                name="email"
                class="form-control @error('email') is-invalid @enderror"
                placeholder="example@mail.com"
                value="{{ old('email') }}"
                required
            />
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label class="form-label">
                <i data-lucide="lock"></i>
                Пароль
            </label>
            <div class="password-wrapper">
                <input
                    type="password"
                    id="password"
                    name="password"
                    class="form-control @error('password') is-invalid @enderror"
                    placeholder="Придумай надёжный пароль"
                    required
                />
                <span class="toggle-password">
                    <i id="toggleIcon" data-lucide="eye"></i>
                </span>
            </div>
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
      
        <button type="submit" class="btn-register">Создать аккаунт</button>

        <div class="login-prompt">
            Еще не с нами? <a href="{{ route('register') }}" class="login-link">Зарегистрироваться здесь</a>
        </div>
    </form>
</div>

@endsection