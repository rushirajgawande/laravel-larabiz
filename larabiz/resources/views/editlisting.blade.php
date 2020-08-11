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
               Edit Listing
               <a href="/home" class="btn btn-sm btn-primary float-right">
                  < Back
               </a>
            </div>
            <div class="card-body">
               {{-- form starts --}}
               {!! Form::open(['action' => ['ListingController@update', $listing->id], 'method' => 'POST']) !!}
               {{ Form::bsText('name', $listing->name, ['placeholder' => 'Company Name', 'required']) }}
               {{ Form::bsText('website', $listing->website, ['placeholder' => 'Company Website']) }}
               {{ Form::bsText('email', $listing->email, ['placeholder' => 'Contact Email', 'required']) }}
               {{ Form::bsText('phone', $listing->phone, ['placeholder' => 'Contact Phone']) }}
               {{ Form::bsText('address', $listing->address, ['placeholder' => 'Business Address', 'required']) }}
               {{ Form::bsTextArea('bio', $listing->bio, ['placeholder' => 'About This Business' ]) }}
               {{ Form::hidden('_method', 'PUT')}}
               {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
               {!! Form::close() !!}
               {{-- form ends --}}
            </div>
         </div>
      </div>
   </div>
@endsection
