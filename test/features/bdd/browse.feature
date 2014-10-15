Feature: Browse Shopware

    @javascript
    Scenario: Search front page
        Given I am on the frontpage
         When I search for "Sasse"
         Then I should see "2,99 € *"

    @javascript
    Scenario: Follow redirect link
        Given I am on the frontpage
         When I search for "Sasse"
          And I follow "Sasse Korn 32%"
         Then the page should exist
