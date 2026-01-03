<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Адмін-панель</title>
</head>

<body class="bg-gray-100 p-10">
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg">

        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">Склад</h1>
                <a href="/" class="text-blue-500 hover:underline text-sm">← Повернутися на сайт</a>
            </div>

            <a href="{{ route('admin.create') }}"
                class="bg-green-600 text-white px-4 py-2 rounded-lg font-bold hover:bg-green-700 transition">
                + Додати матрац
            </a>
        </div>

        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4 shadow-sm">
                {{ session('success') }}
            </div>
        @endif

        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="p-3 border">Назва</th>
                    <th class="p-3 border">Ціна</th>
                    <th class="p-3 border text-center">Дії</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $item)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="p-3 border font-medium">{{ $item->name }}</td>
                        <td class="p-3 border">{{ $item->price }} грн</td>
                        <td class="p-3 border text-center">
                            <form action="{{ route('admin.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700 font-bold"
                                    onclick="return confirm('Ви впевнені, що хочете видалити цей матрац?')">
                                    Видалити
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @if ($products->isEmpty())
            <p class="text-center text-gray-500 mt-6">Склад порожній. Додайте перший товар!</p>
        @endif
    </div>
</body>

</html>
