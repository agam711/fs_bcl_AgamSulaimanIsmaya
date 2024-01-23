<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="card bg-white">
                        <div class="card-body">
                            <form action="{{ route('armadas.store') }}" method="POST">
                                @csrf
                                <textarea name="jenis_kendaraan" class="textarea textarea-bordered textarea-lg w-full" rows="3" placeholder="Haloo!"></textarea>
                                <textarea name="kapasitas" class="textarea textarea-bordered textarea-lg w-full" rows="3" placeholder="Haloo!"></textarea>
                                <select name="status" class="form-control">
                                    <option value="tersedia">tersedia</option>
                                    <option value="tdk tersedia">tdk tersedia</option>
                                </select>
                                <input type="submit" value="Post" class="btn btn-success">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
