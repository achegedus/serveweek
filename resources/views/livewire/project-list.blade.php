<div class="container mx-auto px-6 md:px-12 mt-10" wire:key="project-search">
    <a name="search"></a>
    <h1 class="font-bold text-3xl sm:text-4xl border-b-2 mb-4">Volunteer for a ServeWeek Project</h1>
    <div class="flex">
{{--        <div class="w-1/5 text-sm" wire:key="project-filters">--}}
{{--            <h3 class="text-xl font-bold border-b-2 border-gray-300 mb-2">Regions</h3>--}}
{{--            <div wire:key="foo">--}}
{{--                @foreach($region_list as $region)--}}
{{--                    <div wire:key="region-{{ $region->id }}">--}}
{{--                        <button wire:click.prevent="toggleRegion({{$region->id}})">{{$region->name}}</button>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}

{{--            <h3 class="text-xl font-bold mt-8 border-b-2 border-gray-300 mb-2">Categories</h3>--}}
{{--            <div wire:key="bar">--}}
{{--                @foreach($category_list as $category)--}}
{{--                    <div wire:key="category-{{ $category->id }}">--}}
{{--                        <button wire:click.prevent="toggleCategory({{$category->id}})">{{$category->name}}</button>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}

        <livewire:project-list-content />
{{--        @livewire('project-list-content')--}}
    </div>
</div>
