<a href=""><strong id="following" class="stat">
        {{count($user->followings)}}
    </strong>
</a>


<a href=""><strong id="follows" class="stat">
        {{count($user->followers)}}
    </strong></a>

<a href=""><strong id="statues" class="stat">
        {{$user->statuses()->count()}}
    </strong>
</a>
