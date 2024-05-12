document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('modal');
    const videoPlayer = document.getElementById('video-player');
    const closeBtn = document.getElementById('close-btn');
    const trailerBtns = document.querySelectorAll('.trailer-btn');
    const loginButton = document.querySelector('.login-btn');
    const signupButton = document.querySelector('.signup-btn');
    trailerBtns.forEach(btn => {
        btn.addEventListener('click', function () {
            const videoSrc = this.dataset.video;
            videoPlayer.src = videoSrc;
            modal.style.display = 'block';
        });
    });

    closeBtn.addEventListener('click', function () {
        modal.style.display = 'none';
        videoPlayer.pause();
    });

    window.addEventListener('click', function (e) {
        if (e.target === modal) {
            modal.style.display = 'none';
            videoPlayer.pause();
        }
    });
    loginButton.addEventListener('click', function() {
        window.location.href = 'login.html';
    });

    signupButton.addEventListener('click', function() {
        window.location.href = 'register.html';
    });
});