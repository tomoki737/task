window.onload = function () {
  const button = document.getElementById("btn");
  button.addEventListener("click", function () {
    axios.get("https://catfact.ninja/fact").then((response) => {
      document.getElementById("title").innerHTML = response.data.fact;
    });
  });
};
