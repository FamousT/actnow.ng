@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Disneyplus Shows
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <form action="{{url('/disneyplus')}}" method="post">

          <div class="form-group">
              @csrf
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="price">Gender :</label>
              <input type="text" class="form-control" name="gender"/>
          </div>
          <div class="form-group">
              <label for="price">State :</label>
              <input type="text" class="form-control" name="state"/>
          </div>
          <div class="form-group">
              <label for="price">LGA :</label>
              <input type="text" class="form-control" name="lga"/>
          </div>
          <div class="form-group">
              <label for="price">Phone No :</label>
              <input type="text" class="form-control" name="phone_no"/>
          </div>
          <div class="form-group">
              <label for="quantity">Email :</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
            <label for="">Profile Picture</label>
            <input type="file" class="form-control" name="image" >
        </div>
          <button type="submit" class="btn btn-primary">Create Show</button>
      </form>
  </div>
</div>
@endsection