@extends('layouts.master')

@section('content')

<div class="my-2 ">
    <a href="/pertanyaan/{{$question_id}}" class="btn btn-primary btn-sm text-left ml-3">
        <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>

    <h3 class="mt-3 text-center">Question #{{$question_id}}</h3>
</div>
<div class="mx-3">
    <div class="card">
        @forelse ($answers as $key => $item)
        <div class="card-body">
            <h6 class="font-weight-bold"> User #{{$key+1}} <span
                    class="text-muted float-right text-sm">{{$item->tanggal_dibuat}}</span>
            </h6>
            {{$item->isi}}
        </div>
        @empty
    </div>

    <h2 class="text-center mb-3">No answer is posted yet.</h2>
    @endforelse
</div>

<form action="/jawaban/{{$question_id}}" method="post" class="my-3">
    @csrf
    <input type="text" class="form-control form-control-lg" name="isi" placeholder="Press enter to post answer...">
</form>


@endsection