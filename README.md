# CodeBurrow

The official web page for CodeBurrow.com

## Deployment
 - composer install --no-dev

### Testing
For local testing. We need to use the database for tests. But we also do not want to commit this dump to the code for security reasons.
As such: Create a database dump, one level above this project, with `company-web-app-dump.sql` name.
When you run the tests, the code will create this database on the fly from the above database dump.
