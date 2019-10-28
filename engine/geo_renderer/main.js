var canvas = document.getElementsByClassName("geo-renderer");
var c = canvas.getContext("2d");

var _mem = []; // memory for geometry renderer

var _settings = {
    "on":true,
    "graph":true,
    "graph-settings":{
        "x-step":1,
        "y-step":1
    }
}; // global settings for geometry renderer environment


// oop

class Point {
    constructor(x,y,label) {
        this.x = x;
        this.y = y;
        this.label = label;
    }
}

// entry point




function draw_f() {
    
    if (_settings['graph']) {
        var x_step = _settings['graph-settings']['x-step'];
        var y_step = _settings['graph-settings']['y-step'];
        var x_max = Math.floor(canvas.width / x_step);
        var y_max = Math.floor(canvas.width / y_step);
            
            for (var x=1; x<x_max; x++) {
                c.moveTo(x + x_step*(x-1), 0);
                c.lineTo(x + x_step*(x-1), canvas.height);
                //move vertical
            }
            for (var y=1; y<y_max; y += y_max) {
                c.moveTo(0, y + y_step*(y-1));
                c.lineTo(canvas.width, y + y_step*(y-1));
                //move horizontal 
            }
    } // draws graph lines
    
    window.requestAnimationFrame(draw_f)
    
}

function init() {
     window.requestAnimationFrame(draw_f());
}

init();
