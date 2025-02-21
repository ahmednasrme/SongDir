# Song Directory

This demo project was an assignment aiming to assess me as a developer. It was as the following:
1. *Overview:* Create a new project using the latest version of Laravel. This will be a simple catalog of Albums and songs with the ability for the user to comment on each.
- Database: sqllite
- CSS Framework: bootstrap
- JS Framework: your choice. Can also be vanilla js / jquery if you desire.
- Authentication: Out of the box Laravel authentication is fine
- Web Server: Application should be able to be ran via `php artisan serve`. 
2. *Resources:* Users / Albums / Songs 
    A user can comment on an album / song. All comments should be stored in the same table.
    Each resource should have a migration and a seeder. Seed the database with at least 5 albums with 2 songs per album. 
3. *Pages:* 
- Layout – Please use blade layouts.
- Home Page – This page will be the Album index. It should have a listing of all the albums and include pagination. Each album c. should be able to be clicked on to view the album in detail
- Album Page – This page should show all album details and include a list of songs on the album. It should also show the current comments on the album sorted by the most recent at the top. Songs should be able to be clicked on.
- Song Page – This page should show all song details and include the current comments for that song as well as a link to the album it belongs to. 
4. *Miscellaneous*: 
- You can use any packages you want we love packages!
- Please attempt to avoid any N+1 queries
- Album attributes: Name / Artist / Metadata
- Song attributes: Name / Artist / Album / Metadata
- Metadata should be a json column that can hold any miscellaneous information about the song / album outside of the name / artist. (Ex: Release Year / Featuring Artists)