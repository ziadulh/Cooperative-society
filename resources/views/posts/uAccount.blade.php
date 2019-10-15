{!! Form::open(['action' => ['memberListController@assignedinformation', $w->id], 'method' => 'POST']) !!}


<div class="form-group"> 
	{{Form::label('gAmount','Given Amount')}}
	{{Form::text('gAmount',$w->gAmount,['class'=>'form-control','placeholder'=>'Add new install amount'])}}
</div>

{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}


{!! Form::close() !!}



<!-- <?php

	print_r($w);

	?> -->