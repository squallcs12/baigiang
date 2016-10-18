<p>Example form</p>

<form method="POST" action="../post.php">
  Item: <input type="text" name="item" id="item"/>
  <button type="submit" id="save">Save</button>
</form>

<script type="text/javascript">
  var button = document.getElementById("save");
  button.addEventListener("click", function (e) {
    e.preventDefault(); // stop browser from sending form normally

    var inputValue = document.getElementById("item").value;  // get the entered value

    var ajax = new XMLHttpRequest();  // init the ajax call

    ajax.onreadystatechange = function() {//Call a function when the state changes.
      if(ajax.readyState == 4 && ajax.status == 200) {  // ignore this for now
        alert(ajax.responseText);  // the real callback is here
      }
    };

    ajax.open("POST", "../post.php");  // is this a POST, where will it data go to
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");  // so that we can use $_POST on PHP
    ajax.send("item=" + encodeURIComponent(inputValue));  // send the enterred contain along with field name

    return false;  // fallback of e.preventDefault();
  });
</script>
