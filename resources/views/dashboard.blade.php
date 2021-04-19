<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="py-6 px-6 bg-white border-b border-gray-200 font-bold text-2xl">Dashboard</div>

                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-8">Stats:</h3>
                    </div>

                    <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
                        <livewire:dashboard.settings />
                    </div>

                    <div class="p-6 border-t border-gray-200">

                    </div>

                    <div class="p-6 border-t border-gray-200 md:border-l">

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
