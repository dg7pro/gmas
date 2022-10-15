@extends('layouts.app')

@section('title', 'Contacts @ GMAS')

@section('content')
    <div class="mt-5 mb-5">

        <div class="card text-center border-info mb-5">
            <div class="card-header bg-info">
                <b>Bihar Office</b>
            </div>
            <div class="card-body">
                <h5 class="card-title">Bihar Office</h5>
                <p class="card-text">रजिस्टर्ड आफिस: ग्राम - कड़ारी, पोस्ट - धोबहां बाजार, जिला - भोजपुर (आरा), बिहार-802156</p>
                <p class="card-text">मोबाइल : 9102787075, 6306192346</p>
                <p class="card-text">ई-मेल : gmatrustindia@gmail.com</p>
                <a href="#" class="btn btn-outline-info">Show Map</a>
            </div>
            <div class="card-footer text-muted bg-info">
                Timing: 9am to 7pm
            </div>
        </div>

        <div class="card text-center border-warning">
            <div class="card-header bg-warning">
                <b>Uttar Pradesh Office</b>
            </div>
            <div class="card-body">
                <h5 class="card-title">AIESECI Institute </h5>
                <p class="card-text">उ0प्र0 कार्यालय: आइसेकी बिल्ंिडग, सी - 29/69 लोहामण्डी, मलदहिया, वाराणसी -221002</p>
                <p class="card-text">मोबाइल : 9102787075, 6306192346</p>
                <p class="card-text">ई-मेल : gmatrustindia@gmail.com</p>
                <a href="#" class="btn btn-outline-warning">Show Map</a>
            </div>
            <div class="card-footer text-muted bg-warning">
                Timing: 9am to 7pm
            </div>
        </div>
    </div>


@endsection