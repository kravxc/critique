
@extends('layouts.layout')

@section('content')
<section class="hero">
    <h1>Где музыка обретает голос</h1>
    <p>Пишите честные рецензии на альбомы, делитесь впечатлениями от треков и находите музыку, которая говорит с вами.</p>
    <a href="{{ route('register') }}" class="btn">Начать писать</a>
</section>

<!-- Фичи -->
<section class="features">
    <div class="feature-card">
        <i data-lucide="album" class="feature-icon"></i>
        <h3>Рецензии на альбомы</h3>
        <p>Анализируйте концепции, продакшн, лирику и эмоции — делитесь глубоким взглядом на музыку.</p>
    </div>
    <div class="feature-card">
        <i data-lucide="headphones" class="feature-icon"></i>
        <h3>Обсуждайте треки</h3>
        <p>Спорьте о битах, вокале и аранжировках. Ваше мнение — часть музыкального диалога.</p>
    </div>
    <div class="feature-card">
        <i data-lucide="compass" class="feature-icon"></i>
        <h3>Открывайте новое</h3>
        <p>Находите независимых исполнителей и скрытые жемчужины через честные отзывы других слушателей.</p>
    </div>
</section>

<!-- Примеры рецензий -->
<section class="reviews-section">
    <h2 class="section-title">Популярные музыкальные рецензии</h2>
    <div class="reviews-flex">
        <div class="review-card">
            <div class="review-header">
                <div class="avatar">Е</div>
                <div class="review-meta">
                    <h4>Екатерина</h4>
                    <p>«SOS» — SZA</p>
                </div>
            </div>
            <div class="review-content">
                Альбом, в котором боль и сила идут рука об руку. SZA создаёт звуковую терапию для сломленных сердец.
            </div>
            <div class="rating">★★★★★</div>
        </div>
        <div class="review-card">
            <div class="review-header">
                <div class="avatar">И</div>
                <div class="review-meta">
                    <h4>Иван</h4>
                    <p>«Blonde» — Frank Ocean</p>
                </div>
            </div>
            <div class="review-content">
                Не альбом, а поэма в звуке. Каждый трек — отдельная глава о любви, утрате и поиске себя.
            </div>
            <div class="rating">★★★★★</div>
        </div>
        <div class="review-card">
            <div class="review-header">
                <div class="avatar">А</div>
                <div class="review-meta">
                    <h4>Анна</h4>
                    <p>«Мёртвые в воде» — Л'Облом</p>
                </div>
            </div>
            <div class="review-content">
                Русский альтернативный шедевр. Тексты режут, музыка обволакивает — идеальный саундтрек к внутренней буре.
            </div>
            <div class="rating">★★★★☆</div>
        </div>
    </div>
</section>

<!-- Почему CritiqueHub -->
<section class="why-section">
    <h2 class="section-title">Почему нас выбирают</h2>
    <div class="why-grid">
        <div class="why-card">
            <h3><i data-lucide="shield-check"></i> Без накруток</h3>
            <p>У нас нет «лайк-ферм» и ботов. Только живые мнения реальных слушателей.</p>
        </div>
        <div class="why-card">
            <h3><i data-lucide="pen-tool"></i> Глубина, а не хайп</h3>
            <p>Мы ценим аналитику, контекст и эмоции — не просто «крутой трек», а почему он крут.</p>
        </div>
        <div class="why-card">
            <h3><i data-lucide="heart"></i> Уважение к авторам</h3>
            <p>Даже в критике — уважение. Мы верим, что честность и доброта идут рука об руку.</p>
        </div>
    </div>
</section>

<!-- Статистика -->
<section class="stats-section">
    <h2 class="section-title">Наше сообщество</h2>
    <div class="stats-grid">
        <div class="stat-item">
            <div class="stat-number">12K+</div>
            <div class="stat-label">слушателей</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">4.8K</div>
            <div class="stat-label">рецензий</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">27K</div>
            <div class="stat-label">обсуждений</div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section">
    <h2>Ваше мнение — часть музыкальной культуры</h2>
    <p>Присоединяйтесь к сообществу, где каждая рецензия помогает другим слушателям найти «свою» музыку.</p>
    <a href="{{ route('register') }}" class="btn">Создать аккаунт</a>
</section>
@endsection
