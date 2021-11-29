<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Categories') }}
            </h2>
            <a href="{{ route('categories.create') }}" class="text-white bg-transparent border border-solid bg-indigo-500 hover:bg-indigo-700 hover:text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded-full outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
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
                        Name
                    </x-table.head-td>
                    <x-table.head-td class="w-1 text-center">
                        Action
                    </x-table.head-td>
                </tr>
            </x-slot>
            <x-slot name="body">
                @foreach ($categories as $category)
                <tr>
                    <x-table.body-td>
                        {{ $loop->index + 1 }}
                    </x-table.body-td>
                    <x-table.body-td>
                        {{ $category->name }}
                    </x-table.body-td>
                    <x-table.body-td>
                        <a href="{{ route('categories.edit', $category) }}" class="text-yellow-500 bg-transparent border border-solid border-yellow-500 hover:bg-yellow-500 hover:text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded-full outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                            Edit
                        </a>
                        <button class="text-red-500 bg-transparent border border-solid border-red-500 hover:bg-red-500 hover:text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded-full outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="submit" form="delete-{{ $category->id }}">
                            Delete
                        </button>
                        <form action="{{ route('categories.destroy', $category) }}" method="post" id="delete-{{ $category->id }}">
                            @csrf
                            @method('DELETE')
                        </form>
                    </x-table.body-td>
                </tr>
                @endforeach
            </x-slot>
        </x-table.structure>
    </div>
</x-app-layout>
