@extends('templates.default')

@section('content')
<form action=" {{ route('mailing.create') }}" method="POST">
<input type="email" name ="email" value="{{ old('email') }}">
        <input type="submit">
        {{ csrf_field() }}
    </form>    

    @if ($errors->has('email'))
        <div>
               {{ $errors->first('email') }}
        </div>
    @endif

    {{-- @if($posts->count())
    
        @foreach($posts as $post)
            <h4>{{ $post->title }}</h4>
             <p>{{ $post->body}}</p>
             <p>{{ $post->created_at->diffForHumans() }} </p>
             <p>{{ $post->getFullText() }}</p>
        @endforeach
     
    @else
        <p>no posts</p>    
    @endif
      --}}
   
    <p>{{ $user->created_at }}</p>

    @endsection  

