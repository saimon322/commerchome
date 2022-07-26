<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Services\Page\PageService;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * @var PageService
     */
    private PageService $pageService;
    
    /**
     * @param PageService $pageService
     * @param Page $page
     */
    public function __construct(PageService $pageService, Page $page)
    {
        $this->pageService = $pageService;
    }
    
    /**
     * @param Request $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $data = $this->pageService->getData();
        
        return view('index', ['data' => $data]);
    }
}