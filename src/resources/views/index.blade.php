@extends('web::layouts.grids.12')
@push('javascript')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
@endpush

@section('title', trans('pingops::seat.title'))
@section('page_header', trans('pingops::seat.title'))
@section('page_description', trans('pingops::seat.title'))

@section('full')

<div class="row">
    <div class="col-md-4">
        <div class="panel panel-default">
            <a href="{{route('pingops.update.bot')}}" style="margin: 5px;" class="btn btn-success pull-right btn-xs">Обновить бота</a>
            <div class="panel-heading">
                <h3 class="panel-title">Добавить: Ping Ops</h3>                
            </div>
            <div class="panel-body">

                <form role="form" action="{{route('pingops.add')}}" method="post">                    
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="date_begin">Дата</label>
                            <input type="text" name="date_begin" value="" class="form-control" id="date_begin" data-mask="2099-99-99 99:99:99" placeholder="YYYY-MM-DD HH:MM:SS" >
                        </div>
                        <div class="form-group">
                            <label for="system">Система сбора</label>
                            <input type="text" name="system" class="form-control" id="system" value="" placeholder="Система сбора">
                        </div>
                        <div class="form-group">
                            <label for="message">Сообщение</label>
                            <textarea name="message" class="form-control" id="message" ></textarea>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary pull-right">Добавить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="col-md-8">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Список опсов</h3>
            </div>
            <div class="panel-body">
                <table class="table table-hover table-condensed">
                    <thead>
                        <tr>

                            <th>Дата</th>
                            <th>Система сбора</th>
                            <th>Сообщение</th>
                            <th>ID</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list as $row)                    
                        <tr>

                            <td><b>{{$row->date_begin}}</b></td>
                            <td>{{$row->system}}</td>
                            <td>{{$row->message}}</td>
                            <td>{{$row->id}}</td>
                            <td style="text-align:right;">  
                                @if($row->active)
                                {!! Html::linkRoute('pingops.disabled', 'Отключить', $row->id,["class" => "btn btn-warning btn-xs"] ) !!}
                                @else
                                {!! Html::linkRoute('pingops.enabled', 'Включить', $row->id,["class" => "btn btn-default btn-xs"] ) !!}
                                @endif                                
                                {!! Html::linkRoute('pingops.edit', 'Изменить', $row->id,["class" => "btn btn-success btn-xs"] ) !!}
                                {!! Html::linkRoute('pingops.delete', 'Удалить', $row->id,["class" => "btn btn-danger btn-xs"] ) !!}
                            </td>  
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="panel-footer">
                Кол-во:&nbsp;&nbsp;<b>{{count($list)}}</b>
            </div>
        </div>
    </div>
</div>




@stop


@push('javascript')


@endpush
