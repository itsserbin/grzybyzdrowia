<?php

namespace App\Providers;

use App\MoonShine\Resources\ProductResource;
use App\MoonShine\Resources\ReviewsResource;
use Illuminate\Support\ServiceProvider;
use MoonShine\MoonShine;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;

class MoonShineServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        app(MoonShine::class)->menu([
            MenuGroup::make('moonshine::ui.resource.system', [
                MenuItem::make('moonshine::ui.resource.admins_title', new MoonShineUserResource())
                    ->translatable()
                    ->icon('users'),
                MenuItem::make('moonshine::ui.resource.role_title', new MoonShineUserRoleResource())
                    ->translatable()
                    ->icon('bookmark'),
            ])->translatable(),
            MenuItem::make('Товары', new ProductResource())
                ->icon('heroicons.cog-6-tooth'),
            MenuItem::make('Отзывы', new ReviewsResource())
                ->icon('heroicons.cog-6-tooth'),
        ]);
    }
}
