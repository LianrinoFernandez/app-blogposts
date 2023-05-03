<x-app-layout>
<form action="{{ route('post.update', $post->id) }}" method="POST">
    @csrf
    @method('PATCH')

<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" name="author_id" value="{{ $author->id }}">
            {{ __('You are editing this post by:') }} {{$author->name}}
        </h2>
</x-slot>

<div class="mt-4">
    <x-input-label for="title" :value="__('Title')" />
        <x-text-input id="title" class="block mt-1 w-half" type="text" name="title" value="{{$post->title}}"/>
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                </div></br>
        
<div>
    <label for="summary">Summary:</label>
        <textarea name="summary" class="comment" id="summary">{{$post->summary}}</textarea>
            @error('summary')
                <div style="color:red;">{{ $message }}</div>
            @enderror
                </div><br>

<div><br>
    <label for="content">Content:</label>
        <textarea name="content" class="comment" id="content"> {{$post->content}}</textarea>
            @error('content')
                <div style="color:red;">{{ $message }}</div>
            @enderror
                </div><br>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-3" type="submit">
               UPDATE
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