// TODO description

function Counter( options ) {
	for ( let key in Counter.defaults ) this[ key ] = Counter.defaults[ key ];
	for ( let key in options ) this[ key ] = options[ key ];
	return this;
}

Counter.defaults = {
	id: null,
	timeout: 10,
	checkpoint: 5,
	onStart: null,
	onUpdate: null,
	onStop: null,
	onCheckpoint: null
};

Counter.prototype.start = function () {
	if ( this.onStart ) this.onStart.call( this );
	clearInterval( this.id );
	this.seconds = this.timeout;
	this.count();
	this.id = setInterval( this.count.bind( this ), 1000 );
};

Counter.prototype.stop = function () {
	if ( this.onStop ) this.onStop.call( this );
	clearInterval( this.id );
};

Counter.prototype.count = function () {
	if ( this.onUpdate ) this.onUpdate.call( this, this.seconds );
	if ( this.seconds === this.checkpoint && this.onCheckpoint ) this.onCheckpoint.call( this );
	if ( this.seconds === 0 ) this.stop();
	this.seconds--;
};
