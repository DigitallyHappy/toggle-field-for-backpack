# Toggle Field for Backpack

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]

This package provides a ```toggle``` field type for the [Backpack for Laravel](https://backpackforlaravel.com/) administration panel. The ```toggle``` field allows admins to **easily toggle a boolean variable**.

> **This package has been created to make it easy for developers to share their custom fields with the Backpack community. You can use this package to get the ```toggle``` field type, sure. But you can also fork it, to create a Backpack addon. For more information on how to do this, check out Backpack's addon docs.**

## Screenshots

## Installation

Via Composer

``` bash
$ composer require backpack/toggle-field-for-backpack
```

## Usage

Inside your custom CrudController:

```php
$this->crud->addField([
    'name' => 'checkbox',
    'label' => 'I agree to the terms and conditions',
    'type' => 'example',
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
cp -i vendor/digitallyhappy/addon/src/resources/views/fields/toggle.blade.php resources/views/vendor/backpack/crud/fields/example.blade.php
```

**Step 2.** Remove the vendor namespace wherever you've used the field:
```diff
$this->crud->addField([
    'name' => 'checkbox',
    'type' => 'toggle',
    'label' => 'I agree to the terms and conditions',
-   'view_namespace' => 'toggle-field-for-backpack::fields'
]);
```

**Step 3.** Remove this package using composer. Since the package only provides that one file, and you're no longer using that file - it makes no sense to have the package installed any longer:
```bash
composer remove digitallyhappy/toggle-field-for-backpack
```


## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email author email instead of using the issue tracker.

## Credits

- [author name][link-author]
- [All Contributors][link-contributors]

## License

MIT. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/digitallyhappy/toggle-field-for-backpack.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/digitallyhappy/toggle-field-for-backpack.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/digitallyhappy/toggle-field-for-backpack
[link-downloads]: https://packagist.org/packages/digitallyhappy/toggle-field-for-backpack
[link-author]: https://github.com/digitallyhappy
[link-contributors]: ../../contributors
