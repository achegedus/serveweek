<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Users') }}
    </h2>
</x-slot>

<div class="pt-4 pb-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-button.primary wire:click="create" class="mb-3">New</x-button.primary>

        <x-table.table>
            <x-slot name="head">
                <x-table.header>Name</x-table.header>
                <x-table.header>Email</x-table.header>
{{--                <x-table.header>Roles</x-table.header>--}}
                <x-table.header></x-table.header>
            </x-slot>

            <x-slot name="body">
                @foreach ($users as $user)
                <x-table.row>
                    <x-table.cell>{{ $user->name }}</x-table.cell>
                    <x-table.cell>{{ $user->email }}</x-table.cell>
{{--                    <x-table.cell>Super Admin</x-table.cell>--}}
                    <x-table.cell>
                        <x-button.link wire:click="edit({{ $user->id }})">Edit</x-button.link>
                    </x-table.cell>
                </x-table.row>
                @endforeach
            </x-slot>
        </x-table.table>

    </div>

    <!-- Save Users Modal -->
    <form wire:submit.prevent="save">
        <x-modal.dialog wire:model.defer="showEditModal">
            <x-slot name="title">Edit User</x-slot>

            <x-slot name="content">
                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" wire:model="editing.name" name="name" id="name"
                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    @error('editing.name') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2 mt-3 mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="text" wire:model="editing.email" name="email" id="email"
                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    @error('editing.email') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                </div>

                <input type="text" wire:model="editing.password" name="password" id="password">
            </x-slot>

            <x-slot name="footer">
                <x-button.secondary wire:click="$set('showEditModal', false)">Cancel</x-button.primary>
                    <x-button.primary type="submit">Save</x-button.primary>
            </x-slot>
        </x-modal.dialog>
    </form>

</div>
