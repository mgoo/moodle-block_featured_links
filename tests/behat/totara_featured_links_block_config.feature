@block @javascript @totara @block_totara_featured_links
Feature: Test edit the block config for the featured links block
  In order to be able to make the block look good
  the user needs to be able to configure the block

  Background:
    When I log in as "admin"
    And I follow "Dashboard"
    And I click on "Customise this page" "button"
    And I add the "Featured Links" block
    And I click on "a[type=\"add\"]" "css_element"
    And I wait "1" seconds
    And I set the following fields to these values:
      | URL | www.google.com |
      | Description | default description |
    And I click on "Save changes" "button"

  Scenario: Test that the block has the default options
    Then ".block-featured-links-tile-medium" "css_element" should exist

  Scenario: Check that the block can be configured
    When I configure the "Featured Links" block
    Then I should see "Title For the Block"
    And I should see "Tile Size"
    And I should see "Manual ID"

  Scenario: Check that editing the config options changes the content of the block
    When I configure the "Featured Links" block
    And I set the following fields to these values:
      | Title For the Block | Title |
      | Tile Size           | small |
      | Manual ID           |  a_unique_id_totara_featured_links |
    And I press "Save changes"
    Then I should see "Title"
    And ".block-featured-links-tile-small" "css_element" should exist
    And "#a_unique_id_totara_featured_links" "css_element" should exist

  Scenario: Check that canceling doesn't change the contents of the block
    When I configure the "Featured Links" block
    And I set the following fields to these values:
      | Title For the Block | Title |
      | Tile Size           | small |
      | Manual ID           |  a_unique_id_totara_featured_links |
    And I press "Cancel"
    Then ".block-featured-links-tile-medium" "css_element" should exist
    And I should not see "Title"
    And ".block-featured-links-tile-small" "css_element" should not exist
    And "#a_unique_id_totara_featured_links" "css_element" should not exist