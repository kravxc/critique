@extends('layouts.layout')
@vite(['resources/js/app.js','resources/js/registration.js','resources/css/registration.css'])
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

    <form method="POST" action="{{ route('register.submit') }}">
        @csrf
        
        <div class="form-group">
            <label class="form-label">
                <i data-lucide="user"></i>
                Имя
            </label>
            <input
                type="text"
                id="name"
                name="name"
                class="form-control @error('name') is-invalid @enderror"
                placeholder="Как тебя зовут?"
                value="{{ old('name') }}"
                required
            />
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

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

        <div class="form-group">
            <label class="form-label">
                <i data-lucide="lock"></i>
                Подтверждение пароля
            </label>
            <input
                type="password"
                id="password_confirmation"
                name="password_confirmation"
                class="form-control"
                placeholder="Повтори пароль"
                required
            />
        </div>

        <div class="checkbox-container">
            <input type="checkbox" id="terms" name="terms" class="form-checkbox @error('terms') is-invalid @enderror" />
            <label for="terms" class="checkbox-label">
                Я принимаю <a href="#">Условия использования</a> и
                <a href="#">Политику конфиденциальности</a>. Обещаю быть
                вежливым(ой) 😉
            </label>
            @error('terms')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn-register">Создать аккаунт</button>

        <div class="login-prompt">
            Уже с нами? <a href="{{ route('auth') }}" class="login-link">Войдите здесь</a>
        </div>
    </form>
</div>

@endsection