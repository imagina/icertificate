<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Certificado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
            position: relative;
            font-size: 14px;
        }

        .seal {
            position: absolute;
            top: 30px;
            left: 30px;
            width: 100px;
        }

        .qr {
            position: absolute;
            top: 30px;
            right: 30px;
            width: 90px;
        }

        .logo {
            margin-top: 50px;
        }

        .main-title {
            font-size: 20px;
            font-weight: bold;
            margin-top: 30px;
        }

        .name {
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
        }

        .subname {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .description {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .course-title {
            font-size: 28px;
            font-weight: bold;
            margin: 20px 0;
        }

        .signature {
            margin-top: 40px;
        }

        .signature img {
            width: 150px;
        }

        .footer {
            margin-top: 40px;
            font-size: 10px;
            text-align: justify;
        }

        .code-box {
            margin-top: 10px;
            font-weight: bold;
            color: #c0392b;
        }

        .info {
            margin-top: 30px;
            font-size: 12px;
        }
    </style>
</head>
<body>

{{--{{dd('epaaaa')}}--}}

{{-- Sello --}}
{{-- <img src="{{ public_path('path/to/seal.png') }}" class="seal"> --}}

{{-- QR --}}
{{-- <img src="{{ public_path('path/to/qr.png') }}" class="qr"> --}}

{{-- Logotipo --}}
{{-- <img src="{{ public_path('path/to/logo-culturavial.png') }}" class="logo" width="200"> --}}

<p style="margin-top: 10px;">NIT - 901.339.075-7</p>

<div class="main-title">Certifica que</div>

<div class="name">{{ strtoupper($certificate->customer->name) }}</div>
<div class="subname">CC: {{ $certificate->customer->id_document }}</div>

<div class="description">
    Participó en la formación {{ strtolower($certificate->course->trainingType->name) }} de {{ $certificate->course->standard_duration }} horas realizada el día
    {{ \Carbon\Carbon::parse($certificate->start_date)->translatedFormat('d \d\e F \d\e Y') }}
</div>

<div class="course-title">
    {{ strtoupper($certificate->course->title) }}
</div>

<div class="signature">
    {{-- <img src="{{ public_path('path/to/firma-gerente.png') }}"> --}}
    <div><strong>ERVIN RICARDO BARAJAS R.</strong></div>
    <div>GERENTE</div>
</div>

<div class="info">
    <div><strong>FECHA DE EMISIÓN:</strong> {{ \Carbon\Carbon::parse($certificate->end_date)->translatedFormat('d \d\e F \d\e Y') }}</div>
    <div><strong>FORMADOR:</strong> {{ $certificate->course->trainer->full_name }}</div>
    <div class="code-box">{{ $certificate->code }}</div>
</div>

<div class="footer">
    EL PRESENTE DOCUMENTO CERTIFICA LA COMPETENCIA, ACTUALIZACIÓN DE CONOCIMIENTOS Y VARIABLES TÉCNICAS Y PRÁCTICAS DEL ACUSADO A LO ESTABLECIDO EN EL DECRETO 1079 DE 2015 Y LOS ESTÁNDARES DE SEGURIDAD VIAL DEL COMPORTAMIENTO HUMANO. ESTE CERTIFICADO TIENE VALIDEZ ANTE AUTORIDAD COMPETENTE SIEMPRE Y CUANDO SU AUTENTICIDAD SEA VERIFICADA A TRAVÉS DEL CÓDIGO ÚNICO DE CONSULTA O CON EL RESPALDO FÍSICO DEL FORMADOR AUTORIZADO.
</div>

</body>
</html>
