<div>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Categories') }} {{ $showEditModal }}
            </h2>
        </div>
    </x-slot>

    <div class="pt-4 pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-button.primary wire:click="create" class="mb-3">New</x-button.primary>
            <x-table.table>
                <x-slot name="head">
                    <x-table.header>Name</x-table.header>
                    <x-table.header>Description</x-table.header>
                    <x-table.header></x-table.header>
                </x-slot>

                <x-slot name="body">
                    @forelse ($categories as $category)
                        <x-table.row>
                            <x-table.cell>{{ $category->name }}</x-table.cell>
                            <x-table.cell>{{ $category->description }}</x-table.cell>
                            <x-table.cell>
                                <x-button.link wire:click="edit({{ $category->id }})">Edit</x-button.link>
                            </x-table.cell>
                        </x-table.row>
                    @empty
                        <x-table.row>
                            <x-table.cell colspan="3">
                                <div class="flex justify-center items-center space-x-2">
                                    <span class="font-medium py-8 text-cool-gray-400 text-xl">No categories found...</span>
                                </div>
                            </x-table.cell>
                        </x-table.row>
                    @endforelse
                </x-slot>
            </x-table.table>

        </div>
    </div>

    <!-- Save Category Modal -->
    <form wire:submit.prevent="save">
        <x-modal.dialog wire:model.defer="showEditModal">
            <x-slot name="title">Edit Category</x-slot>

            <x-slot name="content">
                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" wire:model="editing.name" name="name" id="name"
                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    @error('editing.name') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2 mt-3 mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <input type="text" wire:model="editing.description" name="description" id="description"
                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    @error('editing.description') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-button.secondary wire:click="$set('showEditModal', false)">Cancel</x-button.primary>
                    <x-button.primary type="submit">Save</x-button.primary>
            </x-slot>
        </x-modal.dialog>
    </form>
</div>
