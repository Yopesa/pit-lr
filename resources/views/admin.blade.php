@extends('layouts.app')

@section('content')
    <div class="container py-4">

        <!-- Заголовок панели -->
        <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
            <h2 class="fw-bold m-0">Панель управления</h2>
            <span class="badge bg-secondary px-3 py-2 rounded-pill">Режим администратора</span>
        </div>

        <div class="row g-4">

            <!-- Блок 1: Управление категориями -->
            <div class="col-12">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                    <div class="card-header bg-dark text-white fw-bold py-3">
                        Управление категориями
                    </div>
                    <div class="card-body p-4">
                        <div class="row g-4">

                            <!-- Добавление категории -->
                            <div class="col-md-6 border-end">
                                <h6 class="fw-bold text-muted mb-3">Новая категория</h6>
                                <form method="POST" action="#">
                                    @csrf
                                    <div class="row g-2">
                                        <div class="col">
                                            <input type="text" class="form-control rounded-3" name="name" placeholder="Название (например, Пицца)" required>
                                        </div>
                                        <div class="col-auto">
                                            <button class="btn btn-success rounded-3" type="submit">Добавить</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <!-- Удаление категории -->
                            <div class="col-md-6">
                                <h6 class="fw-bold text-muted mb-3">Удалить категорию</h6>
                                <form method="POST" action="#">
                                    @csrf
                                    @method('DELETE')
                                    <div class="row g-2">
                                        <div class="col">
                                            <select class="form-select rounded-3" name="id_category" required>
                                                <option value="" selected disabled>Выберите для удаления...</option>
                                                <option value="1">Пицца</option>
                                                <option value="2">Напитки</option>
                                            </select>
                                        </div>
                                        <div class="col-auto">
                                            <button class="btn btn-danger rounded-3" type="submit">Удалить</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Блок 2: Добавление товара -->
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                    <div class="card-header bg-dark text-white fw-bold py-3">
                        Добавление товара
                    </div>
                    <div class="card-body p-4">
                        <form method="POST" action="#" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label small fw-bold text-muted">Категория</label>
                                <select class="form-select rounded-3" name="id_category" required>
                                    <option value="" selected disabled>Выбрать категорию...</option>
                                    <option value="1">Пицца</option>
                                    <option value="2">Напитки</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label small fw-bold text-muted">Название товара</label>
                                <input type="text" class="form-control rounded-3" name="name" placeholder="Пепперони" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label small fw-bold text-muted">Цена (₽)</label>
                                <input type="number" class="form-control rounded-3" name="price" placeholder="599" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label small fw-bold text-muted">Описание товара</label>
                                <textarea class="form-control rounded-3" name="description" rows="2" placeholder="Описание состава или ингредиентов..." required></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label small fw-bold text-muted">Изображение товара</label>
                                <input class="form-control rounded-3" type="file" name="img" accept="image/*" required>
                            </div>

                            <button type="submit" class="btn btn-primary w-100 fw-bold rounded-pill py-2 mt-2">Создать товар</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- БЛОК 3: МОНИТОРИНГ ЗАКАЗОВ -->
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                    <div class="card-header bg-dark text-white fw-bold py-3">
                        Активные заказы
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0 text-nowrap">
                                <thead class="table-light text-muted small text-uppercase">
                                <tr>
                                    <th class="ps-4">№</th>
                                    <th>Клиент</th>
                                    <th>Сумма</th>
                                    <th>Статус</th>
                                    <th class="pe-4 text-end">Действия</th>
                                </tr>
                                </thead>
                                <tbody>

                                <!-- Заказ #1 -->
                                <tr>
                                    <td class="ps-4"><b>#1</b></td>
                                    <td>Иван Иванов</td>
                                    <td class="fw-bold">1 198 ₽</td>
                                    <td>
                                        <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold">Новый</span>
                                    </td>
                                    <td class="pe-4 text-end">
                                        <div class="d-flex justify-content-end align-items-center gap-2">
                                            <div class="d-flex gap-2" id="defaultButtons1">
                                                <form method="POST" action="#" class="m-0 p-0 border-0">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="id_order" value="1">
                                                    <input type="hidden" name="id_status" value="2">
                                                    <button type="submit" class="btn btn-sm btn-success px-3 rounded-pill fw-bold">Подтвердить</button>
                                                </form>
                                                <button type="button" class="btn btn-sm btn-outline-danger px-3 rounded-pill" onclick="document.getElementById('defaultButtons1').classList.add('d-none'); document.getElementById('cancelForm1').classList.remove('d-none');">
                                                    Отменить
                                                </button>
                                            </div>

                                            <form method="POST" action="#" class="m-0 p-0 border-0 d-none" id="cancelForm1">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="id_order" value="1">
                                                <input type="hidden" name="id_status" value="3">
                                                <div class="d-flex gap-1 align-items-center" style="max-width: 300px;">
                                                    <input type="text" class="form-control form-control-sm rounded-3" name="reason" placeholder="Причина отмены..." style="width: 150px;" required>
                                                    <button type="submit" class="btn btn-sm btn-danger rounded-3">ОК</button>
                                                    <button type="button" class="btn btn-sm btn-light border rounded-3" onclick="document.getElementById('cancelForm1').classList.add('d-none'); document.getElementById('defaultButtons1').classList.remove('d-none');">✕</button>
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Заказ #2 -->
                                <tr>
                                    <td class="ps-4"><b>#2</b></td>
                                    <td>Алексей Петров</td>
                                    <td class="fw-bold">449 ₽</td>
                                    <td>
                                        <span class="badge bg-success px-3 py-2 rounded-pill fw-bold">Подтвержден</span>
                                    </td>
                                    <td class="pe-4 text-end">
                                        <div class="d-flex justify-content-end align-items-center gap-2">
                                            <div id="defaultButtons2">
                                                <button type="button" class="btn btn-sm btn-outline-danger px-3 rounded-pill" onclick="document.getElementById('defaultButtons2').classList.add('d-none'); document.getElementById('cancelForm2').classList.remove('d-none');">
                                                    Отменить
                                                </button>
                                            </div>

                                            <form method="POST" action="#" class="m-0 p-0 border-0 d-none" id="cancelForm2">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="id_order" value="2">
                                                <input type="hidden" name="id_status" value="3">
                                                <div class="d-flex gap-1 align-items-center" style="max-width: 300px;">
                                                    <input type="text" class="form-control form-control-sm rounded-3" name="reason" placeholder="Причина..." style="width: 150px;" required>
                                                    <button type="submit" class="btn btn-sm btn-danger rounded-3">ОК</button>
                                                    <button type="button" class="btn btn-sm btn-light border rounded-3" onclick="document.getElementById('cancelForm2').classList.add('d-none'); document.getElementById('defaultButtons2').classList.remove('d-none');">✕</button>
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
