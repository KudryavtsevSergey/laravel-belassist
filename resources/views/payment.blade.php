<form id="payment" action="{{ sprintf('%s/pay/order.cfm', $gateway) }}" method="post">
    <input type="hidden" name="Merchant_ID" value="{{ $merchantId }}" />
    <input type="hidden" name="OrderNumber" value="{{ $order  }}" />
    <input type="hidden" name="Delay" value="{{ $delay  }}" />
    <input type="hidden" name="language" value="{{ $language }}" />
    <input type="hidden" name="OrderAmount" value="{{ $amount }}" />
    <input type="hidden" name="OrderCurrency" value="{{ $currency }}" />

    <input type="hidden" name="Lastname" value="{{ $lastname }}" />
    <input type="hidden" name="Firstname" value="{{ $name }}" />
    <input type="hidden" name="Email" value="{{ $email }}" />
    <input type="hidden" name="MobilePhone" value="{{ $phone }}" />

    <input type="hidden" name="URL_RETURN" value="{{ $urlReturn }}" />

    <input type="submit" value="Pay" />
</form>

<script>
document.getElementById('payment').submit();
</script>
