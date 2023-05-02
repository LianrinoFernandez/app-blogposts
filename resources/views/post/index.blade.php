<x-app-layout>
@foreach($posts as $post)
<div class="border:thin">
    <h1>Title: {{$post['title']}}</h1>
        <h2>Summary: {{$post['summary']}}</h2>
            <h3>Content: {{$post['content']}}</h3>

        <a href ="">EDIT</a> 
        
        <a href ="">REMOVE</a><br>
            =========
        
</div>
@endforeach
</x-app-layout>