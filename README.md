Victoire DCMS Table Bundle
============

##What is the purpose of this bundle

This bundle gives you access to the *Table Widget*.
With this widget, you can install table on any page.

You can change the order of any line or column.

##Set Up Victoire

If you haven't already, you can follow the steps to set up Victoire *[here](https://github.com/Victoire/victoire/blob/master/setup.md)*

##Install the Bundle

Run the following composer command :

    php composer.phar require victoire/table-widget

###Reminder

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

##Preset

Enable VictoireResourcesBundle which brings the redactor library :

    new Victoire\Bundle\ResourcesBundle\VictoireResourcesBundle(),
