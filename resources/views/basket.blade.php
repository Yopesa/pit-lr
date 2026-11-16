@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h2 class="fw-bold mb-4 text-dark">Корзина</h2>

        <div class="row g-5">
            <!-- Список товаров -->
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm rounded-4 p-4 mb-3">
                    <div class="row align-items-center g-3">
                        <div class="col-md-2 text-center">
                            <div class="bg-light rounded-circle mx-auto d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">Пицца</div>
                        </div>
                        <div class="col-md-4">
                            <h6 class="fw-bold mb-1">Пепперони</h6>
                            <span class="text-muted small">Средняя 30 см, традиционное тесто</span>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="btn-group btn-group-sm bg-light rounded-pill p-1">
                                <button class="btn btn-light rounded-circle fw-bold border-0">-</button>
                                <span class="px-3 align-self-center fw-bold">1</span>
                                <button class="btn btn-light rounded-circle fw-bold border-0">+</button>
                            </div>
                        </div>
                        <div class="col-md-2 text-end">
                            <span class="fw-bold text-darkfs-5">469 ₽</span>
                        </div>
                        <div class="col-md-1 text-end">
                            <button class="btn btn-link text-muted p-0 border-0"><i class="bi bi-x-lg">X</i></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Итоговый блок оформления -->
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 p-4 bg-light">
                    <h5 class="fw-bold mb-4 text-dark">Состав заказа</h5>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-muted">1 товар</span>
                        <span class="fw-semibold">469 ₽</span>
                    </div>
                    <div class="d-flex justify-content-between mb-4 border-top pt-3">
                        <span class="fw-bold text-dark">Сумма заказа</span>
                        <span class="fw-bold text-dark fs-4">469 ₽</span>
                    </div>
                    <button class="btn btn-warning text-white fw-bold w-100 rounded-pill py-3 shadow-sm">Оформить заказ</button>
                </div>
            </div>
        </div>
    </div>
@endsection
