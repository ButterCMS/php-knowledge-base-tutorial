@endphp
@extends('layout')
@section('metaTitle', 'HelpCrunch knowledge base - '.$post->getSeoTitle())
@section('metaDescription', $post->getMetaDescription())
@if($post->getFeaturedImage())
    @section('metaImage', $post->getFeaturedImage())
@endif

<section class="article-post">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12 col-12">
                <div class="single-post">
                    <div class="single-post-meta">
                        <h2 class="single-post-header">{{$post->getTitle()}}</h2>
                        <ul class="single-post-meta-info">
                            <x-common-parts.blog-meta-info :post="$post" />
                        </ul>
                </div>
                    <div class="single-post-body">
                        {!! $post->getBody() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection