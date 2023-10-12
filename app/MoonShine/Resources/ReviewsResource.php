<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Reviews;

use MoonShine\Fields\File;
use MoonShine\Fields\Text;
use MoonShine\Fields\Textarea;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

class ReviewsResource extends Resource
{
	public static string $model = Reviews::class;

	public static string $title = 'Отзывы';

	public function fields(): array
	{
		return [
            ID::make()->sortable(),
            Text::make('Наименование','name'),
            File::make("Фото", "img")
                ->allowedExtensions(['jpg', 'gif', 'png'])
                ->removable(),
            Text::make('Текст отзыва','review_text')
                ->showOnIndex()
                ->hideOnForm(),
            Textarea::make('Текст отзыва','review_text')
                ->hideOnIndex()
                ->showOnForm(),
        ];
	}

	public function rules(Model $item): array
	{
	    return [];
    }

    public function search(): array
    {
        return ['id'];
    }

    public function filters(): array
    {
        return [];
    }

    public function actions(): array
    {
        return [
            FiltersAction::make(trans('moonshine::ui.filters')),
        ];
    }
}
