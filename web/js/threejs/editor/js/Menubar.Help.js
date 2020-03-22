Menubar.Help = function ( editor ) {

	// event handlers

	function onSourcecodeOptionClick () {

		window.open( 'https://github.com/mrdoob/three.js/tree/master/editor', '_blank' )

	}

	function onAboutOptionClick () {

		alert('Auteur: Jean-Sébastien Bevilacqua')

	}

	// configure menu contents

	var createOption = UI.MenubarHelper.createOption;
	var createDivider = UI.MenubarHelper.createDivider;

	var menuConfig = [
		createOption( 'A propos', onAboutOptionClick )
	];

	var optionsPanel = UI.MenubarHelper.createOptionsPanel( menuConfig );

	return UI.MenubarHelper.createMenuContainer( 'Aide', optionsPanel );
}
