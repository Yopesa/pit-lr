@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <!-- Фирменный крупный заголовок слева -->
        <h1 class="fw-bold mb-5 text-dark" style="letter-spacing: -0.5px;">Акции</h1>

        <!-- Сетка из 3-х колонок на десктопе -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

            <!-- Карточка 1: Удобная оплата для бизнеса -->
            <div class="col">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden bg-white">
                    <!-- Картинка-заглушка вместо верхней текстовой шапки -->
                    <img src="{{ asset('public/img/sale_1.png') }}" class="card-img-top object-fit-cover" alt="Удобная оплата для бизнеса">

                    <!-- Нижняя текстовая часть -->
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="fw-bold mb-2 text-dark">Закажите как юрлицо или ИП</h5>
                        <p class="text-muted small flex-grow-1 mb-4" style="line-height: 1.5;">В Додо можно сделать корпоративный заказ и порадовать коллег. Привезем хоть 1000 пицц и подготовим закрывающие документы. На первый заказ скидка 10%.</p>
                        <button class="btn btn-warning text-white fw-bold rounded-pill px-4 align-self-start shadow-sm mt-auto btn-sm py-2">Посмотреть</button>
                    </div>
                </div>
            </div>

            <!-- Карточка 2: Скидка 25% в приложении -->
            <div class="col">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden bg-white">
                    <!-- Картинка-заглушка вместо верхней текстовой шапки -->
                    <img src="https://media.dodostatic.net/image/019be619baee70199a1395ab84d7b0bc" class="card-img-top object-fit-cover" alt="Скидка 25% в приложении">

                    <!-- Нижняя текстовая часть -->
                    <div class="card-body p-4 d-flex flex-column">
                        <h5 class="fw-bold mb-2 text-dark">Промокод PROMO26</h5>
                        <p class="text-muted small flex-grow-1 mb-4" style="line-height: 1.5;">Скачайте приложение и примените промокод PROMO26 при заказе на любую сумму. Скидка не действует с комбо и не суммируется с другими акциями.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
