# WordPress Reflection
This is a sample WordPress theme and site created as part of a training course at *Netmatters Ltd.*

## Usage
### Database
Assuming a MySQL server is already running, create a new table named `sues-garden` and import the `/sues-garden.sql` file to populate it. If using PHPMyAdmin 5.1.0 the default import settings shouldn't need changing.

Create a new user on the MySQL server, named `sue-wp` with the password `password`. The user should have full access to the `sues-garden` table. Alternatively grant those rights to an existing existing user and update `/wp-config.php` to contain that user's details.

### Hosting
Assuming an Apache server with access to a recent version of PHP is already set up, place this whole project in a publicly hosted directory.

If the server is set to host that directory at any domain and port other than `http://localhost:3000` then lines 84 and 85 in `wp-config.php` should be updated to where the site will be available.

## Features
### Theme
This site uses a custom theme, roughly following the design created for an earlier design-oriented training project. It is created from the base theme [Underscores](https://underscores.me/). The theme is intended just for this site, and would be missing several features if it were applied to another site. However an admin for this site could make changes to things like the site title, logo, and menu contents (and of course pages and posts) without needing to edit the theme itself.

### Contact Form
As well as giving contact details, the contact page provides a form with validation that users can fill out. The results of the form would be stored and made available to the site's administrator.

### Lightbox Gallery
There is a gallery of photos, which users can browse and view in a lightbox. This is set up with a plug-in so that the site's administrator can add more photos or whole new galleries using the WordPress UI.

### SEO
Although the sample pages contain significant amounts of placeholder text, there are headings and opening sentences with relevant keywords used in naturally constructed sentences to boost on-page SEO. The pages have metadata filled out to provide succinct and relevant descriptions, and for review pages there is metadata included that will show the page in search engine results as being a review for that specific product.

All images have suitable alt text which where possible is relevant to the target keywords of the page where it is used.

Longer posts include a table of contents which provides anchor links to relevant sections.

Every page and post is followed by a preview of other relevant posts. Where possible this lists posts that belong to at least one of the same categories that the current post does. If there are no posts in the same category, recent posts from any category are shown. This prevents the user from reaching a "dead end" in the site after they finish reading a post.
