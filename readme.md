# Mason
> Component library and generator for laravel+wordplate-based setups

Tired of building the same stuff over and over again? I am. Mason is an opiniated set of complete, functional high-level components (we call them 'bricks') we use at [IN10](https://www.in10.nl) to quickly get the basics of the website in place.

Almost every website we build has some or all of these components: a homepage, news overview page, a page to show a news item, content blocks, etc. And while these things are easy to build, they aren't particularly interesting or challenging. Mason offers these components out of the box in your project, so you can focus on what's actually different. Any brick or part of it can be easily overridden with custom behaviour, to allow for maximum flexibility.

## Requirements
Mason is built for the tech stack we run at IN10. It requires that you use [Composer](https://getcomposer.org/), run your Wordpress using [Wordplate](https://wordplate.github.io/), and use [Laravel](https://laravel.com/) to build your website.

## Usage
Mason consists of two main parts: Bricks and the Builder. Bricks are complete, functional components that only need frontend (read: views) to enable custom design. All other working parts are included. Just like regular brickwork, you only need to stack them and than apply paint.

The Builder is a scaffolding tool that Mason uses internally to quickly produce the right files in the right locations. You can use it to generate custom setups with common, handy defaults, for those setups where you want to save time, but don't use a standard component.

## Bricks included
1. None so far
