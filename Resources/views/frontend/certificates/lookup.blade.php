@extends('layouts.master')

@section('content')
    <div class="container py-5">
        <h2 class="mb-4">Consulta de Certificados</h2>

        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form method="POST" action="{{ route(LaravelLocalization::getCurrentLocale() . '.icertificates.lookup') }}">
        @csrf
            <div class="mb-3">
                <label for="document" class="form-label">Número de documento</label>
                <input type="text" class="form-control" id="document" name="document" required>
            </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>

        @if (isset($certificates) && count($certificates))
            <h4 class="mt-5">Certificados encontrados</h4>
            <ul class="list-group">
                @foreach ($certificates as $certificate)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Curso: {{ $certificate->course->title }} | Fecha: {{ $certificate->start_date }}
                        <a href="{{ route(LaravelLocalization::getCurrentLocale() . '.icertificates.download', $certificate->id) }}" class="btn btn-sm btn-success">
                            Descargar PDF
                        </a>

                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
