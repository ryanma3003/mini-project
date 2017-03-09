## MiniProject

A web application used to entry "employee candidates", the app use lastest Laravel framework version {5.4}.

## What is Needed to Run this App

An additional package to enable features such as exporting data to excel and social media sign-in.

<ul>    guzzlehttp/guzzle: ^6.2 </ul>
<ul>    laravel/socialite: ^3.0 </ul>
<ul>    laravelcollective/html: ^5.4 </ul>
<ul>    maatwebsite/excel: ~2.1.0 </ul>

## Running the App

<p>Run XAMPP or simmilar application to get this app work on localhost, I use localhost:8000 for social oauth redirect and callback. run the database migration and then php artisan serve. Type localhost:8000 on web browser.</p>\
<a target="_blank" href="https://imageshack.com/i/pmDGUL9Qj"><img src="http://imagizer.imageshack.us/v2/xq90/922/DGUL9Q.jpg" border="0"></a>
<p>Click login button on the nav bar and now we entering the login form.</p>
<a target="_blank" href="https://imageshack.com/i/pmcfbRIdp"><img src="http://imagizer.imageshack.us/v2/640x480q90/922/cfbRId.png" border="0"></a>
<p>In case we need register local account just click register, but if we prefer use social account click one of social account button there. For instance, i use google oauth to enter the application.</p>
<a target="_blank" href="https://imageshack.com/i/ply5fwrXj"><img src="http://imagizer.imageshack.us/v2/640x480q90/921/y5fwrX.jpg" border="0"></a>
<p>As the image above, we will redirect to google login form. Fill the form and as the result we will be callback to the application.</p>
<a target="_blank" href="https://imageshack.com/i/pmjFTT3mp"><img src="http://imagizer.imageshack.us/v2/640x480q90/922/jFTT3m.png" border="0"></a>
<p>Now, we had logged in to the application. Click Employee nav on the left side and the menus come out.</p>
<a target="_blank" href="https://imageshack.com/i/plK1Jh3Xj"><img src="http://imagizer.imageshack.us/v2/640x480q90/921/K1Jh3X.jpg" border="0"></a>
<p>College, Degree, Religion, and Status had relation (hasMany) to Candidate table. I make the normalization so we don't have to input all the field on Candidate table. Click Add button on Cadidate menu</p>
<a target="_blank" href="https://imageshack.com/i/poCqgbU0j"><img src="http://imagizer.imageshack.us/v2/640x480q90/924/CqgbU0.jpg" border="0"></a>
<p>And if we don't fill up one or many field on that form, an error occured.</p>
<a target="_blank" href="https://imageshack.com/i/ple8qQemj"><img src="http://imagizer.imageshack.us/v2/640x480q90/921/e8qQem.jpg" border="0"></a>
<p>However, if we success adding data to the database, we would see success notification on table. The action button on table consist show, edit, export to excel and delete on purpose of data modification in table.</p>
<a target="_blank" href="https://imageshack.com/i/pm1mCXv5j"><img src="http://imagizer.imageshack.us/v2/640x480q90/922/1mCXv5.jpg" border="0"></a>

## Conclusion
<p>Yet this work still need further perfection to fulfill the user experience. Hope this application meets the expectation. Thanks for your attention.</p>

Regards,
Ryan Martin Hidayat



