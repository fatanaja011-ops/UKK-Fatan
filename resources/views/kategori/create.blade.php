@extends ('layout.app')

@section('content')
<body class="bg-gray-100 p-6">
    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4 text-gray-800">Tambah Kategori</h1>

        <form action="{{ route('kategoris.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Nama Kategori:</label>
                <input type="text" name="nama_kategori" class="w-full border border-gray-300 p-2 rounded-md" required value="{{ old('nama_kategori') }}" placeholder="Furnitur">
            </div>

            <div class="flex justify-between items-center">
                <a href="{{ route('kategoris.index') }}" class="text-gray-600 hover:underline">Kembali</a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Simpan</button>
            </div>
        </form>
    </div>
@endsection