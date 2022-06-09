<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{
    //
    public function os()
  {
      return redirect('https://fam-ad.com/ad/p/dt?_site=64802&_loc=246369&_mstype=99'); //fam - ワクワク
    //   return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=25044'); //fam - HIBIKI
    //   return redirect('https://fam-ad.com/ad/p/dt?_site=75057&_loc=267256&_mstype=99'); //fam - えち垢ポータル
  }
  
    public function check()
  {
      //ユーザーエージェント取得
      $ua = $_SERVER['HTTP_USER_AGENT'];
 
      //OS分岐
      if ((strpos($ua, 'iPhone') !== false)) {
          return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=25044'); //iOS案件 - HIBIKI - fam
      } elseif ((strpos($ua, 'Android') !== false)) {
          return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=21225'); //Android案件 - チラスタ - fam
      } else {
          return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=19469'); //PC案件 - ハッピーメール - fam
      }
  }
}
