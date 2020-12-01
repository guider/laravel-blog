<div class="list-group-item">
    <img src="{{$user->gravatar()}}" alt="{{$user->name}}" class="mr-3">
    <a
        href="{{route('users.show',$user->id)}}">{{$user->name}}
    </a>

    @can('destroy',$user)
        <form action="{{route('users.destroy',$user->id)}}" method="post" class="float-right">
            {{method_field('DELETE')}}
            {{csrf_field()}}
            <button type="submit" class="btn btn-sm btn-danger delete-btn">
                删除
            </button>
        </form>
    @endcan

</div>
