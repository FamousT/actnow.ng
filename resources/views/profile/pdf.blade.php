@extends('layout')

@section('content')

<div class="mx-auto mt-5" style="width: 400px; text-align:center; 
    border-radius:20px; padding-top: 30px; color:#5D3954; border-style:solid; border-width:10px;">

        <div class="image">    
            <img src="images/actnow22.png" style="width:100px;"><br/>
        </div>
        <div class="card-body">
          <p class="card-text">

          <img src="{{ url('uploads/profiles/'.$show->image) }}" alt="Actnow" style="width:100px; height:100px; border-radius:50%"><br/>

          <p style="font-size:30px; font-weight: 700;">{{$show->name}}</p>
          <h6 style="font-size:20px;">{{$show->gender}}</h6>
          <h6 style="padding-top: 10px;">MEMBERSHIP CARD</h6>
            <!-- <hr/> -->
            <h6>ID: ACT-{{$show->reg_no}}</h6>
          </p>
            <p style="font-size:25px; font-weight:700; padding-bottom:30px;">{{$show->state}} State</p>

        </div>
        <div class="down">www.actnow.ng</div>
        </div>

@endsection
