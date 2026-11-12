<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Inventaris Sekolah')</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@latest/dist/flowbite.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-100 font-sans antialiased">


    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="text-gray-500 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm p-2.5 ms-3 mt-3 inline-flex items-center sm:hidden focus:outline-none">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h10"/>
        </svg>
    </button>


    <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 bg-white border-r border-gray-200 flex flex-col justify-between" aria-label="Sidebar">
        
        <div>
            <div class="h-16 flex items-center px-6 border-b border-gray-200">
                <a href="{{ route('dashboard') }}" class="flex items-center gap-2">
                    <span class="text-xl font-bold text-blue-700">🗃️ Inventaris Sekolah</span>
                </a>
            </div>

            <div class="px-3 py-4">
                <ul class="space-y-2 font-medium">
                    <li>
                        <a href="{{ route('dashboard') }}" class="flex items-center p-3 text-gray-900 rounded-lg hover:bg-gray-100">
                            <svg class="w-5 h-5 text-gray-500 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6.025A7.5 7.5 0 1 0 17.975 14H10V6.025Z"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.5 3c-.169 0-.334.014-.5.025V11h7.975c.011-.166.025-.331.025-.5A7.5 7.5 0 0 0 13.5 3Z"/></svg>
                            <span class="ms-3">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('barangs.index') }}" class="flex items-center p-3 text-gray-900 rounded-lg hover:bg-gray-100">
                            <svg class="w-5 h-5 text-gray-500 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v14M9 5v14M4 5h16a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z"/></svg>
                            <span class="ms-3">Daftar Barang</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('kategoris.index') }}" class="flex items-center p-3 text-gray-900 rounded-lg hover:bg-gray-100}">
                            <svg class="w-5 h-5 text-gray-500 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18"><path d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM15 14H5v-1a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v1Z"/></svg>
                            <span class="ms-3">Daftar Kategori</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('transaksi-barangs.index') }}" class="flex items-center p-3 text-gray-900 rounded-lg hover:bg-gray-100">
                            <svg class="w-5 h-5 text-gray-500 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14 13 4 4L14 21m4-4H6m2-8L4 5l4-4m-4 4h12"/></svg>
                            <span class="ms-3">Transaksi Barang</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="p-4 border-t border-gray-200 bg-gray-50">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full text-left px-3 py-2 text-xs text-red-600 font-bold hover:bg-red-100 rounded-lg transition-colors flex items-center gap-2">
                    🚪 Logout Sistem
                </button>
            </form>
        </div>

    </aside>

    <div class="p-6 sm:ml-64 min-h-screen bg-white">
        <main>
            @yield('content')
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@latest/dist/flowbite.min.js"></script>
</body>
</html>