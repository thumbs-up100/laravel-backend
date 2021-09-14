/**
 * @param {object} options
 * @param {Element} options.target
 * @returns {ClassSwitch}
 * @constructor
 */
function ClassSwitch ( options ) {
	// Check passed options
	if( !( options.target instanceof Element ) ) {
		throw new Error( 'Panel element is required' );
	}
	if( !( options.switchList instanceof Array ) || !options.switchList.length ) {
		throw new Error( 'Switch List is not instance of Array or empty' );
	}

	// Merge this and options
	for ( let key in options ) this[ key ] = options[ key ];

	// Link instance to element
	this.target.classSwitch = this;

	// Add click handlers to switch elements
	this.addHandlers();

	return this;
}

/**
 * @param {string} className
 */
ClassSwitch.prototype.switch = function ( className ) {
	// Remove last added class if it exist
	if ( this.currentClass ) this.target.classList.remove( this.currentClass );

	// Add new class if it was passed
	if ( className ) this.target.classList.add( className );

	// Save current class name to remove it from element in future
	this.currentClass = className;

	// Callback
	if ( this.onswitch instanceof Function ) this.onswitch( className );
};

ClassSwitch.prototype.addHandlers = function () {
	for ( let i = 0; i < this.switchList.length; i++ ) {
		let item = this.switchList[ i ];

		// Link click handler to switch
		item.clickHandler = this.switch.bind( this, item.class );

		// Add click handler
		item.node.addEventListener( 'click', item.clickHandler );
	}
};

ClassSwitch.prototype.removeHandlers = function () {
	for ( let i = 0; i < this.switchList.length; i++ ) {
		let item = this.switchList[ i ];
		if ( item.clickHandler ) item.node.removeEventListener( 'click', item.clickHandler );
	}
};
