@include('pages.home')

List of all members:<br>

@if (count($w) > 0)
    @foreach ($w as $wm)
        <h3><a href="/members/{{$wm->id}}">{{$wm->title}}</a></h3>
        <small>{{$wm->phone}}</small><br>
        <small>{{$wm->created_at}}</small>
    @endforeach
    
@else
    <p>No post found</p>
    
@endif