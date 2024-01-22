@extends('layouts.subpage')

@section('top-title','新着情報')

@section('top-img')
<div class="news-wrap"></div>
@endsection

@section('contents')
    <div class="container news">
        <div class="row">
            <div class="col-md-12">
                <h3>新着情報</h3>
                <p class="intro">可愛らしい新しい仲間たちが入荷しました！<br>
                    ゴールデンハムスター、ジャンガリアンハムスター、ロボロフスキーハムスターなど、さまざまな種類のハムスターがお店にやってきました。<br>
                    当店のハムスターたちの元気な様子や新商品のご案内をお届けします。ぜひご覧ください！
                </p>
            </div>

            <div class="col-md-12 article-wrap">
                @foreach($articles as $article)
                    <div class="col-md-4">
                        <div class="card m-3 p-4">
                            <div class="card-body">
                                <h4 class="card-title">{{$article->title}}</h4>
                                <h6 class="card-subtitle">{{$article->updated_at}}</h6>
                                <div class="wrap-img"><img src="storage/{{ $article->item_img }}" width='100%'></div>
                                <h5>{{$article->price . "円（税込）"}}</h5>
                                {{-- <p class="card-text">{{$article->body}}</p> --}}
                                <p class="card-text">{!!nl2br(e($article->body))!!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection