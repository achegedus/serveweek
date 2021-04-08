<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Project Dates') }}
        </h2>
    </x-slot>

    <div class="pt-4 pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-button.primary wire:click="create" class="mb-3">New</x-button.primary>
            <x-table.table>
                <x-slot name="head">
                    <x-table.header>Date</x-table.header>
                    <x-table.header></x-table.header>
                    <x-table.header></x-table.header>
                </x-slot>

                <x-slot name="body">
                    @forelse ($project_dates as $project_date)
                        <x-table.row>
                            <x-table.cell>{{ $project_date->formattedDate() }}</x-table.cell>
                            <x-table.cell>
                                <x-button.link wire:click="edit({{ $project_date->id }})">Edit</x-button.link>
                            </x-table.cell>
                            <x-table.cell>
                                <x-button.link wire:click="delete_id({{ $project_date->id }})">Delete</x-button.link>
                            </x-table.cell>
                        </x-table.row>
                    @empty
                        <x-table.row>
                            <x-table.cell colspan="3">
                                <div class="flex justify-center items-center space-x-2">
                                    <span class="font-medium py-8 text-cool-gray-400 text-xl">No regions found...</span>
                                </div>
                            </x-table.cell>
                        </x-table.row>
                    @endforelse
                </x-slot>
            </x-table.table>
        </div>
    </div>

    <!-- Save Region Modal -->
    <form wire:submit.prevent="save">
        <x-modal.dialog wire:model.defer="showEditModal">
            <x-slot name="title">Edit Project Date</x-slot>

            <x-slot name="content">
                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                    <label for="project_date" class="block text-sm font-medium text-gray-700">Date</label>
                    <input type="text" wire:model.lazy="editing.project_date" name="project_date" id="project_date" placeholder="YYYY-MM-DD"
                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    @error('editing.project_date') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>

            </x-slot>

            <x-slot name="footer">
                <x-button.secondary wire:click="$set('showEditModal', false)">Cancel</x-button.primary>
                    <x-button.primary type="submit">Save</x-button.primary>
            </x-slot>
        </x-modal.dialog>
    </form>


    <!-- Delete date Modal -->
    <x-modal.dialog wire:model.defer="showDeleteModal">
        <x-slot name="title">Delete Project Date</x-slot>

        <x-slot name="content">
            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <h4>Are you sure you want to delete this Project Date?</h4>
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-button.secondary wire:click="$set('showDeleteModal', false)">Cancel</x-button.primary>
                <x-button.primary type="button" wire:click.prevent="delete()">Delete</x-button.primary>
        </x-slot>
    </x-modal.dialog>
</div>
