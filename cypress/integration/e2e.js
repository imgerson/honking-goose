describe( 'Test WordPress install', () => {
	it( 'can login to the WordPress dashboard', () => {
		cy.visit( '/wp-login.php' );
		cy.wait(1000);
		cy.get( '#user_login' ).type( Cypress.env( 'wp_user' ));
		cy.get( '#user_pass' ).type( Cypress.env( 'wp_pass' ));
		cy.get( '#wp-submit' ).click();

		cy.url().should( 'eq', 'http://localhost:8888/wp-admin/' );
		cy.get( 'h1' ).contains( 'Dashboard' );
	} );

	it( 'can load the homepage', () => {
		cy.visit( '/' );

		cy.contains( 'Just another WordPress site' );
		cy.contains( 'Hello world!' );
	} );

	it( 'can load blog posts', () => {
		cy.visit( '/?p=1' );

		cy.contains( 'Hello world!' );
	})

	it( 'can load pages', () => {
		cy.visit( '/?page_id=2' );

		cy.contains( 'Sample Page' );
	})
} );