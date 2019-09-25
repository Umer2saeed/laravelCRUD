@extends('layouts.admin')





@section('content')

    <h1 class="page-header">Posts</h1>


        <table class="table table-hover">
            <thead>
               <tr>
                <th scope="col">Id</th>
                <th scope="col">Photo</th>
                <th scope="col">Owner</th>
                <th scope="col">Category</th>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
            </tr>
            </thead>
            <tbody>

            @if($posts)

                @foreach($posts as $post)

            <tr>
                <td>{{$post->id}}</td>
                <td><img height="50" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400' }}" alt=""></td>
                <td>{{$post->user->name}}</td>
                <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>{{$post->created_at->diffForHumans()}}</td>
                <td>{{$post->updated_at->diffForHumans()}}</td>
            </tr>

                @endforeach

            @endif
            </tbody>
        </table>

@endsection