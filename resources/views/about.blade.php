@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row align-items-center mb-5">
            <div class="col-md-6">
                <h1 class="fw-bold mb-4">О нашей пиццерии</h1>
                <p class="lead text-muted">Мы делаем пиццу с душой, доставляем быстро и дарим улыбки миллионам людей каждый день.</p>
                <p>Наша главная ценность - абсолютная открытость. На кухнях установлены веб-камеры, чтобы вы могли в прямом эфире видеть, как создается ваш шедевр из отборных ингредиентов.</p>
            </div>
            <div class="col-md-6 text-center">
                <div class="bg-light rounded-4 p-5 d-flex align-items-center justify-content-center text-secondary" style="min-height: 300px;">
                    <span class="fs-4 fw-semibold text-warning">Тут будет фото нашей кухни</span>
                </div>
            </div>
        </div>

        <div class="row g-4 text-center mt-4">
            <div class="col-md-4">
                <div class="p-4 bg-white border border-light rounded-4 shadow-sm h-100">
                    <h3 class="fw-bold text-warning mb-2">60 минут</h3>
                    <p class="text-muted mb-0">Или пицца бесплатно. Скорость - наш главный приоритет.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 bg-white border border-light rounded-4 shadow-sm h-100">
                    <h3 class="fw-bold text-warning mb-2">Свежее тесто</h3>
                    <p class="text-muted mb-0">Никакой заморозки. Живое тесто готовим прямо перед выпеканием.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 bg-white border border-light rounded-4 shadow-sm h-100">
                    <h3 class="fw-bold text-warning mb-2">Открытость</h3>
                    <p class="text-muted mb-0">Вы всегда можете прийти на экскурсию и увидеть все своими глазами.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
