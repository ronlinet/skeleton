# Laravel-Package-Skeleton
Simple Laravel Skeleton package

If you want to use this package you have to import it with composer with the following command:

    composer require ronline/skeleton

And then, after updating composer, add the HelloServiceProvider to your config/app.php providers array:

    'Ronline\Skeleton\SkeletonServiceProvider',

Now you can get the the pacakage content with:

    Skeleton::content();

=======
# skeleton
Simple Laravel Skeleton Package
