<?php

namespace Modules\Icertificate\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Repositories\CertificateRepository;
use Repositories\CustomerRepository;
use PDF;

class PublicController extends Controller
{
  protected $certificate;
  protected $customer;

  public function __construct(
    CertificateRepository $certificate,
    CustomerRepository $customer
  ) {
    $this->certificate = $certificate;
    $this->customer = $customer;
  }

  public function lookupForm()
  {
    return view('icertificate::frontend.certificates.lookup');
  }

  public function lookupResults(Request $request)
  {
    $request->validate(['document' => 'required']);

    $params = json_decode(json_encode(
      [
        'filter' => [
          'field' => 'id_document',
        ],
      ]
    ));

    $customer = $this->customer->getItem($request->document, $params);

    if (!$customer) {
      return redirect()->back()->with('error', 'No se encontró ningún cliente con ese documento.');
    }

    $certificates = $this->certificate->getItemsBy((object)[
      'filter' => ['customer_id' => $customer->id],
      'include' => ['course']
    ]);

    if ($certificates->isEmpty()) {
      return redirect()->back()->with('error', 'No se encontraron certificados asociados a ese documento.');
    }

    return view('icertificate::frontend.certificates.lookup', compact('certificates'));
  }

  public function download($id)
  {
    $certificate = $this->certificate->getItem($id, json_decode(json_encode([
      'include' => ['customer', 'course', 'company']
    ])));

    if (!$certificate) {
      abort(404);
    }

    $pdf = Pdf::loadView('icertificate::frontend.certificates.pdf.certificate', compact('certificate'));

    return $pdf->stream("certificate-{$certificate->code}.pdf");
  }
}
