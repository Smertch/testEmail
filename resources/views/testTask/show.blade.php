@extends('layouts.layout')

@section('content')

    <div class="box-body table-responsive">
        <table id="testEmail" class="table table-striped">
        </table>
    </div>

   {{-- <table style="text-align: center" align="center" width="600"  border="2">
        <tr>
            <th style="text-align: center">Ид</th>
            <th style="text-align: center">Код</th>
            <th style="text-align: center">Тип</th>
            <th style="text-align: center">Приложение (application)</th>
            <th style="text-align: center"> Сообщение </th>

        </tr>
        @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->code}}</td>
            <td>{{$post->type}}</td>
            <td>{{$post->application}}</td>
            <td>{{$post->message}}</td>
        </tr>
        @endforeach
    </table>--}}



@endsection