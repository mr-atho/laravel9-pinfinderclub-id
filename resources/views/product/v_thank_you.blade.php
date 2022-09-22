@extends('layouts.v_main')

@section('content')
    <section class="cart text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 text-center text-md-left">
                    @if (Session::has('order_id') && Session::get('order_id') != null)
                        <h3 class="mb-4">Terima kasih</h3>
                        <p>Pesanan Anda sudah terbayarkan. Kami akan memproses pesanan Anda dalam 1-3 hari kerja.</p><br>

                        <h4>Order ID: <strong>{{ Session::get('order_id') }}</strong></h4>
                        <p>Simpan Order ID di tempat yang aman untuk referensi apabila dibutuhkan.</p><br>

                        <h4>Pertanyaan</h4>
                        <p>Silakan hbuungi kami melalui email mr.fightto@gmail.com apabila Anda mempunyai pertanyaan.</p>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
