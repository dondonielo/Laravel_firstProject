@extends('neighbors.layout')
@section('content')
<div class="card">
  <div class="card-header">Barangay Information</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $neighbors->name }}</h5>
        <p class="card-text">Address : {{ $neighbors->address }}</p>
        <p class="card-text">Mobile : {{ $neighbors->mobile }}</p>
  </div>
    </hr>
  </div>
</div>