/**
 * @param {object} options
 * @param {Element} options.node
 * @returns {AdminPanel}
 * @constructor
 */
function AdminPanel ( options ) {
	// Check passed options
	if( !( options.node instanceof Element ) ) {
		throw new Error( 'Panel element is required' );
	}

	for ( let key in options ) this[ key ] = options[ key ];
	this.node.adminPanel = this;
	this.header = this.node.querySelector( '.panel-header' );

	// Remove
	this.remove = {
		icon: 'fa-times',
		button: this.header.querySelector( '[data-panel="remove"]' )
	};

	if ( this.remove.button ) {
		this.remove.button.classList.add( this.remove.icon );
		this.remove.button.addEventListener( 'click', this.removePanel.bind( this ) );
	}

	// Fullscreen
	this.fullscreen = {
		state: false,
		button: this.header.querySelector( '[data-panel="fullscreen"]' ),
		icon: {
			default: 'fa-expand',
			active: 'fa-compress'
		}
	};

	if ( this.fullscreen.button ) {
		this.fullscreen.button.classList.add( this.fullscreen.icon.default );
		this.fullscreen.button.addEventListener( 'click', this.toggleFullscreen.bind( this ) );
	}

	// Theme panel
	this.theme = {
		state: false,
		button: this.header.querySelector( '[data-panel="color"]' ),
		panel: null,
		timeoutId: null,
		current: null,
		icon: {
			default: 'fa-tint',
			active: 'fa-save'
		}
	};

	if ( this.theme.button ) {
		this.theme.button.classList.add( this.theme.icon.default );
		this.theme.button.addEventListener( 'click', this.toggleThemePanel.bind( this ) );
	}

	// Title panel
	this.title = {
		state: false,
		button: this.header.querySelector( '[data-panel="title"]' ),
		node: this.header.querySelector( '.panel-title' ),
		panel: null,
		input: null,
		timeoutId: null,
		icon: {
			default: 'fa-pencil',
			active: 'fa-save'
		}
	};

	if ( this.title.button ) {
		this.title.button.classList.add( this.title.icon.default );
		this.title.button.addEventListener( 'click', this.toggleTitlePanel.bind( this ) );
	}

	// Collapse
	this.collapse = {
		state: false,
		button: this.header.querySelector( '[data-panel="collapse"]' ),
		node: this.node.querySelector( '.panel-body' ),
		timeoutId: null,
		icon: {
			default: 'fa-window-minimize',
			active: 'fa-window-maximize'
		}
	};

	if ( this.collapse.button ) {
		this.collapse.button.classList.add( this.collapse.icon.default );
		this.collapse.button.addEventListener( 'click', this.collapsePanel.bind( this ) );
	}

	return this;
}

AdminPanel.prototype.createThemePanel = function () {
	let panel = this.theme.panel = document.createElement( 'div' );
	panel.className = 'panel-menu';

	if ( this.panelMenuClass ) {
		if ( this.panelMenuClass instanceof Array ) panel.classList.add( ...this.panelMenuClass );
		else panel.classList.add( this.panelMenuClass );
	}

	panel.innerHTML = '<div class="admin-panel-group"></div>';
	let inner = panel.querySelector( '.admin-panel-group' );
	this.header.after( panel );

	new ClassSwitch({
		target: this.node,
		currentClass: this.theme.current,
		switchList: this.themes.map( function( color ) {
			let classSwitch = document.createElement( 'button' );
			classSwitch.setAttribute( 'title', color );
			classSwitch.classList.add( 'admin-panel-color', `admin-panel-color-${color}` );
			inner.appendChild( classSwitch );

			return { node: classSwitch, class: `panel-${color}` };
		}),
		onswitch: ( function ( className ) {
			this.theme.current = className;
		}).bind( this )
	});
};

AdminPanel.prototype.destroyThemePanel = function () {
	this.theme.panel.remove();
	this.theme.panel = null;
};

AdminPanel.prototype.toggleThemePanel = function () {
	if ( !this.theme.timeoutId ) {
		if ( this.theme.state ) {
			this.theme.timeoutId = this.collapseItem( this.theme.panel, 250, ( function () {
				this.destroyThemePanel();
				this.theme.button.classList.remove( this.theme.icon.active );
				this.theme.button.classList.add( this.theme.icon.default );
				this.theme.state = false;
				this.theme.timeoutId = null;
			}).bind( this ));
		} else {
			this.createThemePanel();
			this.theme.timeoutId = this.expandItem( this.theme.panel, 250, ( function () {
				this.theme.button.classList.remove( this.theme.icon.default );
				this.theme.button.classList.add( this.theme.icon.active );
				this.theme.state = true;
				this.theme.timeoutId = null;
			}).bind( this ));
		}
	}
};

AdminPanel.prototype.createTitlePanel = function () {
	let panel = this.title.panel = document.createElement( 'div' );
	panel.className = 'panel-menu';

	if ( this.panelMenuClass ) {
		if ( this.panelMenuClass instanceof Array ) panel.classList.add( ...this.panelMenuClass );
		else panel.classList.add( this.panelMenuClass );
	}

	panel.innerHTML = `<input class='form-control' placeholder='Panel Title' value='${this.title.node.innerText}'>`;
	this.header.after( panel );
	this.title.input = panel.querySelector( 'input' );

	this.title.input.oninput = ( function ( event ) {
		this.title.node.innerText = event.target.value;
	}).bind( this );

	this.title.input.onkeypress = ( function ( event ) {
		if ( event.key === 'Enter' ) this.toggleTitlePanel();
	}).bind( this );
};

