@extends('layouts.dashboard')
@section('Features')
<ul id="side-main-menu" class="side-menu list-unstyled">              
        {{-- <li><a href="/store_manager/fill_indent">Fill Indent</a></li> --}}
         <li><a href="/store_manager/history">History</a></li>
        <li><a href="/store_manager/components">Acknowledge</a></li>
        <li><a href="/store_manager/requests">Requests</a></li>
@endsection
    @section('staff')
    <h1 class="add">Available Components</h1>
    <table class="table table-striped table-hover table-bordered" class="display" id="mydatatable">
            <thead>
                <tr>
                    <th style="width:190px" >Name of the StakeHolder</th>
                    <th>Department</th>
                    <th>Item Name</th>
                    <th>Item Count</th>
                    <th>Status</th>
                    
                    
                    
                    
                </tr>
            </thead>
            <tbody>
              
                
               
 @foreach ($data as $item)
<tr>
    <td>{{$item->name}}</td>
    <td>{{$item->dept_name}}</td>
    <td>{{$item->item_name}}</td>
    <td>{{$item->item_count}}</td>
    <td>Approved</td>
    {{-- <td id="others"><a class="btn btn-success" href="/store_manager/components/{{$item->request_id}}">Acknowledge</a></td>      --}}
    {{-- <td id="check"><a class="btn" style="background:#fc3;color:white;" href="staffR/check/{{$item->request_id}}">Check Availabilaty</a></td>
    @if($item->request_type==0)
    <td id="others"><a class="btn btn-success" href="staffR/check/{{$item->request_id}}">Request to others</a></td>
    <td id="teachers"><a class="btn btn-danger" href="staffR/forward/{{$item->request_id}}">Forward request</a></td>
    @endif --}}

@endforeach                 
               
            </tbody>    
            </table>   
            @stop
    
