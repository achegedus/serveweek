<div class="container mx-auto">

    <div class="px-6 md:px-12 mt-10 relative">
        <a name="about"></a>
        <h1 class="font-bold text-3xl sm:text-4xl border-b-2 mb-4">Request a Project</h1>
        <div class="flex">
            <div class="font-normal text-xl w-1/2">
                <p class="mb-4">Please complete the project request form! If you're unable to complete the form, please
                    call 814.238.0822 ext 20! All types of projects can be requested - painting, yard work, cleaning and
                    organizing, baking, home repair/construction, visiting with folks, hosting events, roofing repairs
                    and more.</p>
                <p class="mb-4">While we strive to complete all requested projects, we can't commit to that. If you
                    request a painting, home repair, roofing or construction project, you'll hear from a ServeWeek
                    evaluator to schedule an appointment to learn more about your project. Evaluators will determine if
                    your project is within the scope of what ServeWeek is able to complete. We'll notify project
                    requestors at least one week prior to ServeWeek to confirm if we have volunteers for your
                    project.</p>
            </div>
            <div class="w-1/2 pl-5">
                <figure class="">
                    <img src="/images/DSC_0964.jpg" class="rounded-3xl mb-2 mt-5 shadow-2xl transform rotate-2">
                </figure>
            </div>
        </div>
    </div>


    <div class="hidden sm:block" aria-hidden="true">
        <div class="px-6 md:px-12 py-5">
            <div class="border-t border-gray-200"></div>
        </div>
    </div>

    <form wire:submit.prevent="saveProject" action="#" method="POST">
        <div class="px-6 md:px-12 mt-10 sm:mt-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Contact Information</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            So we can contact you or the project location if we have questions.
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-4">
                                    <label for="requester_name" class="block text-sm font-medium text-gray-700">Requester
                                        Name</label>
                                    <input type="text" wire:model="proj.requester_name" name="requester_name" id="requester_name" autocomplete="given-name"
                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @error('proj.requester_name') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="requester_email" class="block text-sm font-medium text-gray-700">Requester
                                        Email address</label>
                                    <input type="text" wire:model="proj.requester_email" name="requester_email" id="requester_email" autocomplete="email"
                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @error('proj.requester_email') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-6">
                                    <label for="requester_organization" class="block text-sm font-medium text-gray-700">Requester
                                        Organization</label>
                                    <input type="text" wire:model="proj.requester_organization" name="requester_organization" id="requester_organization"
                                           autocomplete="street-address"
                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @error('proj.requester_organization') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-span-6">
                                    <label for="requester_church" class="block text-sm font-medium text-gray-700">Requester
                                        Church</label>
                                    <input type="text" wire:model="proj.requester_church" name="requester_church" id="requester_church"
                                           autocomplete="street-address"
                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @error('proj.requester_church') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="event_poc" class="block text-sm font-medium text-gray-700">Event
                                        Contact Name</label>
                                    <input type="text" wire:model="proj.event_poc" name="event_poc" id="event_poc" autocomplete="given-name"
                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @error('proj.event_poc') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="event_phone" class="block text-sm font-medium text-gray-700">Event
                                        Contact Phone Number</label>
                                    <input type="text" wire:model="proj.event_phone" name="event_phone" id="event_phone" autocomplete="email"
                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @error('proj.event_phone') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hidden sm:block" aria-hidden="true">
            <div class="px-6 md:px-12 py-5">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>

        <div class="px-6 md:px-12 mt-10 sm:mt-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Project Location</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Location of where the work will be done.
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">

                                <div class="col-span-6">
                                    <label for="location_address" class="block text-sm font-medium text-gray-700">Street
                                        address</label>
                                    <input type="text" wire:model="proj.location_address" name="location_address" id="location_address"
                                           autocomplete="street-address"
                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @error('proj.location_address') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-span-6">
                                    <label for="location_address2" class="block text-sm font-medium text-gray-700">Street
                                        address 2</label>
                                    <input type="text" wire:model="proj.location_address2" name="location_address2" id="location_address2"
                                           autocomplete="street-address"
                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @error('proj.location_address2') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="location_city" class="block text-sm font-medium text-gray-700">City</label>
                                    <input type="text" wire:model="proj.location_city" name="location_city" id="location_city"
                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @error('proj.location_city') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="location_state" class="block text-sm font-medium text-gray-700">State /
                                        Province</label>
                                    <input type="text" wire:model="proj.location_state" name="location_state" id="location_state"
                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @error('proj.location_state') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="location_zipcode" class="block text-sm font-medium text-gray-700">ZIP /
                                        Postal</label>
                                    <input type="text" wire:model="proj.location_zipcode" name="location_zipcode" id="location_zipcode" autocomplete="postal-code"
                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @error('proj.location_zipcode') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="region_id" class="block text-sm font-medium text-gray-700">Region</label>
                                    <select id="region_id" wire:model="proj.region_id" name="region_id" autocomplete="region_id"
                                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option>Select one...</option>
                                        @foreach($regions as $region)
                                            <option value="{{$region->id}}">{{$region->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('proj.region_id') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="location_phone" class="block text-sm font-medium text-gray-700">Phone
                                        Number</label>
                                    <input type="text" wire:model="proj.location_phone" name="location_phone" id="location_phone" autocomplete="email"
                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @error('proj.location_phone') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hidden sm:block" aria-hidden="true">
            <div class="px-6 md:px-12 py-5">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>

        <div>
            <div class="px-6 md:px-12 md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Project Information</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Details about the project and the work to be done.
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                            <div>
                                <label for="project_description" class="block text-sm font-medium text-gray-700">
                                    Project Description
                                </label>
                                <div class="mt-1">
                                    <textarea id="project_description" wire:model="proj.project_description" name="project_description" rows="3"
                                              class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                                </div>
                                @error('proj.project_description') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                            </div>

                            <div>
                                <label for="project_direction" class="block text-sm font-medium text-gray-700">
                                    Directions
                                </label>
                                <div class="mt-1">
                                    <textarea id="project_direction" wire:model="proj.project_direction" name="project_direction" rows="3"
                                              class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                                </div>
                                @error('proj.project_direction') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                            </div>

                            <div>
                                <label for="project_parking" class="block text-sm font-medium text-gray-700">
                                    Parking
                                </label>
                                <div class="mt-1">
                                    <textarea id="project_parking" wire:model="proj.project_parking" name="project_parking" rows="3"
                                              class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                                </div>
                                @error('proj.project_parking') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                            </div>

                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="project_date" class="block text-sm font-medium text-gray-700">Project
                                        Date</label>
                                    <select id="project_date_id" wire:model="proj.project_date_id" name="project_date_id" autocomplete="country"
                                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option>Select one...</option>
                                        @foreach($project_dates as $project_date)
                                        <option value="{{$project_date->id}}">{{$project_date->formattedDate()}}</option>
                                        @endforeach
                                    </select>
                                    @error('proj.project_date') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="project_time" class="block text-sm font-medium text-gray-700">Preferred
                                        Time</label>
                                    <select id="project_time" wire:model="proj.project_time" name="project_time" autocomplete="country"
                                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option>Select one...</option>
                                        <option>Morning</option>
                                        <option>Afternoon</option>
                                        <option>Evening</option>
                                    </select>
                                    @error('proj.project_time') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="children_allowed" wire:model="proj.children_allowed" name="children_allowed" type="checkbox"
                                                   class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="children_allowed" class="font-medium text-gray-700">Children</label>
                                            <p class="text-gray-500">Check here if this project is appropriate for children
                                                to help.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="volunteers_needed" class="block text-sm font-medium text-gray-700"># of Volunteers needed</label>
                                    <input type="text" wire:model="proj.volunteers_needed" name="volunteers_needed" id="volunteers_needed" autocomplete="email"
                                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    @error('proj.volunteers_needed') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                                </div>
                            </div>



                            <div>
                                <label for="volunteer_use" class="block text-sm font-medium text-gray-700">
                                    How will volunteers be used?
                                </label>
                                <div class="mt-1">
                                    <textarea id="volunteer_use" wire:model="proj.volunteer_use" name="volunteer_use" rows="3"
                                              class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                                </div>
                                @error('proj.volunteer_use') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                            </div>

                            <div>
                                <label for="skills_requested" class="block text-sm font-medium text-gray-700">
                                    Skills Requested:
                                </label>
                                <div class="mt-1">
                                    <textarea id="skills_requested" wire:model="proj.skills_requested" name="skills_requested" rows="3"
                                              class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                                </div>
                                @error('proj.skills_requested') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                            </div>

                            <div>
                                <label for="materials_provided" class="block text-sm font-medium text-gray-700">
                                    Materials Provided
                                </label>
                                <div class="mt-1">
                                    <textarea id="materials_provided" wire:model="proj.materials_provided" name="materials_provided" rows="3"
                                              class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                                </div>
                                @error('proj.materials_provided') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                            </div>

                            <div>
                                <label for="materials_not_provided" class="block text-sm font-medium text-gray-700">
                                    Materials Not Provided
                                </label>
                                <div class="mt-1">
                                    <textarea id="materials_not_provided" wire:model="proj.materials_not_provided" name="materials_not_provided" rows="3"
                                              class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                                </div>
                                @error('proj.materials_not_provided') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror

                            </div>


                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit"
                                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Submit Project
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Delete date Modal -->
    <x-modal.dialog wire:model.defer="projectSubmittedModal">
        <x-slot name="title">Thank You!</x-slot>

        <x-slot name="content">
            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                <h4>Your project was submitted, we'll contact you soon!</h4>
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-button.primary type="button" wire:click.prevent="$set('projectSubmittedModal', false)">OK</x-button.primary>
        </x-slot>
    </x-modal.dialog>
</div>
