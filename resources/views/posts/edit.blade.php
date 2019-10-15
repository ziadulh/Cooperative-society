Edit member information:


{!! Form::open(['action' => ['memberListController@update', $w->id], 'method' => 'POST']) !!}
        

    <div class="form-group"> 
        {{Form::label('title', 'Title')}}
        {{Form::text('title',$w->title,['class'=>'form-control','placeholder'=>'Your Name'])}}
    </div>
    <div class="form-group"> 
        {{Form::label('email', 'E-mail')}}
        {{Form::text('email',$w->email,['class'=>'form-control','placeholder'=>'Email'])}}
    </div>

    <div class="form-group"> 
        {{Form::label('phone', 'Phone')}}
        {{Form::text('phone',$w->phone,['class'=>'form-control','placeholder'=>'Phone'])}}
    </div>

    <div class="form-group"> 
        {{Form::label('membershipType','Membership Type')}}
        {{Form::text('membershipType',$w->membershipType,['class'=>'form-control','placeholder'=>'Membership Type'])}}
    </div>

    <div class="form-group"> 
        {{Form::label('tAmount','Total Amount')}}
        {{Form::text('tAmount',$w->tAmount,['class'=>'form-control','placeholder'=>'Total Amount'])}}
    </div>

    <div class="form-group"> 
        {{Form::label('gAmount','Given Amount')}}
        {{Form::text('gAmount',$w->gAmount,['class'=>'form-control','placeholder'=>'Given Amount'])}}
    </div>

    <div class="form-group"> 
        {{Form::label('rAmount','Remaining Amount')}}
        {{Form::text('rAmount',$w->rAmount,['class'=>'form-control','placeholder'=>'Remaining Amount'])}}
    </div>

    <div class="form-group"> 
        {{Form::label('tInstallment','Totala Installment')}}
        {{Form::text('tInstallment',$w->tInstallment,['class'=>'form-control','placeholder'=>'Total Installment'])}}
    </div>

    <div class="form-group"> 
        {{Form::label('gInstallment','Given Installment')}}
        {{Form::text('gInstallment',$w->gInstallment,['class'=>'form-control','placeholder'=>'Given Installment'])}}
    </div>

    <div class="form-group"> 
        {{Form::label('rInstallment','Remaining Installment')}}
        {{Form::text('rInstallment',$w->rInstallment,['class'=>'form-control','placeholder'=>'Remaining Installment'])}}
    </div>

    	{{Form::hidden('_method','Put')}}


        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

{!! Form::close() !!}
