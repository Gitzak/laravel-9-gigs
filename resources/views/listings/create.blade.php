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
                <div class="row">
                    <div class="contact-form">
                        <form id="contact-form" action="/listing" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="section-title text-center">
                                        <h3 class="title">Create Post</h3>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="title" placeholder="Title"
                                            value="{{ old('title') }}">
                                        @error('title')
                                            <div class="form-message alert alert-danger fade show">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="tags" placeholder="Tags"
                                            value="{{ old('tags') }}">
                                        @error('tags')
                                            <div class="form-message alert alert-danger fade show">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="company" placeholder="Company"
                                            value="{{ old('company') }}">
                                        @error('company')
                                            <div class="form-message alert alert-danger fade show">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Logo company</label>
                                        <input class="form-control" type="file" name="logo" placeholder="Logo">
                                        @error('logo')
                                            <div class="form-message alert alert-danger fade show">{{ $logo }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="location" placeholder="Location"
                                            value="{{ old('location') }}">
                                        @error('location')
                                            <div class="form-message alert alert-danger fade show">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" type="email" name="email" placeholder="Email"
                                            value="{{ old('email') }}">
                                        @error('email')
                                            <div class="form-message alert alert-danger fade show">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="website" placeholder="Website"
                                            value="{{ old('website') }}">
                                        @error('website')
                                            <div class="form-message alert alert-danger fade show">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="description" placeholder="Description">{{ old('description') }}</textarea>
                                        @error('description')
                                            <div class="form-message alert alert-danger fade show">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb--0">
                                        <button class="btn-theme d-block w-100" type="submit">Create</button>
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
