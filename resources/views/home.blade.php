@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome!!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

<<<<<<< HEAD
                    {{ __('You are logged in!') }}
                </div>
            </div>
=======
                    {{ __('BWAHAHAHAHA SELAMAT DATANG~~~!!!') }}
                </div>
            </div><a href=""></a>
>>>>>>> fd2ca3e (tambah file)
        </div>
    </div>
</div>
@endsection
