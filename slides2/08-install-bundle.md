#### Step 8 Install a bundle
Stuck? No worries: http://bit.ly/summer-symfony

A) Find the KnpTimeBundle and install it

    1) Download it via Composer

    2) Enable the bundle in AppKernel
    
    3) Enable the translator in `config.yml`

    4) Use the new filter in `index.html.twig`!
    
    <p>
        Posted {{ time_diff(someDate) }}
    </p>


**GOAL**

When you go to `http://sfbasics.ezsc/random/5`, you
will see something like "5 minutes ago" or "2 hours ago".

