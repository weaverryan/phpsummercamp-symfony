#### Step 5 - Print a Random Date
Stuck? No worries: http://bit.ly/summer-symfony

A) Open RandomController, generate a random
date, and then pass it into your template:

    $randomDate = new \DateTime('-'.rand(0, 100).' minutes');

B) Print this date in Twig using the `H:i:s`.
Hint: use Twig's `date` filter

**GOAL**

When you go to `http://sfbasics.ezsc/random/5`,
you should see a random time printed.

