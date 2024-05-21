describe('Check if the index.php Welcome page contains a Hello Optimy message', () => {
  it('should contain "Hello Optimy" on the page', () => {
    // Visit the local web page
    cy.visit('http://localhost:8001');

    // Check if the page contains the message "Hello Optimy"
    cy.contains('Hello Optimy').should('be.visible');
  });
});

describe('Check if the index.php contains GoodBye', () => {
  it('should contain "GoodBye" on the page', () => {
    // Visit the local web page
    cy.visit('http://localhost:8001');

    // Check if the page contains the message "Hello Optimy"
    cy.contains('GoodBye').should('be.visible');
  });
});