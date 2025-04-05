var no_player;
var player_name = [];
var statusp = [];
var curr_player;
var namediv;
var color = ['blue', 'red', 'black', 'green', 'yellow'];
var player_color = ['blue', 'red', 'black', 'green', 'yellow'];
var curr_position = 1;
var player_pos = [];
var nextplayer;
var tmp_playerpos;
var flag;
var wstatus=[];
const rollbutton=document.getElementById("rollbutton");
class Node {
    constructor() {
        this.data;
        this.next;
    }
}

function push(head, data) {
    var ptr1 = new Node();
    ptr1.data = data;
    ptr1.next = head;

    if (head != null) {
        let temp = head;
        while (temp.next != head) temp = temp.next;
        temp.next = ptr1;
    }
    else ptr1.next = ptr1;
    head = ptr1;
    return head;
}

function pop(head, key) {
    if (head == null) return;
    if (head.data == key && head.next == head) {
        head = null;
        return;
    }
    let last = head;
    if (head.data == key) {
        while (last.next != head) last = last.next;
        last.next = head.next;
        head = last.next;
        return;
    }
    while (last.next != head && last.next.data != key) {
        last = last.next;
    }
    if (last.next.data == key) {
        d = last.next;
        last.next = d.next;
        d = null;
    }
}

window.onload = function () {
    head = null;
    no_player = document.getElementById("player").dataset.value;
    for (let i = 1; i <= no_player; i++) {
        player_name[i] = document.getElementById("player" + i).dataset.value;
        player_color[player_name[i]] = color[i - 1];
        statusp[player_name[i]] = 0;
        wstatus[player_name[i]]=0;
        player_pos[player_name[i]] = 1;
        head = push(head, player_name[i]);
    }
    curr = head;
    namediv = document.getElementById("currplayer");
    nextplayer = document.getElementById("nextplayer" + curr.data);
    nextplayer.style.transform = "scale(1.2)";
}

function start(curr_player) {
    var curr_pos = document.getElementById("1");
    var player = document.createElement("div");
    player.id = curr_player;
    player.className = "curr_player";
    player.innerHTML = "<img src=\"icons/king.png\" style=\"width:35px;filter: opacity(.5) drop-shadow(0 0 0 " + player_color[curr_player] + ")\"><p style=\"z-index=-1;\">" + curr_player + "</p>";
    curr_pos.appendChild(player);
}

