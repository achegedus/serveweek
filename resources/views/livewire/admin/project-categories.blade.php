<div class="flex items-start mt-6">
    <div class="flex items-center h-5">
        <input id="category-{{$category->id}}" wire:change="categoryChange({{$category->id}})" name="is_confirmed" type="checkbox" @if ($checked) checked="checked" @endif
               class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
    </div>
    <div class="ml-3 text-sm">
        <label for="category-{{$category->id}}" class="font-medium text-gray-700">{{$category->name}}</label>
        <p class="text-gray-500">{{$category->description}}</p>
    </div>
</div>
