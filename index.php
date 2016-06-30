<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Web Radio</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.0.0.min.js"   integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0="   crossorigin="anonymous"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/1.0.52/wavesurfer.min.js"></script>
  <script src="script.js"></script>
</head>
<body>
  <div class="container">
    <h1>Wave Form</h1>
    <br>
    <div class="panel panel-default">
      <div class="panel-body">
        <div id="waveform"></div>
      </div>
    </div>
    <div class="btn-group" role="group" aria-label="...">
      <button type="button" class="btn btn-default" id="playButton">Play / Pause</button>
    </div>
  </div>
</body>
</html>
