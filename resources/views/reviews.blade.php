
@extends('layouts.layout')
@vite(['resources/css/reviews.css'])
@section('content')

<div class="reviews-page">
    <div class="page-header">
        <h1 class="page-title">Музыкальные релизы</h1>
        <p class="page-subtitle">Исследуйте новые альбомы, делитесь мнениями и находите свою следующую любимую музыку</p>
    </div>


    <div class="filters-section">
        <div class="search-box">
            <i data-lucide="search" class="search-icon"></i>
            <input type="text" class="search-input" placeholder="Поиск альбомов, исполнителей...">
        </div>
        
        <div class="filter-grid">
            <div class="filter-group">
                <label class="filter-label">Жанр</label>
                <select class="filter-select">
                    <option value="">Все жанры</option>
                    <option value="pop">Поп</option>
                    <option value="rock">Рок</option>
                    <option value="hiphop">Хип-хоп</option>
                    <option value="electronic">Электроника</option>
                    <option value="jazz">Джаз</option>
                    <option value="classical">Классика</option>
                </select>
            </div>
            
            <div class="filter-group">
                <label class="filter-label">Год</label>
                <select class="filter-select">
                    <option value="">Все годы</option>
                    <option value="2024">2024</option>
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                </select>
            </div>
            
            <div class="filter-group">
                <label class="filter-label">Рейтинг</label>
                <select class="filter-select">
                    <option value="">Любой рейтинг</option>
                    <option value="5">★★★★★</option>
                    <option value="4">★★★★☆ и выше</option>
                    <option value="3">★★★☆☆ и выше</option>
                </select>
            </div>
            
            <div class="filter-group">
                <label class="filter-label">Сортировка</label>
                <select class="filter-select">
                    <option value="newest">Сначала новые</option>
                    <option value="popular">По популярности</option>
                    <option value="rating">По рейтингу</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Сетка релизов -->
    <div class="releases-grid">
        <!-- Карточка 1 -->
        <div class="release-card">
            <div class="release-cover">
                <i data-lucide="disc"></i>
            </div>
            <div class="release-info">
                <h3 class="release-title">SOS</h3>
                <div class="release-artist">SZA</div>
                <div class="release-meta">Поп • R&B • 2022</div>
                <p class="review-content">Искренний рассказ о любви, потере и самопознании через призму современного R&B.</p>
            </div>
            <div class="release-stats">
                <div class="rating">
                    <i data-lucide="star"></i>
                    4.8
                </div>
                <div class="reviews-count">124 рецензии</div>
            </div>
        </div>

     
        <div class="release-card">
            <div class="release-cover">
                <i data-lucide="disc"></i>
            </div>
            <div class="release-info">
                <h3 class="release-title">Blonde</h3>
                <div class="release-artist">Frank Ocean</div>
                <div class="release-meta">R&B • Альтернатива • 2016</div>
                <p class="review-content">Экспериментальный шедевр, переопределивший границы современной музыки.</p>
            </div>
            <div class="release-stats">
                <div class="rating">
                    <i data-lucide="star"></i>
                    4.9
                </div>
                <div class="reviews-count">89 рецензий</div>
            </div>
        </div>


        <div class="release-card">
            <div class="release-cover">
                <i data-lucide="disc"></i>
            </div>
            <div class="release-info">
                <h3 class="release-title">Мёртвые в воде</h3>
                <div class="release-artist">Л'Облом</div>
                <div class="release-meta">Альтернатива • Инди • 2023</div>
                <p class="review-content">Глубокий и атмосферный русскоязычный альбом о внутренних демонах и надежде.</p>
            </div>
            <div class="release-stats">
                <div class="rating">
                    <i data-lucide="star"></i>
                    4.6
                </div>
                <div class="reviews-count">67 рецензий</div>
            </div>
        </div>


        <div class="release-card">
            <div class="release-cover">
                <i data-lucide="disc"></i>
            </div>
            <div class="release-info">
                <h3 class="release-title">Future Nostalgia</h3>
                <div class="release-artist">Dua Lipa</div>
                <div class="release-meta">Поп • Диско • 2020</div>
                <p class="review-content">Энергичное возвращение к звучанию 80-х с современным прочтением.</p>
            </div>
            <div class="release-stats">
                <div class="rating">
                    <i data-lucide="star"></i>
                    4.4
                </div>
                <div class="reviews-count">156 рецензий</div>
            </div>
        </div>


        <div class="release-card">
            <div class="release-cover">
                <i data-lucide="disc"></i>
            </div>
            <div class="release-info">
                <h3 class="release-title">To Pimp a Butterfly</h3>
                <div class="release-artist">Kendrick Lamar</div>
                <div class="release-meta">Хип-хоп • Джаз • 2015</div>
                <p class="review-content">Мощное социальное высказывание через призму джаза и фанка.</p>
            </div>
            <div class="release-stats">
                <div class="rating">
                    <i data-lucide="star"></i>
                    4.9
                </div>
                <div class="reviews-count">203 рецензии</div>
            </div>
        </div>


        <div class="release-card">
            <div class="release-cover">
                <i data-lucide="disc"></i>
            </div>
            <div class="release-info">
                <h3 class="release-title">Недовольство собой</h3>
                <div class="release-artist">МУККА</div>
                <div class="release-meta">Инди • Эмо • 2021</div>
                <p class="review-content">Честный разговор о ментальном здоровье и взрослении в цифровую эпоху.</p>
            </div>
            <div class="release-stats">
                <div class="rating">
                    <i data-lucide="star"></i>
                    4.5
                </div>
                <div class="reviews-count">78 рецензий</div>
            </div>
        </div>
    </div>

   
    <div class="pagination">
        <a href="#" class="pagination-btn disabled">
            <i data-lucide="chevron-left"></i>
            Назад
        </a>
        <span class="pagination-info">Страница 1 из 8</span>
        <a href="#" class="pagination-btn">
            Вперед
            <i data-lucide="chevron-right"></i>
        </a>
    </div>
</div>

@endsection
