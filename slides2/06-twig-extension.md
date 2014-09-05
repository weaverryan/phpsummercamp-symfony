#### Step 6 Twig Extension!
Stuck? No worries: http://bit.ly/summer-symfony

A) Change the Twig template to use an `ago` filter:

    {{ someDate|ago }}

Error!

B) Copy `resources/MyTwigExtension.php`
to `src/AppBundle/Twig/MyTwigExtension.php`

C) Register this as a service with
a special `twig.extension` tag:

    services:
        # ...

        my_twig_extension:
            class: AppBundle\Twig\MyTwigExtension
            tags:
                - { name: twig.extension }


**GOAL**

When you go to `http://sfbasics.ezsc/random/5`, you
will not see your date anymore. You will
just see the words `HALLO`!


