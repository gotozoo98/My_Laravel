@extends('shopping.template')

@section('pageTitle')
    <title>banner</title>
@endsection

@section('css')
    <link rel="stylesheet" href=" {{asset('css/checkedout4.css')}}">
    <link rel="stylesheet" href="http://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
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
        <h3>banner</h3>
</div>
<table id="banner_list" class="display">
    <thead>
        <tr>
            <th>圖片預覽</th>
            <th>圖片權重</th>
            <th>功能</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>Row 1 Data1 </th>
            <th>Row 1 Data2</th>
            <td>
                <button class="btn btn-success">編輯</button>
                <button class="btn btn-danger">刪除</button>
            </td>
        </tr>
    </tbody>
</table>

@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
crossorigin="anonymous">
</script>
<script src="http://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function(){
        $('#banner_list').DataTable();
    });
</script>

@endsection
