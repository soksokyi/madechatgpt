$.getJSON(requestUrl, function(data) {
  console.log(data);
});
$.getJSON(requestUrl, function(data) {
  $("#result").html(JSON.stringify(data));
});
