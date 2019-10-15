Register as new member:


{!! Form::open(['action' => 'memberListController@store', 'method' => 'POST']) !!}
        

    <div class="form-group"> 
        {{Form::label('title', 'Title')}}
        {{Form::text('title','',['class'=>'form-control','placeholder'=>'Your Name'])}}
    </div>
    <div class="form-group"> 
        {{Form::label('email', 'E-mail')}}
        {{Form::text('email','',['class'=>'form-control','placeholder'=>'Email'])}}
    </div>

    <div class="form-group"> 
        {{Form::label('phone', 'Phone')}}
        {{Form::text('phone','',['class'=>'form-control','placeholder'=>'Phone'])}}
    </div>

    <div class="form-group"> 
        {{Form::label('membershipType','Membership Type')}}
        {{Form::text('membershipType','',['class'=>'form-control','placeholder'=>'Membership Type'])}}
    </div>

    <div class="form-group"> 
        {{Form::label('tAmount','Total Amount')}}
        {{Form::text('tAmount','',['class'=>'form-control','placeholder'=>'Total Amount'])}}
    </div>

    <div class="form-group"> 
        {{Form::label('gAmount','Given Amount')}}
        {{Form::text('gAmount','',['class'=>'form-control','placeholder'=>'Given Amount'])}}
    </div>

    <div class="form-group"> 
        {{Form::label('rAmount','Remaining Amount')}}
        {{Form::text('rAmount','',['class'=>'form-control','placeholder'=>'Remaining Amount'])}}
    </div>

    <div class="form-group"> 
        {{Form::label('tInstallment','Totala Installment')}}
        {{Form::text('tInstallment','',['class'=>'form-control','placeholder'=>'Total Installment'])}}
    </div>

    <div class="form-group"> 
        {{Form::label('gInstallment','Given Installment')}}
        {{Form::text('gInstallment','',['class'=>'form-control','placeholder'=>'Given Installment'])}}
    </div>

    <div class="form-group"> 
        {{Form::label('rInstallment','Remaining Installment')}}
        {{Form::text('rInstallment','',['class'=>'form-control','placeholder'=>'Remaining Installment'])}}
    </div>


        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

{!! Form::close() !!}