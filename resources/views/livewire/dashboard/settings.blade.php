<div>
    <h3 class="font-bold text-xl mb-8">Settings:</h3>
    <div>
        <style>
            input:checked ~ .dot {
                transform: translateX(100%);
                background-color: #48bb78;
            }
        </style>

        <div class="flex items-center w-full mb-8">

            <label for="toggle-a" class="flex items-center cursor-pointer">
                <!-- toggle -->
                <div class="relative">
                <!-- input -->
                <input type="checkbox" wire:change="updateSubmitSetting" id="toggle-a" wire:model="showSubmit" class="sr-only">
                <!-- line -->
                <div class="block bg-gray-600 w-14 h-8 rounded-full"></div>
                <!-- dot -->
                <div class="dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition"></div>
                </div>
                <!-- label -->
                <div class="ml-3 text-gray-700 font-medium">Turn on submit projects</div>
            </label>

        </div>

        <div class="flex items-center w-full">

            <label for="toggle-b" class="flex items-center cursor-pointer">
                <!-- toggle -->
                <div class="relative">
                <!-- input -->
                <input type="checkbox" wire:change="updateVolunteerSetting" wire:model="showVolunteer" id="toggle-b" class="sr-only">
                <!-- line -->
                <div class="block bg-gray-600 w-14 h-8 rounded-full"></div>
                <!-- dot -->
                <div class="dot absolute left-1 top-1 bg-white w-6 h-6 rounded-full transition"></div>
                </div>
                <!-- label -->
                <div class="ml-3 text-gray-700 font-medium">Turn on volunteer for projects</div>
            </label>

        </div>
    </div>
</div>
