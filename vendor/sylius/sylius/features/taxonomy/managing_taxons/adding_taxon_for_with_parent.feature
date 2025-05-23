@managing_taxons
Feature: Adding a new taxon with parent specified
    In order to categorize my merchandise
    As an Administrator
    I want to add a new taxon with specific parent to the registry

    Background:
        Given the store is available in "English (United States)"
        And the store has "Category" taxonomy
        And I am logged in as an administrator

    @ui @javascript
    Scenario: Adding a new taxon with parent
        When I want to create a new taxon
        And I set its parent taxon to "Category"
        And I specify its code as "guns"
        And I name it "Guns" in "English (United States)"
        And I set its slug to "guns" in "English (United States)"
        And I add it
        Then I should be notified that it has been successfully created
        And the "Guns" taxon should appear in the registry
        And this taxon should belongs to "Category"
