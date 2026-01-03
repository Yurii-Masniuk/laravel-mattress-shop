<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <title>Світ Матраців</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-10">
    <h1 class="text-3xl font-bold text-center mb-10">Наші Матраци</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($products as $item)
            <div class="bg-white p-6 rounded-lg shadow-md border-t-4 border-blue-500">

                <div class="mb-4">
                    <img src="https://loremflickr.com/400/300/bedroom,interior?lock={{ $item->id }}"
                        alt="{{ $item->name }}" class="w-full h-48 object-cover rounded-lg shadow-sm">
                </div>

                <h2 class="text-xl font-bold">{{ $item->name }}</h2>
                <p class="text-gray-600 my-2">{{ $item->description }}</p>
                <div class="text-blue-600 font-bold text-lg">{{ $item->price }} грн</div>
                <a href="/checkout/{{ $item->id }}"
                    class="mt-4 block text-center bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 w-full">
                    Купити
                </a>

            </div>
        @endforeach
    </div>
    <footer class="mt-20 p-6 text-center text-gray-400 border-t">
        <p>&copy; 2026 Магазин матраців</p>
        <a href="/admin" class="text-xs hover:text-gray-600 transition mt-2 inline-block">Вхід для адміністрації</a>
    </footer>
</body>

</html>
