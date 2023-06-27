<?php

declare(strict_types=1);

namespace Sun\BelAssist\Responses;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Response;
use Sun\BelAssist\ResponseGenerators\AbstractResponseGenerator;

class BelAssistResponse implements Responsable
{
    public function __construct(
        private AbstractResponseGenerator $generator,
    ) {
    }

    public function toResponse($request): Response
    {
        $xml = $this->generator->generateXml();

        return new Response($xml, Response::HTTP_OK, [
            'Content-Type' => 'application/xml',
        ]);
    }
}
