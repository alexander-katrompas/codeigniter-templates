# codeigniter-templates
Basic demo of using templates and the parser library.

The following files are of importance in studying how to use templates in Codeigniter.

 - **application/models/Stories_model.php** : This contains the model that pulls stories from the database to pass them back to the controller. It does not actually get stories from the DB, it fakes it. The stories are stored in private class attributes instead of a DB. There are two methods, one for getting one story (get_story) and one for getting all stories (get_stories). They each fake getting data from a DB by simply putting the private story attributes into an array for return to the controller. Where indicated in the file in the comments is where you would do the actual database queries instead of faking it.

 - **application/controllers/Stories.php** : This is the controller that handles printing all stories (in the index method) or one story at a time (in the story method). Each method does basically the same thing, it gets the stories from the model, passes them to the parser for rendering into HTML, and then sends that HTML to the view. Notice the parser is loaded in the constuctor, but normally you'd probably auto-load this in autoload.php under libraries.

 - **application/config/routes.php** : At the bottom of this file are the routes that allow the application to route to the two stories pages.

 - **application/views/pages/story.php** : The body page for one story. Notice in the page is used the PHP print 'tag' to print the HTML rendered in the controller by the parser.

 - **application/views/pages/stories.php** : The body page for all stories. Notice in the page is used the PHP print 'tag' to print the HTML rendered in the controller by the parser.

 - **application/views/templates/story_template.php** : This is the template that is used with the parser to create an individual story.

 - **application/views/templates/stories_template.php** : This is the template that is used with the parser to create all the stories for display. Notice how there is a "loop" in the template called 'stories'. This "loop" is made with {stories}{/stories}.
