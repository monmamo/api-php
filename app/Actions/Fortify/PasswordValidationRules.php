<?php

namespace App\Actions\Fortify;

use Illuminate\Validation\Rules\Password;

trait PasswordValidationRules
{
    /**
     * Returns the validation rules used to validate passwords.
     *
     * @return array<int, array<mixed>|\Illuminate\Contracts\Validation\Rule|string>
     */
    protected function passwordRules(): array
    {
        return ['required', 'string', Password::default(), 'confirmed'];
    }
}
