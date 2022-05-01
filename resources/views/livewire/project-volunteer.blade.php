<div class="">
    <div class="flex justify-center">

        @if (!$showThankYou)
        <div class="w-1/2 p-6 border border-gray-400 mt-10 rounded-xl shadow-lg bg-white mb-20">
            <div class="w-full flex items-center">
                <img src="/images/ServeWeekLogo.png" width="160"/>
                <div class="flex-grow"></div>
                <x-button.secondary wire:click="goBack()" class="">Back</x-button.secondary>
            </div>

            <div>
                <table class="table-auto mb-5" cellpadding="5">
                    <tr>
                        <th class="text-right w-1/3" valign="top">Location:</th>
                        <td>{{$project->location_address}}</td>
                    </tr>

                    <tr>
                        <th></th>
                        <td>{{$project->location_city}}
                            , {{$project->location_state}} {{$project->location_zipcode}}</td>
                    </tr>

                    <tr>
                        <th class="text-right" valign="top">Categories: </Req>:</th>
                        <td>{{$project->category_list()}}</td>
                    </tr>

                    <tr>
                        <th class="text-right" valign="top">Date/Time:</th>
                        <td>{{$project->workdate->formattedDate()}}, {{$project->project_time}}</td>
                    </tr>

                    <tr>
                        <th class="text-right" valign="top">Volunteers Needed:</th>
                        <td>{{$project->availableSlots()}}</td>
                    </tr>

                    <tr>
                        <th class="text-right" valign="top">Project Description:</th>
                        <td>{{$project->project_description}}</td>
                    </tr>

                    <tr>
                        <th class="text-right" valign="top">Skills Requested: </Req></th>
                        <td>{{$project->skills_requested}}</td>
                    </tr>

                    <tr>
                        <th class="text-right" valign="top">Materials Provided: </Req></th>
                        <td>{{$project->materials_provided}}</td>
                    </tr>

                    <tr>
                        <th class="text-right" valign="top">Materials Not Provided: </Req></th>
                        <td>{{$project->materials_not_provided}}</td>
                    </tr>

                </table>
            </div>

            <form wire:submit.prevent="saveVolunteer" class="border-t pt-4">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" wire:model="newvol.name" name="name" id="name" autocomplete="given-name"
                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('newvol.name')
                        <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="email" class="block text-sm font-medium text-gray-700">
                            Email Address</label>
                        <input type="text" wire:model="newvol.email" name="email" id="email" autocomplete="email"
                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('newvol.email')
                        <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                        <input type="text" wire:model="newvol.phone" name="phone" id="phone"
                               autocomplete="street-address"
                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('newvol.phone')
                        <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="church" class="block text-sm font-medium text-gray-700">Church</label>
                        <input type="text" wire:model="newvol.church" name="church" id="church"
                               autocomplete="street-address"
                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('newvol.church')
                        <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-span-3 sm:col-span-3">
                        <label for="numberOfVolunteers" class="block text-sm font-medium text-gray-700">Total Number of
                            Volunteers</label>
                        <input type="text" wire:model="newvol.numberOfVolunteers" name="numberOfVolunteers"
                               id="numberOfVolunteers" autocomplete="given-name"
                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('newvol.numberOfVolunteers')
                        <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                    </div>
                </div>

                <div class="text-right mt-10">
                    <button type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Signup!
                    </button>
                </div>
            </form>
        </div>
        @endif

        @if ($showThankYou)
        <div class="w-1/2 p-6 border border-gray-400 mt-10 rounded-xl shadow-lg bg-white mb-20">
            <div class="w-full flex items-center">
                <img src="/images/ServeWeekLogo.png" width="160"/>
                <div class="flex-grow"></div>
                <x-button.secondary wire:click="goBack()" class="">Back</x-button.secondary>
            </div>

            <div class="mt-10 mb-5">
                <h1 class="font-bold text-2xl mb-2">Thank you!</h1>
                Thank you for registering for this project! We've sent an email confirmation, but we'll be in touch about this project.
            </div>

        </div>
        @endif
    </div>
</div>
