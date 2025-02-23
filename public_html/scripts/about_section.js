// Use strict
"use strict";


// Classes

// About section class
class AboutSection extends Section {

	// Public
	
		// Constructor
		constructor(display, sections, settings, message, focus, application, unlocked, automaticLock, scroll, wallets, node, wakeLock, transactions, prices, clipboard) {
		
			// Delegate constructor
			super(display, sections, settings, message, focus, application, unlocked, automaticLock, scroll, wallets, node, wakeLock, transactions, prices, clipboard);
			
			// Add version information
			this.addVersionInformation();
			
			// Update copyright
			this.updateCopyright();
			
			// Add disclaimer
			this.addDisclaimer();
			
			// Add translation contribution message
			this.addTranslationContributionMessage();
			
			// Add attributions
			this.addAttributions();
		}
		
		// Get name
		getName() {
		
			// Return name
			return AboutSection.NAME;
		}
		
		// Reset
		reset() {
		
			// Reset
			super.reset();
		}
		
		// Name
		static get NAME() {
		
			// Return name
			return "About";
		}
	
	// Private
		
		// Initialize
		initialize(state) {
			
			// Set base class initialize
			var baseClassInitialize = super.initialize(state);
			
			// Set self
			var self = this;
		
			// Return promise
			return new Promise(function(resolve, reject) {
			
				// Return initializing base class
				return baseClassInitialize.then(function() {
				
					// Resolve
					resolve();
				
				// Reject error
				}).catch(function(error) {
				
					// Reject error
					reject(error);
				});
			});
		}
		
		// Get initialize error header
		getInitializeErrorHeader() {
		
			// Return initialize error header
			return Language.getDefaultTranslation('About Error');
		}
		
		// Add version information
		addVersionInformation() {
		
			// Get version information display
			var versionInformationDisplay = this.getDisplay().find("div.versionInformation");
			
			// Get version release timestamp
			var versionReleaseTimestamp = Date.parse(VERSION_RELEASE_DATE) / Common.MILLISECONDS_IN_A_SECOND;
			
			// Add version number to version information display
			versionInformationDisplay.append(Language.createTranslatableContainer("<p>", Language.getDefaultTranslation('Version number: %1$v'), [VERSION_NUMBER]));
			
			// Add release date to version information display
			versionInformationDisplay.append(Language.createTranslatableContainer("<p>", Language.getDefaultTranslation('Release date: %1$d'), [versionReleaseTimestamp.toFixed()]));
			
			// Add wallet type to version information display
			versionInformationDisplay.append(Language.createTranslatableContainer("<p>", Language.getDefaultTranslation('Wallet type: %1$x'), [Consensus.walletTypeToText(Consensus.getWalletType())]));
			
			// Add network type to version information display
			versionInformationDisplay.append(Language.createTranslatableContainer("<p>", Language.getDefaultTranslation('Network type: %1$x'), [Consensus.networkTypeToText(Consensus.getNetworkType())]));
		}
		
		// Update copyright
		updateCopyright() {
		
			// Get current timestamp
			var currentTimestamp = new Date();
		
			// Get current year
			var currentYear = currentTimestamp.getFullYear();
			
			// Check if the current year is greater than the copyright year
			if(currentYear > COPYRIGHT_YEAR) {
			
				// Get new copyright
				var newCopyright = Language.createTranslatableContainer("<p>", Language.getDefaultTranslation('© %1$s–%2$s Nicolas Flamel.'), [COPYRIGHT_YEAR.toFixed(), currentYear.toFixed()], "copyright");
			}
			
			// Otherwise
			else {
			
				// Get new copyright
				var newCopyright = Language.createTranslatableContainer("<p>", Language.getDefaultTranslation('© %1$s Nicolas Flamel.'), [COPYRIGHT_YEAR.toFixed()], "copyright");
			}
			
			// Replace copyright with the new copyright
			this.getDisplay().find("p.copyright").replaceWith(newCopyright);
			
			// Get next year timestamp
			var nextYearTimestamp = new Date(currentYear + 1, Common.JANUARY_MONTH_INDEX);
			
			// Set self
			var self = this;
			
			// Set timeout
			setTimeout(function() {
			
				// Update copyright
				self.updateCopyright();
			
			}, Math.min(nextYearTimestamp - currentTimestamp, Common.INT32_MAX_VALUE));	
		}
		
