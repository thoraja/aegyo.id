<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Articles') }}
            </h2>
            <a href="{{ route('articles.create') }}" class="text-white bg-transparent border border-solid bg-indigo-500 hover:bg-indigo-700 hover:text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded-full outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
                Add
            </a>
        </div>
    </x-slot>
    <div class="pt-3 px-10 flex justify-end">
    </div>
    <div class="px-10">
        <x-table.structure class="table-auto">
            <x-slot name="head">
                <tr>
                    <x-table.head-td class="w-1">
                        #
                    </x-table.head-td>
                    <x-table.head-td class="w-max">
                        Title
                    </x-table.head-td>
                    <x-table.head-td class="w-1 text-center">
                        Action
                    </x-table.head-td>
                </tr>
            </x-slot>
            <x-slot name="body">
                @foreach ($articles as $category => $grouped_articles)
                <tr>
                    <x-table.body-td colspan=3 class="bg-gray-200 font-bold text-base">
                        {{ $category }}
                    </x-table.body-td>
                </tr>
                @foreach ($grouped_articles as $article)
                <tr>
                    <x-table.body-td>
                        {{ $loop->index + 1 }}
                    </x-table.body-td>
                    <x-table.body-td>
                        {{ $article->title }}
                    </x-table.body-td>
                    <x-table.body-td>
                        <a href="{{ route('articles.show', $article) }}" class="text-indigo-500 bg-transparent border border-solid border-indigo-500 hover:bg-indigo-500 hover:text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded-full outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                            Read
                        </a>
                        <a href="{{ route('articles.edit', $article) }}" class="text-yellow-500 bg-transparent border border-solid border-yellow-500 hover:bg-yellow-500 hover:text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded-full outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                            Edit
                        </a>
                        <button class="text-red-500 bg-transparent border border-solid border-red-500 hover:bg-red-500 hover:text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded-full outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="submit" form="delete-{{ $article->id }}">
                            Delete
                        </button>
                        <form action="{{ route('articles.destroy', $article) }}" method="post" id="delete-{{ $article->id }}">
                            @csrf
                            @method('DELETE')
                        </form>
                    </x-table.body-td>
                </tr>
                @endforeach
                @endforeach
            </x-slot>
        </x-table.structure>
    </div>
</x-app-layout>
