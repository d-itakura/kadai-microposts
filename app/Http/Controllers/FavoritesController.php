<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * 投稿をお気に入りするアクション
     * 
     * @param $post_id 投稿のid
     * @return \Illuminate\Http\Response
     */
     public function store(string $post_id)
     {
        // 認証済みユーザー（閲覧者）が、 idの投稿をお気に入りする
        \Auth::user()->favorite(intval($post_id));
        // 前のURLへリダイレクトさせる
        return back();
     }
     
     /**
      * 投稿のお気に入りを外すアクション
      * @param  $post_id  投稿のid
      * @return \Illuminate\Http\Response
      */
      public function destroy(string $post_id)
      {
         // 認証済みユーザー（閲覧者）が、 idの投稿のお気に入りを外す
        \Auth::user()->unfavorite(intval($post_id));
        // 前のURLへリダイレクトさせる
        return back();
      }
}
