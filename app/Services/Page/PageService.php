<?php

namespace App\Services\Page;

use App\Models\Page;
use Illuminate\Http\Request;

class PageService
{
    /**
     * @var Request
     */
    private Request $request;
    /**
     * @var Page
     */
    private Page $page;
    
    /**
     * @param Request $request
     * @param Page $page
     */
    public function __construct(Request $request, Page $page)
    {
        $this->request = $request;
        $this->page    = $page;
    }
    
    /**
     * @return mixed
     */
    public function getModel(): mixed
    {
        $slug = $this->request->path();
        
        return $this->page->where('slug', $slug)->get()->first();
    }
    
    /**
     * @return mixed
     */
    public function getData(): mixed
    {
        return $this->getModel()?->extras;
    }
}