

    @if (Auth::user()->is_favoriteing($micropost->id))
        {!! Form::open(["route" => ["user.unfavorite", $micropost->id], "method" => "delete"]) !!}
            {!! Form::submit("Unfavorite", ["class" => "btn btn-danger btn-sm btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(["route" => ["user.favorite", $micropost->id]]) !!}
            {!! Form::submit("Favorite", ["class" => "btn btn-sm btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif
