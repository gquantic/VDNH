<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\Good;

use App\Models\Good;
use Orchid\Platform\Models\User;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Persona;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class GoodListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'goods';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('price', __('Цена'))
                ->sort()
                ->cantHide()
                ->filter(Input::make())
                ->render(function (Good $good) {
                    return ModalToggle::make($good->id)
                        ->modal('asyncEditUserModal')
                        ->modalTitle($good->presenter()->title())
                        ->method('saveUser')
                        ->asyncParameters([
                            'user' => $good->id,
                        ]);
                }),

            TD::make('title', __('Название'))
                ->sort()
                ->cantHide()
                ->filter(Input::make())
                ->render(function (Good $good) {
                    return new Persona($good->presenter());
                }),

            TD::make('properties', __('Хакартеристики'))
                ->sort()
                ->cantHide()
                ->filter(Input::make())
                ->render(function (Good $good) {
                    return $good->properties;
                }),

            TD::make('created_at', __('Дата регистрации'))
                ->sort()
                ->render(function (Good $good) {
                    return $good->created_at->toDateTimeString();
                }),

            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(function (User $user) {
                    return DropDown::make()
                        ->icon('options-vertical')
                        ->list([

                            Link::make(__('Edit'))
                                ->route('platform.systems.users.edit', $user->id)
                                ->icon('pencil'),

                            Button::make(__('Delete'))
                                ->icon('trash')
                                ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                                ->method('remove', [
                                    'id' => $user->id,
                                ]),
                        ]);
                }),
        ];
    }
}
