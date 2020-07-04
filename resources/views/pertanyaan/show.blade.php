@extends('layouts.master')

@section('content')
<div class="my-2 ml-3">
    <a href="/pertanyaan" class="btn btn-primary btn-sm  text-left">
        <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
    </a>
    <form action="/pertanyaan/{{$question->id}}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-sm"> <i class="fa fa-trash" aria-hidden="true"></i> Delete
        </button>
    </form>
</div>
<div class="pt-2 mx-3">
    <div class="card text-center">
        <div class="card-header">
            Question #{{$question->id}}


        </div>
        <div class="card-body">
            <h4 class="font-weight-bold">{{$question->judul}}</h4>
            <p class="card-text">{{$question->isi}}</p>

        </div>
        <div class="card-footer text-muted">
            {{$question->tanggal_dibuat}}


        </div>
    </div>
</div>

<div class="my-2 text-center">
    <a href="/jawaban/{{$question->id}}"" class=" btn btn-secondary btn-sm">
        view all answers</a>
</div>

<div class="mx-3">
    @foreach ($answers as $key => $item)
    <div class="card">
        <div class="card-body">
            <h6 class="font-weight-bold"> User #{{$key+1}} <span
                    class="text-muted float-right text-sm">{{$item->tanggal_dibuat}}
                </span>

            </h6>
            {{$item->isi}}
        </div>
        @endforeach

    </div>

    <form action="/jawaban/{{$question->id}}" method="post">
        @csrf
        <input type="text" class="form-control form-control-lg" name="isi" placeholder="Press enter to post answer...">
    </form>

</div>

@endsection