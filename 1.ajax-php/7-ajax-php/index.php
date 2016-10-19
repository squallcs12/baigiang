<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.js"></script>
<body>
  <br />
  <div class="container">
    <div class="row">
      <div class="col-xs-6">
        <div class="well">
          <h1>AJAX</h1>
          <hr />
          <ul class="list-group">
            <li class="list-group-item">Javascript</li>
          </ul>
          <hr />
          <input type="text" id="client" />
          <button type="button">Add</button>
        </div>
      </div>
      <div class="col-xs-6">
        <div class="well">
          <h1>Server</h1>
          <hr />
          <ul class="list-group">
            <li class="list-group-item">PHP</li>
          </ul>
          <hr />
          <input type="text" id="server" />
          <button type="button">Add</button>
        </div>
      </div>
    </div>
  </div>
  <script>
    $("button").click(function () {
      var button = this;
      var input = $(button).parent().find("input");
      var data = {};
      data[input.prop('id')] = input.val();

      $.post('../add-item.php', data, function (response) {
        $(button).parent().find("ul").append("<li class=\"list-group-item\">" + response + "</li>");
        input.val('');
      });
    });
  </script>
  <style type="text/css">
    li {
      font-weight: bold;
      color: red;
    }
  </style>
</body>