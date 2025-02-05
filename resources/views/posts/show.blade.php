<x-blog-layout :meta-title="$post->title" :meta-description="$post->body">
    <article>
        <div>
            <img src="#" alt="{{ $post->title }}">
        </div>

        @auth
            <div class="d-flex justify-content-center">
                <a href="{{ route('posts.edit', $post) }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor"
                        class="bi bi-pencil text-primary" viewBox="0 0 16 16">
                        <path
                            d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325" />
                    </svg>
                </a>
                &nbsp;&nbsp;&nbsp;

                <form action="{{ route('posts.destroy', $post) }}" method="POST">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-link border-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor"
                            class="bi bi-trash3-fill text-danger" viewBox="0 0 16 16">
                            <path
                                d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5" />
                        </svg>
                    </button>
                </form>
            </div>
        @endauth

        <div>
            <h3 class="text-center mt-3">Etiquetas</h3>
            <h1 class="h1 text-center">{{ $post->title }}</h1>
        </div>

        <div class="text-center">
            <img src="/img/jm.png" alt="avatar" width="5%" class="mx-auto">
            <div>
                <span>Jorge mostiga</span><br>
                <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
        </div>

        <div>
            <p>{{ $post->body }}</p>
        </div>

        <a href="{{ route('posts.index') }}">{{ __('Back') }}</a>




    </article>
</x-blog-layout>
