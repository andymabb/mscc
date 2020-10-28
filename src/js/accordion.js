/**
		 * Progressively Enhanced Accordion Components
		 * (c) 2020 Chris Ferdinandi, MIT License, https://gomakethings.com
		 */
		var Accordions = (function () {

			'use strict';


			//
			// Methods
			//

			/**
			 * Close any existing open accordion elements
			 * @param  {Node} current The current element being opened
			 * @param  {Node} parent  The wrapper for all sibling accordions
			 */
			var closeOthers = function (current, parent) {

				// Get all open accordions inside parent
				var opened = Array.from(parent.querySelectorAll('details[open]'));

				// Close open ones that aren't current accordion
				opened.forEach(function (accordion) {
					if (accordion === current) return;
					accordion.removeAttribute('open');
				});

			};

			/**
			 * Handle toggle event on an accordion element
			 * @param  {Event} event     The Event object
			 * @param  {String} selector The accordion group selector
			 */
			var toggle = function (event, selector) {

				// Only run on accordions inside our selector
				var parent = event.target.closest(selector);
				if (!parent) return;

				// Only run if accordion is open
				if (!event.target.hasAttribute('open')) return;

				// Close any existing open accordions
				closeOthers(event.target, parent);

			};


			/**
			 * Create the Constructor object
			 */
			var Constructor = function (selector) {

				//
				// Variables
				//

				var publicAPIs = {};


				//
				// Methods
				//

				/**
				 * Handle toggle events
				 * @param  {Event} event The Event object
				 */
				var toggleHandler = function (event) {
					toggle(event, selector);
				};

				/**
				 * Destroy the current instantiation
				 */
				publicAPIs.destroy = function () {
					document.removeEventListener('toggle', toggleHandler, true);
				};

				/**
				 * Initialize a new instantiation
				 */
				publicAPIs.init = function () {

					// Check for errors
					if (!selector || typeof selector !== 'string') {
						throw new Error('Please provide a valid selector');
					}

					// Listen for when accordions open or close
					document.addEventListener('toggle', toggleHandler, true);

				};


				//
				// Initialized and return the Public APIs
				//

				publicAPIs.init();
				return publicAPIs;

			};


			//
			// Return the Constructor
			//

			return Constructor;

		})();

		// Instantiate plugin
		var accordion = new Accordions('[data-accordion="1"]');
		var otherAccordion = new Accordions('[data-accordion="2"]');