{{-- <x-layout :meta-title="$post->title" :meta-description="$post->body"> --}}
<x-app-layout :meta-title="'Editing ' . $post->title" :meta-description="$post->body">
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h1>
    </x-slot>

    {{-- @dump($post->toArray()) --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('posts.update', $post) }}" method="POST" class="py-4 container-xl">
                        @include('posts.form-fields')
                        <x-primary-button type="submit">{{ __('Save') }}</x-primary-button>
                        @csrf @method('PATCH')
                    </form>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('posts.index') }}">Back</a>
</x-app-layout>
{{-- </x-layout> --}}
