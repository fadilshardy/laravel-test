@extends('layouts.master')

@section('content')
<div class="card m-2">
    <div class="card-header bg-secondary">
        <h3 class="card-title justify-content-center">Pertanyaan apa yang ingin kamu tanyakan?</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/pertanyaan" method="POST">
        @csrf

        <div class="card-body">
            <div class="form-group">
                <input type="text" name="judul" class="form-control" id="judul" placeholder="Isi judul pertanyaan.."
                    required>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="isi" id="isi" cols="30" rows="10"
                    placeholder="Isi deskripsi pertanyaan anda.."></textarea>
            </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer ">
            <button type="submit" class="btn btn-primary ">Submit</button>
        </div>
    </form>
</div>

@endsection