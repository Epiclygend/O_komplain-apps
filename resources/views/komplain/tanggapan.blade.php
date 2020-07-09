@extends('layouts.main')

@section('page')

<article class="container my-3">

    <div class="row">
        <div class="col-11">
            <h1>
                <a href="{{ url()->previous() }}">
                    <i class="material-icons">arrow_back_ios</i>
                </a>
                <span> Sakit Perut</span>
            </h1>
        </div>
        <div class="col-1">
            <h5>
                <span class="badge badge-secondary">#1</span>
            </h5>
        </div>
    </div>

    <div class="row">

        <div class="col card px-0">

            <div class="card-body overflow-auto" style="max-height: 60vh;">
                @for ($i = 0; $i < 10; $i++)
                    
                    <div class="row m-2">
                        <div class="col-10 card px-0">
                            <div class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo sapiente eaque, officia aliquam deserunt placeat suscipit omnis hic dolor, asperiores debitis odio dolorem, nobis reprehenderit. Harum blanditiis quas maiores enim!</div>
                        </div>
                    </div>
                    
                    <div class="row m-2">
                        <div class="col-2"></div>
                        <div class="col-10 card px-0 bg-light border-success">
                            <div class="card-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo sapiente eaque, officia aliquam deserunt placeat suscipit omnis hic dolor, asperiores debitis odio dolorem, nobis reprehenderit. Harum blanditiis quas maiores enim!</div>
                        </div>
                    </div>
                    
                @endfor
            </div>
            
            <div class="card-footer">

                <form method="POST">@csrf
                    <div class="form-row">

                        <div class="form-group col-10">
                            <textarea class="form-control" name="tanggapan" id="tanggapan" rows="4" placeholder="Beri tanggapan"></textarea>
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
                
            </div>
        
        </div>

    </div>

</article>

@endsection