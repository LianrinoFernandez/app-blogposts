<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Are you sure you want to delete?') }}
        </h2>
</x-slot>

<form action="{{ route('post.destroy', $post->id) }}" method="POST">
    @csrf
    @method('DELETE')
<div>
    <h1>Title: {{$post['title']}}</h1>
        <h2>Summary: {{$post['summary']}}</h2>
            <h3>Content: {{$post['content']}}</h3>
                <h5> By: {{$author['name']}}</h5>

</div>

<div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-3" type="submit">
               Delete
            </x-primary-button>
        </div>
</form>

<form action="{{ route('post.index')}}" method="GET">
    <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-3" type="submit">
               CANCEL
            </x-primary-button>
    </div>
</form>
</x-app-layout>
