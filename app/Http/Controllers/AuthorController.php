<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{

    public function authors() {
        DB::enableQueryLog();
        $authors = Author::all();
        
        $test = [];

        foreach ($authors as $author) {            
            foreach ($author->books as $book) {
                $book;
            }
        }

        // dd($authors);
        dd(DB::getQueryLog());

        return response()->json(['author' => $test]);
    }
}
