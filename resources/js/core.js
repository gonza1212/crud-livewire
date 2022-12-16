if(window.matchMedia("(prefers-color-scheme:dark)").matches) {
    document.getElementById("theme_toggler").innerText = "LIGHT THEME";
} else {
    document.getElementById("theme_toggler").innerText = "DARK THEME";
}
document.getElementById("theme_toggler").onclick = function(event) {
    event.preventDefault();
    if(document.body.classList == "darktheme" || document.body.classList == "") {
        document.body.classList = "lighttheme";
        document.getElementById("theme_toggler").innerText = "DARK THEME";
    } else {
        document.body.classList = "darktheme";
        document.getElementById("theme_toggler").innerText = "LIGHT THEME";
    }
};