const APP =  {
	tocarSom(id) {
		var audio = document.getElementById(id);
		audio.pause();
		audio.currentTime = 0;
		audio.play();
	}
}