		// Add disclaimer
		addDisclaimer() {
		
			// Get disclaimer display
			var disclaimerDisplay = this.getDisplay().find("div.disclaimer");
			
			// Check if is an extension
			if(Common.isExtension() === true) {
			
				// Set message
				var message = Language.getDefaultTranslation('This extension is provided "as is", without warranty of any kind, express or implied, including but not limited to the warranties of merchantability, fitness for a particular purpose and noninfringement. In no event shall the authors or copyright holders be liable for any claim, damages or other liability, whether in an action of contract, tort or otherwise, arising from, out of or in connection with this extension or the use or other dealings in this extension.');
			}
			
			// Otherwise check if is an app
			else if(Common.isApp() === true) {
			
				// Set message
				var message = Language.getDefaultTranslation('This app is provided "as is", without warranty of any kind, express or implied, including but not limited to the warranties of merchantability, fitness for a particular purpose and noninfringement. In no event shall the authors or copyright holders be liable for any claim, damages or other liability, whether in an action of contract, tort or otherwise, arising from, out of or in connection with this app or the use or other dealings in this app.');
			}
			
			// Otherwise
			else {
			
				// Set message
				var message = Language.getDefaultTranslation('This site is provided "as is", without warranty of any kind, express or implied, including but not limited to the warranties of merchantability, fitness for a particular purpose and noninfringement. In no event shall the authors or copyright holders be liable for any claim, damages or other liability, whether in an action of contract, tort or otherwise, arising from, out of or in connection with this site or the use or other dealings in this site.');
			}
			
			// Add disclaimer message to disclaimer display
			disclaimerDisplay.append(Language.createTranslatableContainer("<p>", message));
		}
		
		// Add translation contribution message
		addTranslationContributionMessage() {
		
			// Get translation contributors display
			var translationContributorsDisplay = this.getDisplay().find("div.translationContributors");
			
			// Check if is an extension
			if(Common.isExtension() === true) {
			
				// Set message
				var message = Language.getDefaultTranslation('The following people created the translations for this extension. You can email %1$m if you\'re interested in translating this extension into another language.');
			}
			
			// Otherwise check if is an app
			else if(Common.isApp() === true) {
			
				// Set message
				var message = Language.getDefaultTranslation('The following people created the translations for this app. You can email %1$m if you\'re interested in translating this app into another language.');
			}
			
			// Otherwise
			else {
			
				// Set message
				var message = Language.getDefaultTranslation('The following people created the translations for this site. You can email %1$m if you\'re interested in translating this site into another language.');
			}
			
			// Add translation contribution message to translation contributors display
			translationContributorsDisplay.prepend(Language.createTranslatableContainer("<p>", message, [
				[
					// Text
					"nicolasflamel@mwcwallet.com",
					
					// URL
					"mailto:nicolasflamel@mwcwallet.com",
					
					// Is external
					true
				]
			]));
		}
		
		// Add attributions
		addAttributions() {
		
			// Get attributions display
			var attributionsDisplay = this.getDisplay().find("div.attributions");
			
			// Check if is an extension
			if(Common.isExtension() === true) {
			
				// Set message
				var message = Language.getDefaultTranslation('This extension utilizes code and assets from the following sources.');
			}
			
			// Otherwise check if is an app
			else if(Common.isApp() === true) {
			
				// Set message
				var message = Language.getDefaultTranslation('This app utilizes code and assets from the following sources.');
			}
			
			// Otherwise
			else {
			
				// Set message
				var message = Language.getDefaultTranslation('This site utilizes code and assets from the following sources.');
			}
			
			// Add attributions message to attributions display
			attributionsDisplay.prepend(Language.createTranslatableContainer("<p>", message));
			
			// Go through all attributions
			for(var name in ATTRIBUTIONS) {
						
				if(ATTRIBUTIONS.hasOwnProperty(name) === true) {
				
					// Check if attribution has a license
					if("License Type" in ATTRIBUTIONS[name] === true && "License Path" in ATTRIBUTIONS[name] === true) {
				
						// Add attribution to attributions display
						attributionsDisplay.find("ul").append("<li>" + Language.createTranslatableContainer("<span>", Language.getDefaultTranslation('%1$y: %2$m, License: %3$m'), [
						
							// Name
							name,
							
							[
								// Text
								ATTRIBUTIONS[name]["URL"],
								
								// URL
								ATTRIBUTIONS[name]["URL"],
								
								// Is external
								true
							],
							
							[
								// Text
								ATTRIBUTIONS[name]["License Type"],
								
								// URL
								ATTRIBUTIONS[name]["License Path"],
								
								// Is external
								true
							]
						]) + "</li>");
					}
					
					// Otherwise
					else {
					
						// Add attribution to attributions display
						attributionsDisplay.find("ul").append("<li>" + Language.createTranslatableContainer("<span>", Language.getDefaultTranslation('%1$y: %2$m'), [
						
							// Name
							name,
							
							[
								// Text
								ATTRIBUTIONS[name]["URL"],
								
								// URL
								ATTRIBUTIONS[name]["URL"],
								
								// Is external
								true
							]
						]) + "</li>");
					}
				}
			}
		}
}


// Main function

// Set global object's about section
globalThis["AboutSection"] = AboutSection;
