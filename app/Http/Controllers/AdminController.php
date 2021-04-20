<?php

namespace App\Http\Controllers;

use App\Exports\BooksExport;
use App\Imports\BooksImport;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function import(Request $req)
    {
        Excel::import(new BooksImport, $req->file('file'));

        $notification = array(
            'message' => 'Import data berhasil dilakukan',
            'alert-type' => 'succes'
        );

        return redirect()->route('admin.books')->with($notification);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user = Auth::user();
        return view('home', compact('user'));
    }

    public function export()
    {
        return Excel::download(new BooksExport, 'users.xlsx');
    }
}
