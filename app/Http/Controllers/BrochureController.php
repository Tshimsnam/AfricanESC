<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrochureController extends Controller
{
   public function download()
{
    // Vérifie l'existence du fichier
    if (!Storage::disk('public')->exists('brochures/brochure.pdf')) {
        abort(404, 'Brochure file not found');
    }

    // Chemin complet du fichier
    $filePath = Storage::disk('public')->path('brochures/brochure.pdf');

    return response()->download($filePath, 'Company-Brochure-2025.pdf');
}

   public function listeOfProject()
{
    // Vérifie l'existence du fichier
    if (!Storage::disk('public')->exists('brochures/PROJECT_Experience_Energy_AESC_2025.pdf')) {
        abort(404, 'Brochure file not found');
    }

    // Chemin complet du fichier
    $filePath = Storage::disk('public')->path('brochures/PROJECT_Experience_Energy_AESC_2025.pdf');

    return response()->download($filePath, 'PROJECT_Experience_AESC.pdf');
}
}
