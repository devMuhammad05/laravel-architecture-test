<?php



// The php preset is a predefined set of expectations that can be used on any php project. It's not coupled with any framework or library.

// It avoids the usage of die, var_dump, and similar functions, and ensures you are not using deprecated PHP functions.
arch()->preset()->php();


arch()
    ->expect('App')
    ->not->toUse(['die', 'dd', 'dump']);

arch()
    ->expect('App\Models')
    ->toBeClasses()
    ->toExtend('Illuminate\Database\Eloquent\Model');
// ->toOnlyBeUsedIn('App\Repositories')
// ->ignoring('App\Models\User');

arch()
    ->expect('App\Http')
    ->toOnlyBeUsedIn('App\Http');


// The security preset is a predefined set of expectations that can be used on any php project. It's not coupled with any framework or library.

// It ensures you are not using code that could lead to security vulnerabilities, such as eval, md5, and similar functions.

arch()->preset()->security();




// toHaveSuffix()
// The toHaveSuffix() method may be used to ensure that all files within a given namespace have a specific suffix.

arch('app')
    ->expect('App\Http\Controllers')
    ->toHaveSuffix('Controller');


// The toUseStrictTypes() method may be used to ensure that all files within a given namespace utilize strict types.

arch()
    ->expect('App')
    ->toUseStrictTypes();
