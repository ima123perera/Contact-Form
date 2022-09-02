<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="styles.css">
    </head>
     
<body>
<div class="container">
   <h3> Please fill the Contact Form</h3>
    <br>
     <form action="Home.php" method="post">
        <label>Name</label>
       <input type="text" name="fname" required><br>
       <Label>E-mail</Label>
       <input type="text" name="email" required><br>
       <label>Select the issue:</label>
<select id="select" name="issue" required>
  <option value="Query"name="Query">Query</option>
  <option value="Feedback" name="feedback">Feedback</option>
  <option value="Issue" name="issue">Issue</option>
  <option value="Others" name="others">Others</option>
</select><br>
<label>Comment</label>
<textarea id="textarea"name="comment" style="height:200px"></textarea><br>
     <input type="submit" value="submit" name="submit">
      </form>
</div>
</body>
</html>