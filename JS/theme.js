(() => {
    var e = document.body;
    "theme-dark" == localStorage.getItem("theme")
      ? e.classList.add("theme-dark")
      : e.classList.add("theme-light");
  })();