#### Step 7 Finish the extension
Stuck? No worries: http://bit.ly/summer-symfony

A) Copy the `resources/DateUtil.php` to
`src/AppBundle/Util/DateUtil.php`

B) Update MyTwigExtension::calculateAgo to be:

    use AppBundle\Util\DateUtil;

    public function calculateAgo(\DateTime $dt)
    {
        return DateUtil::ago($dt);
    }

**GOAL**

When you go to `http://sfbasics.ezsc/random/5`, you
will see something like "5 minutes ago" or "2 hours ago".

**EXTRA CREDIT**

Add a custom Twig function `get_random_string`
that returns a random string.

For *real* extra credit, make this use the
`random_generator` service (<-- This is quite hard!).
