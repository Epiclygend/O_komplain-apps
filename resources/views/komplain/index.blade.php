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
                <table class="table table-sm table-hover">
                    
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="text-center" style="width: 5%">#</th>
                            <th scope="col">Keluhan</th>
                            <th scope="col" style="width: 15%">Tanggal</th>
                            <th scope="col" class="text-center" style="width: 10%">Status</th>
                            <th scope="col" class="text-center" style="width: 30%;">Aksi</th>
                        </tr>
                    </thead>
                    
                    
                    <tbody>
                        @for ($i = 0; $i < 10; $i++)
                        
                            <tr>
                                <th scope="row" class="text-center border-right">{{ $i+1 }}</th>
                                <td>Mark</td>
                                <td>{{ now()->format('d M Y') }}</td>
                                <td class="align-middle text-center">
                                    <span class="badge badge-success">tertangani</span>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-outline-primary">
                                        <i class="material-icons align-middle">edit</i>
                                        <span>Edit</span>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-outline-danger">
                                        <i class="material-icons align-middle">delete</i>
                                        <span>Hapus</span>
                                    </a>
                                    <a href="{{ route('komplain.respon') }}" class="btn btn-sm btn-outline-success">
                                        <i class="material-icons align-middle">done</i>
                                        <span>Beri respons</span>
                                    </a>
                                </td>
                            </tr>
                            
                        @endfor
                    </tbody>
                </table>
            </div>

        </div>  
    </div>

</article>

@endsection