<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class DownloadRulebook extends Controller
{
    function download($nama)
    {
        switch ($nama) {
            case 'olimpiade-sma':
                $filename = 'LCC_RULEBOOK_2024.pdf';
                break;
            case 'olimpiade-smk':
                $filename = 'LCC_RULEBOOK_2024.pdf';
                break;
            case 'myob':
                $filename = 'MYOB_RULEBOOK_2024.pdf';
                break;
            case 'kti':
                $filename = 'LKTI_RULEBOOK_2024.pdf';
                break;
            case 'poster':
                $filename = 'POSTER_RULEBOOK_2024.pdf';
                break;
            default:
                $filename = 'I-TALK_RULEBOOK_2024.pdf';
                break;
        }
        $file = public_path('/assets/rulebooks/'. $filename);
        $headers = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ];
        return response()->download($file, $filename, $headers);
    }
}