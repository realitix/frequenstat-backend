var Frequenstat_shapeToVertices = function ( shape ) {
	var points = shape.extractAllPoints();
	points = points.shape;
    var vertices = [];
    
    for(var i = 0; i < points.length; i++) {
		vertices.push(new THREE.Vector3(points[i].x, 0, - points[i].y));
    }
	return vertices;
};
