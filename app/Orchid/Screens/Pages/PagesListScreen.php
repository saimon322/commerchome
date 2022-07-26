<?php

namespace App\Orchid\Screens\Pages;

use App\Models\Page;
use App\Orchid\Layouts\Pages\PagesListLayouts;
use Orchid\Platform\Models\User;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class PagesListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'pages' => Page::paginate()
        ];
    }
    
    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Страницы';
    }
    
    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make(__('Add'))
                ->icon('plus')
                ->href(route('platform.pages.create')),
        ];
    }
    
    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            PagesListLayouts::class,
        ];
    }
    
    /**
     * @param User $user
     *
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Exception
     *
     */
    public function remove(Page $page)
    {
        $page->delete();
        
        Toast::info('Страница удалена');
        
        return redirect()->route('platform.pages');
    }
}
