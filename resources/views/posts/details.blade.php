@include('pages.home')

<h1>{{$w->title}}</h1>
<h3>{{$w->email}}</h3>
<h3>{{$w->phone}}</h3>
<h3>{{$w->membershipType}}</h3>
<h3>{{$w->tAmount}}</h3>
<h3>{{$w->tInstallment}}</h3>


@if(!Auth::guest())

<a href="/members/{{$w->id}}/edit" class="btn btn-default">Edit</a>

{!!Form::open(['action' => ['memberListController@destroy', $w->id],'method'=> 'POST', 'class'=> 'pull-right'])!!}
{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete',['class'=> 'btn btn-danger'])}}
{!!Form::close()!!}
<br>

<a href="/members/{{$w->id}}/updateacountinformation" class="btn btn-default">Add Installment</a>

<br>

@endif(!Auth::guest())

<h3><a href="/members"><small>Go back</small> </a></h3><br>
