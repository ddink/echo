## Work In Progress

I've added Foundation CSS and JS into the public folder to provide a starting point on the front-end. I've also added the laravel-console, laravel-messenger, monolog packages, and the code sniffer and faker packages in dev. The last thing on my check-list is to add some user authentication.

## Documentation

There are routes to the application's two main functionalities. `/` is the index route. It will take you to the laravel hello view. `/console` is the console route, and it will take you to the console. There are also routes for the messages, `/messages`; `/messages/create` takes you to the message creation route; `/messages/{id}` takes you to message's show page, which will display the entire thread of messages.
