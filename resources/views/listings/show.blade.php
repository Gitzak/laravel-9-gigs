@extends('layouts.app')
@section('content')
    <main class="main-content">
        <!--== Start Page Header Area Wrapper ==-->
        <div class="page-header-area sec-overlay sec-overlay-black" style="background-position: center center"
            data-bg-img="https://images.unsplash.com/photo-1613909207039-6b173b755cc1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1247&q=80">
            <div class="container pt--0 pb--0">
                <div class="row">
                    <div class="col-12">
                        <div class="page-header-content">
                            <h2 class="title">Job Details</h2>
                            <nav class="breadcrumb-area">
                                <ul class="breadcrumb justify-content-center">
                                    <li><a href="{{ route('listing.index') }}">Home</a></li>
                                    <li class="breadcrumb-sep">//</li>
                                    <li>Job Details</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== End Page Header Area Wrapper ==-->
        @auth
            @if (Auth::user()->id == $listing->user_id)
                <div class="container pt-3 pb--0">
                    <div class="row">
                        <div class="col-md-12">
                            <form method="POST" action="/listing/{{ $listing->id }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger float-end" type="submit">Supprimer</button>
                            </form>
                            <a href="/listing/{{ $listing->id }}/edit" class="btn btn-warning float-end mx-2"
                                type="button">Modifier</a>
                        </div>
                    </div>
                </div>
            @endif
        @endauth
        <!--== Start Job Details Area Wrapper ==-->
        <section class="job-details-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="job-details-wrap">
                            <div class="job-details-info">
                                <div class="thumb">
                                    <img src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('theme/assets/img/companies/1.jpg') }}"
                                        width="130" alt="Image-HasTech">
                                </div>
                                <div class="content">
                                    <h4 class="title">{{ $listing->title }}</h4>
                                    <h5 class="sub-title">{{ $listing->company }}</h5>
                                    <ul class="info-list">
                                        <li><i class="icofont-location-pin"></i> {{ $listing->location }}</li>
                                        <li><i class="icofont-email"></i> {{ $listing->email }}</li>
                                    </ul>
                                    <ul class="info-list mt-2">
                                        <li><i class="icofont-web"></i> <a target="_blank"
                                                href="{{ $listing->website }}">Website</a> </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="job-details-price">
                                <h4 class="title">$5000 <span>/monthly</span></h4>
                                <button type="button" class="btn-theme">Apply Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 col-xl-8">
                        <div class="job-details-item">
                            <div class="content">
                                <h4 class="title">Description</h4>
                                <p class="desc">{{ $listing->description }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-4">
                        <div class="job-sidebar">
                            <div class="widget-item widget-tag">
                                <div class="widget-title">
                                    <h3 class="title">Tags:</h3>
                                </div>
                                <div class="widget-tag-list">
                                    @php
                                        $tags = explode(',', $listing->tags);
                                    @endphp
                                    @if (count($tags))
                                        @foreach ($tags as $tag)
                                            <a href="#">{{ $tag }}</a>
                                        @endforeach
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== End Job Details Area Wrapper ==-->
    </main>
@endsection
