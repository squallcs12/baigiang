<p>Example form</p>

<form method="POST" action="../post.php">
  Item: <input type="text" name="item" id="item"/>
  <button type="submit" id="save">Save</button>
</form>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript">

  $("#save").click(function (e) {
    e.preventDefault(); // stop browser from sending form normally

    var inputValue = $("#item").val();  // get the entered value

    $.ajax({
      url: "../post.php",
      type: "POST",
      data: {'item': inputValue},
      success: function (data) {
        alert(data);
      }
    });

    return false;  // fallback of e.preventDefault();
  });
  
</script>
