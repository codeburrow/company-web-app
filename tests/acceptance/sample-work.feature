Feature: sample-work
  In order to check all project samples
  As a simple user
  I need to be able see the projects names, and screenshots

Scenario: see DEREE Judge name and screenshot
  Given I visit the homepage
  And I wait for a second for the page to load
  And I click the Gallery Link
  And I wait for a second for the browser to scroll down to the Gallery section
  And I hover my mouse over the DEREE Judge screenshot
  When I wait for a second for the project's title to show
  Then I should see the name of DEREE Judge project
  And I should not see the old name Mobile Cashless Payment
  When I click on DEREE Judge Project
  And I wait for a second for the project screenshot to load
  Then I should see the project's screenshot


