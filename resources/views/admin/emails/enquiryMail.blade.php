<!DOCTYPE html>
<html>
<head>
    <title>New Enquiry Received</title>
</head>
<body>
    <h2>New Enquiry Received</h2>
    <p>Name: {{ $enquiry->name }}</p>
    <p>Age: {{ $enquiry->age }}</p>
    <p>Model Preference: {{ $enquiry->model_preference }}</p>
    <p>City: {{ $enquiry->city }}</p>
    <p>Mobile: {{ $enquiry->mobile }}</p>
    <p>Message: {{ $enquiry->message }}</p>
</body>
</html>
