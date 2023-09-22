@extends('layouts.admin')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div>
                        <h1>
                            Progetto {{ $project->title }}
                        </h1>
                        <p>
                            {{ $project->content }}
                        </p>


                        <div>

                            <a href="{{ route('admin.posts.edit', ['post' => $post->id]) }}" class="btn btn-warning">
                                Modifica
                            </a>
                            <form class="d-inline-block" action="{{ route('admin.posts.destroy', ['post' => $post->id]) }}" method="post" onsubmit="return confirm('Sei sicuro di voler eliminare questo post?');">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">
                                    Elimina
                                </button>
                            </form>
                        </div>
                    </div>

                    <hr>

                    <p>
                        {{ $post->content }}
                    </p>

                    <hr>

                    <div>
                        <h3>
                            Tags:
                        </h3>
                        <div>
                            @forelse ($post->tags as $tag)
                                <span class="badge rounded-pill text-bg-primary">
                                    {{ $tag->title }}
                                </span>
                            @empty
                                Nessun tag associato a questo post
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
