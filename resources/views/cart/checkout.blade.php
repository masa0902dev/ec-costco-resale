<p style="position:absolute; top:10%; left:50%; transform:translateX(-50%); font-size:18px;">決済ページへ移動しています...</p>
<script src="https://js.stripe.com/v3/"></script>
<script>
    const publicKey = '{{ $publicKey }}';
    const stripe = Stripe(publicKey);
    window.onload = function() {
        stripe.redirectToCheckout({
            sessionId: '{{ $session->id }}'
        }).then(function (result) {
            window.location.href = 'http://localhost/cart';
        });
    }
</script>
