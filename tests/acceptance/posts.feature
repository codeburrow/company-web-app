Feature: posts
  In order to update posts data
  As an admin
  I need to be able to see, edit, and successfully update the posts data

  Scenario: See all posts
    Given I have posts in database
      | author             | title        | content             |
      | Full Author Name 1 | Posts Name 1 | Post Content Data 1 |
      | Full Author Name 2 | Posts Name 2 | Post Content Data 2 |
    When I go to the posts page
    Then I should see posts data
      | author             | title        | content             |
      | Full Author Name 1 | Posts Name 1 | Post Content Data 1 |
      | Full Author Name 2 | Posts Name 2 | Post Content Data 2 |
