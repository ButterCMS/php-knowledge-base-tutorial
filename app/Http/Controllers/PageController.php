<?php

namespace App\Http\Controllers;

use ButterCMS\ButterCMS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\View\View;

class PageController extends Controller
{
   public function __construct(
       private ButterCMS $butterCMS
   ) {
   }

   public function showPage(string $type, string $pageSlug): View
   {
       $page = $this->butterCMS->fetchPage($type, $pageSlug, [
           'preview' => app('isPreview')
       ]);

       return view('page', [
            'pageBody' => $page->getFields()['kb_home_sections'],
       ]);
   }

   public function showHomePage(): View
   {
       return $this->showPage('kb_homepage', 'php-knowledge-base');
   }

   public function showHomePageSlug(string $pageSlug): View
   {
       return $this->showPage('kb_homepage', $pageSlug);
   }
}