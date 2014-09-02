#### Step 1 - AppBundle!
Stuck? No worries: http://bit.ly/summer-symfony

A) Create a `src/AppBundle/AppBundle.php` file

B) Put an `AppBundle` class inside there!

C) Make it extend Symfony's `Bundle` class
    -> What's the namespace?

D) Instantiate the bundle in `app/AppKernel.php`

**GOAL**
Go to `http://sfbasics.ezsc/app_dev.php` and see a *nice*
"no route found" error message.

**EXTRA CREDIT**

* Open up the `Bundle` class and find out *how* Symfony now
knows a lot about our bundle, like what directory the bundle
lives in, what namespace classes inside this bundle will have
and what the "name" of the bundle is.
