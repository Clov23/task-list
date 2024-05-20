<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task; // Importa el modelo Task, no el controlador TaskController
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function index()
    {
        
        $tasks = Task::all();
        $data = ['tasks' => $tasks];
        
        $pdf = PDF::loadView('pdf.invoice', $data);
        return $pdf->download('invoice.pdf');
    }
}
