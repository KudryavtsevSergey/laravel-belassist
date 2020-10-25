<?php

namespace Sun\BelAssist\Responses;

use Illuminate\Contracts\Support\Responsable;
use Sun\BelAssist\ResponseGenerators\AbstractResponseGenerator;
use Symfony\Component\HttpFoundation\Response;

class BelAssistResponse implements Responsable
{
    private AbstractResponseGenerator $generator;

    public function __construct(AbstractResponseGenerator $generator)
    {
        $this->generator = $generator;
    }

    public function toResponse($request): Response
    {
        $xml = $this->generator->generateXml();

        return response($xml->asXML(), Response::HTTP_OK, [
            'Content-Type' => 'application/xml',
        ]);
    }
}
