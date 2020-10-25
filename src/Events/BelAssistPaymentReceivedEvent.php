<?php

namespace Sun\BelAssist\Events;

use Illuminate\Queue\SerializesModels;
use Sun\BelAssist\Models\BelAssistPaymentModel;

class BelAssistPaymentReceivedEvent
{
    use SerializesModels;

    private BelAssistPaymentModel $belAssistPaymentModel;

    public function __construct(BelAssistPaymentModel $belAssistPaymentModel)
    {
        $this->belAssistPaymentModel = $belAssistPaymentModel;
    }

    public function getBelAssistPaymentModel(): BelAssistPaymentModel
    {
        return $this->belAssistPaymentModel;
    }
}
