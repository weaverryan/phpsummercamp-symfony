#### Step 3: Annotation Routes
Stuck? No worries: http://bit.ly/summer-symfony

A) Remove the route you added in `routing.yml`

B) Follow the docs to add an `@Route` annotation
above your `indexAction` method: `http://bit.ly/1t0capF`

C) Follow the docs to "import" the annotation routes
from `app/config/routing.yml`

**GOAL**

Go to `http://sfbasics.ezsc/app_dev.php/random/5` and
see the same random number as before. But now, the route
is added via annotations!

**EXTRA CREDIT**

* Add a `requirement` to the `limit` so that if you go to
`/app_dev.php/random/foo`, it won't match the route.

* Make this route *only* match GET requests
