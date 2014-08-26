#### Step 7: Random Generator Class
Stuck? No worries: http://bit.ly/summer-symfony

A) Create new class at
`src/AppBundle/Service/RandomGenerator.php`

B) Copy the `generateString` function from
`resources/generateString.php` and put this *inside*
your new class

C) Update `indexAction` to instantiate a new `RandomGenerator`
and then use it to generate a string whose length
is equal to the `{limit}` value.

D) Pass the random string (instead of the number)
into the Twig template and render it.

**GOAL**

When you go to `http://sfbasics.ezsc/app_dev.php/random/5`, you
will see a random string that is *5* characters in length.

**EXTRA CREDIT**

* Try moving this file into a different directory, like
`Random` instead of `Service`. What else needs to change
so that this keeps working?
