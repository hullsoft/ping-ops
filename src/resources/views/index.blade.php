@extends('web::layouts.grids.12')

@section('title', trans('devapi::seat.name'))
@section('page_header', trans('devapi::seat.name'))
@section('page_description', trans('devapi::seat.name'))

@section('full')

  <p>Your Packages View!</p>
  <p>Refer to the web package for more examples!</p>

@stop

@push('javascript')
<script>

  console.log('Include anay JavaScript you may need here!');

</script>
@endpush
