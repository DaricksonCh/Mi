const fetch = require('node-fetch');

const fetchIndexHTML = async () => {
  const response = await fetch("https://darickosn-igs.onrender.com/frontend/index.html");
  const html = await response.text();
  console.log(html);
};

fetchIndexHTML();







