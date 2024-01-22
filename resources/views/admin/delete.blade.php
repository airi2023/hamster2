@extends('admin.adminbase')

@section('contents')
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <h3>投稿削除</h3>
            </div>

            <div class="col-12">
                <form method="post" action="./del_data">
                    @csrf
                    <input type="hidden" name="delete_id" value="{{ $article->id }}">

                    <div class="form-group mb-3">
                        <label for="titleInput">タイトル</label>
                        <input type="text" class="form-control" id="titleInput" name="title" readonly
                            value="{{ $article->title }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="priceInput">価格</label>
                        <input type="text" class="form-control" id="priceInput" name="price" readonly
                            value="{{ $article->price }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="bodyInput">内容</label>
                        <textarea class="form-control" id="bodyInput" rows="8" name="body" readonly>{{ $article->body }}</textarea>
                    </div>

                    <div class="form-group mb-5">
                        <label for="itemImgBefore">画像</label><br>
                        <img src="storage/{{ $article->item_img }}" width="200px" id="itemImgBefore" readonly>
                    </div>

                    <button type="submit" class="btn" name="add" value="add">削除</button>
                    <a href="/admin-news" class="btn">キャンセル</a>
                </form>
            </div>
        </div>
    </div>
@endsection
