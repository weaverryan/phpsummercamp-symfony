#### Step 5: Move your template
Stuck? No worries: http://bit.ly/summer-symfony

A) Move your `index.html.twig` template to
`app/Resources/views/Random/index.html.twig`

B) Change your render to be just `Random/index.html.twig`.

**GOAL**

Go to `http://sfbasics.ezsc/app_dev.php/random/5` and
see the same random number! Putting templates in the `app/`
directory just keeps things smaller.

**EXTRA CREDIT**

* Also change the `extends` template path to only be `layout.html.twig`.
The `::` at the beginning is optional, and *means* the `app/Resources`
directory.
