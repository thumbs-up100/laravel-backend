var Waves, j, len, wave, waveSettings, waves,
	bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; };

Waves = (function() {
	Waves.defaults = {
		speed: 2,
		amplitude: 50,
		wavelength: 50,
		segmentLength: 10,
		fillStyle: 'rgba(255, 255, 255, 1)',
		strokeStyle: 'rgba(0, 0, 0, 1)',
		lineWidth: 3,
		time: 0
	};

	function Waves($wrap, settings) {
		this.$wrap = $wrap;
		this.loop = bind(this.loop, this);
		this.drawSine = bind(this.drawSine, this);
		this.ease = bind(this.ease, this);
		this.update = bind(this.update, this);
		this.clear = bind(this.clear, this);
		this.resizeWidth = bind(this.resizeWidth, this);
		this.settings = settings;
		this.options = Waves.defaults;
		this.context = this.$wrap.getContext('2d');
		this.pi2 = Math.PI * 2;
		this.halfPi = Math.PI / 2;
		this.resizeWidth();
		window.addEventListener('resize', this.resizeWidth);
		this.settings.resizeEvent();
		window.addEventListener('resize', this.settings.resizeEvent);
		this.loop();
	}

	Waves.prototype.resizeWidth = function() {
		this.width = this.$wrap.width = window.innerHeight;
		this.height = this.$wrap.height = window.innerHeight;
		this.waveWidth = this.width;
		return this.waveLeft = this.width * 0.025;
	};

	Waves.prototype.clear = function() {
		return this.context.clearRect(0, 0, this.width, this.height);
	};

	Waves.prototype.update = function() {
		var i, index, j, length, ref, results, timeModifier;
		this.time = this.time - 0.007;
		if (!this.time) {
			this.time = this.options.time;
		}
		index = 0;
		length = this.settings.waves.length;
		results = [];
		for (i = j = 0, ref = length - 1; 0 <= ref ? j <= ref : j >= ref; i = 0 <= ref ? ++j : --j) {
			timeModifier = this.settings.waves.timeModifier || 1;
			results.push(this.drawSine(this.time * timeModifier, this.settings.waves[i]));
		}
		return results;
	};

	Waves.prototype.ease = function(percent, amplitude) {
		return amplitude * (Math.sin(percent * this.pi2 - this.halfPi) + 1) * 0.5;
	};

	Waves.prototype.drawSine = function(time, options) {
		var amp, amplitude, fillStyle, strokeStyle, lineWidth, i, j, ref, ref1, segmentLength, wavelength, x, y, yAxis, yOffset;
		options = options || {};
		yOffset = options.yOffset || 0;
		amplitude = options.amplitude || this.options.amplitude;
		wavelength = options.wavelength || this.options.wavelength;
		fillStyle = options.fillStyle || this.options.fillStyle;
		strokeStyle = options.strokeStyle || this.options.strokeStyle;
		lineWidth = options.lineWidth || this.options.lineWidth;
		segmentLength = options.segmentLength || this.options.segmentLength;
		x = time;
		y = 0;
		amp = this.options.amplitude;
		yAxis = this.height / 2;
		this.context.fillStyle = fillStyle;
		this.context.strokeStyle = strokeStyle;
		this.context.lineWidth = lineWidth;
		this.context.beginPath();
		this.context.moveTo(0, yAxis + yOffset);
		this.context.lineTo(this.waveLeft, yAxis + yOffset);
		for (i = j = 0, ref = this.waveWidth, ref1 = this.options.segmentLength; ref1 > 0 ? j <= ref : j >= ref; i = j += ref1) {
			x = (time * this.options.speed) + (-(yAxis + yOffset) + i) / wavelength;
			y = Math.sin(x);
			amp = this.ease(i / this.waveWidth, amplitude);
			this.context.lineTo(i + this.waveLeft, amp * y + (yAxis + yOffset));
		}
		this.context.lineTo(this.width, yAxis + yOffset);
		this.context.lineTo(this.width, this.height);
		this.context.lineTo(0, this.height);
		this.context.lineTo(0, yAxis + yOffset);
		this.context.closePath();
		return this.context.fill();
	};

	Waves.prototype.loop = function() {
		this.clear();
		this.update();
		return window.requestAnimationFrame(this.loop);
	};

	return Waves;

})();
