Feature: Browse Shopware

    Scenario: Search front page
        Given I am on "/"
         When I fill in "searchfield" with "Sasse"
          And I press "submit_search_btn"
         Then I should see "2,99 € *"

    Scenario: Follow redirect link
        Given I am on "/"
         When I fill in "searchfield" with "Sasse"
          And I press "submit_search_btn"
          And I follow "Sasse Korn 32%"
         Then the response status code should be 200
