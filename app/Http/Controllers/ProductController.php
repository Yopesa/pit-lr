<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function catalog(Request $request)
    {
        // 1. Получаем список категорий напрямую из базы для вывода в выпадающем списке
        $categories = DB::table('categories')->get();

        // 2. Строим базовый запрос к таблице продуктов через модель
        $query = Product::query();

        // 3. Фильтр по категории (если передано число id_category)
        if ($request->has('id_category') && $request->id_category != '') {
            $query->where('id_category', $request->id_category);
        }

        // 4. Логика сортировки (проверяем значение из поля select 'filtr')
        if ($request->has('filtr') && $request->filtr != '') {
            switch ($request->filtr) {
                case 'lowCostFiltr':
                    $query->orderBy('price', 'asc'); // Сначала дешевые
                    break;
                case 'highCostFiltr':
                    $query->orderBy('price', 'desc'); // Сначала дорогие
                    break;
                case 'nameFiltr':
                    $query->orderBy('name', 'asc'); // По алфавиту А-Я
                    break;
                case 'newFiltr':
                    $query->orderBy('id_products', 'desc'); // Сначала новые записи
                    break;
                case 'popularFiltr':
                default:
                    $query->orderBy('id_products', 'asc'); // По популярности (по умолчанию)
                    break;
            }
        }

        // 5. Загружаем итоговый отфильтрованный список продуктов
        $products = $query->get();

        // 6. Отдаем все данные обратно в шаблон каталога
        return view('catalog', compact('products', 'categories'));
    }
}
