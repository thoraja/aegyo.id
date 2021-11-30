<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Article') }}
        </h2>
    </x-slot>
    <div class="p-10 flex justify-center">
        <div class="w-full bg-white rounded overflow-hidden shadow-lg py-3 px-5">
            <form action="{{ route('articles.update', $article) }}" method="post" autocomplete="off">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                        Category
                    </label>
                    <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="category_id" name="category_id" required>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}"{{ $category->id == $article->category_id ? ' selected' : ''}}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                        Title
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" type="text" placeholder="What's the title of the article..." name="title" required value="{{ $article->title }}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                        Description
                    </label>
                    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" type="text" placeholder="What's the description of the article..." name="description">{{ $article->description }}</textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="content">
                        Content
                    </label>
                    <textarea rows="10" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="content" type="text" placeholder="Put your content here..." name="content">{{ $article->content }}</textarea>
                </div>
                <button class="text-white bg-transparent border border-solid bg-indigo-500 hover:bg-indigo-700 hover:text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded-full outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 float-right" type="submit">
                    Submit
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
