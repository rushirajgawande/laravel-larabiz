@extends('layouts.app')
@section('content')
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card">
            <div class="card-header">
               {{$listing->name}}
               <a href="/listing" class="btn btn-sm btn-primary float-right">< Back</a>
            </div>
            <div class="card-body">
               <ul class="list-group">
                  <li class="list-group-item">website: <a href="{{$listing->website}}" target="_blank">{{$listing->website}}</a></li>
                  <li class="list-group-item">email: {{$listing->email}}</li>
                  <li class="list-group-item">phone: {{$listing->phone}}</li>
                  <li class="list-group-item">address: {{$listing->address}}</li>
               </ul>
               <hr>
            </div>
         </div>
      </div>
   </div>
@endsection
