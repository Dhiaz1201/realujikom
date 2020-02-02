function populate(s1, s2) {
  var s1 = document.getElementById(main_menu);
  var s1 = document.getElementById(sub_menu);
  s2.innerHTML = "";
  if (s1.value == "prewedding") {
    var optionpaket = ("prewedding | Prewedding");
  } else if (s1.value == "wedding") {
    var optionpaket = ("wedding | Wedding");
  }
  for (var option in optionpaket) {
    var pair = optionpaket[option];
    var newoption = document.createElement("option");
    newoption.innerHTML = pair[0];
    s2.options.add(newoption);
  }
}