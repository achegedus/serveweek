<div class="bg-gray-200 p-3 shadow-lg rounded-xl flex flex-col h-80">
    <div>
        <h3 class="border-b-2 border-gray-300 font-bold">Project {{ $project->formattedId() }}</h3>
    </div>

    <div class="flex-grow">
        <p class="mb-2 mt-1 font-bold text-sm">{{$project->workdate->formattedDate()}}, {{$project->project_time}}</p>
        <p class="text-sm"><b>Categories:</b> {{ $project->category_list() }}</p>
        <p class="text-sm"><b>Region:</b> {{$project->region->name}}</p>
        <p class="text-sm"><b>Volunteers Needed:</b> {{$project->availableSlots()}}</p>

        <p class="mt-2">{{$project->truncated_description(150)}}</p>
    </div>

    <div class="border-t-2 border-gray-300 text-right">
        <a href="/volunteer/project/{{$project->id}}"><x-button.primary class="mt-2">Project Details</x-button.primary></a>
    </div>
</div>
