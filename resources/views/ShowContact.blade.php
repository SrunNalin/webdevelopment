<!DOCTYPE html>
<html>
<head>
   
</head>
<body>
 
<h1>All Information About Devices</h1>
 
@foreach ($Contacts as $contact)
<li> {{ $contact}}  </li>
@endforeach
 
<h1>Only Names Of Devices</h1>
 
@foreach ($Contacts as $contact)
 
<li> {{ $contact->first_name}}  </li>
 
@endforeach
 
<h1>Only Description Of Devices</h1>
 
@foreach ($Contacts as $contact)
 
<li> {{ $contact->last_name}}  </li>
 
@endforeach
 
</body>
</html>