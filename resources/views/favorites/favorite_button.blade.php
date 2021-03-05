
    @if (Auth::user()->is_favoriteing($user->id))
        {!! Form::open(["route" => ["user.unfavorite", $user->id], "method" => "delete"]) !!}
            {!! Form::submit("Unfavorite", ["class" => "btn btn-danger btn-sm btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(["route" => ["user.favorite", $user->id]]) !!}
            {!! Form::submit("Favorite", ["class" => "btn btn-sm btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif
