<?php

namespace App\Filament\Admin\Pages\Auth;

use Filament\Pages\Page;

class Login extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.admin.pages.auth.login';
}
