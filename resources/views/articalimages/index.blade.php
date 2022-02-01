
@extends('layouts.app')

@section('content')
<div class="container">

@section('content')
<div class="container">
    @foreach ($articalimages as $image)
        
         <img id='image{{$image->id}}' class='{{$image->class}}' src='{{asset('/images/'.$image->src)}}' alt='{{$image->alt}}' width='{{$image->width}}' height='{{$image->height}}' /> 

    
    @endforeach
</div>        
@endsection