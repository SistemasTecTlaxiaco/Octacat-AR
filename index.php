<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="https://aframe.io/releases/1.1.0/aframe.min.js"></script>
    <script src="https://libs.zappar.com/zappar-aframe/0.3.6/zappar-aframe.js"></script>
    <title>Octacat</title>
  </head>
  <body>
    <a-scene>
      <a-entity zappar-permissions-ui id="permissions"></a-entity>
      <a-entity zappar-compatibility-ui id="compatibility"></a-entity>
      <a-entity camera zappar-camera></a-entity>
      <a-entity
        zappar-image="target: Assets/Tracking.zpt"
      >
        <a-entity id="model" gltf-model="Assets/octo.glb"></a-entity>
      </a-entity>
    </a-scene>
  </body>
</html>
