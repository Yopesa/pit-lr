@extends('layouts.app')

@section('content')
    <!-- 1. Слайдер с последними 3 добавленными товарами -->
    @if($latestProducts->count() > 0)
        <div class="container my-4">
            <div id="promoCarousel" class="carousel slide shadow-sm rounded-4 overflow-hidden position-relative">

                <!-- Индикаторы внизу слайдера (1-2-3) -->
                <div class="carousel-indicators mb-3">
                    @foreach($latestProducts as $index => $item)
                        <button type="button"
                                data-bs-target="#promoCarousel"
                                data-bs-slide-to="{{ $index }}"
                                class="{{ $index == 0 ? 'active' : '' }}"
                                aria-current="{{ $index == 0 ? 'true' : 'false' }}"
                                aria-label="Слайд {{ $index + 1 }}">
                        </button>
                    @endforeach
                </div>

                <div class="carousel-inner">
                    @foreach($latestProducts as $index => $item)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <div class="d-flex align-items-center justify-content-between px-5 py-4 bg-dark bg-gradient text-white" style="min-height: 320px;">

                                <div class="px-md-4 mx-md-3" style="max-width: 60%;">
                                <span class="badge bg-warning text-dark fw-bold mb-3 px-3 py-2 rounded-pill">
                                    НОВИНКА
                                </span>
                                    <h2 class="fw-bold display-6 mb-2 text-white">{{ $item->name }}</h2>
                                    <p class="mb-4 text-light opacity-75 fs-6 text-truncate">
                                        {{ $item->description }}
                                    </p>

                                    <button type="button"
                                            class="btn btn-warning text-dark fw-bold rounded-pill px-4 py-2 shadow-sm"
                                            data-bs-toggle="modal"
                                            data-bs-target="#productModal{{ $item->id_products }}">
                                        Перейти к товару · {{ $item->price }} ₽
                                    </button>
                                </div>

                                <!-- Изображение товара с отступом от правой стрелки -->
                                <div class="pe-md-5 me-md-3 d-none d-md-flex align-items-center justify-content-center">
                                    <div class="bg-white bg-opacity-10 rounded-circle p-3 d-flex align-items-center justify-content-center" style="width: 230px; height: 230px;">
                                        <img src="{{ asset('public/img/' . $item->img) }}"
                                             alt="{{ $item->name }}"
                                             class="img-fluid rounded-circle object-fit-contain"
                                             style="max-width: 190px; max-height: 190px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Кнопки влево/вправо -->
                <button class="carousel-control-prev justify-content-center align-items-center position-absolute start-0 top-50 translate-middle-y ms-3 bg-white rounded-circle shadow border-0"
                        type="button" data-bs-target="#promoCarousel" data-bs-slide="prev"
                        style="width: 44px; height: 44px; opacity: 0.95; z-index: 10;">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(1); width: 18px; height: 18px;"></span>
                </button>

                <button class="carousel-control-next justify-content-center align-items-center position-absolute end-0 top-50 translate-middle-y me-3 bg-white rounded-circle shadow border-0"
                        type="button" data-bs-target="#promoCarousel" data-bs-slide="next"
                        style="width: 44px; height: 44px; opacity: 0.95; z-index: 10;">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(1); width: 18px; height: 18px;"></span>
                </button>
            </div>
        </div>
    @endif
    <!-- 2. Липкое меню категорий из БД -->
    <div class="sticky-top bg-white border-bottom py-3 shadow-sm" style="top: 0; z-index: 1030;">
        <div class="container">
            <div class="d-flex align-items-center gap-2 overflow-auto text-nowrap">
                @foreach($categories as $index => $category)
                    @if($category->products->count() > 0)
                        <a href="#cat-{{ $category->id_category }}"
                           class="btn {{ $index == 0 ? 'btn-warning text-dark' : 'btn-light text-secondary' }} fw-bold rounded-pill px-4">
                            {{ $category->name }}
                        </a>
                    @endif
                @endforeach
                <a href="{{ route('catalog') }}" class="btn btn-outline-dark fw-bold rounded-pill px-4 ms-auto">
                    Весь каталог →
                </a>
            </div>
        </div>
    </div>

    <!-- 3. Основной Каталог Товаров (до 6 штук на категорию, сетка на 3 колонки) -->
    <div class="container my-5">
        @foreach($categories as $category)
            @if($category->products->count() > 0)
                <section id="cat-{{ $category->id_category }}" class="mb-5">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2 class="fw-bold text-dark mb-0">{{ $category->name }}</h2>
                        <a href="{{ route('catalog') }}" class="link-warning link-underline-opacity-0 fw-bold">
                            Смотреть все →
                        </a>
                    </div>

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                        @foreach($category->products as $product)
                            <div class="col">
                                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden bg-white">
                                    <div class="p-4 text-center bg-light d-flex align-items-center justify-content-center" style="height: 220px;">
                                        <img src="{{ asset('public/img/' . $product->img) }}"
                                             alt="{{ $product->name }}"
                                             class="img-fluid object-fit-contain"
                                             style="max-height: 180px;">
                                    </div>
                                    <div class="card-body d-flex flex-column p-4">
                                        <h5 class="card-title fw-bold text-dark mb-2">{{ $product->name }}</h5>
                                        <p class="card-text text-muted small flex-grow-1">
                                            {{ $product->description }}
                                        </p>
                                        <div class="d-flex justify-content-between align-items-center mt-3 pt-3 border-top">
                                            <span class="fs-5 fw-bold text-dark">от {{ $product->price }} ₽</span>
                                            <button type="button"
                                                    class="btn btn-warning text-dark fw-bold rounded-pill px-4 py-2 shadow-sm"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#productModal{{ $product->id_products }}">
                                                Выбрать
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            @endif
        @endforeach
    </div>
    <!-- 4. Модальные окна для всех выведенных товаров -->
    @foreach($allDisplayedProducts as $product)
        <div class="modal fade" id="productModal{{ $product->id_products }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content rounded-4 border-0 p-4 shadow-lg position-relative">

                    <button type="button" class="btn-close shadow-none position-absolute" data-bs-dismiss="modal" aria-label="Закрыть" style="top: 20px; right: 20px; z-index: 1055;"></button>

                    <div class="modal-body p-0 mt-3 mt-md-0">
                        <div class="row g-4 align-items-center">
                            <div class="col-12 col-md-6 d-flex align-items-center justify-content-center bg-light rounded-4 p-4" style="min-height: 280px;">
                                <img src="{{ asset('public/img/' . $product->img) }}"
                                     alt="{{ $product->name }}"
                                     class="img-fluid object-fit-contain"
                                     style="max-height: 240px;">
                            </div>

                            <div class="col-12 col-md-6 d-flex flex-column justify-content-between">
                                <div>
                                    <h3 class="fw-bold text-dark mb-2">{{ $product->name }}</h3>
                                    <p class="text-secondary small">{{ $product->description }}</p>
                                </div>

                                <form method="POST" action="#" class="mt-4 m-0 p-0 border-0">
                                    @csrf
                                    <input type="hidden" name="id_products" value="{{ $product->id_products }}">
                                    <button type="submit" class="btn btn-warning text-dark fw-bold w-100 py-3 rounded-pill shadow-sm d-flex justify-content-between align-items-center px-4">
                                        <span>Добавить в корзину</span>
                                        <span>{{ $product->price }} ₽</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
