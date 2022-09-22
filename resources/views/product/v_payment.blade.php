@extends('layouts.v_main')

@section('content')
    <section class="cart text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 text-center text-md-left">
                    <h3 class="mb-4">Total Pembayaran</h3>

                    @if (Session::has('total') && Session::get('total') != null)
                        @if (Session::has('order_id') && Session::get('order_id') != null)
                            <h1>Rp. {{ number_format(Session::get('total')) }}</h1>

                            <p class="mb-4">Pilih metode pembayaran Anda</p>
                            <div class="row g-2">
                                <div class="col-sm-6">
                                    <h4><strong>Bank Lokal</strong></h4>
                                    <strong>Bank Rakyat Indonesi (BRI)</strong><br>
                                    Nama Rekening: Tanuarto Simatupang<br>
                                    No. Rekening: 122801002406500
                                </div>
                                <div class="col-sm-6">
                                    <h4><strong>Paypal</strong></h4>
                                    <p>Kurs dollar <strong>Rp. {{ number_format($kurs) }}</strong><br>
                                        Total pembayaran melalui paypal <strong>${{ $total_paypal }}</strong>
                                    </p>
                                    <!-- Set up a container element for the button -->
                                    <div id="paypal-button-container"></div>
                                </div>
                            </div>
                        @endif
                    @endif
                </div>

            </div>
        </div>

    </section>


    <!-- Replace "test" with your own sandbox Business account app client ID -->
    <script
        src="https://www.paypal.com/sdk/js?client-id=AeX-JYUvu2Fs4bHez88n9wZOrVfBB8om6TlI6Gq_8q2huL1gO1Sdr6tjsC9lWgJhRHesjsduQm7shXWw&currency=USD">
    </script>

    <script>
        paypal.Buttons({
            // Sets up the transaction when a payment button is clicked
            createOrder: (data, actions) => {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '{{ $total_paypal }}' // Can also reference a variable or function
                        }
                    }]
                });
            },
            // Finalize the transaction after payer approval
            onApprove: (data, actions) => {
                return actions.order.capture().then(function(orderData) {

                    //Successful capture! For dev/demo purposes:
                    console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                    const transaction = orderData.purchase_units[0].payments.captures[0];
                    // alert(
                    //     `Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`
                    // );

                    window.location.href = '/verify_payment/' + transaction.id;

                    // When ready to go live, remove the alert and show a success message within this page. For example:
                    // const element = document.getElementById('paypal-button-container');
                    // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                    // Or go to another URL:  actions.redirect('thank_you.html');
                });
            }
        }).render('#paypal-button-container');
    </script>

@endsection
