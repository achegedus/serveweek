<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Projects') }}
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
                                <x-table.header>ID</x-table.header>
                                <x-table.header>Address</x-table.header>
                                <x-table.header>Status</x-table.header>
                                <x-table.header>Date</x-table.header>
                                <x-table.header>Time</x-table.header>
                                <x-table.header>Requester</x-table.header>
                                <x-table.header># Vols</x-table.header>
                                <x-table.header></x-table.header>
                                <x-table.header></x-table.header>
                                <x-table.header></x-table.header>
                            </x-slot>

                            <x-slot name="body">
                                @forelse ($projects as $project)
                                    <x-table.row>
                                        <x-table.cell>{{ $project->formattedID() }}</x-table.cell>
                                        <x-table.cell>{{ $project->truncated_address(25) }}</x-table.cell>
                                        <x-table.cell>{{ $project->status() }}</x-table.cell>
                                        <x-table.cell>{{ $project->workdate->formattedDate() }}</x-table.cell>
                                        <x-table.cell>{{ $project->project_time }}</x-table.cell>
                                        <x-table.cell>{{ $project->requester_name }}</x-table.cell>
                                        <x-table.cell class="font-bold {{ $project->isFilled === 1 ? 'text-green-600' : 'text-red-800' }}">{{ $project->registeredVolunteers }} of {{ $project->volunteers_needed }}</x-table.cell>
                                        <x-table.cell><a href="/admin/projects/{{$project->id}}">Edit</a></x-table.cell>
                                        <x-table.cell>
                                            <x-button.link wire:click="delete_id({{ $project->id }})">Delete</x-button.link>
                                        </x-table.cell>
                                        <x-table.cell><a href="/admin/projects/sheet/{{$project->id}}">Sheet</a></x-table.cell>
                                    </x-table.row>
                                @empty
                                    <x-table.row>
                                        <x-table.cell colspan="7">
                                            <div class="flex justify-center items-center space-x-2">
                                                <span class="font-medium py-8 text-cool-gray-400 text-xl">No Projects found...</span>
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

    <!-- Delete date Modal -->
    <x-modal.dialog wire:model.defer="showDeleteModal">
        <x-slot name="title">Delete Project?</x-slot>

        <x-slot name="content">
            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <h4>Are you sure you want to delete this Project?</h4>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-button.secondary wire:click="$set('showDeleteModal', false)">Cancel</x-button.primary>
            <x-button.primary type="button" wire:click.prevent="delete()">Delete</x-button.primary>
        </x-slot>
    </x-modal.dialog>

</div>
