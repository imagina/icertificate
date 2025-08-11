<?php

return [
  'logoPrimary' => [
    'value' => (object)['setting::mainimage' => null],
    'name' => 'medias_single',
    'fakeFieldName' => 'icertificate::logoPrimary',
    'type' => 'media',
    'groupName' => 'pdfCertificate',
    'groupTitle' => 'icertificate::pdf.labelGroupExternalPages',
    'props' => [
      'label' => 'icertificate::pdf.settings.logoPrimary',
      'zone' => 'setting::mainimage',
      'entity' => "Modules\Setting\Entities\Setting",
      'entityId' => null
    ]
  ],
  'logoSecondary' => [
    'value' => (object)['setting::mainimage' => null],
    'name' => 'medias_single',
    'fakeFieldName' => 'icertificate::logoSecondary',
    'type' => 'media',
    'groupName' => 'pdfCertificate',
    'groupTitle' => 'icertificate::pdf.labelGroupExternalPages',
    'props' => [
      'label' => 'icertificate::pdf.settings.logoSecondary',
      'zone' => 'setting::mainimage',
      'entity' => "Modules\Setting\Entities\Setting",
      'entityId' => null
    ]
  ],
  'logoThird' => [
    'value' => (object)['setting::mainimage' => null],
    'name' => 'medias_single',
    'fakeFieldName' => 'icertificate::logoThird',
    'type' => 'media',
    'groupName' => 'pdfCertificate',
    'groupTitle' => 'icertificate::pdf.labelGroupExternalPages',
    'props' => [
      'label' => 'icertificate::pdf.settings.logoThird',
      'zone' => 'setting::mainimage',
      'entity' => "Modules\Setting\Entities\Setting",
      'entityId' => null
    ]
  ],
  'logoBackground' => [
    'value' => (object)['setting::mainimage' => null],
    'name' => 'medias_single',
    'fakeFieldName' => 'icertificate::logoBackground',
    'type' => 'media',
    'groupName' => 'pdfCertificate',
    'groupTitle' => 'icertificate::pdf.labelGroupExternalPages',
    'props' => [
      'label' => 'icertificate::pdf.settings.logoBackground',
      'zone' => 'setting::mainimage',
      'entity' => "Modules\Setting\Entities\Setting",
      'entityId' => null
    ]
  ],
  'logoSignature' => [
    'value' => (object)['setting::mainimage' => null],
    'name' => 'medias_single',
    'fakeFieldName' => 'icertificate::logoSignature',
    'type' => 'media',
    'groupName' => 'pdfCertificate',
    'groupTitle' => 'icertificate::pdf.labelGroupExternalPages',
    'props' => [
      'label' => 'icertificate::pdf.settings.logoSignature',
      'zone' => 'setting::mainimage',
      'entity' => "Modules\Setting\Entities\Setting",
      'entityId' => null
    ]
  ],

  'textFloatRight' => [
    'value' => null,
    'name' => 'icertificate::textFloatRight',
    'groupName' => 'pdfCertificate',
    'groupTitle' => 'icertificate::pdf.labelGroupExternalPages',
    'type' => 'input',
    'props' => [
      'type' => 'textarea',
      'label' => 'icertificate::pdf.settings.textFloatRight',
    ]
  ],
  'textFooter' => [
    'value' => null,
    'name' => 'icertificate::textFooter',
    'groupName' => 'pdfCertificate',
    'groupTitle' => 'icertificate::pdf.labelGroupExternalPages',
    'type' => 'input',
    'props' => [
      'type' => 'textarea',
      'label' => 'icertificate::pdf.settings.textFooter',
    ]
  ],
  'peopleSignatureName' => [
    'value' => null,
    'name' => 'icertificate::peopleSignatureName',
    'groupName' => 'pdfCertificate',
    'groupTitle' => 'icertificate::pdf.labelGroupExternalPages',
    'type' => 'input',
    'props' => [
      'type' => 'textarea',
      'label' => 'icertificate::pdf.settings.peopleSignatureName',
    ]
  ],
  'peopleSignaturePosition' => [
    'value' => null,
    'name' => 'icertificate::peopleSignaturePosition',
    'groupName' => 'pdfCertificate',
    'groupTitle' => 'icertificate::pdf.labelGroupExternalPages',
    'type' => 'input',
    'props' => [
      'type' => 'textarea',
      'label' => 'icertificate::pdf.settings.peopleSignaturePosition',
    ]
  ],
  'infoNitCertificate' => [
    'value' => null,
    'name' => 'icertificate::infoNitCertificate',
    'groupName' => 'pdfCertificate',
    'groupTitle' => 'icertificate::pdf.labelGroupExternalPages',
    'type' => 'input',
    'props' => [
      'type' => 'textarea',
      'label' => 'icertificate::pdf.settings.infoNitCertificate',
    ]
  ],
];
