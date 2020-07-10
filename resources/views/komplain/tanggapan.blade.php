@extends('layouts.main')

@inject('Carbon', 'Carbon\Carbon')

@section('page')

<article class="container my-3">

    <div class="row align-items-center">
        <div class="col-10">
            <h1>
                <a href="{{ route('komplain.index') }}">
                    <i class="material-icons">arrow_back_ios</i>
                </a>
                <span class="badge badge-secondary">{{ "#{$model->id}" }}</span>
                <span> {{ $model->komplain }}</span>
            </h1>
        </div>
        @if (!$model->status_proses)
            <form action="{{ route('komplain.selesai', $model->id) }}" method="POST" class="col-2 text-center">
                @csrf @method('PUT')
                <button type="submit" class="btn btn-success btn-sm" onclick="return confirm('Klik OK untuk melanjutkan')">tandai telah selesai</button>
            </form>
        @endif
    </div>

    <div class="row">

        <div class="col card px-0">

            <div class="card-body overflow-auto" style="height: 60vh;">
                @foreach ($model->respon_keluhan as $respon)
                    @php
                        list(
                            'from' => $from,
                            'message' => $message,
                            'time' => $time,
                        ) = $respon;
                    @endphp
                    
                    <div class="row m-2">
                        @if (is_int($from)) <div class="col-2"></div> @endif
                        <div class="col-10 card px-0 {{ is_int($from) ? 'bg-light border-success':''}}">
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <p>{{ $message }}</p>
                                    <footer class="blockquote-footer"><small>{{ $Carbon::createFromFormat('d M Y h:i:s', $time)->timezone('Asia/Jakarta') }}</small></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    
                @endforeach
            </div>
            
            <div class="card-footer {{ $model->status_proses ? 'bg-success text-white':'' }}">

                @if (!$model->status_proses)
                    <form method="POST">@csrf
                        <div class="form-row">

                            <div class="form-group col-10">
                                <textarea class="form-control" name="tanggapan" id="tanggapan" rows="4" placeholder="Beri tanggapan" required></textarea>
                            </div>
                            
                            <div class="container col-2">
                                <div class="row">
                                    <small class="text-muted col">Balas sebagai</small>
                                </div>

                                <div class="row">
                                    <div class="btn-group-vertical col">
                                        <button type="submit" name="responden" class="btn btn-primary" value="pengomplain">Pengomplain</button>
                                        <button type="submit" name="responden" class="btn btn-success" value="operator">Operator</button>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </form>                    
                @else
                    
                    Masalah terpecahkan!
                    
                @endif
                
            </div>
        
        </div>

    </div>

</article>

@endsection