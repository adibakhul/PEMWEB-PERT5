<?php

namespace App\Controllers;

use App\Models\BooksModel;

class Books extends BaseController {
    public function index() {
        $data = [
            'title' => 'Daftar Buku',
        ];

        return view('books/index', $data);
    }
}