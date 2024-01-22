@extends('admin.adminbase')

@section('contents')
    <section id="new">
        <div class="container">
            <h3>新着情報　直近の記事</h3>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 article-wrap">
                    @foreach ($articles->take(3) as $article)
                        <div class="col-md-4">
                            <div class="card m-3 p-4">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $article->title }}</h4>
                                    <h6 class="card-subtitle">{{ $article->updated_at }}</h6>
                                    <div><img src="storage/{{ $article->item_img }}" width='100%'></div>
                                    <h5>{{ $article->price . "円（税込）" }}</h5>
                                    <p class="card-text">{{ $article->body }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <a class="btn more" href="/admin-news" role="button">記事一覧へ &raquo;</a>
            </div>
        </div> <!-- /container -->
    </section>
@endsection
