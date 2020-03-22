Sidebar.Geometry.SurfaceGeometry = function ( signals, object ) {

	var container = new UI.Panel();

	// Vertice X
	var verticeXRow = new UI.Panel();
	var verticeX = new UI.Number();

	verticeXRow.add( new UI.Text( 'X' ).setWidth( '90px' ) );
	verticeXRow.add( verticeX );

	container.add(verticeXRow);
	
	// Vertice Z
	var verticeZRow = new UI.Panel();
	var verticeZ = new UI.Number();

	verticeZRow.add( new UI.Text( 'Z' ).setWidth( '90px' ) );
	verticeZRow.add( verticeZ );

	container.add(verticeZRow);
	
	// Position dans la liste
	var selectRow = new UI.Panel();
	var select = new UI.Select();
	
	var options = [];
	var i = 0;
	for( i = 0; i < object.geometry.vertices.length; i++) {
		options.push(i);
	}
	select.setOptions(options);
	select.setValue(i-1);
	
	selectRow.add(new UI.Text( 'Position' ).setWidth( '90px' ));
	selectRow.add(select);
	
	container.add(selectRow);
	
	// Button
	var buttonRow = new UI.Panel();
	
	var addButton = new UI.Button( 'Add Vertice' ).setWidth( '110px' ).onClick( function () {
		update();
	} );
	buttonRow.add(addButton);

	
	
	var deleteLastButton = new UI.Button( 'Delete Vertice' ).setWidth( '110px' ).onClick( function () {
		update2();
	} );
	buttonRow.add(deleteLastButton);
	
	container.add(buttonRow);

	// Update
	function update() {
		var position = parseInt(select.getValue()) + 1;
        var geometry = object.geometry.clone();
        
		delete object.__webglInit; // TODO: Remove hack (WebGLRenderer refactoring)

		object.geometry.dispose();
		
		// On transforme le Z en Y
		var i = 0;
		for(i = 0; i < geometry.vertices.length; i++) {
			geometry.vertices[i].y = geometry.vertices[i].z;
			geometry.vertices[i].z = 0;
		}
		
		// On ajoute le nouveau
		if(position == geometry.vertices.length) {
			geometry.vertices.push(new THREE.Vector3(verticeX.getValue(), verticeZ.getValue(), 0));
		} else {
			geometry.vertices.splice(position, 0, new THREE.Vector3(verticeX.getValue(), verticeZ.getValue(), 0));
		}
		
		// On calcul les faces
		var vertices = geometry.vertices;
		if( vertices.length >= 3 ) {
			var holes = [];
			var normal = new THREE.Vector3( 0, 1, 0 );
			geometry.faces = [];
			triangles = THREE.Shape.Utils.triangulateShape(vertices, holes);
			for(i = 0; i < triangles.length; i++ ){
				geometry.faces.push( new THREE.Face3( triangles[i][0], triangles[i][1], triangles[i][2], normal ));
			}
		}
        
        // On transforme le y en Z
		for(i = 0; i < geometry.vertices.length; i++) {
			geometry.vertices[i].z = geometry.vertices[i].y;
			geometry.vertices[i].y = 0;
		}
		
		object.geometry = geometry;
		
		object.geometry.computeBoundingSphere();
		signals.objectChanged.dispatch( object );
	}
	
	function update2() {
		var position = parseInt(select.getValue());
		var geometry = object.geometry.clone()
		;
		delete object.__webglInit; // TODO: Remove hack (WebGLRenderer refactoring)

		object.geometry.dispose();
		
		// On transforme le Z en Y
		var i = 0;
		for(i = 0; i < geometry.vertices.length; i++) {
			geometry.vertices[i].y = geometry.vertices[i].z;
			geometry.vertices[i].z = 0;
		}
		
		// On supprime
		geometry.vertices.splice(position, 1);
		
		
		// On calcul les faces
		var vertices = geometry.vertices;
		if( vertices.length >= 3 ) {
			var holes = [];
			geometry.faces = [];
			triangles = THREE.Shape.Utils.triangulateShape(vertices, holes);
			for(i = 0; i < triangles.length; i++ ){
				geometry.faces.push( new THREE.Face3( triangles[i][0], triangles[i][1], triangles[i][2] ));
			}
		}
        
        // On transforme le y en Z
		for(i = 0; i < geometry.vertices.length; i++) {
			geometry.vertices[i].z = geometry.vertices[i].y;
			geometry.vertices[i].y = 0;
		}
		
		object.geometry = geometry;
		
		object.geometry.computeBoundingSphere();
		signals.objectChanged.dispatch( object );
	}

	return container;
}
