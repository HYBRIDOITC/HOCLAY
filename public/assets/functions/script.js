$('#parallax').parallax({
	invertX: true,
	invertY: true
});


/**
 * Particles Js
 */

 particlesJS("particles-js", {
  particles: {
    number: {
      value: 2.5,
      density: {
        enable: true,
        value_area: 10.0,
      },
    },
    color: {
      value: "#0984e3",
    },
    shape: {
      type: "polygon",
      stroke: {
        width: 0.5,
        color: "#0984e3",
      },
      polygon: {
        nb_sides: 6,
      },
    },
    opacity: {
      value: 0.5,
      random: false,
      anim: {
        enable: false,
        speed: 0,
        opacity_min: 0.1,
        sync: false,
      },
    },
    size: {
      value: 1.945738208161363,
      random: true,
      anim: {
        enable: false,
        speed: 10,
        size_min: 71.92807192807193,
        sync: false,
      },
    },
    line_linked: {
      enable: false,
      distance: 30,
      color: "#0984e3",
      opacity: 1,
      width: 1,
    },
    move: {
      enable: true,
      speed: 1.3,
      direction: "center",
      random: false,
      straight: false,
      out_mode: "grab",
      bounce: true,
      attract: { enable: true, rotateX: 2998.7610382026364, rotateY: 1200 },
    },
  },
  interactivity: {
    detect_on: "window",
    events: {
      onhover: { enable: true, mode: "grab" },
      onclick: { enable: true, mode: "bubble" },
      resize: true,
    },
    modes: {
      grab: { distance: 250, line_linked: { opacity: 0.2 } },
      bubble: {
        distance: 250,
        size: 5.948051948051955,
        duration: 0.3996003996003996,
        opacity: 0.03,
        speed: 0.4,
      },
      repulse: { distance: 200, duration: 0.4 },
      push: { particles_nb: 4 },
      remove: { particles_nb: 2 },
    },
  },
  retina_detect: true,
});


/**
 * Image to Particels
 */



var canvas = document.getElementById("scene");
var ctxlogo = canvas.getContext("2d");
var particleslogo = [];

function drawScene() {
  particleslogo = [];
  canvas.width = png.width*6;
  canvas.height = png.height*6;

  ctxlogo.drawImage(png, 0, 0);

  var data = ctxlogo.getImageData(0, 0, png.width, png.height);
  ctxlogo.clearRect(0, 0, canvas.width, canvas.height);
  
  ctxlogo.fillStyle = "#0985e3";
  
  for (var y = 0, y2 = data.height; y < y2; y++) {
    for (var x = 0, x2 = data.width; x < x2; x++) {
      if (data.data[(y * 4 * data.width) + (x * 4) + 3] > 128) {
        var particlelogo = {
          x0: x,
          y0: y,
          x1: png.width / 2,
          y1: png.height / 2,
          speed: 0.1
        };
        gsap.to(particlelogo, {
          duration: particlelogo.speed,
          x1: particlelogo.x0,
          y1: particlelogo.y0,
          delay: y / 30,
          ease: Elastic.bubble
        });
        particleslogo.push(particlelogo);
      }
    }
  }

  requestAnimationFrame(render);
}
var render = function() {
  requestAnimationFrame(render);

  ctxlogo.clearRect(0, 0, canvas.width, canvas.height);
  for (var i = 0, j = particleslogo.length; i < j; i++) {
    var particlelogo = particleslogo[i];
    ctxlogo.fillRect(particlelogo.x1 * 6, particlelogo.y1 * 6, 1.3,1.3);
  }
};

var png = new Image();
png.onload = () => {
  drawScene();
};
png.src = "data:image/png;base64,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";

//Mouse Parrallex

$("#body").mousemove(function(e) {
  parallaxIt(e, ".slide", -100);
  parallaxIt(e, "img", -30);
});

function parallaxIt(e, target, movement) {
  var $this = $("#body");
  var relX = e.pageX - $this.offset().left;
  var relY = e.pageY - $this.offset().top;

  TweenMax.to(target, 1, {
    x: (relX - $this.width() / 2) / $this.width() * movement,
    y: (relY - $this.height() / 2) / $this.height() * movement
  });
}

