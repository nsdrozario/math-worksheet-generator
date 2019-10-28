var canvas = document.getElementsByClassName("geo-renderer");
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
            
            for (var x=0; x<x_max; x += x_step) {
                // draw vertical line
                for (var y=0; y<y_max; y += y_max) {
                // draw horizontal line
                }
            }
    } // draws graph lines
    
    window.requestAnimationFrame(draw_f)
    
}

function init() {
     draw_f();
}

init();
