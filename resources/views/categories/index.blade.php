<x-app-layout>
    @foreach ($categories as $category)
{{        $category->name
}}    @endforeach
</x-app-layout>