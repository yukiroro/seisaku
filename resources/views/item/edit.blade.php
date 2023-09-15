@extends('adminlte::page')

@section('title', '商品編集')

@section('content_header')
    <h1>商品編集ID:{{$item->id}}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-10">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                       @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                       @endforeach
                    </ul>
                </div>
            @endif

            <div class="card card-primary">
                <form action="{{ route('edit', ['id' =>$item->id]) }}" method="POST">
                    @csrf
                    <input class="form-control" type="text" name="id" value="{{$item->id}}" hidden>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">名前</label>
                            <input class="form-control" type="text" name="name" value="{{$item->name}}">
                        </div>

                        <div class="form-group">
                            <label for="type">種別</label>
                            <input class="form-control" type="text" name="type" value="{{$item->type}}">
                        </div>

                        <div class="form-group">
                            <label for="detail">詳細</label>
                            <input class="form-control" type="text" name="detail" value="{{$item->detail}}">
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">編集</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
