<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create your Post') }}
        </h2>
    </x-slot>

    <form action="{{ route('post.index') }}" method="GET">
    @csrf
    <!-- @method('POST') -->
            <div>
                <label class="font-semibold" for="author">AUTHOR:</label>
                    <select class="font-semibold" name="author">
                        @foreach($authors as $authors)
                            <option>{{$authors->name}}</option>
                        @endforeach  
                    </select> 
            </div><br>
            <div class="mt-4">
                    <x-input-label for="title" :value="__('Title')" />
                    <x-text-input id="title" class="block mt-1 w-half" type="text" name="title" />
                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                </div></br>

            <div>
                <label for="summary">Summary:</label>
                    <textarea name="summary" class="comment" id="summary"></textarea>
                        @error('summary')
                            <div style="color:red;">{{ $message }}</div>
                        @enderror
            </div><br>

            <div><br>
                <label for="content">Content:</label>
                     <textarea name="content" class="comment" id="content"> </textarea>
                        @error('content')
                            <div style="color:red;">{{ $message }}</div>
                        @enderror
            </div><br>
            
                
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-3" type="submit">
                Create
            </x-primary-button>
        </div>
</form>
</x-app-layout>
