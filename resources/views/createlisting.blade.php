@extends('layouts.app')

@section('content')

        <div class="panel panel-default">
            <div class="panel-heading">Create Listing <a href="/dashboard" class="pull-right btn btn-default btn-xs">Go Back</a></div>

            <div class="panel-body">
              {!!Form::open(['action' => 'App\Http\Controllers\ListingsController@store','method' => 'POST'])!!}
                {{Form::bsText('name','',['placeholder' => 'Company Name'])}}
                {{Form::bsText('website','',['placeholder' => 'Company Website'])}}
                {{Form::bsText('email','',['placeholder' => 'Contact Email'])}}
                {{Form::bsText('phone','',['placeholder' => 'Contact Phone'])}}
                {{Form::bsText('address','',['placeholder' => 'Business Address'])}}
                {{Form::bsTextArea('bio','',['placeholder' => 'About This Business'])}}
                {{Form::bsSubmit('submit')}}
              {!! Form::close() !!}
            </div>

</div>
@endsection
