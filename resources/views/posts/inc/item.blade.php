<a href="#" class="text-lg font-semibold">{{ $post->user->name }}</a>
    <p class="mt-1 text-xs">
        <em>
            {{ $post->created_at->format('d/m/Y') }}
        </em>
        {{ $post->body }}
    </p>
    <!--solo al autor le aparece el boton de borrar-->
    @can('destroy-post', $post)
        <form action="{{ route('posts.destroy',$post->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="text-indigo-600 text-xs">{{__('Delete')}}</button>
        </form>
    @endcan