function change(dice, currplayer) {
    tmp_playerpos = player_pos[currplayer];
    if(wstatus[currplayer]==0){
        if (player_pos[currplayer] == 95) {
            if (dice > 5) {
                return;
            }
        } else if (player_pos[currplayer] == 96) {
            if (dice > 4) {
                return;
            }
        } else if (player_pos[currplayer] == 97) {
            if (dice > 3) {
                return;
            }
        } else if (player_pos[currplayer] == 98) {
            if (dice > 2) {
                return;
            }
        } else if (player_pos[currplayer] == 99) {
            if (dice > 1) {
                return;
            }
        }
        player_pos[currplayer] = player_pos[currplayer] + dice;
        if (player_pos[currplayer] >= 100) {
            player_pos[currplayer] = 100;
        }
    
    }else{
        if (player_pos[currplayer] == 6) {
            if (dice > 5) {
                return;
            }
        } else if (player_pos[currplayer] == 5) {
            if (dice > 4) {
                return;
            }
        } else if (player_pos[currplayer] == 4) {
            if (dice > 3) {
                return;
            }
        } else if (player_pos[currplayer] == 3) {
            if (dice > 2) {
                return;
            }
        } else if (player_pos[currplayer] == 2) {
            if (dice > 1) {
                return;
            }
        }
        player_pos[currplayer] = player_pos[currplayer] - dice;
        if (player_pos[currplayer] <= 1) {
            player_pos[currplayer] = 1;
        }
    
    }

    
    var jump_playerpos=player_pos[currplayer];
    async function sam() {
        if(wstatus[currplayer]==0){
            for (let i = tmp_playerpos; i <= jump_playerpos; i++) {
                append(i, currplayer);
                await new Promise(done => setTimeout(() => done(), 500));
                if(i==jump_playerpos){
                    append(player_pos[currplayer],currplayer);
                    rollbutton.disabled=false;
                    rollbutton.classList.remove("cursordisabled");
                }
            }
            if(player_pos[currplayer]==100){
                wstatus[currplayer]=1;
            }
        }else{
            for (let i = tmp_playerpos; i >= jump_playerpos; i--) {
                append(i, currplayer);
                await new Promise(done => setTimeout(() => done(), 500));
                if(i==jump_playerpos){
                    append(player_pos[currplayer],currplayer);
                    rollbutton.disabled=false;
                    rollbutton.classList.remove("cursordisabled");
                }
                
            }
            if(player_pos[currplayer]==1){
                alert(currplayer," has won the match");
                pop(head,currplayer);
            }
        }
        

    }


    switch (player_pos[currplayer]) {
        case 2:
            player_pos[currplayer] = horse(player_pos[currplayer]);
            break;
        case 8:
            player_pos[currplayer] = horse(player_pos[currplayer]);
            break;
        case 20:
            player_pos[currplayer] = horse(player_pos[currplayer]);
            break;
        case 29:
            player_pos[currplayer] = soldier(player_pos[currplayer]);
            break;
        case 32:
            player_pos[currplayer] = horse(player_pos[currplayer]);
            break;
        case 38:
            player_pos[currplayer] = soldier(player_pos[currplayer]);
            break;
        case 41:
            player_pos[currplayer] = horse(player_pos[currplayer]);
            break;
        case 47:
            player_pos[currplayer] = soldier(player_pos[currplayer]);
            break;
        case 53:
            player_pos[currplayer] = soldier(player_pos[currplayer]);
            break;
        case 62:
            player_pos[currplayer] = soldier(player_pos[currplayer]);
            break;
        case 74:
            player_pos[currplayer] = horse(player_pos[currplayer]);
            break;
        case 85:
            player_pos[currplayer] = horse(player_pos[currplayer]);
            break;
        case 86:
            player_pos[currplayer] = soldier(player_pos[currplayer]);
            break;
        case 92:
            player_pos[currplayer] = soldier(player_pos[currplayer]);
            break;
        case 97:
            player_pos[currplayer] = soldier(player_pos[currplayer]);
            break;
    }

    sam();
    var playerposition = document.getElementById("playerposition" + currplayer);
    playerposition.innerHTML = "<p>" + player_pos[currplayer] + "<p>";
}


function append(playerpos, currplayer) {
    curr_pos = document.getElementById(playerpos);
    player = document.getElementById(currplayer);
    curr_pos.appendChild(player);
}

function finish(player) {
    alert(player + " is won the game");
    pop(head, player);
}

function random(min, max) {
    var x = Math.floor((Math.random() * (max - min)) + min);
    var no = [2, 8, 20, 29, 32, 38, 41, 47, 53, 62, 74, 86, 85, 92, 97];
    if (!no.includes(x)) {
        return x;
    } else {
        return random(min, max);
    }
}

function horse(pos) {
    var x = random(pos, 90);
    return x;
}

function soldier(pos) {
    var x = random(1, pos);
    return x;
}

function move() {
    nextplayer.style.transform = "scale(1)";
    namediv.innerHTML = "<p>" + curr.data + "</p>";
    var dice = roll();
    var show_dice = document.getElementById("diceno");
    show_dice.innerHTML = "<p>" + dice + "</p>";
    if (statusp[curr.data] == 0) {
        if (dice == 1) {
            statusp[curr.data] = 1;
            start(curr.data);
        } else {
            curr = curr.next;
        }
    } else {
        if (dice == 6) {
            rollbutton.disabled=true;
            rollbutton.classList.add("cursordisabled");
            change(dice, curr.data);
        } else {
            rollbutton.disabled=true;
            rollbutton.classList.add("cursordisabled");
            change(dice, curr.data);
            curr = curr.next;
        }
    }
    nextplayer = document.getElementById("nextplayer" + curr.data);
    nextplayer.style.transform = "scale(1.2)";
}

function roll() {
    var x = Math.floor((Math.random() * 6) + 1);
    return x;
}