<div class="container mx-auto px-6 md:px-12 mt-10">
    <a name="search"></a>
    <h1 class="font-bold text-3xl sm:text-4xl border-b-2 mb-4">Volunteer for a ServeWeek Project</h1>

    <div class="flex">
        <div class="w-1/5 text-sm">
            <h3 class="text-xl font-bold border-b-2 border-gray-300 mb-2">Regions</h3>
            @foreach($regions as $region)
                <div><a class="text-purple-700 underline" href="/volunteer#search?region={{$region->id}}">{{$region->name}}</a></div>
            @endforeach

            <h3 class="text-xl font-bold mt-8 border-b-2 border-gray-300 mb-2">Categories</h3>
            @foreach($categories as $category)
                <a class="text-purple-700 underline"  href="/volunteer#search?region={{$category->id}}"><div>{{$category->name}}</div></a>
            @endforeach
        </div>

        <div class="w-4/5">
            <div class="grid md:grid-cols-2 gap-4 pl-4 pr-4">
                @foreach($projects as $project)
                    <livewire:project-list-item :project="$project"></livewire:project-list-item>
                @endforeach
            </div>
        </div>
    </div>
</div>
