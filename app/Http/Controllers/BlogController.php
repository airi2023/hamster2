<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; //設定に基づいたファイルの読み書きや削除などを行えるようにする。
use App\Models\Article;

class BlogController extends Controller
{
    // 利用者サイト表示用----------------------------------------------------------
    // 新着ページ用　一覧表示
    public function newsIndex()
    {
        $articles = Article::select('*')->orderBy('id', 'desc')->get();
        return view('news', compact('articles'));
    }

    // Top用　一覧表示
    public function newsIndexTop()
    {
        $articles = Article::select('*')->orderBy('id', 'desc')->get();
        return view('layouts.topbase', compact('articles'));
    }


    // 管理画面用----------------------------------------------------------
    //トップページ 投稿リスト
    public function indexAdminTop()
    {

        $articles = Article::select('*')->orderBy('id', 'desc')->get();
        return view('admin.admintop', compact('articles'));
    }

    //トップページ 投稿リスト
    public function index()
    {

        $articles = Article::select('*')->orderBy('id', 'desc')->get();
        return view('admin.index', compact('articles'));
    }


    //編集ページ呼出し
    public  function edit(Request $request)
    {
        //dd($request->all());
        $article = Article::find($request->edit_id);
        return view('admin.edit', compact('article'));
    }

    //削除ページ呼出し
    public  function delete(Request $request)
    {
        //dd($request->all());
        $article = Article::find($request->delete_id);
        return view('admin.delete', compact('article'));
    }

    //新規登録処理 画像保存・アップロード
    public function create(Request $request)
    {
        // バリデーション---------------------------------------------
        $validator = [
            'title' => 'required|string|max:20',
            // 'price' => 'required|numeric|min:0|max:6',
            'body' => 'required|string|max:100',
            'item_img' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ];

        // エラーの時、任意のテキストを表示
        $varidator_text = [
            'title.required' => 'タイトルは必須項目です。',
            'title.max' => 'タイトルは20文字以内で入力してください。',
            'price.required' => '価格は必須項目です。',
            'price.numeric' => '価格には数値を入力してください。',
            'price.min' => '価格は0～6字で入力してください。',
            'price.max' => '価格は0～6字で入力してください。',
            'body.required' => '本文は必須項目です。',
            'body.max' => '本文は100文字以内で入力してください。',
            'item_img.image' => 'アップロードできるのは画像ファイルのみです。',
            'item_img.mimes' => 'サポートされていない画像形式です。jpeg, png, jpg, gif のいずれかをアップロードしてください。',
            'item_img.max' => 'ファイルサイズは2048KB以内にしてください。',
        ];
        $this->validate($request, $validator, $varidator_text);
        // バリデーションここまで -----------------------------------


        // 画像ファイルがアップロードされているか確認
        if ($request->hasFile('item_img')) {
            // 画像ファイル名を取得
            $file_name = $request->file('item_img')->getClientOriginalName();

            // 取得したファイル名のまま、storage/app/publicディレクトリに画像保存
            $request->file('item_img')->storeAs('public/', $file_name);
        } else {
            // ファイルがアップロードされていない場合はデフォルトの画像を設定
            $file_name = 'slide1.jpg';
        }

        //dd($request->all());
        $article = new Article();
        $article->title = $request->title;
        $article->price = $request->price;
        $article->body = $request->body;
        $article->item_img = $file_name;
        // $article->img_path = 'storage/' . $dir . '/' . $file_name;
        $article->save();

        return redirect('/admin-news');
    }


// 変更保存処理
public function change(Request $request)
{
    // 該当する記事を取得
    $article = Article::find($request->change_id);

    // 記事の各フィールドに新しい値を代入
    $article->title = $request->title;
    $article->price = $request->price;
    $article->body = $request->body;
    // $article->item_img = $request->item_img;

    // 記事を保存
    $article->save();

    return redirect('/admin-news');
}

    //削除処理
    public function del_data(Request $request)
    {
        //dd($request->all());
        Article::destroy($request->delete_id);

        return redirect('/admin-news');
    }
}
