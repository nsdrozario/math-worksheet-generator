var canvas = document.getElementById("geo-renderer");
console.log(canvas)
var c = canvas.getContext("2d");
console.log(c)
var mem = []; // memory for geometry renderer

var settings = {
    "on":true,
    "graph":true,
    "graph-settings":{
        "x-step":50,
        "y-step":50
    }
}; // global settings for geometry renderer environment


// oop

/*
class Point {
    constructor(x,y,label) {
        this.x = x;
        this.y = y;
        this.label = label;
    }
}
*/

// entry point



c.width=400
c.height=300
//function draw_f() {
    
   // if (_settings['graph'] == true) {
        var x_step = 50;
        var y_step = 50;
        var x_max = Math.floor(c.width / x_step);
        var y_max = Math.floor(c.height / y_step);
        c.strokeStyle = "#000000";
            for (var x=1; x<x_max; x++) {
                c.beginPath();
                c.moveTo(x + x_step*(x-1), 0);
                c.lineTo(x + x_step*(x-1), parseInt(c.height));
                c.stroke();
                console.log("line")
            }
          for (var y=1; y<y_max; y) {
                         c.beginPath();
          c.moveTo(0, y + y_step*(y-1));
              c.lineTo(parseInt(c.width), y + y_step*(y-1));
                 c.stroke();
           }
  //  } // draws graph lines
    

    
//}

//draw_f();
