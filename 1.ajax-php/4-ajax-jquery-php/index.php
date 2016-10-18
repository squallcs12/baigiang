<p>Example form calculator</p>

<form method="POST" action="../post.php" id="calculator">
  X <input type="text" name="x" id="x"/> <br />
  Y <input type="text" name="y" id="y"/> <br />
  X + Y = <span id="sum"></span> <br /><!-- 
  X - Y = <span id="minus"></span> <br />
  X * Y = <span id="multiple"></span> <br />
  X / Y = <span id="devide"></span> <br /> -->
  <button type="submit" id="save">Calculate</button>
</form>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript">

  $("#save").click(function (e) {
    e.preventDefault(); // stop browser from sending form normally

    var inputValue = $("#item").val();  // get the entered value

    $.ajax({
      url: "../sum.php",
      type: "POST",
      data: $("#calculator").serialize(),
      success: function (data) {
        $("#sum").text(data);

///////////////////////
        // var result = data.split(' ');

        // var sum = result[0];
        // var minus = result[1];
        // var multiple = result[2];
        // var devide = result[3];

        // $("#sum").text(sum);
        // $("#minus").text(minus);
        // $("#multiple").text(multiple);
        // $("#devide").text(devide);

//////////////////////
        // for (var x in data) {
        //   $("#" + x).text(data[x]);
        // }
      }
    });

    return false;  // fallback of e.preventDefault();
  });
  
</script>

<style type="text/css">
  span {
    color: red;
  }
</style>
