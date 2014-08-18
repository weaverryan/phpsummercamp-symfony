## Instructor Notes

Here's the high-level plan:

### Step 0

- Possibly talk quickly about some request/response stuff: outline Symfony
  as something that just helps you understand the request and return the response.

### Step 1

- Create the AppBundle directory and AppBundle class
- Make the class extend Bundle
- Enable in AppKernel

### Step 2

- create the hello world page with YAML (basically, follow the "page creation"
  chapter in the book)

### Step 3

- remove the YAML route, add an import for annotations
- add a route annotation

### Step 4

- render a template and extend base template

### Step 5

- move the template into app/Resources
    -> a little concerned about confusing people here with different
        template syntaxes

### Step 6

- override the title block

### Step 7

- create RandomGenerator class and copy in the function from resources/generateString.php
- use this in RandomController (just instantiate it directly) and update template

### Step 8

- register this as a service and use it in the controller

### Step 9

- use the logger service in the controller
- emphasize how we have a controller full of tools!

### Step 10

- Try logging inside of RandomGenerator
- Inject the logger
- Update the service definition
