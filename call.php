<script type="text/javascript">
  var apiKey = "202212197E6JRWZXMYKL7TWNMQXOQ";
  var url = "http://api.nongsaro.go.kr/service/pesticideSalePrice/yearGubunList";
  var requestUrl = url + "?apiKey=" + apiKey + "&returnType=json";

  $.getJSON(requestUrl, function(data) {
    // 반환된 JSON 데이터 처리
    console.log(data);
  });
</script>