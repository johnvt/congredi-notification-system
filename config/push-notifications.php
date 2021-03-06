<?php

return [
	'apns_production' => [
		'environment' =>'production',
		'service'     =>'apns',
		'options' => [
			'certificate' =>'/path/to/certificate.pem',
			'passPhrase'  =>'password',
		]
	],
	'gcm_production' => [
		'environment' =>'production',
		'service'     =>'gcm',
		'options' => [
			'apiKey' =>'yourAPIKey',
		]
	],
	'apns_local' => [
		'environment' =>'development',
		'service'     =>'apns',
		'options' => [
			'certificate' =>'/path/to/certificate.pem',
			'passPhrase'  =>'password',
		]
	],
	'gcm_local' => [
		'environment' =>'development',
		'service'     =>'gcm',
		'options' => [
			'apiKey' =>'yourAPIKey',
		]
	],
];