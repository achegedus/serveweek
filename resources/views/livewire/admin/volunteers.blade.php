<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Volunteers') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">

                        <x-table.table>
                            <x-slot name="head">
                                <x-table.header>Name</x-table.header>
                                <x-table.header>Email</x-table.header>
                                <x-table.header>Phone</x-table.header>
                                <x-table.header># Vols</x-table.header>
                                <x-table.header>Project</x-table.header>
                            </x-slot>

                            <x-slot name="body">
                                @forelse ($volunteers as $volunteer)
                                    <x-table.row>
                                        <x-table.cell>{{ $volunteer->name }}</x-table.cell>
                                        <x-table.cell>{{ $volunteer->email }}</x-table.cell>
                                        <x-table.cell>{{ $volunteer->phone }}</x-table.cell>
                                        <x-table.cell>{{ $volunteer->numberOfVolunteers }}</x-table.cell>
                                        <x-table.cell>{{ $volunteer->project->formattedID() }}</x-table.cell>
                                    </x-table.row>
                                @empty
                                    <x-table.row>
                                        <x-table.cell colspan="7">
                                            <div class="flex justify-center items-center space-x-2">
                                                <span class="font-medium py-8 text-cool-gray-400 text-xl">No Volunteers found...</span>
                                            </div>
                                        </x-table.cell>
                                    </x-table.row>
                                @endforelse
                            </x-slot>
                        </x-table.table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
