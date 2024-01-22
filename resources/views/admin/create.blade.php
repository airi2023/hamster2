@extends('admin.adminbase')

@section('contents')
    <div class="container create">
        <div class="row mt-5">
            <div class="col-12">
                <h3>投稿新規作成</h3>
                
                @if ($errors->any())
                    <div>
                        <strong>入力にエラーがあります。</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            <div class="col-12">
                <form method="post" action="./create" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="titleInput">タイトル（必須：20字以内）</label>
                        <input type="text" class="form-control" id="titleInput" name="title" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="priceInput">価格（必須：数字0～6桁）</label>
                        <input type="text" class="form-control" id="priceInput" name="price" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="bodyInput">内容（必須：100字以内）</label>
                        <textarea class="form-control" id="bodyInput" rows="8" name="body" required></textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label for="itemImgInput">画像(未選択の場合は、デフォルトの画像が表示されます)</label>
                        <input type="file" class="form-control" id="itemImgInput" name="item_img">
                    </div>

                    <button type="submit" class="btn" name="add" value="add">新規追加</button>
                    <a href="/admin-news" class="btn">キャンセル</a>
                </form>
            </div>
        </div>
    </div>
@endsection
