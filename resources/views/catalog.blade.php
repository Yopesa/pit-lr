@extends('layouts.app')

@section('content')
    <div class="container my-5">

        <div class="border-bottom pb-3 mb-4">
            <h2 class="fw-bold m-0 text-dark">Каталог товаров</h2>
        </div>

        <!-- ГОРЕЗОНТАЛЬНЫЙ КОМПАКТНЫЙ ФИЛЬТР ДЛЯ ПИЦЦЕРИИ -->
        <div class="card border-0 shadow-sm rounded-4 p-3 bg-white mb-5">
            <form method="GET" action="{{ route('catalog') }}">
                <div class="row g-3 align-items-end">

                    <!-- Сортировка -->
                    <div class="col-12 col-md-4">
                        <label class="form-label small fw-bold text-muted text-uppercase tracking-wider mb-2" style="font-size: 0.75rem;">Упорядочить:</label>
                        <select class="form-select shadow-none border-light-subtle rounded-3 py-2 text-secondary" name="filtr">
                            <option value="popularFiltr" {{ request('filtr') == 'popularFiltr' ? 'selected' : '' }}>По популярности</option>
                            <option value="newFiltr" {{ request('filtr') == 'newFiltr' ? 'selected' : '' }}>Сначала новинки</option>
                            <option value="lowCostFiltr" {{ request('filtr') == 'lowCostFiltr' ? 'selected' : '' }}>Сначала дешевые</option>
                            <option value="highCostFiltr" {{ request('filtr') == 'highCostFiltr' ? 'selected' : '' }}>Сначала дорогие</option>
                            <option value="nameFiltr" {{ request('filtr') == 'nameFiltr' ? 'selected' : '' }}>По наименованию (А-Я)</option>
                        </select>
                    </div>

                    <!-- Категории из базы данных -->
                    <div class="col-12 col-md-4">
                        <label class="form-label small fw-bold text-muted text-uppercase tracking-wider" style="font-size: 0.75rem; margin-bottom: 9px;">Категории:</label>
                        <select class="form-select shadow-none border-light-subtle rounded-3 py-2 text-secondary" name="id_category">
                            <option value="" selected>Все категории</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id_category }}" {{ request('id_category') == $category->id_category ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Кнопка -->
                    <div class="col-12 col-md-4">
                        <button type="submit" class="btn btn-warning text-white fw-bold w-100 py-2 rounded-pill shadow-sm">
                            Отфильтровать
                        </button>
                    </div>

                </div>
            </form>
        </div>

        <!-- Сетка карточек товаров -->
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4 mb-5">

            @forelse($products as $product)
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                        <div class="p-4 text-center bg-light">
                            <div class="bg-secondary bg-opacity-10 rounded-circle mx-auto d-flex align-items-center justify-content-center" style="width: 150px; height: 150px;">
                                <span class="text-muted small">{{ $product->name }}</span>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column p-4">
                            <h5 class="card-title fw-bold mb-2">{{ $product->name }}</h5>
                            <p class="card-text text-muted small flex-grow-1">{{ $product->description }}</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="fs-5 fw-bold text-dark">{{ $product->price }} ₽</span>
                                <button type="button" class="btn btn-warning text-white fw-bold rounded-pill px-4 btn-sm shadow-sm" data-bs-toggle="modal" data-bs-target="#productModal{{ $product->id_products }}">
                                    Выбрать
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <h5 class="text-muted fw-bold">Товары не найдены или ещё не добавлены</h5>
                </div>
            @endforelse

        </div>
    </div>
    <!-- Динамические модальные окна для каждого товара -->
    @foreach($products as $product)
        <div class="modal fade" id="productModal{{ $product->id_products }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content rounded-4 border-0 p-3 shadow-lg">
                    <div class="modal-body p-0">
                        <div class="row g-4">
                            <div class="col-md-6 d-flex align-items-center justify-content-center bg-light rounded-4 p-4">
                                <div class="bg-secondary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center" style="width: 250px; height: 250px;">
                                    <span class="text-muted fw-bold">{{ $product->name }}</span>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="text-end mb-2">
                                        <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                                    </div>
                                    <h3 class="fw-bold text-dark mb-1">{{ $product->name }}</h3>
                                    <p class="text-muted small mb-3">Традиционное тесто</p>
                                    <p class="text-secondary small">{{ $product->description }}</p>
                                </div>
                                <form method="POST" action="#" class="mt-4 m-0 p-0 border-0">
                                    @csrf
                                    <input type="hidden" name="id_products" value="{{ $product->id_products }}">
                                    <button type="submit" class="btn btn-warning text-white fw-bold w-100 py-2.5 rounded-pill shadow-sm">
                                        В корзину за {{ $product->price }} ₽
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
