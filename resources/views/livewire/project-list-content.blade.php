<div class="w-full" wire:key="projects_list">
    <div class="grid md:grid-cols-2 gap-4 pl-4 pr-4" wire:key="project_list_grid">
        @foreach($projects as $project)
            <livewire:project-list-item :project="$project" wire:key="project-{{ $project->id }}" />
        @endforeach
    </div>
</div>
