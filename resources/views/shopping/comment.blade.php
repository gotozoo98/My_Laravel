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
    <div class="mb-5">
        <h3>留言區</h3>
        @foreach ( $comments as $comment )
        <div class="w-100 p-2 mb-2 border-bottom border-light">
            <div class="info d-flex align-items-baseline">
                <div class="fs-2 me-2">{{$comment->title}}</div>
                <div class="me-auto">{{$comment->name}}</div>
                <div>{{substr($comment->created_at, 5, 2).'月'.substr($comment->created_at, 8, 2).'日'}}</div>
            </div>
            <div class="border border-infor">{{$comment->context}}</div>
            <div>
                <a href="/comment/delete/{{$comment->id}}">刪除</a>
                <a href="/comment/edit/{{$comment->id}}">編輯</a>
            </div>
        </div>
        @endforeach
    </div>
    <form class="form" action="/comment/save" method="GET">
        <div class="name">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">
                    <h5>留言者姓名</h5>
                </label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="">
            </div>
        </div>
        <div class="tel">
            <div class="mb-1">
                <label for="exampleFormControlInput1" class="form-label">
                    <h5>標題</h5>
                </label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="title" placeholder="">
            </div>
        </div>
        <div class="email">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">
                    <h5>內容</h5>
                </label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="content" placeholder="">
            </div>
        </div>
        <div class="button-box d-flex justify-content-center">
            <button class="btn btn-secondary me-3" type="reset">清除</button>
            <button class="btn btn-primary" type="submit">送出</button>
        </div>
    </form>
</div>

@endsection
