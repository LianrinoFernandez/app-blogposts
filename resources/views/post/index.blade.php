<x-app-layout>
@foreach($authors as $author)
@foreach ($author->posts as $post)
    <div>
    <h1> Created by: {{$author->name}} </h1>
        <h2>Title: {{$post['title']}}</h2>
            <h3>Summary: {{$post['summary']}}</3>
                <h4>Content: {{$post['content']}}</h4>
 <br>
        <a href ="{{'/post/'.$post['id'].'/edit'}}">EDIT</a> 
        
        <a href ="{{'/post/'.$post['id']}}">REMOVE</a><br>
            =========
</div>
        @endforeach
@endforeach

</x-app-layout>