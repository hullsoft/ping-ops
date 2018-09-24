@extends('web::layouts.grids.12')

@section('title', trans('pingops::seat.title_structure'))
@section('page_header', trans('pingops::seat.title_structure'))
@section('page_description', trans('pingops::seat.title_structure'))

@section('full')
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped  table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>КОД</th>
                    <th>Система</th>
                    <th>Объекст</th>
                    <th>Владелец</th>
                </tr>
            </thead>
            <tbody>
                @foreach($structure as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->date_begin}}</td>
                    <td>{{$row->system}}</td>
                    <td>{{$row->message}}</td>                    
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</div>



<pre>{{print_r($structure)}}</pre>

@stop


@push('javascript')
<script>

    console.log('Include anay JavaScript you may need here!');

</script>
@endpush
