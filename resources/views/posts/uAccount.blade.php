
@include('pages.nav')
{!! Form::open(['action' => ['memberListController@assignedinformation', $w->id], 'method' => 'POST']) !!}


<div class="form-group"> 
	{{Form::label('gAmount','Add new Installment')}}<br>
	{{Form::text('gAmount',$w->gAmount,['class'=>'form-control','placeholder'=>'Add new install amount'])}}
</div>

<br>{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}


{!! Form::close() !!}



<!-- <?php

	print_r($w);

	?> -->