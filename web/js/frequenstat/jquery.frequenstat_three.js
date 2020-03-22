(function($) {
    // définition du plugin jQuery
    $.fn.frequenStatThree = function(params) {
        var p = {
            verticesPlace: [],
            verticesStations: [],
            verticesBoxes: [],
            colorPlane: 0xA1F3F6,
            colorLine: 0xFF0000,
            colorStation: 0x00FF00,
            colorBox: 0x0000FF
        };
        
        // Fusionner les paramètres par défaut et ceux de l'utilisateur
        p = $.extend(p, params);
        
        // On transforme this en objet jquery
        var container = $(this);
        
        // Définition des constantes
		var WIDTH  = container.width();
		var HEIGHT = WIDTH/3;
		var VIEW_ANGLE = 45;
		var ASPECT = WIDTH / HEIGHT;
		var NEAR = 1;
		var FAR = 30000;
		
		// Création des variables
		var camera, controls, scene, renderer, boxes = [];
        
        /**
         * Renvoie le point centre de la liste de points
         */ 
        function getCenterVector(vs) {
            var xMax=0, xMin=0, yMax=0, yMin=0, zMax=0, zMin=0;
            for( var i = 0; i < vs.length; i++ ){
                if( xMax < vs[i].x ) { xMax = vs[i].x; }
                if( xMin > vs[i].x ) { xMin = vs[i].x; }
                if( yMax < vs[i].y ) { yMax = vs[i].y; }
                if( yMin > vs[i].y ) { yMin = vs[i].y; }
                if( zMax < vs[i].z ) { zMax = vs[i].z; }
                if( zMin > vs[i].z ) { zMin = vs[i].z; }
            }
            return new THREE.Vector3((xMax+xMin)/2, (yMax+yMin)/2, (zMax+zMin)/2);
        }
        
        /**
         * Renvoie la liste de points avec une hauteur z plus élevé
         */ 
        function getUpVertices(vs, z) {
            var vs2 = [];
            for( var i = 0; i < vs.length; i++ ) {
                vs2.push(new THREE.Vector3(vs[i].x, vs[i].y, z));
            }
            return vs2;
        }
        
        /**
         * Initialise la boutique
         */
        function initStore() {
            var vertices = p.verticesPlace;
            var holes = [];
            var triangles;
            var geometry = new THREE.Geometry();
            var geometryLine = new THREE.Geometry();
            var material = new THREE.MeshBasicMaterial({ color: p.colorPlane });
            var lineMaterial = new THREE.LineBasicMaterial({ color: p.colorLine, linewidth: 2 });
            
            geometry.vertices = vertices;
            geometryLine.vertices = getUpVertices(vertices, 1);
            triangles = THREE.Shape.Utils.triangulateShape(vertices, holes);
            
            for( var i = 0; i < triangles.length; i++ ){
                geometry.faces.push( new THREE.Face3( triangles[i][0], triangles[i][1], triangles[i][2] ));
            }
            
            var mesh = new THREE.Mesh( geometry, material );
            var line = new THREE.Line( geometryLine, lineMaterial );
            
            return [mesh, line];
        }
        
        /**
         * Initialise les stations
         */
        function initStations() {
            var pointContainer = new THREE.Geometry();
            var circleMaterial = new THREE.MeshBasicMaterial({ color: p.colorStation, opacity: 1, transparent: true });
            var radius = 3; 
            var segments = 32;
            var circleGeometry = new THREE.CircleGeometry( radius, segments );
            
            var circleMesh = new THREE.Mesh(circleGeometry, circleMaterial);
            for( var i = 0; i < p.verticesStations.length; i++ ) {
                circleMesh.position = p.verticesStations[i];
                THREE.GeometryUtils.merge(pointContainer, circleMesh);
            }
            pointContainer.computeFaceNormals();
            group = new THREE.Mesh( pointContainer, circleMaterial );
            group.matrixAutoUpdate = false;
            group.updateMatrix();
            
            return group;
        }
        
        /**
         * Initialise les boxes
         */
        function initBoxes() {
            var pointContainer = new THREE.Geometry();
            var circleMaterial = new THREE.LineBasicMaterial({ color: p.colorBox, linewidth: 2, transparent: true, opacity: 1 });
            var radius = 1; 
            var segments = 32;
            var circleGeometry = new THREE.CircleGeometry( radius, segments );
            circleGeometry.vertices.shift(); // Retire le vertex du milieu
            
            for( var i = 0; i < p.verticesBoxes.length; i++ ) {
                var mesh = new THREE.Line(circleGeometry, circleMaterial);
                mesh.position = p.verticesBoxes[i];
                boxes.push(mesh);
            }
            
            return 1;
        }
        
        /**
         * Initialise le model 3d
         */
        function init() {
            // Création de la scene
            scene = new THREE.Scene();
            
            // Création de la boutique
            var meshs = initStore();
            for( var i = 0; i < meshs.length; i++ ) {
                scene.add(meshs[i]);
            }
            
            // Création des boxes
            initBoxes();
            for( var j = 0; j < boxes.length; j++ ) {
                scene.add(boxes[j]);
            }
            
            // Création des stations
            var stations = initStations();
            scene.add(stations);
            
            // Création de la caméra
            camera = new THREE.PerspectiveCamera( VIEW_ANGLE, ASPECT, NEAR, FAR);
            scene.add(camera);
            
            // Positionnement de la caméra
            var center_pos = getCenterVector(p.verticesPlace);
            var center_look = center_pos.clone();
            center_pos.z = 500;
            camera.position = center_pos;
            
            // Création du render
            renderer = new THREE.WebGLRenderer( { antialias: true } );
            renderer.setClearColor( 0xffffff, 1 );
            renderer.setSize(WIDTH, HEIGHT);
            renderer.sortObjects = false;
            
            // Ajout du canvas dans le dom
            container.append( renderer.domElement );
            
            // Création de l'intéraction avec la souris
            controls = new THREE.TrackballControls(camera, renderer.domElement);
            controls.rotateSpeed = 1.0;
            controls.zoomSpeed = 1.2;
            controls.panSpeed = 0.8;
            controls.noZoom = false;
            controls.noPan = false;
            controls.staticMoving = false;
            controls.dynamicDampingFactor = 0.3;
            controls.target = center_look;
        }
        
        function animateBoxes() {
            var speedSize = 2;
            var speedOpacity = 0.05;
            
            // La taille
            for( var i = 0; i < boxes.length; i++ ) {
                if(boxes[i].scale.x >= 40) {
                    boxes[i].scale.x = 1;
                    boxes[i].scale.y = 1;
                }
                boxes[i].scale.x = boxes[i].scale.x + speedSize;
                boxes[i].scale.y = boxes[i].scale.y + speedSize;
            }
            
            // L'opacité
            if( boxes.length > 0 ) {
                m = boxes[0].material;
                
                if(m.opacity <= 0) {
                    m.opacity = 1;
                }
                m.opacity = m.opacity - speedOpacity;
            }
        }
        
        function render() {
            controls.update();
            renderer.render( scene, camera );
        }
        
        function animate() {
            requestAnimationFrame( animate );
            animateBoxes();
            render();
        }
        
        /**
         * Code exécuter automatiquement
         */
        function main() {
            init();
            animate();
        }

        // On lance le processus
        main();
        
        // Permettre le chaînage par jQuery
        return this;
    };
})(jQuery);