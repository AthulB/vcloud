
@extends('layouts.dashboard')
@section('Features')
<ul id="side-main-menu" class="side-menu list-unstyled">              
        <li><a href="/lab_as/request">Create Request</a></li>
        <li><a href="/lab_as/history">Request History</a></li>
        <li><a href="/lab_as/labcomponent">Lab Component</a></li>
        <li><a href="/lab_as/received-component">Received Components</a></li>
@endsection
@section('staff')<br><br>

<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="padding:25px; box-shadow:-1px 9px 40px -12px rgba(0,0,0,0.75) ">
            <div class="card-header" style="background:#24b3ab; color:white;">Create Request</div>
            {!! Form::open(['action' => 'LabController@store','method' =>'POST']) !!}
                <div class='form-group' style="margin-top:20px">
                    {{Form::label('item_name' , 'Item name')}}
                    {{Form::text('item_name','',['class'=>'form-control','placeholder'=>'Item Name'])}}
                </div>
                <div class='form-group'>
                    {{Form::label('item_count' , 'Count')}}
                    {{Form::number('item_count',0,['class'=>'form-control','placeholder'=>'Count of Item'])}}
                </div>
                {{Form::submit('Place Order',['class'=> 'btn btn-primary'])}}
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection







{{-- @extends('layouts.dashboard')


@section('Features')
<ul id="side-main-menu" class="side-menu list-unstyled">                  
    <li><a href=""> Staff Request</a></li>
    <li><a href="#"> </a></li>
  </ul>

@endsection

@section('funtions')


<div class="container">
                {!! Form::open(['action' => 'LabController@store','method' =>'POST']) !!}
                    <div class='form-group'>
                        {{Form::label('item_name' , 'Item name')}}
                        {{Form::text('item_name','',['class'=>'form-control','placeholder'=>'Item Name'])}}
                    </div>
                    <div class='form-group'>
                        {{Form::label('item_count' , 'Count')}}
                        {{Form::number('item_count',0,['class'=>'form-control','placeholder'=>'Count of Item'])}}
                    </div>
                    {{Form::submit('Place Order',['class'=> 'btn btn-primary'])}}
                {!! Form::close() !!}
    </div>
    
@endsection --}}