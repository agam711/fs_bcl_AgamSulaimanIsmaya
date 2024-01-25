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
                            <a class="btn btn-warning text-white px-4 py-2 " href="{{ route('viewArmada') }}"> < Kembali</a>
                        </div>  
                        <div class="card-body">
                            <form action="{{ route('armadas.store') }}" method="POST">
                                @csrf
                                <label class="form-control w-full max-w-xs">
                                    <div class="label">
                                        <span class="label-text">Jenis Kendaraan</span>
                                    </div>
                                    <input name="jenis_kendaraan" type="text" placeholder="Type here"
                                        class="input input-bordered w-full max-w-xs text-white" />
                                </label>
                                <label class="form-control w-full max-w-xs">
                                    <div class="label">
                                        <span class="label-text">Kapasitas</span>
                                    </div>
                                    <input name="kapasitas" type="text" placeholder="Type here"
                                        class="input input-bordered w-full max-w-xs text-white" />
                                </label>
                                <label for="form-control w-full max-w-xs">
                                    <div class="label">
                                        <span class="label-text">Status</span>
                                    </div>
                                        <select name="status" class="select select-bordered w-full max-w-xs text-white">
                                            <option value="tersedia">tersedia</option>
                                            <option value="tidak tersedia">tidak tersedia</option>
                                        </select>
                                    
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