const log = console.log;
log('hello5')

$.ajax({
  type: "GET",
  url: "common.php",
  data: "hi=fuck you",
  success: function (data) {
    log(data);
  }
})

// function getStat () {
//
// }
