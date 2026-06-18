const player = document.getElementById('player');
const playBtn = document.getElementById('playBtn');

playBtn.addEventListener('click',()=>{
    if(player.paused){
        player.play();
        playBtn.textContent= '⏸';
    }else{
        player.pause();
        playBtn.textContent= '▶';
    }
});