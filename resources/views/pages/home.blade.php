@extends('layouts.main_template')
@section('title') หน้าหลัก @endsection
@section('content')
<!-- Slide Image -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('assets/images/slide1.jpg') }}" class="d-block w-100" alt="ภาพที่ 1">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/images/slide2.jpg') }}" class="d-block w-100" alt="ภาพที่ 2">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/images/slide3.jpg') }}" class="d-block w-100" alt="ภาพที่ 3">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!--ส่วนของ Feature -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 text-center">
            <i class="fas fa-home fa-3x text-success mb-3"></i>
            <h2 class="head-title">หน้าหลัก</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi enim magnam, ex provident doloribus reprehenderit doloremque tenetur pariatur temporibus quisquam excepturi. Totam iusto aliquam nostrum praesentium soluta laudantium quibusdam. Accusamus!</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-concierge-bell fa-3x text-warning mb-3"></i>
            <h2 class="head-title">เกี่ยวกับเรา</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis nisi cumque nesciunt sed beatae hic magni modi laboriosam ullam quam doloremque tempore commodi maiores, fugiat, porro necessitatibus debitis placeat?</p>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-cloud-showers-heavy fa-3x text-danger mb-3"></i>
            <h2 class="head-title">บริการ</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt sequi hic aliquam magni odio accusantium vero numquam quo labore odit? Totam, eius. Aperiam sapiente, eius accusantium distinctio tempore iure minima.</p>
        </div>
    </div>
</div>

@endsection