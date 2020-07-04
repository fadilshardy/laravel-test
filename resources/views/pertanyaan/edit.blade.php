@extends('layouts.master')

@section('content')
<div class="card m-2">
    <div class="card-header bg-secondary">
        <h3 class="card-title justify-content-center">Edit Question {{$question->id}}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/pertanyaan/{{$question->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <input type="text" name="judul" class="form-control" id="judul" placeholder="Isi judul pertanyaan.."
                    value={{$question->judul}} required>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="isi" id="isi" cols="30" rows="10"
                    placeholder="Isi deskripsi pertanyaan anda..">{{$question->isi}}</textarea>
            </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer ">
            <button type="submit" class="btn btn-primary ">Update</button>
        </div>
    </form>
</div>

@endsection