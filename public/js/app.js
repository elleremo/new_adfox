const log = console.log;
log('hello5')

$.ajax({
  type: "GET",
  url: 'common.php',
  data: "name=John&location=Boston",
  success: function (data) {
    log(data);
  }
})

function getStat () {
  
}
