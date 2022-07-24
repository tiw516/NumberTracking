<!doctype html>
<html lang="en">


<body>

  <div class="container mt-5">
    <form id="numberInput" action="" method="post" enctype="multipart/form-data" class="mb-3">
    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity">
    <input type="submit">
    </form>
    <div id="result"></div>
  </div>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

  <script>
   document.getElementById("numberInput").addEventListener("submit", (e) => {
    e.preventDefault();
    var list = ["0","1","2","3","4","5","6","7","8","9"];
    var value = parseInt(document.getElementById('quantity').value, 10);   
    var digits = value.toString();

    var paragraph = document.getElementById("result");
    paragraph.textContent += "Here are the numbers: ";

    for (var n = 1; n < 100; n++)
    {
      var num = value * n;
      paragraph.textContent += num + " ";
      var dig = num.toString();

      for (var i = 0, len = dig.length; i < len; i += 1) {
        
        if(list.includes(dig.charAt(i)))
        {
          var index = list.indexOf(dig.charAt(i));
          list.splice(index, 1);
        }
      }
    

      if (list.length == 0)
      {
        return paragraph.textContent += " Yes! ";
      }

    }

    if (list.length != 0)
    {
      return paragraph.textContent += " Sorry NO ";
    }

   });  

  </script>

  
</body>

</html>