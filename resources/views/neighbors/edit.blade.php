@extends('neighbors.layout')
@section('content')
<div class="card">
  <div class="card-header">Barangay Information</div>
  <div class="card-body">
      
      <form action="{{ url('neighbor/' .$neighbors->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$neighbors->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$neighbors->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$neighbors->address}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$neighbors->mobile}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop