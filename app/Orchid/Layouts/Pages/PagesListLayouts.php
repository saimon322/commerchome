<?php

namespace App\Orchid\Layouts\Pages;

use App\Models\Page;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class PagesListLayouts extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'pages';
    
    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('name', __('Name'))
              ->render(function (Page $page) {
                  return Link::make($page->name)
                             ->route('platform.pages.edit', $page->id);
              }),
            
            TD::make('slug', __('Slug'))
              ->render(function (Page $page) {
                  return $page->extras['slug'];
              }),
            
            TD::make(__('Actions'))
              ->align(TD::ALIGN_CENTER)
              ->width('100px')
              ->render(function (Page $page) {
                  return DropDown::make()
                                 ->icon('options-vertical')
                                 ->list([
                    
                                     Link::make(__('Edit'))
                                         ->route('platform.pages.edit', $page->id)
                                         ->icon('pencil'),
                    
                                     Button::make(__('Delete'))
                                           ->icon('trash')
                                           ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                                           ->method('remove', [
                                               'id' => $page->id,
                                           ]),
                                 ]);
              }),
        ];
    }
}
