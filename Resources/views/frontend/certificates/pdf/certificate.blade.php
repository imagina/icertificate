<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ Setting::get('core::site-name') }}</title>
  <style>
    @page {
      size: A4 landscape;
      margin: 10mm;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .text-center {
      text-align: center;
    }

    .w-100 {
      width: 100%;
    }

    /* Footer certificate table styles */
    .certificate-footer-table {
      width: 100%;
      margin: 10px 0 10px;
      border-collapse: collapse;
    }

    .certificate-footer-cell {
      font-size: 15px;
      text-transform: uppercase;
      vertical-align: bottom;
      padding-left: 10px;
      letter-spacing: 0.1;
    }

    .certificate-footer-cell strong {
      color: #ECC008;
    }

    .code-certificate {
      color: #ECC008;
      font-size: 17px;
    }

    .certificate-footer-signature {
      text-align: center;
      vertical-align: top;
    }

    .content-signature {
      border-bottom: 2px solid #333;
      width: 80%;
      margin: auto;
    }

    .certificate-footer-signature-img {
      max-height: 80px;
      height: 80px;
      display: block;
      margin: 0 auto;
    }

    .certificate-footer-signature-text {
      margin-top: 10px;
      font-size: 12px;
      margin-bottom: 12px;
    }

    .certificate-footer-empty {
      text-align: center;
      vertical-align: top;
    }

    .certificate-footer-disclaimer-table {
      width: 98%;
      margin-right: 20px;
    }

    .certificate-footer-disclaimer-cell {
      vertical-align: top;
      padding: 10px 10px 0;
    }

    /**/

    body {
      font-family: 'Arial', sans-serif;
      background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
      width: 297mm;
      height: 205mm;
      position: relative;
      overflow: hidden;
    }

    .certificate {
      width: 100%;
      height: 100%;
      position: relative;
      background: #ffffff;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      padding: 15px 15px 0;
      left: -25px;
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      margin-bottom: 15px;
      padding-left: 20px;
    }

    .logo-left {
      position: absolute;
      top: 15px;
      left: 35px;
      height: 152px;
      width: 151px;
      background-size: cover;
      background-repeat: no-repeat;
      border-radius: 50%;
    }

    .logo-center {
      text-align: center;
      flex: 1;
      margin: 0 40px;
      height: 150px;
      background-size: contain;
      background-position: center;
      background-repeat: no-repeat;

    }

    .logo-center h1 {
      color: #000;
      font-size: 28px;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .logo-center .subtitle {
      color: #000;
      font-size: 14px;
      margin-bottom: 10px;
    }

    .nit {
      color: #000;
      font-size: 20px;
      font-weight: bold;
    }

    .qr-code  .certificate-logoThird-img{
      width: 130px;
      height: 130px;
      border: 2px solid #ccc;
      background: #f9f9f9;
      position: absolute;
      top: 24px;
      right: -25px;
      margin-right: 60px;
    }

    .text-download-float {
      position: fixed;
      right: -224px;
      top: 230px;
      font-size: 13px;
      font-weight: 600;
      transform: rotate(90deg);
      z-index: 20;
    }

    .content {
      text-align: center;
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      background-size: 100% 100%;
      background-color: #fff;
      position: relative;
      z-index: -1;
      padding-left: 20px;
    }

    .content .logo-background {
      position: absolute;
      z-index: -2;
      width: 100%;
      opacity: 0.15;
    }

    .text-certificate {
      color: #000;
      font-size: 25px;
      margin-bottom: 10px;
    }

    .name {
      color: #000;
      font-size: 40px;
      font-weight: bold;
      margin-bottom: 10px;
      text-transform: uppercase;
    }

    .cedula {
      color: #000;
      font-size: 40px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .participacion {
      color: #000;
      line-height: 1.5;
      margin-bottom: 15px;
      max-width: 600px;
      margin-left: auto;
      margin-right: auto;
      font-size: 25px;
    }

    .curso-titulo {
      color: #000;
      font-size: 45px;
      font-weight: bold;
      text-transform: uppercase;
      max-width: 850px;
      margin: 0 auto;
      height: 100px;
    }

    .footer {
      display: flex;
      align-items: flex-end;
      margin-top: 5px;
      padding-left: 20px;
    }

    .fecha {
      text-align: left;
      color: #000;
      font-size: 12px;
    }

    .firma {
      text-align: center;
    }

    .firma-line {
      width: 200px;
      height: 120px;
      border-bottom: 2px solid #333;
      position: relative;
      margin: auto;
      background-size: contain;
      background-repeat: no-repeat;

    }

    .firma-texto {
      color: #000;
      font-size: 12px;
      font-weight: bold;
    }

    .codigo {
      text-align: start;
      color: #000;
      font-size: 12px;
    }

    .text-footer {
      font-size: 11px;
      font-weight: 600;

    }
  </style>
</head>
<body>
<div class="certificate">

  <div class="right text-download-float">
    {{setting('icertificate::textFloatRight')}}
  </div>

  <div class="header w-100 d-flex justify-content-center align-items-start">

    <img class="logo-left" src="{{setting('icertificate::logoPrimary')}}">


    <div class="qr-code">
      <img
        src="{{ setting('icertificate::logoThird') }}"
        alt="Signature"
        class="certificate-logoThird-img "
      />
    </div>


    <div class="d-flex flex-column justify-content-center align-items-center w-100">
      <div class="logo-center"
           style="background-image: url({{setting('icertificate::logoSecondary')}});">
        {{--      <h1>CULTURA VIAL</h1>--}}
        {{--      <div class="subtitle">MOVILIDAD Y SERVICIOS</div>--}}
      </div>
      <div class="nit text-center w-100" style="min-width: 100%">
        NIT: 901.539.075-7
        {{ trans('icertificate::pdf.filePdf.nit') }}
      </div>
    </div>
  </div>

  <div class="content">
    <img class="logo-background position-absolute" src="{{setting('icertificate::logoBackground')}}">

    <div class="text-certificate"> {{ trans('icertificate::pdf.filePdf.certificateThat') }}</div>

    <div class="name">{{ strtoupper($certificate->customer->name) }}</div>

    <div class="cedula">CC: {{ $certificate->customer->id_document }}</div>

    <div class="participacion">
      {{--  Participated in the :type training of :hours hours held on :date   --}}
      {{ trans('icertificate::pdf.filePdf.participation', [
      'type' => strtolower($certificate->course->trainingType->name),
      'hours' => $certificate->course->standard_duration,
      'date' => \Carbon\Carbon::parse($certificate->start_date)->translatedFormat('d \d\e F \d\e Y')
]) }}
    </div>

    <div class="curso-titulo">
      {{ strtoupper($certificate->course->title) }}
    </div>
  </div>

  <div class="container-fluid">
    <div class="footer row justify-content-start">

      <table class="certificate-footer-table">
        <tr>
          <td class="certificate-footer-cell" width="33%">
            <div>
              <strong> {{ trans('icertificate::pdf.filePdf.dateExpedition') }}</strong>
              {{ \Carbon\Carbon::parse($certificate->end_date)->translatedFormat('d \d\e F \d\e Y') }}
            </div>
            <div>
              <strong>{{ trans('icertificate::pdf.filePdf.instructor')}}</strong>
              {{ $certificate->course->trainer->full_name }}
            </div>
            <div class="code-certificate">{{ $certificate->code }}</div>
          </td>
          <td class="certificate-footer-signature" width="33%">
            <div class="content-signature" style="height: 80px;">
              <img
                src="{{ setting('icertificate::logoSignature') }}"
                alt="Signature"
                class="certificate-footer-signature-img"
              />
            </div>
            <div class="certificate-footer-signature-text">
              <strong>
                {{ setting('icertificate::peopleSignatureName') }}
              </strong><br>
              {{ setting('icertificate::peopleSignaturePosition') }}
            </div>
          </td>
          <td class="certificate-footer-empty" width="33%">
          </td>
        </tr>
      </table>
      <table class="certificate-footer-disclaimer-table">
        <tr>
          <td class="certificate-footer-disclaimer-cell text-footer" width="100%">
            {{ setting('icertificate::textFooter') }}
          </td>
        </tr>
      </table>
    </div>
  </div>
</div>
</body>
</html>
