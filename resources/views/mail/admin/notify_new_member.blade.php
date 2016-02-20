Name: {{ $inputs['first_name'] . ' ' . $inputs['last_name'] }} <br>
Email: {{ $inputs['email'] }} <br>
District: {{ $inputs['district'] }} <br>
Referrer: {{ $inputs['referrer'] }} <br>
Facebook Name: {{ $inputs['facebook_name'] }} <br>
Subscribe to Newsletter: {{ ($inputs['subscribe'] ? 'Yes' : 'No') }} <br>
Time: {{ date('Y-m-d H:i:s') }} <br>