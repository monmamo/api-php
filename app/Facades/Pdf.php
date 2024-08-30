<?php

namespace App\Facades;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Facade;

/**
 * TCPDF is being rewritten, the old version is marked as no longer maintained and the new version isn't ready yet.
 * wkhtmltopdf is no longer being developed.
 * DomPDF rejected because it handles memory poorly.
 *
 * TODO: Implement \Illuminate\Support\Facades\Facade::getFacadeAccessor.
 */
class Pdf extends Facade
{
    /**
     * @group binary
     *
     * @uses \Illuminate\Http\Response::__construct
     * @uses \strlen (native) Returns the length of the given string.
     */
    public static function downloadResponse($bytes, string $filename)
    {
        return new Response(
            $bytes,
            \Symfony\Component\HttpFoundation\Response::HTTP_OK,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="' . $filename . '"',
                'Content-Length' => \strlen($bytes),
                'Pragma' => 'no-cache',
                'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
                'Expires' => '0',
            ],
        );
    }

    /**
     * Converts HTML to PDF.
     *
     * @group unary
     *
     * @param null|string $encoding Not used yet
     */
    public static function htmlToPdf(string $html, ?string $encoding = null)
    {
        return \Barryvdh\DomPDF\Facade\Pdf::loadHTML($html);
    }

    /**
     * @group unary
     */
    public static function makePdfData($pdf)
    {
        return $pdf->output(); // DomPDF
    }
}
