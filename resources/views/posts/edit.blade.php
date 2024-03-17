@extends('main')
@section('title','Edit Post')
@section('content')
     <!-- Page Header Start -->
     <div class="container-fluid bg-primary py-5 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="display-4 mb-4 mb-md-0 text-secondary text-uppercase">Edit post</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-sm btn-outline-light" href="">Home</a>
                        <i class="fas fa-angle-double-right text-light mx-2"></i>
                        <a class="btn btn-sm btn-outline-light disabled" href="">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
        
            <div class="row">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form enctype="multipart/form-data" name="sentMessage" id="contactForm" method='post' action="{{ route('posts.update',['post'=>$post->id]) }}">
                            @method('PUT')
                            @csrf
                            <div class="form-row">
                                <div class="col-sm-6 control-group">
                                    <input type="text"  class="form-control p-4" id="subject" placeholder="Post title" 
                                     name='title' value="{{ $post->title}}"/>
                                    @error('title')
                                     <p class="help-block text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="text" class="form-control p-4" value="{{$post->short_content}}" id="message" name='short_content' placeholder="Short title"  data-validation-required-message="Please enter your email" />
                                     @error('short_content')
                                     <p class="help-block text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="control-group my-2">
                                <input type="file" name="photo" class="form-control p-4" id="subject"  />
                                @error('photo')
                                     <p class="help-block text-danger">{{ $message }}</p>
                                @enderror
                            </div> 
                            <div class="control-group">
                                <textarea  class="form-control  my-2"  name="content"
                                placeholder="Content enter" >
                                {{$post->content}}
                                </textarea>

                                @error('content')
                                     <p class="help-block text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
