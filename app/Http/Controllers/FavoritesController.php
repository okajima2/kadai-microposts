<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * 投稿をファボするアクション。
     *
     * @param  $id  ファボする投稿のid
     * @return \Illuminate\Http\Response
     */
    public function store($id) {
        // 認証済みユーザ（閲覧者）が、 idの投稿をファボする
        \Auth::user()->favorite($id);
        // 前のURLへリダイレクトさせる
        return back();
    }
    
    /**
     * 投稿をアンファボするアクション。
     *
     * @param  $id  アンファボする投稿のid
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        // 認証済みユーザ（閲覧者）が、 idの投稿をアンファボする
        \Auth::user()->unfavorite($id);
        // 前のURLへリダイレクトさせる
        return back();
    }
}
