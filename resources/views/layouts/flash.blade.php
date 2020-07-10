@php
$themes = [
    'primary' => 'alert-primary',
    'success' => 'alert-success',
    'error' => 'alert-danger',
    'warning' => 'alert-warning',
    'info' => 'alert-info',
    'dark' => 'alert-dark',
];
@endphp

<div class="fixed-bottom container">
@if (session()->has('_flash_msg'))
    @if ($flashes = session('_flash_msg'))
        
        @foreach ($flashes as $type => $messages)
            @foreach ($messages as $message)
                
                <div class="row">
                    <div class="alert {{ $themes[$type] }} col" role="alert">
                        <span>{!! $message !!}</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="$(this).alert('close')">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                    

            @endforeach
        @endforeach
        
    @endif
@endif
@if ($errors->all())
    @foreach ($errors->all() as $error)

        <div class="row">
            <div class="alert {{ $themes['error'] }} col" role="alert">
                <span>{!! $error !!}</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="$(this).alert('close')">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>

    @endforeach
@endif
</div>
