@extends('layouts.master')

@section('content')
<div class="pt-1 mx-3">
    <div class="my-2 text-center">
        <a href="/pertanyaan/create" class="btn btn-secondary btn-lg">
            New Question</a>
    </div>

    <div class="card">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th style="width: 40px">Detail</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($questions as $key => $item)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$item->judul}}</td>
                    <td>{{$item->isi}}</td>
                    <td class="text-center"><a href="/pertanyaan/{{$item->id}}" class="badge bg-primary">view</a>
                        <a href="/pertanyaan/{{$item->id}}/edit" class="badge bg-warning">edit</a></td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection