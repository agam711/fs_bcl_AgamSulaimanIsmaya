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
                            @if(auth()->user()->usertype=="admin")
                            <a href={{ route('viewArmada') }} class="btn btn-primary">View Armada</a>
                            @endif
                            <a href={{ route('viewStorePesanan') }} class="btn btn-primary">View pesanan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>