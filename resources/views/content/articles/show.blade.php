<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Article') }}
        </h2>
    </x-slot>
    <div class="p-10 flex justify-center">
        <div class="w-full bg-white rounded overflow-hidden shadow-lg py-3 px-5">
            <h1 class="text-xl font-bold mb-3">{{ $article->title }}</h1>
            <div class="mb-3">
                <span class="font-bold">Category:</span>
                {{ $article->category->name }}
            </div>
            <div class="mb-3">
                <div class="font-bold">Description:</div>
                {{ $article->description }}
            </div>
            <div class="mb-3">
                <div class="font-bold">Content:</div>
                {!! nl2br(e($article->content)) !!}
            </div>
        </div>
    </div>
</x-app-layout>
