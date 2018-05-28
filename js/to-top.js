//Eksemplet er hentet fra siden: https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_scroll_to_top

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

var down = 1000;

function scrollFunction() {
    if (document.body.scrollTop > down || document.documentElement.scrollTop > down) {
        document.getElementById("back-to-top").style.display = "block";
    } else {
        document.getElementById("back-to-top").style.display = "none";
    }
}

