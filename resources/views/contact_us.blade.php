@extends('layouts.base')
@push('styles')
    <link id="color-link" rel="stylesheet" type="text/css" href="{{asset('assets/css/demo2.css')}}">
@endpush
@section('content')

<div class="container">
    <h1 style="text-align: center;">Contact Us</h1>

    <div style="margin-bottom: 20px; padding: 80;">
        <h2>Our Location</h2>
        <p><i class="fas fa-map-marker-alt"></i> Harmu Colony<br>Ranchi, India</p>
    </div>
    <div class="map_main">
        <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3662.8286623568583!2d85.30037687419349!3d23.358221203721417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4e0582202c147%3A0xc6830d6d89501310!2sHarmu%20Chowk%2C%20Harmu%20Housing%20Colony%2C%20Delatoli%2C%20Ranchi%2C%20Jharkhand%20834002!5e0!3m2!1sen!2sin!4v1716349661449!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          {{-- <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="280" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe> --}}
        </div>
      </div>
    <div style="margin-bottom: 20px; padding: 80; margin-top:20px;">
        <h2>Contact Information</h2>
        <p><i class="fas fa-envelope"></i> Email: <a href="mailto:arpitchauhan1607@gmail.com">arpitchauhan1607@gmail.com</a></p>
        <p><i class="fas fa-phone"></i> Phone: +1 234 567 890</p>
    </div>
    <div>
        <h2>Need Help?</h2>
        <p>If you have any problems, please contact us on our social media channels:</p>
        <ul style="list-style: none; padding: 80;">
            <li style="margin-bottom: 10px;"><a href="https://t.me/+rD2DQA2DDfQ1ODM1/Notes" target="_blank"><i class="fab fa-telegram"></i> Telegram</a></li>
            <li style="margin-bottom: 10px;"><a href="https://www.facebook.com/ShareefInsaan" target="_blank"><i class="fab fa-facebook"></i> Facebook</a></li>
            <li><a href="https://wa.me/7050370442" target="_blank"><i class="fab fa-whatsapp"></i> WhatsApp</a></li>
        </ul>
    </div>
</div>
@endsection
