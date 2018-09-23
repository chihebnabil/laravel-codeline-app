@extends('layouts.main')
@section('content')
<h1>Create a Film</h1>

{!! Form::open(['url' => 'films/store']) !!}
  
  {!! Form::label("name", 'Film Name', []) !!}
  
  {!! Form::text("name", null, ['class' => 'form-control']) !!}


  {!! Form::label("description", 'Film Description', []) !!}
  {!! Form::textarea("description", null, ['class' => 'form-control']) !!}

{!! Form::label("rating", 'Film Rating', []) !!}

{!! Form::select("rating", [1,2,3,4,5], 1, ["class"=> "form-control"]) !!}

{!! Form::label("ticket_price", 'Ticket Price', []) !!}
  
  {!! Form::number("ticket_price", "", ["class"=> "form-control",'min'=>"1","step"=>0.1] ) !!}
  
  
  {!! Form::submit("Submit", []) !!}
  
{!! Form::close() !!}
@endsection
