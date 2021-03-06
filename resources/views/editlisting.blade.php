@extends('layouts.app')

@section('content')

        <div class="panel panel-default">
            <div class="panel-heading">Edit Listing <a href="/dashboard" class="pull-right btn btn-default btn-xs">Go Back</a></div>

            <div class="panel-body">
              {!!Form::open(['action' => ['App\Http\Controllers\ListingsController@update', $listing->id],'method' => 'POST'])!!}
                {{Form::bsText('name',$listing->name,['placeholder' => 'Company Name'])}}
                {{Form::bsText('website',$listing->website,['placeholder' => 'Company Website'])}}
                {{Form::bsText('email',$listing->email,['placeholder' => 'Contact Email'])}}
                {{Form::bsText('phone',$listing->phone,['placeholder' => 'Contact Phone'])}}
                {{Form::bsText('address',$listing->address,['placeholder' => 'Business Address'])}}
                {{Form::bsTextArea('bio',$listing->bio,['placeholder' => 'About This Business'])}}
                {{Form::hidden('_method', 'PUT')}}
                {{Form::bsSubmit('submit')}}
              {!! Form::close() !!}
            </div>

</div>
@endsection
