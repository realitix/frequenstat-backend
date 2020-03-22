<?php

/* TrackerAdminBundle:Place:testEditorIFrame.html.twig */
class __TwigTemplate_1cf34863aae6b6abaf97be9e9c0d7aff84d2c583002b8227fba833bcde44e89c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<title>three.js editor</title>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\">
\t</head>
\t<body>
\t\t<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/editor/css/types.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link id=\"theme\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/editor/css/light.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t\t
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css\">
        

\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
        <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        
\t\t<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/build/three.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/examples/js/libs/system.min.js"), "html", null, true);
        echo "\"></script>
        
        <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/examples/js/controls/EditorControls.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/examples/js/controls/TransformControls.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/examples/js/loaders/BabylonLoader.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/examples/js/loaders/ColladaLoader.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/examples/js/loaders/OBJLoader.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/examples/js/loaders/PLYLoader.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/examples/js/loaders/STLLoader.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/examples/js/loaders/UTF8Loader.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/examples/js/loaders/VRMLLoader.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/examples/js/loaders/VTKLoader.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/examples/js/loaders/ctm/lzma.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/examples/js/loaders/ctm/ctm.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/examples/js/loaders/ctm/CTMLoader.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/examples/js/exporters/SceneExporter.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/examples/js/exporters/OBJExporter.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/examples/js/exporters/STLExporter.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/examples/js/renderers/RaytracingRenderer.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/examples/js/renderers/SoftwareRenderer.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/examples/js/renderers/SVGRenderer.js"), "html", null, true);
        echo "\"></script>
        
        <!-- WIP -->
        
        <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/examples/js/BufferGeometryUtils.js"), "html", null, true);
        echo "\"></script>
        
        <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/examples/js/exporters/BufferGeometryExporter.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/examples/js/exporters/TypedGeometryExporter.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/examples/js/exporters/GeometryExporter.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/examples/js/exporters/MaterialExporter.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/examples/js/exporters/ObjectExporter.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/examples/js/renderers/WebGLRenderer3.js"), "html", null, true);
        echo "\"></script>
        
        <!-- FONT -->
        <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/examples/fonts/droid/droid_sans_regular.typeface.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/examples/fonts/helvetiker_bold.typeface.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/examples/fonts/helvetiker_regular.typeface.js"), "html", null, true);
        echo "\"></script>
        
        <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/editor/js/libs/signals.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/editor/js/libs/ui.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/editor/js/libs/ui.editor.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/editor/js/libs/ui.three.js"), "html", null, true);
        echo "\"></script>
        
        <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/editor/js/Storage.js"), "html", null, true);
        echo "\"></script>
        
        <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/editor/js/Editor.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/editor/js/Config.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/editor/js/Loader.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/editor/js/Menubar.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/editor/js/Menubar.File.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/editor/js/Menubar.Edit.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/editor/js/Menubar.Add.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/editor/js/Menubar.View.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/editor/js/Menubar.Help.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/editor/js/Sidebar.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/editor/js/Sidebar.Renderer.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/editor/js/Sidebar.Scene.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/editor/js/Sidebar.Object3D.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/editor/js/Sidebar.Geometry.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/editor/js/Sidebar.Animation.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/editor/js/Sidebar.Geometry.BoxGeometry.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/editor/js/Sidebar.Geometry.CircleGeometry.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/editor/js/Sidebar.Geometry.CylinderGeometry.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/editor/js/Sidebar.Geometry.IcosahedronGeometry.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/editor/js/Sidebar.Geometry.PlaneGeometry.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/editor/js/Sidebar.Geometry.SurfaceGeometry.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/editor/js/Sidebar.Geometry.SphereGeometry.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/editor/js/Sidebar.Geometry.TorusGeometry.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/editor/js/Sidebar.Geometry.TorusKnotGeometry.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/editor/js/Sidebar.Material.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/editor/js/Toolbar.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/editor/js/Viewport.js"), "html", null, true);
        echo "\"></script>
        
        <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/editor/js/frequenstat/Utils.js"), "html", null, true);
        echo "\"></script>
\t\t

\t\t<script>

\t\t\twindow.URL = window.URL || window.webkitURL;
\t\t\twindow.BlobBuilder = window.BlobBuilder || window.WebKitBlobBuilder || window.MozBlobBuilder;

\t\t\tvar editor = new Editor();
\t\t\t
\t\t\t// Config boxes
\t\t\teditor.config.setKey('availableBoxes', ['Box 1', 'Box 2', 'Box 3']);
\t\t\teditor.config.setKey('theme', \"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/threejs/editor/css/light.css"), "html", null, true);
        echo "\");

\t\t\tvar viewport = new Viewport( editor ).setId( 'viewport' );
\t\t\tdocument.body.appendChild( viewport.dom );

