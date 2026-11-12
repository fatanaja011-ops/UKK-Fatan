@extends('layout.app')

@section('content')

<div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold text-gray-800">Data Kamera / Barang</h1>
        <a href="{{ route('barangs.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-4 py-2 whitespace-nowrap">
                + Tambah Data
        </a>
    </div>
    <table class="w-full text-sm text-left rtl:text-right text-body">
        <thead class="text-sm text-body bg-neutral-secondary-medium border-b border-default-medium">
            <tr>
                <th scope="col" class="px-6 py-3 font-medium">No</th>
                <th scope="col" class="px-6 py-3 font-medium">Nama Barang</th>
                <th scope="col" class="px-6 py-3 font-medium">Kategori</th>
                <th scope="col" class="px-6 py-3 font-medium">Stok</th>
                <th scope="col" class="px-6 py-3 font-medium">Lokasi</th>
                <th scope="col" class="px-6 py-3 font-medium">Kondisi</th>

        </thead>
        <tbody>
            <tr class="bg-neutral-primary-soft border-b border-default hover:bg-neutral-secondary-medium">
                <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                    1
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                    Meja
                </th>
                <td class="px-6 py-4">
                    Furnitur
                </td>
                <td class="px-6 py-4">
                    3
                </td>
                <td class="px-6 py-4">
                    Gudang A
                </td>
                <td class="px-6 py-4">
                    Baik
                </td>
            </tr>
            <tr class="bg-neutral-primary-soft border-b border-default hover:bg-neutral-secondary-medium">
                <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                    2
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                    Kursi
                </th>
                <td class="px-6 py-4">
                    Furnitur
                </td>
                <td class="px-6 py-4">
                    3
                </td>
                <td class="px-6 py-4">
                    Gudang A
                </td>
                <td class="px-6 py-4">
                    Baik
                </td>
            </tr>
            <tr class="bg-neutral-primary-soft hover:bg-neutral-secondary-medium">
                <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                    3
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                    Papan Tulis
                </th>
                <td class="px-6 py-4">
                    Furnitur
                </td>
                <td class="px-6 py-4">
                    1
                </td>
                <td class="px-6 py-4">
                    Gudang A
                </td>
                <td class="px-6 py-4">
                    Baik
                </td>
            </tr>
        </tbody>
    </table>
</div>


@endsection