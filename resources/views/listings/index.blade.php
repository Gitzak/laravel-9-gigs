@extends('layouts.app')
@section('content')
    <main class="main-content">
        <!--== Start Hero Area Wrapper ==-->
        <section class="home-slider-area">
            <div class="home-slider-container default-slider-container">
                <div class="home-slider-wrapper slider-default">
                    <div class="slider-content-area" data-bg-img="{{ asset('theme/assets/img/slider/slider-bg.jpg') }}">
                        <div class="container pt--0 pb--0">
                            <div class="slider-container">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-12 col-lg-8">
                                        <div class="slider-content">
                                            <h2 class="title"><span class="counter" data-counterup-delay="80">2,568</span>
                                                job available <br>You can choose your dream job</h2>
                                            <p class="desc">Find great job for build your bright career. Have many job in
                                                this plactform.</p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="job-search-wrap">
                                            <div class="job-search-form">
                                                <form action="listing/">
                                                    <div class="row row-gutter-10">
                                                        <div class="col-lg-auto col-sm-6 col-12 flex-grow-1">
                                                            <div class="form-group">
                                                                <input type="text" name="search" class="form-control"
                                                                    placeholder="Job title or keywords">
                                                            </div>
                                                        </div>
                                                        {{-- <div class="col-lg-auto col-sm-6 col-12 flex-grow-1">
                                                            <div class="form-group">
                                                                <select class="form-control">
                                                                    <option value="1" selected>Choose City</option>
                                                                    <option value="2">New York</option>
                                                                    <option value="3">California</option>
                                                                    <option value="4">Illinois</option>
                                                                    <option value="5">Texas</option>
                                                                    <option value="6">Florida</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-auto col-sm-6 col-12 flex-grow-1">
                                                            <div class="form-group">
                                                                <select class="form-control">
                                                                    <option value="1" selected>Category</option>
                                                                    <option value="2">Web Designer</option>
                                                                    <option value="3">Web Developer</option>
                                                                    <option value="4">Graphic Designer</option>
                                                                    <option value="5">App Developer</option>
                                                                    <option value="6">UI &amp; UX Expert</option>
                                                                </select>
                                                            </div>
                                                        </div> --}}
                                                        <div class="col-lg-auto col-sm-6 col-12 flex-grow-1">
                                                            <div class="form-group">
                                                                <button type="submit" class="btn-form-search"><i
                                                                        class="icofont-search-1"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-slider-shape">
                <img class="shape1" data-aos="fade-down" data-aos-duration="1500"
                    src="{{ asset('theme/assets/img/slider/vector1.png') }}" width="270" height="234"
                    alt="Image-HasTech">
                <img class="shape2" data-aos="fade-left" data-aos-duration="2000"
                    src="{{ asset('theme/assets/img/slider/vector2.png') }}" width="201" height="346"
                    alt="Image-HasTech">
                <img class="shape3" data-aos="fade-right" data-aos-duration="2000"
                    src="{{ asset('theme/assets/img/slider/vector3.png') }}" width="276" height="432"
                    alt="Image-HasTech">
                <img class="shape4" data-aos="flip-left" data-aos-duration="1500"
                    src="{{ asset('theme/assets/img/slider/vector4.png') }}" width="127" height="121"
                    alt="Image-HasTech">
            </div>
        </section>
        <!--== End Hero Area Wrapper ==-->

        <!--== Start Recent Job Area Wrapper ==-->
        <section class="recent-job-area bg-color-gray">
            <div class="container" data-aos="fade-down">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h3 class="title">Recent Job Circulars</h3>
                            <div class="desc">
                                <p>Many desktop publishing packages and web page editors</p>
                            </div>
                        </div>
                    </div>
                </div>
                @if (session()->has('message'))
                    <div class="form-message alert alert-success fade show">{{ session('message') }}</div>
                @endif
                <div class="row">
                    @unless(count($listings) == 0)
                        @foreach ($listings as $listing)
                            <div class="col-md-4 col-sm-12">
                                <!--== Start Recent Job Item ==-->
                                <div class="recent-job-item">
                                    <div class="company-info">
                                        <div class="logo">
                                            <a href="#"><img src="{{ $listing->logo ? asset('storage/'.$listing->logo) : asset('theme/assets/img/companies/1.jpg') }}"
                                                    width="100" alt="Image-HasTech"></a>
                                        </div>
                                        <div class="content">
                                            <h4 class="name"><a
                                                    href="{{ route('listing.show', ['listing' => $listing->id]) }}">{{ $listing->title }}</a>
                                            </h4>
                                            <p class="address">{{ $listing->location }}</p>
                                        </div>
                                    </div>
                                    <div class="main-content">
                                        <h3 class="title"><a
                                                href="{{ route('listing.show', ['listing' => $listing->id]) }}">{{ $listing->company }}</a>
                                        </h3>
                                        @php
                                            $tags = explode(',', $listing->tags);
                                        @endphp
                                        @if (count($tags))
                                            <h5 class="work-type">
                                                @foreach ($tags as $tag)
                                                    <a href="/listing/?tag={{ $tag }}">{{ $tag }}</a>
                                                    @if (!$loop->last)
                                                        ,
                                                    @endif
                                                @endforeach
                                            </h5>
                                        @endif
                                        <p class="desc">{{ Str::limit($listing->description, 130, '.......') }}</p>
                                    </div>
                                    <div class="recent-job-info">
                                        <div class="salary">
                                            <h4>$5000</h4>
                                            <p>/monthly</p>
                                        </div>
                                        <a class="btn-theme btn-sm"
                                            href="{{ route('listing.show', ['listing' => $listing->id]) }}">Apply Now</a>
                                    </div>
                                </div>
                                <!--== End Recent Job Item ==-->
                            </div>
                        @endforeach
                    @else
                        <p>No listings found</p>
                    @endunless
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="pagination-area">
                            {{$listings->links()}}
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <!--== End Recent Job Area Wrapper ==-->
    </main>
@endsection
