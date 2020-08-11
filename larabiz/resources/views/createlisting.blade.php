@extends('layouts.app')
@section('content')
   <div class="row justify-content-center">
      <div class="col-md-8">
         @if (session('status'))
            <div class="alert alert-success" role="alert">
               {{ session('status') }}
            </div>
         @endif
         <div class="card">
            <div class="card-header">
               Create Listing
               <a href="/home" class="btn btn-sm btn-primary float-right">< Back</a>
            </div>
            <div class="card-body">
               {{-- form starts --}}
               {!! Form::open(['action' => 'ListingController@store', 'method' => 'POST']) !!}
               {{ Form::bsText('name', '', ['placeholder' => 'Company Name', 'required']) }}
               {{ Form::bsText('website', '', ['placeholder' => 'Company Website']) }}
               {{ Form::bsText('email', '', ['placeholder' => 'Contact Email', 'required']) }}
               {{ Form::bsText('phone', '', ['placeholder' => 'Contact Phone']) }}
               {{ Form::bsText('address', '', ['placeholder' => 'Business Address', 'required']) }}
               {{ Form::bsTextArea('bio', '', ['placeholder' => 'About This Business' ]) }}
               {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
               {!! Form::close() !!}
               {{-- form ends --}}
            </div>
         </div>
      </div>
   </div>
@endsection