\t\t\tvar toolbar = new Toolbar( editor ).setId( 'toolbar' )
\t\t\tdocument.body.appendChild( toolbar.dom );

\t\t\tvar menubar = new Menubar( editor ).setId( 'menubar' );
\t\t\tdocument.body.appendChild( menubar.dom );

\t\t\tvar sidebar = new Sidebar( editor ).setId( 'sidebar' );
\t\t\tdocument.body.appendChild( sidebar.dom );

\t\t\t//

\t\t\teditor.setTheme( editor.config.getKey( 'theme' ) );

\t\t\teditor.storage.init( function () {

\t\t\t\teditor.storage.get( function ( state ) {

\t\t\t\t\tif ( state !== undefined ) {

\t\t\t\t\t\tvar loader = new THREE.ObjectLoader();
\t\t\t\t\t\tvar scene = loader.parse( state );

\t\t\t\t\t\teditor.setScene( scene );

\t\t\t\t\t}

\t\t\t\t\tvar selected = editor.config.getKey( 'selected' );

\t\t\t\t\tif ( selected !== undefined ) {

\t\t\t\t\t\teditor.selectByUuid( selected );

\t\t\t\t\t}

\t\t\t\t} );

\t\t\t\t//

\t\t\t\tvar timeout;
\t\t\t\tvar exporter = new THREE.ObjectExporter();

\t\t\t\tvar saveState = function ( scene ) {

\t\t\t\t\tclearTimeout( timeout );

\t\t\t\t\ttimeout = setTimeout( function () {

\t\t\t\t\t\teditor.storage.set( exporter.parse( editor.scene ) );

\t\t\t\t\t}, 1000 );

\t\t\t\t};

\t\t\t\tvar signals = editor.signals;

\t\t\t\tsignals.objectAdded.add( saveState );
\t\t\t\tsignals.objectChanged.add( saveState );
\t\t\t\tsignals.objectRemoved.add( saveState );
\t\t\t\tsignals.materialChanged.add( saveState );
\t\t\t\tsignals.sceneGraphChanged.add( saveState );

\t\t\t} );

\t\t\t//

\t\t\tdocument.addEventListener( 'dragover', function ( event ) {

\t\t\t\tevent.preventDefault();
\t\t\t\tevent.dataTransfer.dropEffect = 'copy';

\t\t\t}, false );

\t\t\tdocument.addEventListener( 'drop', function ( event ) {

\t\t\t\tevent.preventDefault();
\t\t\t\teditor.loader.loadFile( event.dataTransfer.files[ 0 ] );

\t\t\t}, false );

\t\t\tdocument.addEventListener( 'keydown', function ( event ) {

\t\t\t\tswitch ( event.keyCode ) {

\t\t\t\t\tcase 8: // prevent browser back 
\t\t\t\t\t\tevent.preventDefault();
\t\t\t\t\t\tbreak;
\t\t\t\t\tcase 46: // delete
\t\t\t\t\t\tvar parent = editor.selected.parent;
\t\t\t\t\t\teditor.removeObject( editor.selected );
\t\t\t\t\t\teditor.select( parent );
\t\t\t\t\t\tbreak;

\t\t\t\t}

\t\t\t}, false );

\t\t\tvar onWindowResize = function ( event ) {

\t\t\t\teditor.signals.windowResize.dispatch();

\t\t\t};

\t\t\twindow.addEventListener( 'resize', onWindowResize, false );

\t\t\tonWindowResize();

\t\t</script>
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "TrackerAdminBundle:Place:testEditorIFrame.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 105,  308 => 93,  303 => 91,  299 => 90,  295 => 89,  291 => 88,  287 => 87,  283 => 86,  279 => 85,  275 => 84,  271 => 83,  267 => 82,  263 => 81,  259 => 80,  255 => 79,  251 => 78,  247 => 77,  243 => 76,  239 => 75,  235 => 74,  231 => 73,  227 => 72,  223 => 71,  219 => 70,  215 => 69,  211 => 68,  207 => 67,  203 => 66,  199 => 65,  194 => 63,  189 => 61,  185 => 60,  181 => 59,  177 => 58,  172 => 56,  168 => 55,  164 => 54,  158 => 51,  154 => 50,  150 => 49,  146 => 48,  142 => 47,  138 => 46,  133 => 44,  126 => 40,  122 => 39,  118 => 38,  114 => 37,  110 => 36,  106 => 35,  102 => 34,  98 => 33,  94 => 32,  90 => 31,  86 => 30,  82 => 29,  78 => 28,  74 => 27,  70 => 26,  66 => 25,  62 => 24,  58 => 23,  54 => 22,  49 => 20,  45 => 19,  33 => 10,  29 => 9,  19 => 1,);
    }
}
