<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Operator;
use App\Models\Student;

class DashboardController extends Controller
{
    public function index()
    {
        $books = Book::limit(3)->orderBy('created_at', 'DESC')->get();
        $students = Student::limit(3)->orderBy('created_at', 'DESC')->get();
        $operators = Operator::limit(3)->orderBy('created_at', 'DESC')->get();

        $jml_buku = Book::jumlahBuku();
        $jml_siswa = Student::jumlahSiswa();
        $jml_operator = Operator::jumlahOperator();

        return view('dashboard', compact('books', 'jml_buku', 'students', 'jml_siswa', 'operators', 'jml_operator'));
    }
}
