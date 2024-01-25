<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-black-900">
                    <div class="card bg-white flex flex-col">
                        <div class="flex justify-between items-center p-4">
                            <h1 class="text-lg text-black font-extrabold">Data Armada</h1>
                            <a class="btn btn-success px-4 py-2 " href="{{ route('viewStoreArmada') }}">Tambah +</a>
                        </div>
                        <div class="card-body">
                            <div class="overflow-x-auto">
                                <table class="table text-black">
                                    <thead>
                                        <tr class="text-black">
                                            <th>
                                                No. Armada
                                            </th>
                                            <th>
                                                Jenis Kendaraan
                                            </th>
                                            <th>
                                                Kapasitas
                                            </th>
                                            <th>
                                                Status
                                            </th>
                                            <th>
                                                Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($armadas as $armada)
                                        <tr>
                                            <td>{{ $armada->id }}</td>
                                            <td>{{ $armada->jenis_kendaraan }}</td>
                                            <td>{{ $armada->kapasitas }}</td>
                                            <td>{{ $armada->status }}</td>
                                            <td>
                                                <button class="btn btn-primary"
                                                    onclick="updateArmada{{ $armada->id }}.showModal()">Edit</button>
                                                <button class="btn btn-error"
                                                    onclick="destroyArmada{{ $armada->id }}.showModal()">Hapus</button>
                                                {{-- Start Deit Modal --}}
                                                <dialog id="updateArmada{{ $armada->id }}" class="modal">
                                                    <div class="modal-box inline-flex">
                                                        <h3 class="font-bold text-lg">Armada : </h3>
                                                        <div class="modal-action">
                                                            <form method="dialog" class="modal-backdrop">
                                                                <button
                                                                    class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2 text-white">✕</button>
                                                            </form>
                                                            <form action="{{ route('armadas.update') }}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="id"
                                                                    value="{{ $armada->id }}">
                                                                <label class="form-control w-full max-w-xs">
                                                                    <div class="label">
                                                                        <span class="label-text">Jenis Kendaraan</span>
                                                                    </div>
                                                                    <input name="jenis_kendaraan" type="text"
                                                                        placeholder="Masukkan Jenis Kendaraan"
                                                                        class="input input-bordered w-full max-w-xs text-white"
                                                                        value="{{ old('jenis_kendaraan', $armada->jenis_kendaraan) }}" />
                                                                </label>
                                                                <label class="form-control w-full max-w-xs">
                                                                    <div class="label">
                                                                        <span class="label-text">Kapasitas</span>
                                                                    </div>
                                                                    <input name="kapasitas" type="number"
                                                                        placeholder="Masukkan Kapasitas"
                                                                        class="input input-bordered w-full max-w-xs text-white"
                                                                        value="{{ old('jenis_kendaraan', $armada->kapasitas) }}" />
                                                                </label>
                                                                <label for="form-control w-full max-w-xs">
                                                                    <div class="label">
                                                                        <span class="label-text">Status</span>
                                                                    </div>
                                                                    <select name="status"
                                                                        class="select select-bordered w-full max-w-xs text-white">
                                                                        <option value="tersedia">tersedia</option>
                                                                        <option value="tidak_tersedia">tidak tersedia
                                                                        </option>
                                                                    </select>
                                                                </label>
                                                                <button type="submit"
                                                                    class="btn btn-success mt-4">Simpan</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </dialog>
                                                {{-- End Edit Modal --}}
                                                {{-- Start Destroy modal --}}
                                                <dialog id="destroyArmada{{ $armada->id }}" class="modal">
                                                    <div class="modal-box text-white">
                                                        <h3 class="font-bold text-lg">Apakah anda yakin ingin menghapus
                                                            Armada ID : {{ $armada->id }}</h3>
                                                        </p>
                                                        <div class="modal-action flex justify-between">
                                                            <button class="btn btn-error"
                                                                onclick="destroyArmada{{ $armada->id }}.close()">Close</button>
                                                            <form action="{{ route('armadas.destroy') }}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="id"
                                                                    value="{{ $armada->id }}">
                                                                <button class="btn btn-success">Submit</button>
                                                            </form>

                                                        </div>
                                                    </div>
                                                </dialog>
                                                {{-- End Destroy Modal --}}
                                            </td>
                                        </tr>
                                        @endforeach
                                        {{ $armadas->links() }}
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>