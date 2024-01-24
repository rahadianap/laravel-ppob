@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 mb-3 mb-sm-5">
            <p class="h2"><strong>Deposit</strong></p>
            <div class="card">
                <div class="card-header">{{ __('Sisa Deposit') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="h2">{{ $result }}</p>
                    <button type="button" class="btn btn-primary">Top Up Deposit</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-6 mb-3 mb-sm-5">
            <p class="h2"><strong>Prepaid (Prabayar)</strong></p>
            <div class="card">
                <div class="card-header">{{ __('Total Penjualan') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="h2">{{ __('Rp. 0') }}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mb-3 mb-sm-5">
            <p class="h2"><strong>Postpaid (Pascabayar)</strong></p>
            <div class="card">
                <div class="card-header">{{ __('Total Penjualan') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="h2">{{ __('Rp. 0') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
