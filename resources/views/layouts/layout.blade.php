<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js','resources/js/registration.js', 'resources/css/footer.css','resources/css/header.css', 'resources/css/home.css',])
</head>
<body>
     <header>
      <a href="{{ route('home') }}" class="logo">
        <i class="fas fa-feather-alt"></i>
        CritiqueHub
      </a>
      <nav>
        <ul>
          <li>
            <a href="{{ route('home') }}"><i data-lucide="house"></i> Главная</a>
          </li>
          <li>
            <a href="#"><i data-lucide="message-square"></i> Обзоры</a>
          </li>
          <li>
            <a href="{{ route('auth') }}"><i data-lucide="log-in"></i> Войти</a>
          </li>
          <li>
            <a href="{{ route('register') }}"><i data-lucide="user-plus"></i> Регистрация</a>
          </li>
        </ul>
      </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
      <div class="footer-logo">CritiqueHub</div>
      <div class="social-links">
        <a href="#" class="social-link"><i class="fab fa-vk"></i></a>
        <a href="#" class="social-link"
          ><i class="fab fa-telegram-plane"></i
        ></a>
        <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
        <a href="#" class="social-link"><i class="fab fa-odnoklassniki"></i></a>
      </div>
      <p>© 2025 CritiqueHub. Создано для ценителей искренних мнений ✨</p>
    </footer>
</body>
</html>