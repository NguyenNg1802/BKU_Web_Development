var songList = undefined;

$(function () {
    var songlist = document.getElementById("songlist");
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "SongList.php", true);
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let songs = this.responseText.split(',');
            console.log(songs);
            for (let i = 0; i < songs.length; i++) {

                let icon = document.createElement("span");
                icon.className = "glyphicon glyphicon-edit";

                let button = document.createElement("button");
                button.setAttribute("type", "button");
                button.setAttribute("id", i+1);
                button.setAttribute("onclick", "setEditable(this.id)")
                button.appendChild(icon);

                let p = document.createElement("p");
                p.setAttribute("id", "0"+(i+1));
                p.contentEditable = false;
                p.innerText = songs[i];

                let div = document.createElement("div");
                div.setAttribute("style", "display: flex; justify-content: space-between");
                div.appendChild(p);
                div.appendChild(button);

                let li = document.createElement("li");
                li.appendChild(div);

                songlist.appendChild(li);
            }
        }
    }
    xmlhttp.send();
})

function setEditable(id) {
    var p = document.getElementById("0"+id);
    if (p.contentEditable == "false") {
        p.contentEditable = true;
        p.classList.add("selected");
    }
    else {
        p.contentEditable = false;
        p.classList.remove("selected");
    }
}