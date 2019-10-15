@include('pages.nav')

<b>List of all members:<br></b>

@if (count($w) > 0)
    @foreach ($w as $wm)
	    <div style="padding: 10px">
	    	<h3><a href="/members/{{$wm->id}}">{{$wm->title}}</a></h3>
	        <small>{{$wm->phone}}</small><br>
	        <small>{{$wm->created_at}}</small>
	    </div>
        
    @endforeach
    
@else
    <p>No post found</p>
    
@endif