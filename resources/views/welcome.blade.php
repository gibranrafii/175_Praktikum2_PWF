<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 1</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-[#0a0a0a] text-white flex items-center justify-center min-h-screen m-0">
    <div class="border border-[#2a2a2a] bg-[#141414] rounded-lg p-12 md:p-16 w-full max-w-4xl mx-4">
        <h1 class="text-lg md:text-xl font-semibold text-[#f1f1f1] leading-tight mb-1">Gibran Rafi Pratama</h1>
        <p class="text-sm md:text-[15px] text-[#888888] mb-6">20230140175</p>

        <div class="flex flex-wrap gap-4 items-center">
            <button
                class="bg-[#f4f4f4] text-[#111111] px-5 py-2 rounded hover:bg-[#e0e0e0] transition-colors font-medium text-[15px]">
                Modul Pertemuan 1
            </button>

            @auth
                <a href="{{ url('/dashboard') }}"
                    class="bg-[#2a2a2a] text-white px-5 py-2 rounded hover:bg-[#3a3a3a] transition-colors border border-[#444] font-medium text-[15px] text-center">
                    Dashboard
                </a>
            @else
                <a href="{{ route('login') }}"
                    class="bg-[#2a2a2a] text-white px-5 py-2 rounded hover:bg-[#3a3a3a] transition-colors border border-[#444] font-medium text-[15px] text-center">
                    Login
                </a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="text-[#888888] px-5 py-2 hover:text-white transition-colors font-medium text-[15px] text-center">
                        Register
                    </a>
                @endif
            @endauth
        </div>
    </div>
</body>

</html>