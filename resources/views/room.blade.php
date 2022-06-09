
	<head>

		<link rel="icon" type="image/x-icon" href="assets/logover2.png">
</head>
	<title>Kos.in | Panorama</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
		<!-- <link type="text/css" rel="stylesheet" href="main.css"> -->
		<style>
			body {
				margin: 0;
				background-color: #000;
				color: #fff;
				font-family: Monospace;
				font-size: 13px;
				line-height: 24px;
				overscroll-behavior: none;
			}

			a {
				color: #ff0;
				text-decoration: none;
			}

			a:hover {
				text-decoration: underline;
			}

			button {
				cursor: pointer;
				text-transform: uppercase;
			}

			#info {
				position: absolute;
				top: 0px;
				width: 100%;
				padding: 10px;
				box-sizing: border-box;
				text-align: center;
				-moz-user-select: none;
				-webkit-user-select: none;
				-ms-user-select: none;
				user-select: none;
				pointer-events: none;
				z-index: 1; /* TODO Solve this in HTML */
			}

			a, button, input, select {
				pointer-events: auto;
			}

			.lil-gui {
				z-index: 2 !important; /* TODO Solve this in HTML */
			}

			@media all and ( max-width: 640px ) {
				.lil-gui.root { 
					right: auto;
					top: auto;
					max-height: 50%;
					max-width: 80%;
					bottom: 0;
					left: 0;
				}
			}

			#overlay {
				position: absolute;
				font-size: 16px;
				z-index: 2;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
				display: flex;
				align-items: center;
				justify-content: center;
				flex-direction: column;
				background: rgba(0,0,0,0.7);
			}

				#overlay button {
					background: transparent;
					border: 0;
					border: 1px solid rgb(255, 255, 255);
					border-radius: 4px;
					color: #ffffff;
					padding: 12px 18px;
					text-transform: uppercase;
					cursor: pointer;
				}

			#notSupported {
				width: 50%;
				margin: auto;
				background-color: #f00;
				margin-top: 20px;
				padding: 10px;
			}
		</style>


		<div id="container"></div>
		<!-- <div id="info">
			<a href="https://threejs.org" target="_blank" rel="noopener">three.js webgl</a> - equirectangular panorama demo. photo by <a href="http://www.flickr.com/photos/jonragnarsson/2294472375/" target="_blank" rel="noopener">Jón Ragnarsson</a>.<br />
			drag equirectangular texture into the page.
		</div> -->

		<script type="module">

            import * as THREE from 'https://threejsfundamentals.org/threejs/resources/threejs/r132/build/three.module.js';

			let camera, scene, renderer;

			let isUserInteracting = false,
				onPointerDownMouseX = 0, onPointerDownMouseY = 0,
				lon = 0, onPointerDownLon = 0,
				lat = 0, onPointerDownLat = 0,
				phi = 0, theta = 0;

			init();
			animate();

			function init() {

				const container = document.getElementById( 'container' );

				camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 1, 1100 );

				scene = new THREE.Scene();

				const geometry = new THREE.SphereGeometry( 500, 60, 40 );
				// invert the geometry on the x-axis so that all of the faces point inward
				geometry.scale( - 1, 1, 1 );

				const texture = new THREE.TextureLoader().load("{{ asset('storage/images/'.$path) }}");
				const material = new THREE.MeshBasicMaterial( { map: texture } );

				const mesh = new THREE.Mesh( geometry, material );

				scene.add( mesh );

				renderer = new THREE.WebGLRenderer();
				renderer.setPixelRatio( window.devicePixelRatio );
				renderer.setSize( window.innerWidth, window.innerHeight );
				container.appendChild( renderer.domElement );

				container.style.touchAction = 'none';
				container.addEventListener( 'pointerdown', onPointerDown );

				document.addEventListener( 'wheel', onDocumentMouseWheel );

				//

				document.addEventListener( 'dragover', function ( event ) {

					event.preventDefault();
					event.dataTransfer.dropEffect = 'copy';

				} );

				document.addEventListener( 'dragenter', function () {

					document.body.style.opacity = 0.5;

				} );

				document.addEventListener( 'dragleave', function () {

					document.body.style.opacity = 1;

				} );

				document.addEventListener( 'drop', function ( event ) {

					event.preventDefault();

					const reader = new FileReader();
					reader.addEventListener( 'load', function ( event ) {

						material.map.image.src = event.target.result;
						material.map.needsUpdate = true;

					} );
					reader.readAsDataURL( event.dataTransfer.files[ 0 ] );

					document.body.style.opacity = 1;

				} );

				//

				window.addEventListener( 'resize', onWindowResize );

			}

			function onWindowResize() {

				camera.aspect = window.innerWidth / window.innerHeight;
				camera.updateProjectionMatrix();

				renderer.setSize( window.innerWidth, window.innerHeight );

			}

			function onPointerDown( event ) {

				if ( event.isPrimary === false ) return;

				isUserInteracting = true;

				onPointerDownMouseX = event.clientX;
				onPointerDownMouseY = event.clientY;

				onPointerDownLon = lon;
				onPointerDownLat = lat;

				document.addEventListener( 'pointermove', onPointerMove );
				document.addEventListener( 'pointerup', onPointerUp );

			}

			function onPointerMove( event ) {

				if ( event.isPrimary === false ) return;

				lon = ( onPointerDownMouseX - event.clientX ) * 0.1 + onPointerDownLon;
				lat = ( event.clientY - onPointerDownMouseY ) * 0.1 + onPointerDownLat;

			}

			function onPointerUp() {

				if ( event.isPrimary === false ) return;

				isUserInteracting = false;

				document.removeEventListener( 'pointermove', onPointerMove );
				document.removeEventListener( 'pointerup', onPointerUp );

			}

			function onDocumentMouseWheel( event ) {

				const fov = camera.fov + event.deltaY * 0.05;

				camera.fov = THREE.MathUtils.clamp( fov, 10, 75 );

				camera.updateProjectionMatrix();

			}

			function animate() {

				requestAnimationFrame( animate );
				update();

			}

			function update() {

				if ( isUserInteracting === false ) {

					lon += 0.1;

				}

				lat = Math.max( - 85, Math.min( 85, lat ) );
				phi = THREE.MathUtils.degToRad( 90 - lat );
				theta = THREE.MathUtils.degToRad( lon );

				const x = 500 * Math.sin( phi ) * Math.cos( theta );
				const y = 500 * Math.cos( phi );
				const z = 500 * Math.sin( phi ) * Math.sin( theta );

				camera.lookAt( x, y, z );

				renderer.render( scene, camera );

			}

		</script>