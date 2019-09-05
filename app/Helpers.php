<?php

namespace App;

class Helpers{

    public function decision($text = 0,$area = 0,$season = 0)
    {
        if(!empty($text)){
            if(!empty($area)){
                if(!empty($season)){
                    //全部入力があれば
                }else{
                    //テキストとエリアの選択されている
                }
            }else{
                if(!empty($season)){
                    //テキストと季節のみ選択されている
                }else{
                    //テキストのみ選択された
                }
            }
        }else{
            if(!empty($area)){
                if(!empty($season)){
                    //季節のエリアのみ選択があった
                }else{
                    //エリアのみ選択があった
                }
            }else{
                if(!empty($seaon)){
                    //季節のみ選択があった
                }
            }
        }
    }
}
