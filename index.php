<!DOCTYPE html>
<html>
  <head>
    <script src="https://aframe.io/releases/1.1.0/aframe.min.js"></script>
    <script src="https://libs.zappar.com/zappar-aframe/0.3.6/zappar-aframe.js"></script>
    <title>Octacat</title>
  </head>
  <body>
    <a-scene>
      <a-entity zappar-permissions-ui id="permissions"></a-entity>
      <a-entity zappar-compatibility-ui id="compatibility"></a-entity>
      <a-camera zappar-camera></a-camera>
      <a-entity
        zappar-image="target:https://cdn.glitch.global/b44ba1e4-793c-46e0-8aa8-e555b363ca1f/github-logo.zpt?v=1647464696922"
      >
        <a-entity
          id="model"
          gltf-model="https://cdn.glitch.global/b44ba1e4-793c-46e0-8aa8-e555b363ca1f/octo.glb?v=1647446060850"
          position="0 0 0"          
          scale="0.05 0.05 0.05"
        >
        </a-entity>
      </a-entity>
    </a-scene>
  </body>
</html>
