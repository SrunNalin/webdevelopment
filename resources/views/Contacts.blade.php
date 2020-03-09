<!DOCTYPE html>
<head>
<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('CSSz/Contacts.css')}}">
</head>
<body>
<form action="submit" method="POST" class="form-contact">
  <div class="form-group">
    <label for="first_name">First-Name</label>
    <input type="text" class="form-control" name="fname">
    @csrf
  </div>
  <div class="form-group">
    <label for="last_name">Last-Name</label>
    <input type="text" class="form-control" name="lname">
  </div>
  <div class="form-group">
    <label for="phone">Phnone</label>
    <input type="text" class="form-control" name="phone">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label for="message">Message</label>
    <textarea class="form-control" rows="3" name="message"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
