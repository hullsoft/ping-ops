@extends('web::layouts.grids.12')
@push('javascript')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
@endpush

@section('title', trans('pingops::seat.title'))
@section('page_header', trans('pingops::seat.title'))
@section('page_description', 'Страница редактирования')

@section('full')

<div class="row">
    <div class="col-md-4">
        @foreach($edit as $row) 
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Добавить: Ping Ops</h3>
            </div>
            <div class="panel-body">
                <form role="form" action="{{route('pingops.save')}}" method="post">                    
                    {{ csrf_field() }}        
                    <input type="hidden" name="id" value="{{$row->id}}">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="date_begin">Дата</label>
                            <input type="text" name="date_begin" value="{{$row->date_begin}}" class="form-control" id="date_begin" data-mask="2099-99-99 99:99:99" placeholder="YYYY-MM-DD HH:MM:SS" >
                        </div>
                        <div class="form-group">
                            <label for="system">Система сбора</label>
                            <input type="text" name="system" class="form-control" id="system" value="{{$row->system}}" placeholder="Enter system">
                        </div>
                        <div class="form-group">
                            <label for="message">Сообщение</label>
                            <textarea name="message" class="form-control" id="message" >{{$row->message}}</textarea>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary pull-right">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>





@stop


@push('javascript')


@endpush
