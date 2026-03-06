Feature: FizzBuzz
  In order to validate game responses
  As a player
  I want to receive the correct FizzBuzz output

  Scenario Outline: Return the right response
    Given I have a FizzBuzz game
    When I play with number <number>
    Then the response should be "<response>"

    Examples:
      | number | response |
      | 1      | 1        |
      | 3      | Fozz     |
      | 5      | Buzz     |
      | 15     | FizzBuzz |
