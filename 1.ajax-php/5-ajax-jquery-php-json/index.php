<p>Example form calculator</p>

<form method="POST" action="../post.php" id="calculator">
  X <input type="text" name="x" id="x"/> <br />
  Y <input type="text" name="y" id="y"/> <br />
  X + Y = <span id="sum"></span> <br />
  X - Y = <span id="minus"></span> <br />
  X * Y = <span id="multiple"></span> <br />
  X / Y = <span id="devide"></span> <br />
  <button type="submit" id="save">Calculate</button>
</form>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript">

  $("#save").click(function (e) {
    e.preventDefault(); // stop browser from sending form normally

    var inputValue = $("#item").val();  // get the entered value

    var form_data = {
      x: $("#x").val(), 
      y: $("#y").val()
    };

    $.post("../sum-json.php", JSON.stringify(form_data), function (data) {
      for (var x in data) {
        $("#" + x).text(data[x]);
      }
    }, 'json');

    return false;  // fallback of e.preventDefault();
  });
  
</script>

<style type="text/css">
  span {
    color: red;
  }
</style>
