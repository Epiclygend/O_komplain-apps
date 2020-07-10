{{-- @extends('layouts.main')

@section('page')
    
<article class="container">

    <div class="row align-items-center my-4">
        <div class="col-1"></div>
        
        <div class="col-3">
            <h1>Komplain <span class="badge badge-secondary">#1</span></h1>                
        </div>
        
        <div class="col-6"></div>
        
        <div class="col-1">
            <a href="{{ route('komplain') }}" class="btn btn-outline-danger">Cancel</a>
        </div>

        <div class="col-1"></div>
    </div>

    <div class="row m-5">

        <div class="col-1"></div>
        <div class="col-10">

            <form class="card p-5" method="POST">
                @csrf
                <div class="form-row">
                    
                    <div class="form-group col-8">
                        <label for="keluhan">Keluhan</label>
                        <input type="text" name="komplain" class="form-control" id="keluhan" value="{{ old('komplain') }}">
                    </div>

                    <div class="form-group col-4">
                        <label for="tanggalEntri">Tanggal</label>
                        <input type="text" name="tanggalEntri" class="form-control" id="tanggalEntri" value="{{ now() }}" disabled>
                    </div>

                </div>
                
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea class="form-control" name="keterangan" id="keterangan" rows="10" value="{{ old('keterangan') }}"></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
                
            </form>

        </div>
        <div class="col-1"></div>

    </div>

</article>

@endsection --}}