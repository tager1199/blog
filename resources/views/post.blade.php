<x-layout>

    <article>
        <h1>{!! $post->title!!}</h1>
        <p>
            By <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
        </p>
        <div>
            {!!$post->body!!}
        </div>
        <a href="/"> Go Back </a>
    </article>
    <x-slot name="content">
        <p>SLOT-2</p>
    </x-slot>
</x-layout>

