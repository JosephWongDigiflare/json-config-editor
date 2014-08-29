@extends('layouts.base')

@section('body')

<div class="container">
  
  <!-- begins the form -->
  {{ Form::open(array('url'=>'jkma')) }}
  
  <!-- TextViews -->
  {{ Form::label('filename','Filename',array('id'=>'','class'=>'')) }}
  {{ Form::text('text_filename','ctvgo.json',array('id'=>'','class'=>'')) }}
  
  <!-- TextView but with a scalable area -->
  {{ Form::label('jsonData','JSON Data.',array('id'=>'','class'=>'')) }}
  {{ Form::textarea('textarea_jsonData','Input data here.',array('id'=>'','class'=>'')) }}
  
  <!-- submit buttons -->
  {{ Form::submit('Save') }}
  
  <!-- reset buttons -->
  {{ Form::reset('Reset') }}
  {{ Form::close() }}
	
</div>
@stop

