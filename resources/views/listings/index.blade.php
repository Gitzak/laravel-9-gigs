@extends('layouts.app')
@section('content')
    <main class="main-content">
        <!--== Start Recent Job Area Wrapper ==-->
        <section class="recent-job-area bg-color-gray">
            <div class="container" data-aos="fade-down">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h3 class="title">List of Jobs</h3>
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
