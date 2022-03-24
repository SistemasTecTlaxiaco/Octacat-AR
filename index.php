<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="https://cdn.jsdelivr.net/npm/mind-ar@1.1.4/dist/mindar-image.prod.js"></script>
    <script src="https://aframe.io/releases/1.2.0/aframe.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/mind-ar@1.1.4/dist/mindar-image-aframe.prod.js"></script>
  </head>
  <body>
    <a-scene
      mindar-image="imageTargetSrc: https://cdn.glitch.global/16b440ad-e892-4085-9aee-0cf4887d328f/targets%20(3).mind?v=1647492652448;"
      color-space="sRGB" renderer="colorManagement: true, physicallyCorrectLights"
      vr-mode-ui="enabled: false"
      device-orientation-permission-ui="enabled: false"
    >
      <a-camera position="0 0 0" look-controls="enabled: false"></a-camera>
      <a-entity mindar-image-target="targetIndex: 0">
        <a-gltf-model
          rotation="0 0 0"
          position="0 0 0"
          scale="0.1 0.1 0.1"
          src="https://cdn.glitch.global/16b440ad-e892-4085-9aee-0cf4887d328f/octocatgit.glb?v=1648149096491"
          animation-mixer
        >
        </a-gltf-model>
      </a-entity>
    </a-scene>
  </body>
</html>
