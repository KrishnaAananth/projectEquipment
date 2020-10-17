function openSignup(event, name) {
    var i, tab_contents, tab_links;
    tab_contents = document.getElementsByClassName("tab_content");
    for (i = 0; i < tab_contents.length; i++) {
        tab_contents[i].style.display = "none";
    }
    tab_links = document.getElementsByClassName("tab_link");
    for (i = 0; i < tab_links.length; i++) {
        tab_links[i].className = tab_links[i].className.replace(" active", "");
    }
    document.getElementById(name).style.display = "block";
    event.currentTarget.className += " active";
}

document.getElementById("defaultOpen").click();
