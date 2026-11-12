@extends ('layout.app')

@section('content')
<div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold text-gray-800">Data Kategori</h1>
        <a href="{{ route('kategoris.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-4 py-2">
            + Tambah Kategori
        </a>
    </div>
    <table class="w-full text-sm text-left rtl:text-right text-body">
        <thead class="text-sm text-body bg-neutral-secondary-medium border-b border-default-medium">
            <tr>
                <th scope="col" class="px-6 py-3 font-medium">No</th>
                <th scope="col" class="px-6 py-3 font-medium">Nama kategori</th>
                <th scope="col" class="px-6 py-3 font-medium">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($kategoris as $index => $kategori)
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4">{{ $index + 1 }}</td>
                        <td class="px-6 py-4 font-medium text-gray-900">{{ $kategori->nama_kategori }}</td>
                        <td class="px-6 py-4 text-center">
                            <a href="{{ route('kategoris.edit', $kategori->id) }}" class="font-medium text-blue-600 hover:underline mr-3">Edit</a>
                            
                            <form action="{{ route('kategoris.destroy', $kategori->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus kategori ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-medium text-red-600 hover:underline">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="px-6 py-4 text-center text-gray-500">Belum ada data kategori.</td>
                    </tr>
                @endforelse
        </tbody>
    </table>
</div>

@endsection