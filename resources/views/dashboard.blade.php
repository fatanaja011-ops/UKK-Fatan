@extends ('layout.app')

@section('content')
        <div class="grid grid-cols-3 gap-4 mb-4">
            <div class="bg-neutral-primary-soft block max-w-sm p-6 border border-default rounded-base shadow-xs">
                <h5 class="mb-3 text-2xl font-semibold tracking-tight text-heading leading-8">Jumlah Barang</h5>
                <p class="text-body mb-6">{{ $totalBarangs }}</p>
            </div>
            <div class="bg-neutral-primary-soft block max-w-sm p-6 border border-default rounded-base shadow-xs">
                <h5 class="mb-3 text-2xl font-semibold tracking-tight text-heading leading-8">Jumlah Kategori</h5>
                <p class="text-body mb-6">{{ $totalKategoris }}</p>
            </div>
            <div class="bg-neutral-primary-soft block max-w-sm p-6 border border-default rounded-base shadow-xs">
                <h5 class="mb-3 text-2xl font-semibold tracking-tight text-heading leading-8">Jumlah Transaksi</h5>
                <p class="text-body mb-6">{{ $totalTransaksis }}</p>
            </div>
        </div>

@endsection