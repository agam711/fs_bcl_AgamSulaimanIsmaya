<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-black">
                    <div class="card bg-white flex flex-col">
                        <div class="flex justify-between items-center p-4">
                            <h2 class="">Data Armada</h2>
                            <a class="btn btn-warning text-white px-4 py-2 " href="{{ route('viewArmada') }}">
                                < Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('pesanan.store') }}" method="POST">
                                @csrf
                                <label class="form-control w-full max-w-xs">
                                    <div class="label">
                                        <span class="label-text">Pilih Armada</span>
                                    </div>
                                    <select name="armada_id" class="select select-bordered w-full max-w-xs text-white" aria-placeholder="Pilih">
                                        @foreach ($armada as $unit )
                                        <option value="{{ $unit->id }}">{{ $unit->jenis_kendaraan }}</option>
                                        @endforeach
                                    </select>
                                </label>
                                
                                <label class="form-control w-full max-w-xs">
                                    <div class="label">
                                        <span class="label-text">Berat Barang</span>
                                    </div>
                                    <input name="berat_barang" type="number" placeholder="Type here"
                                        class="input input-bordered w-full max-w-xs text-white" />
                                </label>

                                <label class="form-control w-full max-w-xs">
                                    <div class="label">
                                        <span class="label-text">Detail Barang</span>
                                    </div>
                                    <textarea name="detail_barang" placeholder="Type here"
                                        class="textarea textarea-bordered textarea-lg w-full text-white"></textarea>
                                </label>

                                <label class="form-control w-full max-w-xs">
                                    <div class="label">
                                        <span class="label-text">Tgl Pesan</span>
                                    </div>
                                    <input name="tgl_psn" type="date"
                                        class="input input-bordered w-full max-w-xs text-white" />
                                </label>
                                <div>
                                    <input type="submit" class="btn btn-success mt-4">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>