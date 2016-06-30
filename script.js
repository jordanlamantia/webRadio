$(document).ready(function(){

  var wavesurfer = WaveSurfer.create({
      container: '#waveform',
      waveColor: 'black',
      progressColor: 'purple',
      barWidth: 1.5
  });

  wavesurfer.load('cascade.mp3');

  $('#playButton').on('click', function(){
    console.log('ok');
    wavesurfer.playPause();
  });

});
