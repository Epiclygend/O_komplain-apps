@extends('layouts.main')

@section('page')
    
<div class="container my-5">

    <div class="row">

        <div class="col">
            <h1 class="display-4">Sebelum melanjutkan sebagai operator</h1>
        </div>

    </div>

    <div class="row">

        <div class="col-3"></div>
        <form class="col-6 card px-0" method="POST">
            @csrf

            <div class="card-body pt-4 px-5 pb-3">

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" required value="{{ old('nama') }}">
                </div>

                <div class="form-group">
                    <label for="noTelp">No Telpon</label>
                    <input type="tel" name="noTelp" class="form-control" id="noTelp" required value="{{ old('noTelp') ?? '62' }}">
                </div>

                <small class="text-muted">Mohon masukkan identitas anda sebagai Operator</small>

            </div>

            <button type="submit" class="card-footer btn btn-primary bg-primary btn-lg">Submit</button>
                
        </form>
        <div class="col-3"></div>

    </div>

</div>

@endsection