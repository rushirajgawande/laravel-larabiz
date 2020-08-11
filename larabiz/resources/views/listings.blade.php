@extends('layouts.app')
@section('content')
   <div class="row mr-auto ml-auto justify-content-center">
      <div class="col-md-6">
         <div class="card" style="border-color:#782">
            <div class="card-header">
               Latest Business Listing:
            </div>
            <div class="card-body">
               @if(count($listings) > 0)
                  <ul class="list-group">
                     @foreach ($listings as $listing)
                        <li class="list-group-item">
                           <a href="/listing/{{$listing->id}}">{{$listing->name}}</a>
                        </li>
                     @endforeach
                  </ul>
                  @php
                     // echo var_dump($listing);
                  @endphp
               @else
                  <p>No Listing Found!!</p>
            @endif
         </div>
      </div>
   </div>
</div>
@endsection
