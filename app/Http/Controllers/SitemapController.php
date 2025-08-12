<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\URL;

class SitemapController extends Controller
{
    public function index()
    {
        $urls = [
            url('/'),
            url('/ueber-uns'),
            url('/leistungen'),
            url('/leistungen/stundenweise-betreuung'),
            url('/leistungen/alltagsbegleitung-haushalt'),
            url('/leistungen/demenzbegleitung'),
            url('/leistungen/begleitung-einkauf-arzt'),
            url('/kosten'),
            url('/einsatzgebiet'),
            url('/einsatzgebiet/herzogenrath'),
            url('/einsatzgebiet/wuerselen'),
            url('/faq'),
            url('/kontakt'),
            url('/jobs'),
        ];

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        foreach ($urls as $url) {
            $xml .= '<url>';
            $xml .= '<loc>' . $url . '</loc>';
            $xml .= '<changefreq>monthly</changefreq>';
            $xml .= '<priority>0.7</priority>';
            $xml .= '</url>';
        }
        $xml .= '</urlset>';

        return response($xml, 200)
            ->header('Content-Type', 'application/xml');
    }
}
