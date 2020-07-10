@extends('layouts.main')

@section('page')

<article class="container mb-5">

    <div class="row align-items-center my-4">
        <div class="col-1"></div>
        
        <div class="col-3">
            <h1>List Komplain</h1>                
        </div>
        
        <div class="col-5"></div>
        
        <div class="col-2">
            <a href="{{ route('komplain.tambah') }}" class="btn btn-outline-dark">Tambah Komplain</a>
        </div>

        <div class="col-1"></div>
    </div>
        
    <div class="row">
        <div class="col-12">

            <div class="table-responsive">
                <table class="table table-borderless table-hover">
                    
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="text-center" style="width: 5%">ID</th>
                            <th scope="col">Keluhan</th>
                            <th scope="col" style="width: 15%">Tanggapan terakhir</th>
                            <th scope="col" class="text-center" style="width: 10%">Status</th>
                            <th scope="col" class="text-center" style="width: 30%;">Aksi</th>
                        </tr>
                    </thead>
                    
                    
                    <tbody>
                        @foreach ($komplains as $komplain)

                            <tr class="{{ $komplain->status_proses ? 'bg-light':'bg-white' }}">
                                <th scope="row" class="text-center border-right">{{ "#{$komplain->id}" }}</th>
                                <td>{{ $komplain->komplain }}</td>
                                <td>{{ $komplain->updated_at->timezone('Asia/Jakarta')->format('d M Y h:i:s') }}</td>
                                <td class="align-middle text-center">
                                    @if ($komplain->status_proses)
                                        <span class="badge badge-success">tertangani</span>
                                    @else
                                        <span class="badge badge-primary">proses</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    {{-- <a href="#" class="btn btn-sm btn-outline-primary" aria-disabled="true" disabled>
                                        <i class="material-icons align-middle">edit</i>
                                        <span>Edit</span>
                                    </a> --}}
                                    <form action="{{ route('komplain.selesai', $komplain->id) }}" method="POST" class="d-inline-block">
                                        @csrf @method('PUT')
                                        <button type="submit" class="btn btn-sm btn-outline-primary" onclick="return confirm('Klik OK untuk melanjutkan')" {{ $komplain->status_proses ? 'disabled':'' }}>tandai telah selesai</button>
                                    </form>
                                    <form action="{{ route('komplain.destroy', $komplain->id) }}" method="POST" class="d-inline-block">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            <i class="material-icons align-middle">delete</i>
                                            <span>Hapus</span>
                                        </button>
                                    </form>
                                    <a href="{{ route('komplain.respon', $komplain->id) }}" class="btn btn-sm btn-outline-success">
                                        <i class="material-icons align-middle">done</i>
                                        <span>Beri respons</span>
                                    </a>
                                </td>
                            </tr>
                            
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>  
    </div>

</article>

@endsection