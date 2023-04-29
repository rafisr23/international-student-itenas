// character count on achievement view
function countChar(val, idLabel) {
  var len = val.value.length;
  if (len >= 550) {
    val.value = val.value.substring(0, 550);
  } else {
    $(idLabel).text(550 - len);
  }
}