AdminPanel.prototype.destroyTitlePanel = function () {
	this.title.panel.remove();
	this.title.panel = null;
};

AdminPanel.prototype.toggleTitlePanel = function () {
	if ( !this.title.timeoutId ) {
		if ( this.title.state ) {
			this.title.timeoutId = this.collapseItem( this.title.panel, 250, ( function () {
				this.destroyTitlePanel();
				this.title.button.classList.remove( this.title.icon.active );
				this.title.button.classList.add( this.title.icon.default );
				this.title.state = false;
				this.title.timeoutId = null;
			}).bind( this ));
		} else {
			this.createTitlePanel();
			this.title.timeoutId = this.expandItem( this.title.panel, 250, ( function () {
				this.title.button.classList.remove( this.title.icon.default );
				this.title.button.classList.add( this.title.icon.active );
				this.title.state = true;
				this.title.timeoutId = null;
			}).bind( this ));
		}
	}
};

AdminPanel.prototype.collapseItem = function ( target, duration, cb ) {
	target.style.transitionProperty = 'height, margin, padding';
	target.style.transitionDuration = duration + 'ms';
	target.style.boxSizing = 'border-box';
	target.style.height = target.offsetHeight + 'px';
	target.offsetHeight;
	target.style.overflow = 'hidden';
	target.style.height = 0;
	target.style.paddingTop = 0;
	target.style.paddingBottom = 0;
	target.style.marginTop = 0;
	target.style.marginBottom = 0;

	return setTimeout( () => {
		target.style.display = 'none';
		target.style.removeProperty( 'height' );
		target.style.removeProperty( 'padding-top' );
		target.style.removeProperty( 'padding-bottom' );
		target.style.removeProperty( 'margin-top' );
		target.style.removeProperty( 'margin-bottom' );
		target.style.removeProperty( 'overflow' );
		target.style.removeProperty( 'transition-duration' );
		target.style.removeProperty( 'transition-property' );

		if ( cb instanceof Function ) cb();
	}, duration);
};

AdminPanel.prototype.expandItem = function ( target, duration, cb ) {
	target.style.removeProperty( 'display' );
	let display = window.getComputedStyle(target).display;
	target.style.display = display === 'none' ? 'block' : display;
	let height = target.offsetHeight;
	target.style.overflow = 'hidden';
	target.style.height = 0;
	target.style.paddingTop = 0;
	target.style.paddingBottom = 0;
	target.style.marginTop = 0;
	target.style.marginBottom = 0;
	target.offsetHeight;
	target.style.boxSizing = 'border-box';
	target.style.transitionProperty = "height, margin, padding";
	target.style.transitionDuration = duration + 'ms';
	target.style.height = height + 'px';
	target.style.removeProperty( 'padding-top' );
	target.style.removeProperty( 'padding-bottom' );
	target.style.removeProperty( 'margin-top' );
	target.style.removeProperty( 'margin-bottom' );

	return setTimeout( () => {
		target.style.removeProperty( 'height' );
		target.style.removeProperty( 'overflow' );
		target.style.removeProperty( 'transition-duration' );
		target.style.removeProperty( 'transition-property' );

		if ( cb instanceof Function ) cb();
	}, duration);
};

AdminPanel.prototype.removePanel = function () {
	this.collapseItem( this.node, 250, ( function () {
		this.node.remove();
	}).bind( this ));
};

AdminPanel.prototype.collapsePanel = function () {
	if ( !this.collapse.timeoutId ) {
		if ( this.collapse.state ) {
			this.collapse.timeoutId = this.expandItem( this.collapse.node, 250, ( function () {
				this.node.classList.remove( 'admin-panel-collapsed' );
				this.collapse.button.classList.remove( this.collapse.icon.active );
				this.collapse.button.classList.add( this.collapse.icon.default );
				this.collapse.state = false;
				this.collapse.timeoutId = null;
			}).bind( this ));
		} else {
			this.node.classList.add( 'admin-panel-collapsed' );
			this.collapse.button.classList.remove( this.collapse.icon.default );
			this.collapse.button.classList.add( this.collapse.icon.active );
			this.collapse.timeoutId = this.collapseItem( this.collapse.node, 250, ( function () {
				this.collapse.state = true;
				this.collapse.timeoutId = null;
			}).bind( this ));
		}
	}
};

AdminPanel.prototype.toggleFullscreen = function () {
	if ( this.fullscreen.state ) {
		this.node.classList.remove( 'admin-panel-fullscreen' );
		document.body.style.removeProperty( 'overflow' );
		this.fullscreen.button.classList.remove( this.fullscreen.icon.active );
		this.fullscreen.button.classList.add( this.fullscreen.icon.default );
		window.dispatchEvent( new Event( 'resize' ) );
		this.fullscreen.state = false;
	} else {
		this.node.classList.add( 'admin-panel-fullscreen' );
		document.body.style.overflow = 'hidden';
		this.fullscreen.button.classList.remove( this.fullscreen.icon.default );
		this.fullscreen.button.classList.add( this.fullscreen.icon.active );
		window.dispatchEvent( new Event( 'resize' ) );
		this.fullscreen.state = true;
	}
};
