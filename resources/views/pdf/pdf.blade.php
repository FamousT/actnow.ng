@extends('layout')

@section('content')

             
<div class="container">


<div class="mx-auto mt-5" style="background-color:rgb(217, 230, 217); width: 400px; text-align:center; 
border-radius:20px; padding-top: 30px; color:#5D3954">

    <div class="image">    
        <img src="images/actnow22.png" style="width:100px;"><br/>
    </div><br/>
    <div class="card-body">
      <div class="image">

      <!-- <img src="{{ url('/images/image.png') }}"> -->

      <img src="{{ url('uploads/profiles/'.$show->image) }}" width="100px" height="100px" alt="Actnow"><br/>
      
      </div>

      <p style="font-size:30px; font-weight: 700;">{{$show->name}}</p>
      <h6 style="font-weight: 700;">{{$show->gender}}</h6>

      <h6 style="padding-top: 10px;">MEMBERSHIP CARD</h6>
        <!-- <hr/> -->
        <h6>ID: ACT-{{$show->reg_no}}</h6>
        <p style="font-size:25px; font-weight:700; padding-bottom:30px;">{{$show->state}} State</p>
        <p><a href="{{url('/downloadPDF', $show->id)}}">Download ID</a></p>

    </div>
    <div class="down">www.actnow.ng</div><br/>
    </div>
    </div>

@endsection
