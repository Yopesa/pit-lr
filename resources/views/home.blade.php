@extends('layouts.app')

@section('content')
    <!-- 1. Слайдер с акциями (Карусель) с увеличенной высотой и отступами -->
    <div class="container my-4">
        <div id="promoCarousel" class="carousel slide shadow-sm rounded-4 overflow-hidden position-relative" data-bs-ride="carousel">
            <div class="carousel-inner">

                <!-- Слайд 1 -->
                <div class="carousel-item active">
                    <div class="d-flex align-items-center justify-content-between px-5 text-white" style="height: 320px; background: linear-gradient(135deg, #e65c00 0%, #f9d423 100%);">
                        <div class="mx-4" style="max-width: 70%;">
                            <span class="badge bg-white text-warning fw-bold mb-3 px-3 py-2 rounded-pill">ХИТ МЕСЯЦА</span>
                            <h2 class="fw-bold display-5 mb-2">Две пиццы за 899 рублей</h2>
                            <p class="lead mb-0 text-white-50 fs-5">Выгодное комбо для идеального вечера с друзьями.</p>
                        </div>
                        <div class="pe-5 opacity-25 d-none d-md-block fs-3 fw-bold text-uppercase tracking-wider">
                            Combo
                        </div>
                    </div>
                </div>

                <!-- Слайд 2 -->
                <div class="carousel-item">
                    <div class="d-flex align-items-center justify-content-between px-5 text-white" style="height: 320px; background: linear-gradient(135deg, #4b6cb7 0%, #182848 100%);">
                        <div class="mx-4" style="max-width: 70%;">
                            <span class="badge bg-warning text-dark fw-bold mb-3 px-3 py-2 rounded-pill">NEW</span>
                            <h2 class="fw-bold display-5 mb-2">Удобный заказ для бизнеса</h2>
                            <p class="lead mb-0 text-white-50 fs-5">Скидка 10% на первый корпоративный заказ для компаний.</p>
                        </div>
                        <div class="pe-5 opacity-25 d-none d-md-block fs-3 fw-bold text-uppercase tracking-wider">
                            Business
                        </div>
                    </div>
                </div>

            </div>

            <button class="carousel-control-prev justify-content-center align-items-center position-absolute start-0 top-50 translate-middle-y ms-3 bg-white rounded-circle shadow"
                    type="button"
                    data-bs-target="#promoCarousel"
                    data-bs-slide="prev"
                    style="width: 48px; height: 48px; opacity: 0.95; border: none; z-index: 10;">
                <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(1); width: 20px; height: 20px;"></span>
            </button>

            <button class="carousel-control-next justify-content-center align-items-center position-absolute end-0 top-50 translate-middle-y me-3 bg-white rounded-circle shadow"
                    type="button"
                    data-bs-target="#promoCarousel"
                    data-bs-slide="next"
                    style="width: 48px; height: 48px; opacity: 0.95; border: none; z-index: 10;">
                <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(1); width: 20px; height: 20px;"></span>
            </button>
        </div>
    </div>


    <!-- 2. Липкое меню категорий (Sticky Navigation) -->
    <!-- Изменено значение top на 0 для фиксации ровно у края экрана при скролле и увеличен z-index -->
    <div class="sticky-top bg-white border-bottom py-3 shadow-sm" style="top: 0; z-index: 1030;">
        <div class="container">
            <div class="d-flex gap-2 overflow-auto text-nowrap scrollbar-hidden">
                <a href="#pizza" class="btn btn-warning text-white fw-bold rounded-pill px-4">Пицца</a>
                <a href="#combo" class="btn btn-light text-muted fw-bold rounded-pill px-4">Комбо</a>
                <a href="#drinks" class="btn btn-light text-muted fw-bold rounded-pill px-4">Напитки</a>
                <a href="#deserts" class="btn btn-light text-muted fw-bold rounded-pill px-4">Десерты</a>
            </div>
        </div>
    </div>

    <!-- 3. Основной Каталог Товаров -->
    <div class="container my-5">

        <!-- Секция: Пицца -->
        <section id="pizza" class="mb-5">
            <h2 class="fw-bold mb-4 text-dark">Пицца</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">

                <!-- Товар 1 -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden bg-white">
                        <div class="p-4 text-center bg-light position-relative">
                            <div class="bg-secondary bg-opacity-10 rounded-circle mx-auto d-flex align-items-center justify-content-center" style="width: 160px; height: 160px;">
                                <span class="text-muted fs-1">Пицца</span>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column p-4">
                            <h5 class="card-title fw-bold mb-2">Пицца Пепперони</h5>
                            <p class="card-text text-muted small flex-grow-1" style="line-height: 1.4;">Пикантная пепперони, увеличенная порция моцареллы, фирменный томатный соус.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="fs-5 fw-bold text-dark">599 ₽</span>
                                <button type="button" class="btn btn-warning text-white fw-bold rounded-pill px-4 btn-sm shadow-sm py-2" data-bs-toggle="modal" data-bs-target="#productModal1">Выбрать</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Товар 2 -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden bg-white">
                        <div class="p-4 text-center bg-light position-relative">
                            <div class="bg-secondary bg-opacity-10 rounded-circle mx-auto d-flex align-items-center justify-content-center" style="width: 160px; height: 160px;">
                                <span class="text-muted fs-1">Пицца</span>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column p-4">
                            <h5 class="card-title fw-bold mb-2">Пицца Маргарита</h5>
                            <p class="card-text text-muted small flex-grow-1" style="line-height: 1.4;">Классическая пицца с томатами, увеличенная порция моцареллы, фирменный томатный соус.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="fs-5 fw-bold text-dark">449 ₽</span>
                                <button type="button" class="btn btn-warning text-white fw-bold rounded-pill px-4 btn-sm shadow-sm py-2" data-bs-toggle="modal" data-bs-target="#productModal2">Выбрать</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Секция: Напитки (Для демонстрации структуры) -->
        <section id="drinks" class="mb-5">
            <h2 class="fw-bold mb-4 text-dark">Напитки</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden bg-white">
                        <div class="p-4 text-center bg-light">
                            <div class="bg-secondary bg-opacity-10 rounded-circle mx-auto d-flex align-items-center justify-content-center" style="width: 160px; height: 160px;">
                                <span class="text-muted fs-1">Другое</span>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column p-4">
                            <h5 class="card-title fw-bold mb-2">Кола с лимоном</h5>
                            <p class="card-text text-muted small flex-grow-1" style="line-height: 1.4;">Классический освежающий газированный напиток с натуральным соком лимона.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="fs-5 fw-bold text-dark">99 ₽</span>
                                <button class="btn btn-warning text-white fw-bold rounded-pill px-4 btn-sm shadow-sm py-2">В корзину</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- МОДАЛЬНОЕ ОКНО ТОВАРА #1 (Пепперони) -->
    <div class="modal fade" id="productModal1" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded-4 border-0 p-4 shadow-lg position-relative">

                <button type="button" class="btn-close shadow-none position-absolute" data-bs-dismiss="modal" aria-label="Закрыть" style="top: 20px; right: 20px; z-index: 1055;"></button>

                <div class="modal-body p-0 mt-3 mt-md-0">
                    <div class="row g-4">

                        <div class="col-12 col-md-6 d-flex align-items-center justify-content-center bg-light rounded-4 p-4">
                            <div class="bg-secondary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center" style="width: 250px; height: 250px;">
                                <span class="text-muted fw-bold">Пицца Пепперони</span>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 d-flex flex-column justify-content-between">
                            <div>
                                <h3 class="fw-bold text-dark mb-1">Пицца Пепперони</h3>
                                <p class="text-muted small mb-3">30 см, традиционное тесто</p>
                                <p class="text-secondary small">Вкусная пицца с колбаской, увеличенная порция моцареллы, фирменный томатный соус.</p>
                            </div>

                            <form method="POST" action="#" class="mt-4 m-0 p-0 border-0">
                                @csrf
                                <input type="hidden" name="id_products" value="1">
                                <button type="submit" class="btn btn-warning text-white fw-bold w-100 py-2.5 rounded-pill shadow-sm d-flex justify-content-between align-items-center px-4">
                                    <span>В корзину</span>
                                    <span>599 ₽</span>
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- МОДАЛЬНОЕ ОКНО ТОВАРА #2 (Маргарита) -->
    <div class="modal fade" id="productModal2" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded-4 border-0 p-4 shadow-lg position-relative">

                <button type="button" class="btn-close shadow-none position-absolute" data-bs-dismiss="modal" aria-label="Закрыть" style="top: 20px; right: 20px; z-index: 1055;"></button>

                <div class="modal-body p-0 mt-3 mt-md-0">
                    <div class="row g-4">

                        <div class="col-12 col-md-6 d-flex align-items-center justify-content-center bg-light rounded-4 p-4">
                            <div class="bg-secondary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center" style="width: 250px; height: 250px;">
                                <span class="text-muted fw-bold">Пицца Маргарита</span>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 d-flex flex-column justify-content-between">
                            <div>
                                <h3 class="fw-bold text-dark mb-1">Пицца Маргарита</h3>
                                <p class="text-muted small mb-3">30 см, традиционное тесто</p>
                                <p class="text-secondary small">Классическая пицца с томатами, увеличенная порция моцареллы, фирменный томатный соус.</p>
                            </div>

                            <form method="POST" action="#" class="mt-4 m-0 p-0 border-0">
                                @csrf
                                <input type="hidden" name="id_products" value="2">
                                <button type="submit" class="btn btn-warning text-white fw-bold w-100 py-2.5 rounded-pill shadow-sm d-flex justify-content-between align-items-center px-4">
                                    <span>В корзину</span>
                                    <span>449 ₽</span>
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
