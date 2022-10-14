@extends('layouts.app')
@section('content')
    <style>
        #contact-form>div>div:nth-child(5)>div>input {
            height: 30px;
            background-color: transparent;
            border-color: transparent;
            padding-top: 3px;
        }
    </style>
    <main class="main-content">
        <section class="recent-job-area bg-color-gray">
            <div class="container" data-aos="fade-down">
                @if (session()->has('message'))
                    <div class="form-message alert alert-success fade show">{{ session('message') }}</div>
                @endif
                <div class="row">
                    <div class="contact-form">
                        <form id="contact-form" action="/listing/{{$listing->id}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-12">
                                    <div class="section-title text-center">
                                        <h3 class="title">Edit Post : {{ $listing->title }}</h3>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="title" placeholder="Title"
                                            value="{{ $listing->title }}">
                                        @error('title')
                                            <div class="form-message alert alert-danger fade show">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="tags" placeholder="Tags"
                                            value="{{ $listing->tags }}">
                                        @error('tags')
                                            <div class="form-message alert alert-danger fade show">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="company" placeholder="Company"
                                            value="{{ $listing->company }}">
                                        @error('company')
                                            <div class="form-message alert alert-danger fade show">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Logo company</label>
                                        <img class="d-block mb-2" src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('theme/assets/img/companies/1.jpg') }}"
                                            width="100" alt="Image-HasTech">
                                        <input class="form-control" type="file" name="logo" placeholder="Logo">
                                        @error('logo')
                                            <div class="form-message alert alert-danger fade show">{{ $logo }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="location" placeholder="Location"
                                            value="{{ $listing->location }}">
                                        @error('location')
                                            <div class="form-message alert alert-danger fade show">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" type="email" name="email" placeholder="Email"
                                            value="{{ $listing->email }}">
                                        @error('email')
                                            <div class="form-message alert alert-danger fade show">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="website" placeholder="Website"
                                            value="{{ $listing->website }}">
                                        @error('website')
                                            <div class="form-message alert alert-danger fade show">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="description" placeholder="Description">{{ $listing->description }}</textarea>
                                        @error('description')
                                            <div class="form-message alert alert-danger fade show">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb--0">
                                        <button class="btn-theme d-block w-100" type="submit">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
