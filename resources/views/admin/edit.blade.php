@extends('admin.adminbase')

@section('contents')
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <h3>投稿修正</h3>
            </div>

            <div class="col-12">
                <form method="post" action="./change">
                    @csrf
                    <input type="hidden" name="change_id" value="{{ $article->id }}">
                    <div class="form-group mb-3">
                        <label for="titleInput">タイトル</label>
                        <input type="text" class="form-control" id="titleInput" name="title"
                            value="{{ $article->title }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="priceInput">価格（必須：数字0～6桁）</label>
                        <input type="text" class="form-control" id="priceInput" name="price"
                            value="{{ $article->price }}">
                    </div>

                    <div class="form-group mb-3">
                        <label for="bodyInput">内容</label>
                        <textarea class="form-control" id="bodyInput" rows="8" name="body">{{ $article->body }}</textarea>
                    </div>

                    {{-- <div class="form-group mb-3">
                        <label for="itemImgInput">画像</label>
                        <input type="file" class="form-control" id="itemImgInput" name="item_img">
                    </div> --}}

                    <div class="form-group mb-5">
                        <label for="itemImgBefore">変更前の画像</label><br>
                        <img src="storage/{{ $article->item_img }}" width="200px" id="itemImgBefore">
                    </div>

                    <button type="submit" class="btn" name="save" value="save">編集保存</button>
                    <a href="/admin-news" class="btn">キャンセル</a>
                </form>
            </div>
        </div>
    </div>
@endsection
