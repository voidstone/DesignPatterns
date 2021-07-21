<?php


namespace App\Http\Controllers;


use App\Models\BlogPost;

class FundamentalPatternsController extends Controller
{

    public function PropertyContainer() {


        $item = new BlogPost();

        $item->setTitle('Заголовок статьи');
        $item->setCategoryId(10);

        $item->addProperty('view_count',100);

        $item->addProperty('last_update','2030-02-01');
        $item->addProperty('last_update','2030-02-02');

        $item->addProperty('read_only', true);

        $item->deleteProperty('read_only');

        dd($item);
    }

}
