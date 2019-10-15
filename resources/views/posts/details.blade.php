@include('pages.nav')

<div style="padding: 10px">
	<h1>{{$w->title}}</h1>
	<small> Email : {{$w->email}}</small><br><br>
	<div style="padding: 3px">Phone : {{$w->phone}}<br></div>
	<div style="padding: 3px">Type : {{$w->membershipType}}<br></div>
	<div class="green" style="padding: 3px">Total Amount : {{$w->tAmount}}<br></div>
	<div class="given" style="padding: 3px">Given Amount : {{$w->gAmount}}<br></div>
	<div class="red" style="padding: 3px">Remaining Amount : {{$w->rAmount}}<br></div>
	<div class="green" style="padding: 3px">Total Installment : {{$w->tInstallment}}<br></div>
	<div class="given" style="padding: 3px">Given Installment : {{$w->gInstallment}}<br></div>
	<div class="red" style="padding: 3px">Remaining Installment : {{$w->rInstallment}}<br></div>
	
</div>



@if(!Auth::guest())

<br><a href="/members/{{$w->id}}/edit" class="btn btn-default" style="padding: 10px">Edit</a>

<div style="padding: 10px">
	{!!Form::open(['action' => ['memberListController@destroy', $w->id],'method'=> 'POST', 'class'=> 'pull-right'])!!}
	{{Form::hidden('_method', 'DELETE')}}
	{{Form::submit('Delete',['class'=> 'btn btn-danger'])}}
	{!!Form::close()!!}
</div>

<br>

<a href="/members/{{$w->id}}/updateacountinformation" class="btn btn-default" style="padding: 10px">Add Installment</a>

<br>

@endif(!Auth::guest())

<h3><a href="/members" style="padding: 10px"><small>Go back</small> </a></h3><br>

<style type="text/css">
	.given{
		color: red;
	}
	.green{
		color: green;
	}
	.red{
		display: inline;
		background-color: red;
	}
	
</style>
