@include('pages.nav')


Register as new member:


{!! Form::open(['action' => 'memberListController@store', 'method' => 'POST']) !!}
        

    <div class="form-group" style="padding: 10px"> 
        {{Form::label('title', 'Title')}}:<br>
        {{Form::text('title','',['class'=>'form-control','placeholder'=>'Your Name'])}}
    </div>
    <div class="form-group" style="padding: 10px"> 
        {{Form::label('email', 'E-mail')}}:<br>
        {{Form::text('email','',['class'=>'form-control','placeholder'=>'Email'])}}
    </div>

    <div class="form-group" style="padding: 10px"> 
        {{Form::label('phone', 'Phone')}}:<br>
        {{Form::text('phone','',['class'=>'form-control','placeholder'=>'Phone'])}}
    </div>

    <div class="form-group" style="padding: 10px"> 
        {{Form::label('membershipType','Membership Type')}}:<br>
        {{Form::text('membershipType','',['class'=>'form-control','placeholder'=>'Add Member Type'])}}
    </div>

    <div class="form-group" style="padding: 10px"> 
        {{Form::label('tAmount','Total Amount')}}:<br>
        {{Form::text('tAmount','',['class'=>'form-control','placeholder'=>'Total Amount'])}}
    </div>
<!-- 
    <div class="form-group" style="padding: 10px"> 
        {{Form::label('DD','DD')}}:<br>
        {{Form::text('dd','',['class'=>'form-control','placeholder'=>'DD'])}}
    </div> -->

    <!-- <div class="form-group" style="padding: 10px"> 
        {{Form::label('gAmount','Given Amount')}}:<br>
        {{Form::text('gAmount','',['class'=>'form-control','placeholder'=>'Given Amount'])}}
    </div>

    <div class="form-group" style="padding: 10px"> 
        {{Form::label('rAmount','Remaining Amount')}}:<br>
        {{Form::text('rAmount','',['class'=>'form-control','placeholder'=>'Remaining Amount'])}}
    </div> -->

    <div class="form-group" style="padding: 10px"> 
        {{Form::label('tInstallment','Totala Installment')}}:<br>
        {{Form::text('tInstallment','',['class'=>'form-control','placeholder'=>'Total Installment'])}}
    </div>

    <!-- <div class="form-group" style="padding: 10px"> 
        {{Form::label('gInstallment','Given Installment')}}:<br>
        {{Form::text('gInstallment','',['class'=>'form-control','placeholder'=>'Given Installment'])}}
    </div>

    <div class="form-group" style="padding: 10px"> 
        {{Form::label('rInstallment','Remaining Installment')}}:<br>
        {{Form::text('rInstallment','',['class'=>'form-control','placeholder'=>'Remaining Installment'])}}
    </div> -->


    <div style="padding: 10px">{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}</div>

{!! Form::close() !!}