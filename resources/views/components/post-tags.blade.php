@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv);
@endphp

<ul class="flex">
    @foreach ($tags as $tag)
        <li
            class="flex items-center justify-center bg-gray-200 rounded-lg py-1 px-3 mr-2 text-xs hover:bg-blue-500 transition-colors hover:text-white">
            <a href="/?tag={{ $tag }}">{{ $tag }}</a>
        </li>
    @endforeach
</ul>
