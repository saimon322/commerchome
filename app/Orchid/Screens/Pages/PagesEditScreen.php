<?php

namespace App\Orchid\Screens\Pages;

use App\Models\Page;
use Illuminate\Http\Request;
use Orchid\Platform\Models\User;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Matrix;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class PagesEditScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(Page $page): iterable
    {
        return $page->extras;
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Редактирование';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make(__('Save'))
                  ->icon('check')
                  ->method('save'),

            Button::make(__('Remove'))
                  ->icon('trash')
                  ->method('remove'),
        ];
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Request $request, Page $page)
    {
        $page->fill([
            'name'   => $request->get('name'),
            'slug'   => $request->get('slug'),
            'extras' => $request->all(),
        ]);

        $page->save();

        Toast::info('Страница сохранена');

        return redirect()->route('platform.pages');
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::rows([
                Group::make([
                    Input::make('name')
                         ->title('Название страницы'),
                    Input::make('slug')
                         ->title('Slug'),
                ]),
                Group::make([
                    Input::make('h1')
                         ->title('Заголовок'),
                    Input::make('h1_subtitle')
                         ->title('Подзаголовок'),
                ]),
                Upload::make('pdf_file')
                    ->title('PDF презентация'),
                Matrix::make('advantages_1')
                      ->title('Преимущества 1')
                      ->columns([
                          'Заголовок' => 'headline',
                          'Текст'     => 'text',
                          'Иконка'    => 'icon',
                      ])->fields([
                        'headline' => Input::make(),
                        'icon'     => Picture::make()->targetRelativeUrl(),
                        'text'     => TextArea::make(),
                    ]),
                Matrix::make('advantages_2')
                      ->title('Преимущества 2')
                      ->columns([
                          'Заголовок' => 'headline',
                          'Текст'     => 'text',
                          'Иконка'    => 'icon',
                      ])
                      ->fields([
                          'headline' => Input::make(),
                          'icon'     => Picture::make()->targetRelativeUrl(),
                          'text'     => TextArea::make(),
                      ])
                      ->hr(),
                Matrix::make('design_slider')
                      ->title('Стили дизайна')
                      ->columns([
                          'Заголовок'     => 'headline',
                          'Кол-во комнат' => 'rooms',
                          'Текст'         => 'text',
                          'Планировка'    => 'plan',
                          'Фото 1'        => 'image',
                          'Фото 2'        => 'image_2',
                      ])
                      ->fields([
                          'headline' => TextArea::make(),
                          'rooms'    => Input::make(),
                          'text'     => TextArea::make(),
                          'plan'     => Picture::make()->targetRelativeUrl(),
                          'image'    => Picture::make()->targetRelativeUrl(),
                          'image_2'  => Picture::make()->targetRelativeUrl(),
                      ]),
                Matrix::make('design_slider_2')
                      ->title('Реализованные проекты')
                      ->columns([
                          'Заголовок'     => 'headline',
                          'Кол-во комнат' => 'rooms',
                          'Текст'         => 'text',
                          'Планировка'    => 'plan',
                          'Фото 1'        => 'image',
                          'Фото 2'        => 'image_2',
                      ])
                      ->fields([
                          'headline' => TextArea::make(),
                          'rooms'    => Input::make(),
                          'text'     => TextArea::make(),
                          'plan'     => Picture::make()->targetRelativeUrl(),
                          'image'    => Picture::make()->targetRelativeUrl(),
                          'image_2'  => Picture::make()->targetRelativeUrl(),
                      ])
                      ->hr(),
                Matrix::make('advantages_3')
                      ->title('Преимущества 3')
                      ->columns([
                          'Заголовок' => 'headline',
                          'Текст'     => 'text',
                          'Иконка'    => 'icon',
                      ])->fields([
                        'headline' => Input::make(),
                        'icon'     => Picture::make()->targetRelativeUrl(),
                        'text'     => TextArea::make(),
                    ]),
            ])
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
