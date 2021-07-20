@extends('layouts.success')
@section('title', 'checkout success')

@section('content')
 
<main>
    <div class="section-success d-flex align-items-center">
      <div class="col text-center">
        <img src="{{url('frontend/images/ic_mail.png')}}" alt="">
        <h1>Yey, Sukses!</h1>
        <p>
          We've sent you email for trip instruction 
          <br/>
          please read its as well 
        </p>

        <a href="{{url('/')}}" class="btn btn-home-page mt-3 px-5">
          Home Page
        </a>
      </div>
    </div>
 </main>

@endsection



