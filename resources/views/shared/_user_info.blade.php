<a href="{{route('users.show',$user->id)}}">
    <img src="{{$user->gravatar()}}" alt="{{$user->name}}" class="gravatar">
    <h1>{{$user->name}}</h1>
</a>
