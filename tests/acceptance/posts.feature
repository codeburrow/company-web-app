Feature: posts
  In order to update posts data
  As an admin
  I need to be able to see, edit, and successfully update the posts data

  Scenario: See latest post
    Given I have a post in database
      | id    | author             | title        | content             |
      | 99999 | Full Author Name 1 | Posts Name 1 | Post Content Data 1 |
    When I go to the posts page
    Then I should see this last post
      | id    | author             | title        | content             |
      | 99999 | Full Author Name 1 | Posts Name 1 | Post Content Data 1 |
