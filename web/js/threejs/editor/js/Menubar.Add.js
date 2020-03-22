Menubar.Add = function ( editor ) {

	var meshCount = 0;
	var lightCount = 0;

	// event handlers

	function onObject3DOptionClick () {

		var mesh = new THREE.Object3D();
		mesh.name = 'Object3D ' + ( ++ meshCount );

		editor.addObject( mesh );
		editor.select( mesh );

	}
	
	function onSurfaceOptionClick () {
		var geometry = new THREE.Geometry();
		geometry.vertices = [
			new THREE.Vector3(0, 0, 0),
			new THREE.Vector3(100, 0, 0),
			new THREE.Vector3(0, 0, 100),
		];
		geometry.faces = [new THREE.Face3(0, 1, 2)];

		var material = new THREE.MeshBasicMaterial({ color: 0xA1F3F6 });
		material.side = THREE.DoubleSide;
		var mesh = new THREE.Mesh( geometry, material );
		mesh.name = 'Surface';

		editor.addObject( mesh );
		editor.select( mesh );
	}
	
	function onFrequenstatBoxOptionClick() {
		
		
		var str = '\
		<div class="modal fade" id="editorSelectionBox" tabindex="-1" role="dialog" > \
			<div class="modal-dialog">\
				<div class="modal-content">\
					<div class="modal-header">\
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>\
						<h4 class="modal-title">Select available box</h4>\
					</div>\
					<div class="modal-body">\
					</div>\
					<div class="modal-footer">\
						<button type="button" id="editorSelectionBoxButton" class="btn btn-primary">Valid</button>\
					</div>\
				</div>\
			</div>\
		</div>\
		';
		
		var modal = $(str);
		$('body').append(modal);
		var boxes = editor.config.getKey('availableBoxes');
		var boxObj = null;
		var nbButtons = 0;
		for( var i = 0; i < boxes.length; i++ ) {
			boxObj = editor.scene.getObjectByName( boxes[i], true );
			if(boxObj !== undefined) {
				continue;
			}
			
			nbButtons++;
			var button = $('<a id="frequenstatBox-'+i+'" href="" class="btn btn-lg btn-info frequenstatBoxA">'+boxes[i]+'</a>');
			modal.find('.modal-body').append(button);
			button.wrap('<p></p>');
		}
		
		if(nbButtons === 0) {
			modal.find('.modal-body').append('<div class="alert alert-danger">Aucune box disponible</div>');
		}
		
		modal.find('.frequenstatBoxA').on('click', function(event) {
			event.preventDefault();
			var link = $(this);
			link
				.parent()
				.parent()
				.find('.frequenstatBoxA')
				.removeClass('btn-success')
				.addClass('btn-info');
			link.removeClass('btn-info').addClass('btn-success');
		});
		
		modal.find('#editorSelectionBoxButton').on('click', function() {
			var selectedButton = modal.find('.frequenstatBoxA.btn-success');
			if( selectedButton.length === 0 )
				return;
			
			var idBoxInConfig = parseInt(selectedButton.attr('id').substring(15));
			
			var radius = 25;
			var widthSegments = 16;
			var heightSegments = 16;
	
			var geometry = new THREE.SphereGeometry( radius, widthSegments, heightSegments );
			var material = new THREE.MeshBasicMaterial({ color: 0xA1F3F6 });
			material.side = THREE.DoubleSide;
			var mesh = new THREE.Mesh( geometry, material );
			var boxes = editor.config.getKey('availableBoxes');
			mesh.name = boxes[idBoxInConfig];
	
			editor.addObject( mesh );
			editor.select( mesh );
			
			modal.modal('hide');
		});
		
		modal.modal({});
	}

	function onPlaneOptionClick () {

		var width = 200;
		var height = 200;

		var widthSegments = 1;
		var heightSegments = 1;

		var geometry = new THREE.PlaneGeometry( width, height, widthSegments, heightSegments );
		var material = new THREE.MeshPhongMaterial();
		var mesh = new THREE.Mesh( geometry, material );
		mesh.name = 'Plane ' + ( ++ meshCount );

		editor.addObject( mesh );
		editor.select( mesh );

	}

	function onBoxOptionClick () {

		var width = 100;
		var height = 100;
		var depth = 100;

		var widthSegments = 1;
		var heightSegments = 1;
		var depthSegments = 1;

		var geometry = new THREE.BoxGeometry( width, height, depth, widthSegments, heightSegments, depthSegments );
		var mesh = new THREE.Mesh( geometry, new THREE.MeshPhongMaterial() );
		mesh.name = 'Box ' + ( ++ meshCount );

		editor.addObject( mesh );
		editor.select( mesh );

	}
	
	function onCircleOptionClick () {

		var radius = 20;
		var segments = 8;

		var geometry = new THREE.CircleGeometry( radius, segments );
		var mesh = new THREE.Mesh( geometry, new THREE.MeshPhongMaterial() );
		mesh.name = 'Circle ' + ( ++ meshCount );

		editor.addObject( mesh );
		editor.select( mesh );

	}

	function onCylinderOptionClick () {

		var radiusTop = 20;
		var radiusBottom = 20;
		var height = 100;
		var radiusSegments = 8;
		var heightSegments = 1;
		var openEnded = false;

		var geometry = new THREE.CylinderGeometry( radiusTop, radiusBottom, height, radiusSegments, heightSegments, openEnded );
		var mesh = new THREE.Mesh( geometry, new THREE.MeshPhongMaterial() );
		mesh.name = 'Cylinder ' + ( ++ meshCount );

		editor.addObject( mesh );
		editor.select( mesh );

	}

	function onSphereOptionClick () {

		var radius = 75;
		var widthSegments = 32;
		var heightSegments = 16;

		var geometry = new THREE.SphereGeometry( radius, widthSegments, heightSegments );
		var mesh = new THREE.Mesh( geometry, new THREE.MeshPhongMaterial() );
		mesh.name = 'Sphere ' + ( ++ meshCount );

		editor.addObject( mesh );
		editor.select( mesh );

	}

	function onIcosahedronOptionClick () {

		var radius = 75;
		var detail = 2;

		var geometry = new THREE.IcosahedronGeometry ( radius, detail );
		var mesh = new THREE.Mesh( geometry, new THREE.MeshPhongMaterial() );
		mesh.name = 'Icosahedron ' + ( ++ meshCount );

		editor.addObject( mesh );
		editor.select( mesh );

	}

	function onTorusOptionClick () {

		var radius = 100;
		var tube = 40;
		var radialSegments = 8;
		var tubularSegments = 6;
		var arc = Math.PI * 2;

		var geometry = new THREE.TorusGeometry( radius, tube, radialSegments, tubularSegments, arc );
		var mesh = new THREE.Mesh( geometry, new THREE.MeshPhongMaterial() );
		mesh.name = 'Torus ' + ( ++ meshCount );

		editor.addObject( mesh );
		editor.select( mesh );

	}

	function onTorusKnotOptionClick () {

		var radius = 100;
		var tube = 40;
		var radialSegments = 64;
		var tubularSegments = 8;
		var p = 2;
		var q = 3;
		var heightScale = 1;

		var geometry = new THREE.TorusKnotGeometry( radius, tube, radialSegments, tubularSegments, p, q, heightScale );
		var mesh = new THREE.Mesh( geometry, new THREE.MeshPhongMaterial() );
		mesh.name = 'TorusKnot ' + ( ++ meshCount );

		editor.addObject( mesh );
		editor.select( mesh );

	}

	function onSpriteOptionClick () {

		var sprite = new THREE.Sprite( new THREE.SpriteMaterial() );
		sprite.name = 'Sprite ' + ( ++ meshCount );

		editor.addObject( sprite );
		editor.select( sprite );

	}

	function onPointLightOptionClick () {

		var color = 0xffffff;
		var intensity = 1;
		var distance = 0;

		var light = new THREE.PointLight( color, intensity, distance );
		light.name = 'PointLight ' + ( ++ lightCount );

		editor.addObject( light );
		editor.select( light );

	}

	function onSpotLightOptionClick () {

		var color = 0xffffff;
		var intensity = 1;
		var distance = 0;
		var angle = Math.PI * 0.1;
		var exponent = 10;

		var light = new THREE.SpotLight( color, intensity, distance, angle, exponent );
		light.name = 'SpotLight ' + ( ++ lightCount );
		light.target.name = 'SpotLight ' + ( lightCount ) + ' Target';

		light.position.set( 0, 1, 0 ).multiplyScalar( 200 );

		editor.addObject( light );
		editor.select( light );

	}

	function onDirectionalLightOptionClick () {

		var color = 0xffffff;
		var intensity = 1;

		var light = new THREE.DirectionalLight( color, intensity );
		light.name = 'DirectionalLight ' + ( ++ lightCount );
		light.target.name = 'DirectionalLight ' + ( lightCount ) + ' Target';

		light.position.set( 1, 1, 1 ).multiplyScalar( 200 );

		editor.addObject( light );
		editor.select( light );

	}

	function onHemisphereLightOptionClick () {

		var skyColor = 0x00aaff;
		var groundColor = 0xffaa00;
		var intensity = 1;

		var light = new THREE.HemisphereLight( skyColor, groundColor, intensity );
		light.name = 'HemisphereLight ' + ( ++ lightCount );

		light.position.set( 1, 1, 1 ).multiplyScalar( 200 );

		editor.addObject( light );
		editor.select( light );

	}

	function onAmbientLightOptionClick() {

		var color = 0x222222;

		var light = new THREE.AmbientLight( color );
		light.name = 'AmbientLight ' + ( ++ lightCount );

		editor.addObject( light );
		editor.select( light );

	}

	// configure menu contents

	var createOption = UI.MenubarHelper.createOption;
	var createDivider = UI.MenubarHelper.createDivider;

	var menuConfig = [
		//createOption( 'Object3D', onObject3DOptionClick ),
		//createDivider(),
		createOption( 'Surface', onSurfaceOptionClick ),
		createOption( 'Box Frequenstat', onFrequenstatBoxOptionClick ),
		createDivider(),
		createOption( 'Plan', onPlaneOptionClick ),
		createOption( 'Cube', onBoxOptionClick ),
		createOption( 'Cercle', onCircleOptionClick ),
		createOption( 'Cylidre', onCylinderOptionClick ),
		createOption( 'Sphere', onSphereOptionClick  ),
		//createOption( 'Icosahedron', onIcosahedronOptionClick ),
		//createOption( 'Torus', onTorusOptionClick ),
		//createOption( 'Torus Knot', onTorusKnotOptionClick ),
		createDivider(),

		createOption( 'Sprite', onSpriteOptionClick  ),
		createDivider(),

		createOption( 'Point light', onPointLightOptionClick ),
		createOption( 'Spot light', onSpotLightOptionClick ),
		createOption( 'Directional light', onDirectionalLightOptionClick ),
		createOption( 'Hemisphere light', onHemisphereLightOptionClick ),
		createOption( 'Ambient light', onAmbientLightOptionClick )
	];
	
	var optionsPanel = UI.MenubarHelper.createOptionsPanel( menuConfig );

	return UI.MenubarHelper.createMenuContainer( 'Ajout', optionsPanel );

}
