# Toggle Field for Backpack 4

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]

This package provides a ```toggle``` field type for the [Backpack for Laravel](https://backpackforlaravel.com/) administration panel. The ```toggle``` field allows admins to **_toggle_ the value of a boolean variable between true/false, in a prettier way**. It uses a CSS-only solution, so it has zero external dependencies and zero javascript.

> **This package has been created to make it easy for developers to share their custom fields with the Backpack community. You can use this package to get the ```toggle``` field type, sure. But you can also fork it, to create a Backpack addon. For more information on how to do this, check out Backpack's addon docs.**

## Screenshots

![Backpack Toggle Field Addon](https://user-images.githubusercontent.com/1032474/74032390-7db64d00-49bc-11ea-80dc-b7c84b2c2e65.png)

## Installation

Via Composer

``` bash
composer require digitallyhappy/toggle-field-for-backpack
```

## Usage

Inside your custom CrudController:

```php
$this->crud->addField([
    'name' => 'agreed',
    'label' => 'I agree to the terms and conditions',
    'type' => 'toggle',
    'view_namespace' => 'toggle-field-for-backpack::fields',
]);
```

Notice the ```view_namespace``` attribute - make sure that is exactly as above, to tell Backpack to load the field from this _addon package_, instead of assuming it's inside the _Backpack\CRUD package_.


## Overwriting

If you need to change the field in any way, you can easily publish the file to your app, and modify that file any way you want. But please keep in mind that you will not be getting any updates.

**Step 1.** Copy-paste the blade file to your directory:
```bash
# create the fields directory if it's not already there
mkdir -p resources/views/vendor/backpack/crud/fields

# copy the blade file inside the folder we created above
cp -i vendor/digitallyhappy/toggle-field-for-backpack/src/resources/views/fields/toggle.blade.php resources/views/vendor/backpack/crud/fields/toggle.blade.php
```

**Step 2.** Remove the vendor namespace wherever you've used the field:
```diff
$this->crud->addField([
    'name' => 'agreed',
    'type' => 'toggle',
    'label' => 'I agree to the terms and conditions',
-   'view_namespace' => 'toggle-field-for-backpack::fields'
]);
```

**Step 3.** Uninstall this package. Since it only provides one file - ```toggle.blade.php```, and you're no longer using that file, it makes no sense to have the package installed:
```bash
composer remove digitallyhappy/toggle-field-for-backpack
```


## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email [the author](composer.json) instead of using the issue tracker.

## Credits

- [Adoptavia](https://github.com/adoptavia) - created the field type and shared it in [this thread](https://github.com/Laravel-Backpack/CRUD/issues/1724#issuecomment-441438326);
- [Cristian Tabacitu](https://github.com/tabacitu) - polish & packaging;
- [All Contributors][link-contributors]

## License

MIT. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/digitallyhappy/toggle-field-for-backpack.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/digitallyhappy/toggle-field-for-backpack.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/digitallyhappy/toggle-field-for-backpack
[link-downloads]: https://packagist.org/packages/digitallyhappy/toggle-field-for-backpack
[link-author]: https://tabacitu.ro
[link-contributors]: ../../contributors
