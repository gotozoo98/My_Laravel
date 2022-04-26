@extends('shopping.template')

@section('pageTitle')
    <title>留言板</title>
@endsection

@section('css')
    <link rel="stylesheet" href=" {{asset('css/checkedout4.css')}}">
    <style>
        .big{
            background-color: rgb(233, 233, 233);
            width: 80%;
            margin: auto;
            padding: 2%;
            border-radius: 10px;
        }
    </style>
@endsection

@section('main')
<div class="concent big">
    <h3 class="mb-3">重編輯區</h3>
    <form class="form" action="/comment/update/{{$comment->id}}" method="GET">
        <div class="name">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">
                    <h5>留言者姓名</h5>
                </label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="" value="{{$comment->name}}">
            </div>
        </div>
        <div class="tel">
            <div class="mb-1">
                <label for="exampleFormControlInput1" class="form-label">
                    <h5>標題</h5>
                </label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="title" placeholder="" value="{{$comment->title}}">
            </div>
        </div>
        <div class="email">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">
                    <h5>內容</h5>
                </label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="content" placeholder="" value="{{$comment->context}}">
            </div>
        </div>
        <div class="button-box d-flex justify-content-center">
            <button class="btn btn-secondary me-3" type="reset">清除</button>
            <button class="btn btn-primary" type="submit">送出</button>
        </div>
    </form>
</div>

@endsection
