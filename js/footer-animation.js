//footer animation

/* ---- particles.js config ---- */

particlesJS("particles-js", {
  particles: {
    number: {
      value: 250,
      density: {
        enable: true,
        value_area: 1000,
      },
    },
    color: {
      value: ["#fff", "#1A55AD"],
    },

    shape: {
      type: "circle",
      stroke: {
        width: 0,
        color: "#fff",
      },
      polygon: {
        nb_sides: 7,
      },
    },
    opacity: {
      value: 0.6,
      random: false,
      anim: {
        enable: true,
        speed: 2,
        opacity_min: 0.3,
        sync: false,
      },
    },
    size: {
      value: 10,
      random: true,
      anim: {
        enable: false,
        speed: 40,
        size_min: 0.1,
        sync: false,
      },
    },
    line_linked: {
      enable: true,
      distance: 120,
      color: "#278BCB",
      opacity: 0.4,
      width: 1,
    },
  },
  interactivity: {
    detect_on: "canvas",
    events: {
      onhover: {
        enable: true,
        mode: "grab",
      },
      onclick: {
        enable: false,
      },
      resize: true,
    },
    modes: {
      grab: {
        distance: 150,
        line_linked: {
          opacity: 1,
        },
      },
      bubble: {
        distance: 400,
        size: 40,
        duration: 2,
        opacity: 8,
        speed: 10,
      },
      repulse: {
        distance: 200,
        duration: 0.4,
      },
      push: {
        particles_nb: 4,
      },
      remove: {
        particles_nb: 2,
      },
    },
  },
  retina_detect: true,
});
