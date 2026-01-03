<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Оформлення замовлення</title>
</head>

<body class="bg-gray-100 p-10">
    <div class="max-w-md mx-auto bg-white p-8 rounded-xl shadow-lg">
        <a href="/" class="text-blue-500 text-sm mb-4 inline-block">← Назад до каталогу</a>
        <h1 class="text-2xl font-bold mb-4">Оформлення замовлення</h1>

        <div class="border-b pb-4 mb-4">
            <p class="text-gray-600">Ви купуєте:</p>
            <p class="font-bold text-lg text-gray-900">{{ $mattress->name }}</p>
            <p class="text-blue-600 font-bold">{{ $mattress->price }} грн</p>
        </div>

        <form action="/order-success" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700">Ваше ім'я</label>
                <input type="text" name="name" required
                    class="w-full border rounded-lg p-2 mt-1 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Номер телефону</label>
                <input type="tel" name="phone" placeholder="+380" required
                    class="w-full border rounded-lg p-2 mt-1">
            </div>
            <button type="submit"
                class="w-full bg-green-600 text-white font-bold py-3 rounded-lg hover:bg-green-700 transition">
                Підтвердити замовлення
            </button>
        </form>
    </div>
</body>

</html>
