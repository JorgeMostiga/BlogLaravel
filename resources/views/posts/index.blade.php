<x-blog-layout meta-title="Blog Title" meta-description="Blog Description">
    {{-- @if (session('status'))
        <div class="status">
            {{  session('status') }}
        </div>
    @endif --}}

    {{--   @session('status')
        <div class="status">
            {{  $value }}
        </div>
    @endsession --}}

    <h1 class="h1 text-center text-danger">Blog</h1>
    {{-- @dump($posts) --}}
    @auth
        <div class="d-flex justify-content-center">
            <a href="{{ route('posts.create') }}" alt="Create new post">
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor"
                    class="bi bi-plus-circle-fill text-danger" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z" />
                </svg>
            </a>
        </div>
    @endauth

    {{-- espaciador --}}
    <br>
    {{-- fin del espaciador --}}


    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach ($posts as $post)
                
                <div class="col">
                    <div class="card">
                        {{-- <img src="..." class="card-img-top" alt="..."> --}}
                        {{-- imagen --}}
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#868e96"></rect>
                            <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                        </svg>
                        {{-- fin de imagen --}}
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-danger">etiquetas</h6>
                            <h5 class="card-title"><a href="{{ route('posts.show', $post) }}"
                                    class="card-title">{{ $post->title }}</a></h5>
                            <p class="card-text">{{ $post->body }}</p>
    
                            {{-- <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                    --}}
                            <a href="{{ route('posts.show', $post) }}" class="card-link text-info">Read more</a>
                        </div>
                        <div class="card-footer">
                            <img src="/img/jm.png" alt="avatar" width="5%">
                            <div>
                                <span>Jorge mostiga</span><br>
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach
    </div>
</x-blog-layout>
