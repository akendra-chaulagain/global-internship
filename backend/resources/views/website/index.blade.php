@extends('layouts.master')
@push('title')
    Home
@endpush

@section('content')
   


    @include('website.main_slider')
    @include('website.home_about_company')
    @include('website.home_our_program')
     @include('website.company-success')
     @include('website.home_step')
    
   
    {{-- @include('website.home_about_company')
    @include('website.home_job_category')
    @include('website.home_message')
    @include('website.home_notice')
    @include('website.company_partner') --}}
@endsection
