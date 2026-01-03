<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Додати матрац</title>
</head>

<body class="bg-gray-100 p-10">
    <div class="max-w-md mx-auto bg-white p-8 rounded-xl shadow-lg">
        <h1 class="text-2xl font-bold mb-6">Новий матрац</h1>

        <form action="{{ route('admin.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium">Назва матраца</label>
                <input type="text" name="name" required class="w-full border rounded-lg p-2 mt-1">
            </div>
            <div>
                <label class="block text-sm font-medium">Опис</label>
                <textarea name="description" required class="w-full border rounded-lg p-2 mt-1"></textarea>
            </div>
            <div>
                <label class="block text-sm font-medium">Ціна (грн)</label>
                <input type="number" name="price" required class="w-full border rounded-lg p-2 mt-1">
            </div>
            <div class="flex gap-4">
                <button type="submit"
                    class="flex-1 bg-blue-600 text-white py-2 rounded-lg font-bold hover:bg-blue-700">
                    Зберегти
                </button>
                <a href="/admin" class="flex-1 text-center bg-gray-200 py-2 rounded-lg font-bold">Скасувати</a>
            </div>
        </form>
    </div>
</body>

</html>
