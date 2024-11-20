@extends('layouts.app')

@section('title', 'RH inicio')

@section('content')
    <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Margarito') }}
                </div>


@endsection

@push('styles')
    <!-- Agregar CSS específico para esta página -->
@endpush

@push('scripts')
    <!-- Agregar JS específico para esta página -->
@endpush
