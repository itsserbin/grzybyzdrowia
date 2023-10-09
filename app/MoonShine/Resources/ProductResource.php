<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use MoonShine\Fields\Select;
use MoonShine\Fields\Text;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;
use MoonShine\Fields\File;
use MoonShine\Fields\Number;

class ProductResource extends Resource
{
	public static string $model = Product::class;

	public static string $title = 'Товары';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            Text::make('Наименование','name'),
            File::make("Фото", "img")
                ->allowedExtensions(['jpg', 'gif', 'png'])
                ->removable(),
            Select::make('Наличие', 'availability')
                ->options([
                    'true' => 'В наличии',
                    'false' => 'НЕТ в наличии'
                ])
                ->showOnForm()
                ->hideOnIndex(),
            Number::make('Цена', 'price'),
            Number::make('Вес', 'weight'),
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
