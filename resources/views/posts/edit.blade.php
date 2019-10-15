@include('pages.nav')

<b>Edit member information:</b>


{!! Form::open(['action' => ['memberListController@update', $w->id], 'method' => 'POST']) !!}
        

    <div class="form-group" style="padding: 10px"> 
        {{Form::label('title', 'Title')}}:<br>
        {{Form::text('title',$w->title,['class'=>'form-control','placeholder'=>'Your Name'])}}
    </div>
    <div class="form-group"style="padding: 10px"> 
        {{Form::label('email', 'E-mail')}}:<br>
        {{Form::text('email',$w->email,['class'=>'form-control','placeholder'=>'Email'])}}
    </div>

    <div class="form-group"style="padding: 10px"> 
        {{Form::label('phone', 'Phone')}}:<br>
        {{Form::text('phone',$w->phone,['class'=>'form-control','placeholder'=>'Phone'])}}
    </div>

    <div class="form-group"style="padding: 10px"> 
        {{Form::label('membershipType','Membership Type')}}:<br>
        {{Form::text('membershipType',$w->membershipType,['class'=>'form-control','placeholder'=>'Membership Type'])}}
    </div>

    <div class="form-group"style="padding: 10px"> 
        {{Form::label('tAmount','Total Amount')}}:<br>
        {{Form::text('tAmount',$w->tAmount,['class'=>'form-control','placeholder'=>'Total Amount'])}}
    </div>

    <div class="form-group"style="padding: 10px"> 
        {{Form::label('gAmount','Given Amount')}}:<br>
        {{Form::text('gAmount',$w->gAmount,['class'=>'form-control','placeholder'=>'Given Amount'])}}
    </div>

    <div class="form-group"style="padding: 10px"> 
        {{Form::label('rAmount','Remaining Amount')}}:<br>
        {{Form::text('rAmount',$w->rAmount,['class'=>'form-control','placeholder'=>'Remaining Amount'])}}
    </div>

    <div class="form-group"style="padding: 10px"> 
        {{Form::label('tInstallment','Totala Installment')}}:<br>
        {{Form::text('tInstallment',$w->tInstallment,['class'=>'form-control','placeholder'=>'Total Installment'])}}
    </div>

    <div class="form-group"style="padding: 10px"> 
        {{Form::label('gInstallment','Given Installment')}}:<br>
        {{Form::text('gInstallment',$w->gInstallment,['class'=>'form-control','placeholder'=>'Given Installment'])}}
    </div>

    <div class="form-group"style="padding: 10px"> 
        {{Form::label('rInstallment','Remaining Installment')}}:<br>
        {{Form::text('rInstallment',$w->rInstallment,['class'=>'form-control','placeholder'=>'Remaining Installment'])}}
    </div>

    	{{Form::hidden('_method','Put')}}


    <div style="padding: 10px">{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}</div>

{!! Form::close() !!}
