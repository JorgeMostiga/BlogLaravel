{{-- <x-layout meta-title="Create new post" meta-description="creating noew post"> --}}
    <x-app-layout meta-title="Create new post" meta-description="From to create a new post">
    {{-- {{ __('Create New post') }} --}}
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New post') }}
        </h1>
    </x-slot>
    {{-- @dump($post->title) <!-- Null --> --}}
   {{--  @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('posts.store') }}" method="POST" class="py-4 container-xl">
                        @csrf
                        @include('posts.form-fields')
                        <x-primary-button type="submit">{{ __('Save') }}</x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('posts.index') }}">{{ __('Back') }}</a>
{{-- </x-layout> --}}
</x-app-layout>