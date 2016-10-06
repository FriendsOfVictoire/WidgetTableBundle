Victoire DCMS Table Widget
============

## What is the purpose of this bundle

This bundle gives you access to the *Table Widget*.
With this widget, you can install table on any page.

You can change the order of any line or column.

## Set Up Victoire

If you haven't already, you can follow the steps to set up Victoire *[here](https://github.com/Victoire/victoire/blob/master/setup.md)*

## Install the Bundle

Run the following composer command :

    php composer.phar require victoire/table-widget

### Reminder

Do not forget to add the bundle in your AppKernel !

    class AppKernel extends Kernel
    {
        public function registerBundles()
        {
            $bundles = array(
                ...
                new Victoire\Widget\TableBundle\VictoireWidgetTableBundle(),
            );

            return $bundles;
        }
    }

## Front dependencies

### Redactor and X-Editable

To get the table-widget work, you need redactorjs and x-editable.

You can fetch these vendors with bower:

```json
    "dependencies": {
        "redactor": "https://github.com/hrmsautran/bower-redactor/archive/10.2.5.zip",
        "x-editable": "~1.5.1"
    }
```

And load the following stylesheet files:

```
    "@bowerDirectory/redactor/redactor/redactor.less"
    "@bowerDirectory/x-editable/dist/js/bootstrap3-editable/css/bootstrap-editable.css"

```

And load the following javascript files:

```
    "@bowerDirectory/redactor/redactor/redactor.min.js"
    "@bowerDirectory/redactor/redactor/langs/fr.js"
    "@bowerDirectory/redactor/redactor/plugins/fontcolor/fontcolor.js"
    "@bowerDirectory/redactor/redactor/plugins/fontfamily/fontfamily.js"
    "@bowerDirectory/redactor/redactor/plugins/fontsize/fontsize.js"
    "@bowerDirectory/x-editable/dist/js/bootstrap3-editable/js/bootstrap-editable.min.js"
```

`where @bowerDirectory is the directory set in your .bowerrc file`