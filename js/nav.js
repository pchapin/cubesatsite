/*
 * Document: nav.js
 * Created on: Nov 12, 2019, 1:35:33 PM
 * Author: Vermont State University
 */
var dropdownTimeout = 6000; //ms

function toggle(id, id2) {
    var n = document.getElementById(id);
    if (n.style.display !== 'none') {
        n.style.display = 'none';
        document.getElementById(id2).setAttribute('aria-expanded', 'false');
    } else {
        n.style.display = 'inline-block';
        document.getElementById(id2).setAttribute('aria-expanded', 'true');
    }
}

function mouseEnterBasicLEO() {
    document.getElementById("BasicLEODropdown").style.display = 'inline-block';
    document.getElementById("drop1").setAttribute('aria-expanded', 'true');
    setTimeout(mouseLeaveBasicLEO, dropdownTimeout);
}

function mouseLeaveBasicLEO() {
    document.getElementById("BasicLEODropdown").style.display = 'none';
    document.getElementById("drop1").setAttribute('aria-expanded', 'false');
}

function mouseEnterAlaskanIce() {
    document.getElementById("AlaskanIceDropdown").style.display = 'inline-block';
    document.getElementById("drop2").setAttribute('aria-expanded', 'true');
    setTimeout(mouseLeaveAlaskanIce, dropdownTimeout);
}

function mouseLeaveAlaskanIce() {
    document.getElementById("AlaskanIceDropdown").style.display = 'none';
    document.getElementById("drop2").setAttribute('aria-expanded', 'false');
}

function mouseEnterResources() {
    document.getElementById("ResourcesDropdown").style.display = 'inline-block';
    document.getElementById("drop3").setAttribute('aria-expanded', 'true');
    setTimeout(mouseLeaveAlaskanIce, dropdownTimeout);
}

function mouseLeaveResources() {
    document.getElementById("ResourcesDropdown").style.display = 'none';
    document.getElementById("drop3").setAttribute('aria-expanded', 'false');
}
