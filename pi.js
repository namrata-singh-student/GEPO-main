import Typed from "./typed.js";

const auto = new Typed('.auto-text', {
    strings: ['USA', 'Europe', 'Russia', 'Middle-East'],
    typeSpeed: 1,
    backSpeed: 2,
    loop: true,
    IPColor: 'white'
  });

  const auto1 = new Typed('.auto-text1', {
    strings: ['MIT University', 'Stanford University', 'And many more...'],
    typeSpeed: 0.5,
    backSpeed: 1,
    loop: true,
    IPColor: 'white'
  });

  const auto2 = new Typed('.auto-text2', {
    strings: ['Tata Consultancy Services', 'Cognizant', 'MindTree','Accenture'],
    typeSpeed: 0.5,
    backSpeed: 1,
    loop: true,
    IPColor: 'white'
  });
  
  // Initialize Typing Effect
  auto.start();
  auto1.start();
  auto2.start();