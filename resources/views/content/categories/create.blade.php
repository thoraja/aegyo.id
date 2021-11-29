<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Category') }}
        </h2>
    </x-slot>
    <div class="p-10 flex justify-center">
        <div class="w-1/2 bg-white rounded overflow-hidden shadow-lg py-3 px-5">
            <form action="{{ route('categories.store') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                        Category Name
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Category Name" name="name" required>
                </div>
                <button href="{{ route('categories.create') }}" class="text-white bg-transparent border border-solid bg-indigo-500 hover:bg-indigo-700 hover:text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded-full outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 float-right" type="submit">
                    Submit
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
