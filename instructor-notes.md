## Instructor Notes

Here's the high-level plan:

### Step 0

- Possibly talk quickly about some request/response stuff: outline Symfony
  as something that just helps you understand the request and return the response.

### Step 1

- Create the AppBundle directory and `AppBundle` class.
- Make the class extend Bundle.
- Enable in `AppKernel`.

### Step 2

- Create the hello world page with YAML (basically, follow the "page creation"
  chapter in the book).

### Step 3

- Remove the YAML route, add an import for annotations.
- Add a route annotation.

### Step 4

- Render a template and extend base template.

### Step 5

- Move the template into `app/Resources`.
    -> A little concerned about confusing people here with different
        template syntaxes.

### Step 6

- Override the title block.

### Step 7

- Create `RandomGenerator` class and copy in the function from `resources/generateString.php`.
- Use this in `RandomController` (just instantiate it directly) and update template.

### Step 8

- Register this as a service and use it in the controller.

### Step 9

- Use the logger service in the controller.
- Emphasize how we have a controller full of tools!

### Step 10

- Try logging inside of `RandomGenerator`.
- Inject the logger.
- Update the service definition.
